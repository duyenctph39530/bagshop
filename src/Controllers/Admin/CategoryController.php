<?php

namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Models\Category;
use Rakit\Validation\Validator;

class CategoryController extends Controller
{
    private Category $category;
    public function __construct()
    {
        $this->category = new Category;
    }
    public function index()
    {
        [$category, $totalPage] = $this->category->paginate($_GET['page '] ?? 1);
        $totalCategory = $this->category->all();
        $countCategory = count($totalCategory);
        $this->renderViewAdmin('categorys.index', [
            'category' => $category,
            'totalPage' => $totalPage,
            'countCategory' => $countCategory
        ]);
    }
    public function store()
    {
        // Thực hiện validate elements
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50'
            // Bỏ qua validate email nếu không cần
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('location: ' . url('admin/categorys/create'));
            exit;
        } else {
            $data = [
                'name' => $_POST['name']
            ];

            // Chèn dữ liệu vào cơ sở dữ liệu


            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thành công';

            header('location: ' . url('admin/categorys'));
            exit;
        }
    }

    public function create()
    {
        $this->renderViewAdmin('categorys.create');
    }
    public function show($id)
    {

        $category =  $this->category->findByID($id);
        $this->renderViewAdmin('categorys.show', [
            'category' => $category
        ]);
    }
    public function edit($id)
    {
        $category =  $this->category->findByID($id);
        $this->renderViewAdmin('categorys.edit', [
            'category' => $category
        ]);
    }
    public function update($id)
    {
        $this->category->findByID($id);

        // Validate

        $user =  $this->category->findByID($id);
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50'
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('location: ' . url('admin/categorys/edit'));
            exit;
        } else {
            $data = [
                'name'                  => $_POST['name'],
            ];
            $this->category->update($id, $data);
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thành công';

            header('Location: ' . url("admin/categorys/" . $user['id'] . "/edit"));
            exit;
        }
    }
    public function delete($id)
    {
        $this->category->delete($id);

        header('location: ' . url('admin/categorys'));

        exit;
        // Exit để thoát hẳn
    }
}
