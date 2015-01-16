<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
	{
        
		
    	$words = M('words');
		$res = $words->field('id')->select();
		echo "<meta charset='utf-8'>";
		foreach($res as $val){

			//正文分解
			$ar = $words->where(array('id'=>$val['id']))->find();
			$search = '/<h1>(.*?)<\/h1>/si';
			$html = htmlspecialchars_decode($ar['scontent']);
			//$html = iconv('GBK','utf-8',$html);
			preg_match_all($search,$html,$arr); 
			$html = preg_replace_callback('/<h1>(.*?)<\/h1>/si',function(){return '###';},$html);
			$html = trim($html,'###');
			$html = explode('###',$html);
			$newarr = array_combine($arr[1], $html);
			if(!$newarr){
				echo '出现异常错误 id:'.$val['id']."<br/>\r\n";
			}
			$data['summary'] = json_encode($newarr);

			$words->where("id = {$val['id']}")->save($data);
			
		
		}

		echo "done!!!!";
			
    }

    
}