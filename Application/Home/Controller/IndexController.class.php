<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
	{
        echo "<meta charset='utf-8'>";
       	$res = M('words')->limit('10,2')->select();	
       	dump($res);		
    }

    
}
