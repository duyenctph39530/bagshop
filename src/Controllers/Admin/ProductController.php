<?php
namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Commons\Helper;
use Fpt\ThoiTrang\Models\Category;
use Fpt\ThoiTrang\Models\Product;

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
       [$products ,$totalPage]= $this->product->paginate();
        // Helper::debug($totalPage);
        $this->renderViewAdmin('products.index', [
            'products' => $products,
            'totalPage'=>$totalPage
        ]);
    }
    public function create()
    {
        $categories =$this->category->all();
        $categoryPluck= array_column($categories,'name','id');
        // Helper::debug($categoryPluck);
        $this->renderViewAdmin('products.create',[
            'categoryPluck'=>$categoryPluck
        ]);

    }

}