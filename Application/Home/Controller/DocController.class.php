<?php
namespace Home\Controller;
use Think\Controller;
class DocController extends Controller
{
    public function index()
	{
        echo "this is doc show !";	
    }

    public function sd()
    {
    	echo $this->_get('did');
    }

    
}
