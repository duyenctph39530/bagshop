<?php
namespace Fpt\ThoiTrang\Controllers\Client;
use Fpt\ThoiTrang\Commons\Controller;
 class ProductController extends Controller{
    public function index()
    {
       echo " Sản phẩm";
    }
    public function detail($id)
    {
        echo __DIR__.'@'.__FUNCTION__.'/'.$id;
    }
 }
