<?php
namespace Fpt\ThoiTrang\Controllers\Client;
use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Models\User;
// use eftec\bladeone\BladeOne;
class HomeController extends Controller
{
   public function index()
   {
    $user =new User();
    
      $name="Chu thị Duyên";

    $this->renderViewClient('home',[
      'name'=>$name
    ]);
   }
}