<?php
class kjlapi_tag {
	private $db;
	private $kjl_url;
      private $appkey;
      private $appSecret ;
	public function __construct() {
		$this->db = pc_base::load_model('kjl_url_model');
		//$this->position = pc_base::load_model('position_data_model');
		    $this->kjl_url = 'http://www.kujiale.com';
                         $this->appkey = 'HVrYQDp4r6';
                          $this->appSecret ='982Wq8XKnqeSxNCtHg6nkaRZ0n4lm8u2';

	}

	//搜索户型图接口
   public   function gethxt()
      {
       
        //echo $_GET['id'];
         $timestamp=$this->getMillisecond();
       // echo md5('sdfaadsasdasd');
        $sign=md5($this->appSecret.$this->appkey.$timestamp);

       // /p/openapi/floorplan?q={q}&start={start}&num={num}&cityid={cityid}
      //  /p/openapi/design/{designid}/copy?appuid={appuid}
    $durl=  $this->kjl_url.'/p/openapi/floorplan?q=&start=0&num=8&cityid=166&appkey='.$this->appkey.'&timestamp='.$timestamp.'&sign='.$sign;
      echo  $durl;

         echo json_encode($this->commondfun($durl,'GET','',''));
        }



//获取13位时间戳
private function getMillisecond() { 
  list($t1, $t2) = explode(' ', microtime()); 
  return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000); 
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

  /**
   * 
   * PC标签，可视化显示参数配置。
   */
  public function pc_tag() {
    $sites = pc_base::load_app_class('sites','admin');
    $sitelist = $sites->pc_tag_list();
    return array(
      'action'=>array('lists'=>L('list','', 'comment'), 'get_comment'=>L('comments_on_the_survey', '', 'comment'), 'bang'=>L('comment_bang', '', 'comment')),
      'lists'=>array(
            'commentid'=>array('name'=>L('comments_id', '', 'comment'),'htmltype'=>'input', 'validator'=>array('min'=>1)),
            'siteid'=>array('name'=>L('site_id', '', 'comment'),'htmltype'=>'input_select', 'data'=>$sitelist,'validator'=>array('min'=>1)),
            'direction'=>array('name'=>L('comments_direction', '', 'comment'), 'htmltype'=>'select', 'data'=>array('0'=>L('jiushishuo', '', 'comment'), '1'=>L('tetragonal', '', 'comment'), '2'=>L('cons', '', 'comment'), '3'=>L('neutrality', '', 'comment'))),
            'hot'=>array('name'=>L('sort', '', 'comment'), 'htmltype'=>'select','data'=>array('0'=>L('new', '', 'comment'), '1'=>L('hot', '', 'comment'))),
          ),
      'get_comment'=>array('commentid'=>array('name'=>L('comments_id', '', 'comment'),'htmltype'=>'input', 'defaultdata'=>'$commentid')),
    );
  }
