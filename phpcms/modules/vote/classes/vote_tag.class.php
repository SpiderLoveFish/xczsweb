<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class vote_tag {
	private $kjl_url;
      private $appkey;
      private $appSecret ;
      private $config_apiurl;
 	public function __construct() {
		$this->subject_db = pc_base::load_model('vote_subject_model');
		$this->option_db = pc_base::load_model('vote_option_model');
		  $this->config_apiurl = pc_base::load_config('system','kjlaip_path');
		 $this->kjl_url = 'http://www.kujiale.com';
                         $this->appkey = 'HVrYQDp4r6';
                          $this->appSecret ='982Wq8XKnqeSxNCtHg6nkaRZ0n4lm8u2';
	}
	
	/**
	 * 显示
	 * @param  $data 
	 */
	public function show($data) {
		$subjectid = $data['subjectid'];//投票ID
		if($subjectid){
			if(is_int($subjectid)) return false;
			$sql = array('subjectid'=>$subjectid);
		}else {
			$sql = '';
		}
		return $this->subject_db->select($sql, '*', $data['limit']);
	}
	
	/**
	 * 其它投票
	 * @param  $data 
	 */
	public function other_vote($data) {
		$siteid = intval($_GET['siteid']);
		$sql = array('siteid'=>$siteid); 
		return $this->subject_db->select($sql, '*', $data['limit'], $data['order']);
	} 
	
	/**
	 * 投票热度排行 
	 * @param  $data 传入的数组参数
	 */
	public function hits($data) {
		$siteid = intval($data['siteid']);
		$enabled = $data['enabled']?$data['enabled'] : 1;//状态:是否启用
		if (empty($siteid)){
			$siteid = get_siteid();
		}
		switch ($enabled) {
			case all://不限
				$sql = array('siteid'=>$siteid); 
				break; 
			default://默认按选择项
				$sql = array('siteid'=>$siteid,'enabled'=>$enabled); 
		}
		return $this->subject_db->select($sql, '*', $data['limit'], 'votenumber '.$data['order']);
	} 
	
	/**
	 * 
	 * 投票列表
	 * @param $data 数组参数
	 */
	public function lists($data) {
		$siteid = intval($data['siteid']);
		$enabled = $data['enabled']?$data['enabled'] : 1;//状态:是否启用
		$order = $data['order']?$data['order'] : 'subjectid desc';//状态:是否启用
		if (empty($siteid)){
			$siteid = get_siteid();
		}
		switch ($enabled) {
			case all://不限
				$sql = array('siteid'=>$siteid); 
				break; 
			default://默认按选择项
				$sql = array('siteid'=>$siteid,'enabled'=>$enabled); 
		}
 		return $this->subject_db->select($sql, '*', $data['limit'], $order);
	}	

	/**
	 * 投票概况
	 */
	public function get_vote($data) {
		$subjectid = intval($data['subjectid']);
		if (empty($subjectid)) return false;
  		return  $this->subject_db->get_one(array('subjectid'=>$subjectid));
	}
	
	/**
	 * 计数
	 */
	public function count($data) {
		if(isset($data['where'])) {
			$sql = $data['where'];
		} else {
				$siteid = intval($data['siteid']);
				$enabled = $data['enabled']?$data['enabled'] : 1;//状态:是否启用
				if (empty($siteid)){
					$siteid = get_siteid();
				}
				switch ($enabled) {
					case all://不限
						$sql = array('siteid'=>$siteid); 
						break; 
					default://默认按选择项
						$sql = array('siteid'=>$siteid,'enabled'=>$enabled); 
				}
		 		return $this->subject_db->count($sql); 
		}		 		
	}
	 
	/**
	 * pc 标签调用
	 */
	public function pc_tag() {
		$sites = pc_base::load_app_class('sites','admin');
		$sitelist = $sites->pc_tag_list();
		return array(
			'action'=>array('lists'=>L('list','', 'comment'),'get_vote'=>L('vote_overview','','vote')),
			'lists'=>array(
						'siteid'=>array('name'=>L('site_id', '', 'comment'),'htmltype'=>'input_select', 'data'=>$sitelist,'validator'=>array('min'=>1)),
 						'enabled'=>array('name'=>L('vote_status','','vote'), 'htmltype'=>'select', 'data'=>array('all'=>L('vote_Lockets','','vote'),'1'=>L('vote_use','','vote'), '0'=>L('vote_lock','','vote'))),
						'order'=>array('name'=>L('sort', '', 'comment'), 'htmltype'=>'select','data'=>array('subjectid desc'=>L('subjectid_desc', '', 'vote'), 'subjectid asc'=>L('subjectid_asc', '', 'vote'))),
					),
		    'get_vote'=>array(
						'subjectid'=>array('name'=>L('vote_voteid','','vote'),'htmltype'=>'input', 'validator'=>array('min'=>1)), 
					),
		);
	}



//搜索ERP户型图接口
   public function geterphxt($data) {
   	$nums= intval($data['nums']);
   	$page= intval($_GET['page']);
   	$where=$data['where'];
   	if($where=="")
   		$where=$_GET['keyword'];
   	  if( $page==0)
        $page=1;
      // $params='mobile=15906266305&pageindex=1&pagesize=10';
          param::set_cookie('keywordpic',$data['where']);  

    $durl=  $this->config_apiurl.'Getkjl_api';
    $params='mobile='.$data['mobile'].'&pageindex='.$page.'&pagesize='.$data['nums'].'&strwhere='.$data['where'];
          $header=array(
          'Accept-Language: en-us,zh-cn;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
      'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'
   // 'Content-Type: application/json'
    );
			$datas= $this->commondfun($durl,'POST',$params,$header);  
	 $str=json_decode($datas,true);
//echo $list[0]['tender_id'];
//var_dump($str['Rows']);
	   param::set_cookie('count',$str['Total']);  
	 //$count=$str['Total'];
       return  $str['Rows'];
        
        }

	//搜索户型图接口
   public function gethxt($data) {
   	$nums= intval($data['nums']);
   	$page= intval($_GET['page']);
   	$cityid=$_POST['cityid'];
   	if($cityid=='')
   	$cityid=166;//苏州
   	   //echo  $data['where'] ;
   	   //echo $page;
   	 param::set_cookie('keyword',$data['where']);  

         $timestamp=$this->getMillisecond();
       // echo md5('sdfaadsasdasd');
        $sign=md5($this->appSecret.$this->appkey.$timestamp);

       // /p/openapi/floorplan?q={q}&start={start}&num={num}&cityid={cityid}
      //  /p/openapi/design/{designid}/copy?appuid={appuid}
    $durl=  $this->kjl_url.'/p/openapi/floorplan?q='.$data['where'].'&start='.$page*$nums.'&num='.$nums.'&cityid='.$cityid.'&appkey='.$this->appkey.'&timestamp='.$timestamp.'&sign='.$sign;
   
		return	json_decode($this->commondfun($durl,'GET','',''),true);
         // echo  $this->commondfun($durl,'GET','','');
        }



//获取13位时间戳
// private function getMillisecond() { 
//   list($t1, $t2) = explode(' ', microtime()); 
//   return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000); 
// }
         private function getMillisecond() { 
      return  $this->getTimestamp(13);
    }
   /**
   * 
  * 返回一定位数的时间戳，多少位由参数决定
  *
  * @author 陈博
  * @param type 多少位的时间戳
  * @return 时间戳
   */
  private function getTimestamp($digits = false) {
    $digits = $digits > 10 ? $digits : 10;
    $digits = $digits - 10;
    if ((!$digits) || ($digits == 10))
    {
      return time();
    }
    else
    {
      return number_format(microtime(true),$digits,'','');
    }
  }

//各种POST PUT GET DELETE 操作，使用CURL，
//1、打开php.ini 2、找到;extension=php_curl.dll 3、将;号去掉 extension=php_curl.dll 4、重启服务器
      public function commondfun($url,$type,$params,$headers)
      {

        $curl2 = curl_init();
        curl_setopt($curl2, CURLOPT_URL, $url);//登陆后要从哪个页面获取信息
        curl_setopt($curl2, CURLOPT_HEADER, false);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
        if($headers!="")
                {
                        curl_setopt($curl2,CURLOPT_HTTPHEADER,$headers);
        }else
        {
                //curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: text/json'));
                curl_setopt($curl2,CURLOPT_HTTPHEADER,false);
        }
       switch ($type){
           case "GET":
           curl_setopt($curl2,CURLOPT_HTTPGET, true);         
           break;
           case "POST":curl_setopt($curl2,CURLOPT_POST,true);
                        curl_setopt($curl2,CURLOPT_POSTFIELDS,$params);break;
           case "PUT":curl_setopt($curl2,CURLOPT_CUSTOMREQUEST,"PUT");
                      curl_setopt($curl2,CURLOPT_POSTFIELDS,$params);break;
           case "DELETE":curl_setopt($curl2,CURLOPT_CUSTOMREQUEST,"DELETE");
                          curl_setopt($curl2,CURLOPT_POSTFIELDS,$params);break;
        }
        $content = curl_exec($curl2);
         curl_close($curl2);
         //echo $content;
         return $content;
      }
}