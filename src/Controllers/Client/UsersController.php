<?php

namespace Fpt\ThoiTrang\Controllers\Client;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Models\User;
use Fpt\ThoiTrang\Commons\Model;
use Rakit\Validation\Validator;


class UsersController extends Controller
{
    private User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        [$users, $totalPage] = $this->user->paginate();
        // Helper::debug($products);
        $this->renderViewClient('home', [
            'users' => $users,
            'totalPage' => $totalPage
        ]);
    }
    public function create()
    {
        $this->renderViewClient('register');
    }
    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'avatar'                => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors']  = $validation->errors()->firstOfAll();

            header('location: ' . url('register'));
        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];
            if (isset($_FILES['avatar'])  && $_FILES['avatar']['size'] > 0) {
                $from = $_FILES['avatar']['tmp_name'];
                $to = 'assets/uploads/' . $_FILES['avatar']['name'];

                if (move_uploaded_file($from, $to)) {
                    $data['avatar'] = $to;
                } else {
                    $_SESSION['errors']['avatar'] = 'Upload không thành công';
                    header('location: ' . url('register'));
                    exit;
                }
            }
            $this->user->insert($data);
            $_SESSION['status'] = true;
            $_SESSION['msg']    = 'Chúc mừng bạn đã đăng ký thành công';
            header('location: ' . url('register'));
        }
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function login()
    {
        $this->renderViewClient('login');
    }

    public function loginStore()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'     => 'required',
            'password' => 'required|min:6',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('location: ' . url('login'));
            exit; // Thêm exit để ngăn chặn mã tiếp tục thực thi
        } else {
            $user = $this->user->findUserByName($_POST['name']);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['success'] = 'Đăng nhập thành công!';
                $_SESSION['user'] = $user;
                $this->user->all();
                header('location: ' . url(''));
                exit; // Thêm exit để ngăn chặn mã tiếp tục thực thi
            } else {
                $_SESSION['errors'] = 'Tên người dùng hoặc mật khẩu không đúng.';
                header('location: ' . url('login'));
                exit; // Thêm exit để ngăn chặn mã tiếp tục thực thi
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('location: ' . url(''));
    }
}
