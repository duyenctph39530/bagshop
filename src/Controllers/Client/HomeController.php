<?php
namespace Fpt\ThoiTrang\Controllers\Client;
use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Commons\Helper;
use Fpt\ThoiTrang\Models\Category;
use Fpt\ThoiTrang\Models\Product;
class HomeController extends Controller
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
        // Helper::debug($products);
        $this->renderViewClient('home', [
            'products' => $products,
            'totalPage' => $totalPage
        ]);
   }
}