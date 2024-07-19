<?php
namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Commons\Helper;
use Fpt\ThoiTrang\Models\Category;
use Fpt\ThoiTrang\Models\Product;
use Rakit\Validation\Validator;

class ProductController extends Controller
{

    private Product $product;
    private Category $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function index()
    {
        [$products, $totalPage] = $this->product->paginate();
        // Helper::debug($totalPage);
        $this->renderViewAdmin('products.index', [
            'products' => $products,
            'totalPage' => $totalPage
        ]);
    }
    public function create()
    {
        $categories = $this->category->all();
        $categoryPluck = array_column($categories, 'name', 'id');
        // Helper::debug($categoryPluck);
        $this->renderViewAdmin('products.create', [
            'categoryPluck' => $categoryPluck
        ]);

    }
    public function store()
    {
        //validate
        $validator = new Validator;
        $validator = $validator->make($_POST + $_FILES, [

            'id_category' => 'required|max:100',
            'name' => 'required',
            'img' => 'uploaded_file:0,2048k,png,jpeg,jpg',
            'description' => 'max:65000',
        ]);

        $validator->validate();
        if ($validator->fails()) {
            // Helper::debug($validator->errors());

            $_SESSION['errors'] = $validator->errors()->firstOfALl();
            header('Location:' . url('products/create'));
            exit;

        } else {
            $data = [
                'id_category' => $_POST['id_category'],
                'name' => $_POST['name'],
                'img  ' => $_POST['img'],
                'description' => $_POST['description'],
            ];
            // Helper::debug($data);
            if (!empty($_FILES['img']) && $_FILES['img']['size'] > 0) {
                $from = $_FILES['img']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;

                } else {
                    $_SESSION['errors']['img'] = 'Upload Không Thành công!';
                    header('Location:' . url('products/create'));
                    exit;
                }
            }
        }
        $this->product->insert($data);
        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công :)';
        header('Location:' . url('admin/products'));
        exit;
    }
    public function edit($id)
    {
        $product = $this->product->findByID($id);
        $categories = $this->category->all();
        $categoryPluck = array_column($categories, 'name', 'id');
        // Helper::debug($categoryPluck);
        $this->renderViewAdmin('products.edit', [
            'product' => $product,
            'categoryPluck' => $categoryPluck
        ]);

    }
  
    public function show($id)
{
    $product = $this->product->findByID($id);
        $categories = $this->category->all();
        $categoryPluck = array_column($categories, 'name', 'id');
        // Helper::debug($categoryPluck);
        $this->renderViewAdmin('products.show', [
            'product' => $product,
            'categoryPluck' => $categoryPluck
        ]);
}

    public function update($id)
    {
        $product = $this->product->findByID($id);
        //validate
        $validator = new Validator;
        $validator = $validator->make($_POST + $_FILES, [

            'name' => 'required|max:100',
            'price' => 'required',
            'img' => 'uploaded_file:0,2048k,png,jpeg,jpg',
            'id_categories' => 'required',
            'description' => 'max:65000',
        ]);

        $validator->validate();
        if ($validator->fails()) {
            // Helper::debug($validator->errors());

            $_SESSION['errors'] = $validator->errors()->firstOfALl();
            header('Location:' . url("admin/products/{$product['id']}/edit"));
            exit;

        } else {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'id_categories' => $_POST['id_categories'],
                'description' => $_POST['description'],
                'updated_at' => date('Y-m-d H:i:s')
            ];
            // Helper::debug($data);
            if (!empty($_FILES['img']) && $_FILES['img']['size'] > 0) {
                $from = $_FILES['img']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;

                } else {
                    $_SESSION['errors']['img'] = 'Upload Không Thành công!';
                    header('Location:' . url("admin/products/{$product['id']}/edit"));
                    exit;
                }
            }
        }
        $this->product->update($id, $data);
        if ($product['img'] && file_exists(PATH_ROOT . $product['img'])) {
            unlink(PATH_ROOT . $product['img']);
        }
        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công :)';
        header('Location:' . url('admin/products'));
        exit;
    }
    public function delete($id)
    {
        try{
            $product=$this->product->findByID($id);
            $this->product->delete($id);
            if($product['img']&& file_exists(PATH_ROOT.$product['img'])){
                unlink(PATH_ROOT.$product['img']);
            }
            $_SESSION['status']=true;
            $_SESSION['msg']='Thao tác thánh công!';

        }catch(\Throwable $th){
            $_SESSION['status']=false;
            $_SESSION['msg']='Thao tác không thành công :(';
        }
        header('Location:'.url('admin/products'));
        exit;
    }
    

}