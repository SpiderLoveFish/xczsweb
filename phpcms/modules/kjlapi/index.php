<?php
defined('IN_PHPCMS') or exit('No permission resources.');

define('CACHE_MODEL_PATH',CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);
 
//模型缓存路径
class index{
      private $kjl_url;
      private $appkey;
      private $appSecret ;
      private $apid;
      private $db;
      private $config_apiurl;
      private $config_kjl_public_ac;
      private $config_app_path;
     
        function __construct() {
   $this->config_apiurl = pc_base::load_config('system','kjlaip_path');
   $this->config_kjl_public_ac=pc_base::load_config('system','kjl_public_ac');
      $this->config_app_path=pc_base::load_config('system','app_path');
      //  $this->db = pc_base::load_model('kjl_url_model');
       // $this->db = pc_base::load_model('admin_model');
                        $this->kjl_url = 'http://www.kujiale.com';
                         $this->appkey = 'HVrYQDp4r6';
                          $this->appSecret ='982Wq8XKnqeSxNCtHg6nkaRZ0n4lm8u2';
                     $this->apid = $_GET['appuid'];     
         }
        //首页

  public function init() {

          $userid = param::get_cookie('userid');
          $tel = param::get_cookie('tel');
          $nickname = param::get_cookie('nickname');
          $sex = param::get_cookie('sex');
          $village = param::get_cookie('village');
              //$params="{user:\"admin\",pwd:\"admin\"}";  
          // var_dump(param::get_cookie('userid'));
                 include template('kjlapi','index','default');
      }
//登录后个人主页
   public function initmember()
   {
     if(param::get_cookie('userid')=="")
       showmessage(L('您还没用登录，请先登录！！').$config_app_path,'?m=kjlapi');
     else
     {
          $userid = param::get_cookie('userid');
          $tel = param::get_cookie('tel');
          $nickname = param::get_cookie('nickname');
          $sex = param::get_cookie('sex');
          $village = param::get_cookie('village');
           include template('kjlapi','member_index','default');

     }
     
   }
  public function initkjl()
   { 
    if(param::get_cookie('userid')=="")
       showmessage(L('您还没用登录，或者已经过期，请先登录！！').$config_app_path,'?m=kjlapi');
     else
     {
       echo $_GET['pid'];
       $fid=$_GET['pid'];
       include template('kjlapi','kjl_edit','default');
     }
   }

//初始化人员编辑
 public function initmember_edit()
   {
     if(param::get_cookie('userid')=="")
       showmessage(L('您还没用登录，或者已经过期，请先登录！！').$config_app_path,'?m=kjlapi');
     else
     {
          $userid = param::get_cookie('userid');
          $tel = param::get_cookie('tel');
          $nickname = param::get_cookie('nickname');
          $sex = param::get_cookie('sex');
          $village = param::get_cookie('village');
           include template('kjlapi','memberEdit','default');

     }
     
   }
   //更新编辑数据
   public function  updatemember()
   {
     $userid = param::get_cookie('userid');
          $tel = param::get_cookie('tel');
          $nickname = param::get_cookie('nickname');
          $sex = param::get_cookie('sex');
          $village = param::get_cookie('village');
     include template('kjlapi','memberEdit','default');
   }
   //更新密码
  public function  updatepwd()
   {
     $userid = param::get_cookie('userid');
          $tel = param::get_cookie('tel');
          $nickname = param::get_cookie('nickname');
          $sex = param::get_cookie('sex');
          $village = param::get_cookie('village');
     include template('kjlapi','memberEdit','default');
   }


      //ERPAPI登录
  public function loginwebsite()
  {
   
       //echo  $_POST['username'];
      // echo  $_GET['password'];
    // $durl=$this->config_apiurl.'loginwebsite?tel='.$_POST['uid'].'&pwd='.$_POST['password'];
       $durl=$this->config_apiurl.'loginwebsite';
        $params='tel='.$_POST['username'].'&pwd='.$_POST['password'];
        $header=array(
          'Accept-Language: en-us,zh-cn;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
      'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'
   // 'Content-Type: application/json'
    );
  
    $datas= $this->commondfun($durl,'POST',$params,$header);  
    $data=json_decode($datas);
    //echo $data[0]->userid;
     $cookie_time = SYS_TIME+86400*30;
      param::set_cookie('userid',$data[0]->userid,$cookie_time);
      param::set_cookie('tel',$data[0]->tel,$cookie_time);
      param::set_cookie('nickname',$data[0]->nickname,$cookie_time);
      param::set_cookie('sex',$data[0]->sex,$cookie_time); 
      param::set_cookie('village',$data[0]->village,$cookie_time);  
      // var_dump($data[0]->userid);
      // //include template('kjlapi','index','default');
      // var_dump(param::get_cookie('userid'));
      echo  $datas;

  }

  public function public_logout() {
      param::set_cookie('userid','');
      param::set_cookie('tel','');
      param::set_cookie('nickname','');
      param::set_cookie('sex',''); 
      param::set_cookie('village','');  
    
    //退出;    
    showmessage(L('logout_success').$config_app_path,'?m=kjlapi');
  }


//ERPAPI注册
  public function regwebsite()
  {
      $header=array(
          'Accept-Language: en-us,zh-cn;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
      'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'
   // 'Content-Type: application/json'
    );
      $durl=$this->config_apiurl.'regebsite';
        $params='id='.//暂时没用
            '&tel='.$_POST['mobile'].
            '&pwd='.md5($_POST['password']).
            '&nickname='.$_POST['realname'].
            '&xq='.$_POST['xq'].
            '&sex='.$_POST['gender'];
          $data= $this->commondfun($durl,'POST',$params,$header);

         
         
          if($data=='true')
          {
            
            $arrreturn = array('nickname' => $_POST['realname'],'tel' => $_POST['mobile'],'xq' => $_POST['xq'],
              'sex' => $_POST['gender']);
             echo  json_encode($arrreturn);
                $cookie_time = SYS_TIME+86400*30;
               param::set_cookie('userid',$_POST['mobile'],$cookie_time);
              param::set_cookie('tel', $_POST['mobile'],$cookie_time);
              param::set_cookie('nickname',$_POST['realname'],$cookie_time);
              param::set_cookie('sex',$_POST['gender'],$cookie_time); 
              param::set_cookie('village',$_POST['xq'],$cookie_time);  
             
          }
          else echo $data;
         

  }
//短信发送
public function sendsms()
{
$header=array(
          'Accept-Language: en-us,zh-cn;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
      'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'
   // 'Content-Type: application/json'
    );
      $durl=$this->config_apiurl.'GetSMS';
        $params='mobile=15906266305&YZM=zstsls';    
        $data= json_encode($this->commondfun($durl,'POST',$params,$header),true);   
      var_dump($data);
  //  return $data;
}

//数据库登录(不要了)
    public function logindb()
    { 
      //$this->db = pc_base::load_model('kjl_url');
       //$this->apid = $_GET['appuid'];  
      $r = $this->db->get_one(array('id'=>1));
      //var_dump($r);
         if($r) {
             $url= $r['url_pre'];
             $appSecret= $r['appSecret'];
             $appkey= $r['appkey'];
          }
            else
            {
              echo "没有取到参数！";
    }

   
       $appuid=$this->apid;
      $timestamp=$this->getMillisecond();
       // echo md5('sdfaadsasdasd');
        $sign=md5($appSecret.$appkey.$appuid.$timestamp);
      
        $arr=array
        (
            'appkey'=>$appkey,
            'timestamp'=>$timestamp,
            'sign'=>$sign,
            'appuid'=>$appuid,
            'appuname'=>'',
            'appuemail'=>'',
            'appuphone'=>'',
            'appussn'=>'',
            'appuaddr'=>'',
            'appuavatar'=>'',
            'apputype'=>0,
            'dest'=>$_POST['dest']
        );
        

       $data= $this->commondfun($url,'POST',$arr,'');

       echo json_decode($data);
       //echo json_decode($data)->errorMsg ;
      // $url=json_decode($data)->errorMsg;
       // if($url)  
       // {
       //   $url = urldecode(trim($url));   
       //    header("Location: $url");  
       //  }
       //  else
       //  {
       //     exit('Error Input,<a href="http://www.xczscom/">go back</a>'); 
       //  }
       //return url;
  }
   //  showmessage('',json_decode($data)->errorMsg,'blank');
     

//获取3D列表
   public   function get3dlist()
      {
        $data=$this->getsyskjl();
       echo  $data['appkey'];
      // appSecret
      // appuid
        //echo $_GET['id'];
        $appuid='yxs@xczs.com';
        $timestamp=$this->getMillisecond();
       // echo md5('sdfaadsasdasd');
        $sign=md5($this->appSecret.$this->appkey.$data['appuid'].$timestamp);

       //  echo $sign;
      //  /p/openapi/design/{designid}/copy?appuid={appuid}
       $durl=  $this->kjl_url.'/p/openapi/user/floorplan?start=0&num=99&appkey='.$this->appkey.
      '&appuid='.$data['appuid'].'&timestamp='.$timestamp.'&sign='.$sign;
      echo  $durl;

         var_dump(json_encode($this->commondfun($durl,'GET','','')));
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
    $durl=  $this->kjl_url.'/p/openapi/floorplan?q=&start=0&num=8&cityid=1&appkey='.$this->appkey.'&timestamp='.$timestamp.'&sign='.$sign;
      //echo  $durl;
          $data=$this->commondfun($durl,'GET','','');
           //echo $data.count($data['commName']);
         return json_decode($data,true);
       
        }

///获取ERP中固定参数
        public function getsyskjl()
        {
            $header=array(
          'Accept-Language: en-us,zh-cn;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
      'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'
   // 'Content-Type: application/json'
    );
          //http://mb.xczs.co/webserver/kjlapi.asmx?op=Getsyskjl
            //echo $this->config_kjl_public_ac;
        $durl=$this->config_apiurl.'Getsyskjl';
        $params='id=1&kjluid='.$this->config_kjl_public_ac;
         //var_dump(json_decode($this->commondfun($durl,'POST',$params,$header),true)) ;
        return json_decode($this->commondfun($durl,'POST',$params,$header),true);

        }

//登录酷家乐API
   public function login()
   {


      $appuid='yxs@xczs.com';
      $timestamp=$this->getMillisecond();
       // echo md5('sdfaadsasdasd');
        $sign=md5($this->appSecret.$this->appkey.$appuid.$timestamp);
        $durl=  $this->kjl_url.'/p/openapi/login';
     // echo $this->appSecret.$this->appkey.$appuid.$timestamp;
   
        $arr=array
        (
            'appkey'=>$this->appkey,
            'timestamp'=>$timestamp,
            'sign'=>$sign,
            'appuid'=>$appuid,
            'appuname'=>'',
            'appuemail'=>'',
            'appuphone'=>'',
            'appussn'=>'',
            'appuaddr'=>'',
            'appuavatar'=>'',
            'apputype'=>0,
            'dest'=>5
        );
        

         $data= $this->commondfun($durl,'POST',$arr,'');
         $url=json_decode($data)->errorMsg;
       if($url)  
       {
         $url = urldecode(trim($url));   
          header("Location: $url");  
        }
        else
        {
           exit('Error Input,<a href="http://www.xczscom/">go back</a>'); 
        }

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
   * Make an HTTP request
   *
   * @return string API results
   * @ignore
   */
  function http($url, $method, $postfields = NULL, $headers = array()) {
    $this->http_info = array();
    $ci = curl_init();
    /* Curl settings */
    curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);//让cURL自己判断使用哪个版本
    curl_setopt($ci, CURLOPT_USERAGENT, $this->useragent);//在HTTP请求中包含一个"User-Agent: "头的字符串。
    curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, $this->connecttimeout);//在发起连接前等待的时间，如果设置为0，则无限等待
    curl_setopt($ci, CURLOPT_TIMEOUT, $this->timeout);//设置cURL允许执行的最长秒数
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);//返回原生的（Raw）输出
    curl_setopt($ci, CURLOPT_ENCODING, "");//HTTP请求头中"Accept-Encoding: "的值。支持的编码有"identity"，"deflate"和"gzip"。如果为空字符串""，请求头会发送所有支持的编码类型。
    curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, $this->ssl_verifypeer);//禁用后cURL将终止从服务端进行验证
    curl_setopt($ci, CURLOPT_HEADERFUNCTION, array($this, 'getHeader'));//第一个是cURL的资源句柄，第二个是输出的header数据
    curl_setopt($ci, CURLOPT_HEADER, FALSE);//启用时会将头文件的信息作为数据流输出

    switch ($method) {
      case 'POST':
        curl_setopt($ci, CURLOPT_POST, TRUE);
        if (!empty($postfields)) {
          curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
          $this->postdata = $postfields;
        }
        break;
      case 'DELETE':
        curl_setopt($ci, CURLOPT_CUSTOMREQUEST, 'DELETE');
        if (!empty($postfields)) {
          $url = "{$url}?{$postfields}";
        }
    }

    if ( isset($this->access_token) && $this->access_token )
      $headers[] = "Authorization: OAuth2 ".$this->access_token;

    $headers[] = "API-RemoteIP: " . $_SERVER['REMOTE_ADDR'];
    curl_setopt($ci, CURLOPT_URL, $url );
    curl_setopt($ci, CURLOPT_HTTPHEADER, $headers );
    curl_setopt($ci, CURLINFO_HEADER_OUT, TRUE );

    $response = curl_exec($ci);
    $this->http_code = curl_getinfo($ci, CURLINFO_HTTP_CODE);
    $this->http_info = array_merge($this->http_info, curl_getinfo($ci));
    $this->url = $url;

    if ($this->debug) {
      echo "=====post data======\r\n";
      var_dump($postfields);

      echo '=====info====='."\r\n";
      print_r( curl_getinfo($ci) );

      echo '=====$response====='."\r\n";
      print_r( $response );
    }
    curl_close ($ci);
    return $response;
  }

      

     
 
}

?>