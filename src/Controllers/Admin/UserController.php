<?php

namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Models\User;
use Rakit\Validation\Validator;

class UserController extends Controller
{
   private User $user;
   public function __construct()
   {
      $this->user = new User;
   }
   public function index()
   {
      [$users, $totalPage] = $this->user->paginate($_GET['page '] ?? 1);
      //   Helper::debug($totalPage);
      $this->renderViewAdmin('users.index', [
         'users' => $users,
         'totalPage' => $totalPage
      ]);
   }
   public function store()
   {
      echo __DIR__ . '@' . __FUNCTION__;
   }
   public function create()
   {
      echo __DIR__ . '@' . __FUNCTION__;
   }
   public function show($id)
   {

      $user =  $this->user->findByID($id);
      $this->renderViewAdmin('users.show', [
         'user' => $user
      ]);
   }
   public function edit($id)
   {
      $user =  $this->user->findByID($id);
      $this->renderViewAdmin('users.edit', [
         'user' => $user
      ]);
   }
   public function update($id)
   {
      $this->user->findByID($id);

      // Validate

      $user =  $this->user->findByID($id);
      $validator = new Validator;
      $validation = $validator->make($_POST + $_FILES, [
         'name'                  => 'required|max:50',
         'email'                 => 'required|email',
         'password'              => 'min:6',
         'avatar'                => 'uploaded_file:0,2M,png,jpg,jpeg',
      ]);
      $validation->validate();
      if ($validation->fails()) {
         $_SESSION['errors'] = $validation->errors()->firstOfAll();

         header('location: ' . url('admin/users/edit'));
         exit;
      } else {
         $data = [
            'name'                  => $_POST['name'],
            'email'                 => $_POST['email'],
            'password'              =>  !empty($_POST['password'])
               ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'],
         ];

         $flagUpload = false;

         if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {

            $flagUpload = true;

            $from = $_FILES['avatar']['tmp_name'];
            $to = 'assets/uploads/' . time() . $_FILES['avatar']['name'];

            if (move_uploaded_file($from, $to)) {
               $data['avatar'] = $to;
            } else {
               $_SESSION['errors']['avatar'] = 'Upload không thành công';
               header('Location: ' . url("admin/users/" . $user['id'] . "/edit"));
               exit;
            }
         }

         $this->user->update($id, $data);

         if (
            $flagUpload
            && $user['avatar']
            && file_exists(PATH_ROOT . $user['avatar'])
         ) {
            unlink(PATH_ROOT . $user['avatar']);
         }

         $_SESSION['status'] = true;
         $_SESSION['msg'] = 'Thành công';

         header('Location: ' . url("admin/users/" . $user['id'] . "/edit"));
         exit;
      }
   }
   public function delete($id)
   {
      $this->user->delete($id);

      header('location: ' . url('admin/users'));

      exit;
      // Exit để thoát hẳn
   }
}
