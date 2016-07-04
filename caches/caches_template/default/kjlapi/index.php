<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>心成装饰</title>
<meta name="description" content="心成装饰"/>
<meta name="keywords" content="心成装饰">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/index.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/layout.css">
 <link rel="stylesheet"  type="text/css" href="<?php echo CSS_PATH;?>xczs/css/cityselect.css">
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/jquery-1.8.2.min.js"></script> 
<script src="<?php echo JS_PATH;?>xczs/js/website.js"></script>
     <script src="<?php echo JS_PATH;?>xczs/js/lazyload-min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/XHD.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/cityselect.js"></script> 

 <script type="text/javascript">
            var startstr = 0;
            var startnum = 0;
            var searchnum = 10;
            var varCODE = "code";
         
             LazyLoad.css(["<?php echo CSS_PATH;?>xczs/css/cityStyle.css"], function () {
                LazyLoad.js(["<?php echo JS_PATH;?>xczs/js/cityScript.js"], function () {
                    var test = new citySelector.cityInit("inputcity");
                   });
            });


                function copyob1toob2() {
            
            $("#keyword1").val($("#keyword").val());
           
        }
        function copyob1toob() {
            $("#keyword").val($("#keyword1").val());
        } 
         function loginin(nickname){
           // alert(nickname);
            var html =' 你好：' + nickname + '|<a href="#" id="b-tuichu">退出</a>|&nbsp;&nbsp;&nbsp;&nbsp;400-0512-004 ';
            $('#rightMenuHtml').html(html);
            $('#popBox').fadeOut();
               
        }
        </script>  

<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<script>
        DD_belatedPNG.fix('*');
    </script>
<![endif]-->
</head>
<body>
<div id="header">
  <div class="top">
    <div class="wrap clearfix"> <a href="#" class="logo left"><img src="<?php echo IMG_PATH;?>xczs/images/logo.png"/></a>
      <div class="nav left dInline" id="headerMenu">
      <a href="http://www.xczs.com">首页</a>
      <a href="index.php?m=kjlapi">家装DIY</a>
      <a href="index.php?m=kjlapi">看案例</a>
      <!--<a href="shfw.html">售后服务</a>-->
      <a id="MemberMenuChange" class="b-login" href="index.php?m=kjlapi&a=initmember" ">个人中心</a>
      </div>
        当前城市：<input type="text" style="width:80px;" class="file" readonly="readonly"   id="inputcity"  value="苏州" >
     <input type="hidden" id="cityid" value="166" />
    <span class="right" id="rightMenuHtml">
  
            <?php if(empty($nickname)) { ?> 
  <a href="#" class="b-login" id="b-login">登录 </a>|<a href="#" id="b-regist">注册
<?php } else { ?> 
         <a href="index.php?m=kjlapi&a=initmember"><?php echo L('欢迎你：'),$nickname?> </a>|<a href="#" id="b-tuichu">退出</a>|&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>xczs/images/tel.png"/>   
               <?php  }  ; ?> 
                </span> </div>
  </div>
  <div class="head-search"> 
    <div class="wrap clearfix">

           <div class="yjxj clearfix left" action="index.php?m=kjlapi" method="post" enctype="multipart/form-data">     
 <input type="text" id="keyword" name="keyword" onkeyup="copyob1toob2()" placeholder="请输入小区名称" class="left" />
                      <script type="text/javascript">
                           var test = new Vcity.CitySelector({ input: 'keyword' });
</script>
          <input type="submit" value="搜 索" class="right" />
      </div>
    
       <div class="hotWords left dInline">  热门小区：   <a  onclick="searchHot('新城域')">新城域</a>
              </div>
     
    </div>
  
  </div>

  </div>
<style type="text/css">
    .file {
    position: relative;
    display: inline-block;
    background: #fee703;
    border: 1px solid #fee703;
    border-radius: 4px;
    padding: 4px 18px;
    overflow: hidden;
    color: #000;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
 
    
   
}
.file input {
    position: absolute;
    font-size: 200px;
    right: 0;
    top: 0;
    opacity: 0;

}
.file:hover {
    background: #ffd800;
    border-color: #fff200;
    color: #004974;
    text-decoration: none;
   
}
#banner .prevs,#banner .nexts{position:absolute;top:220px;z-index: 100;margin-top:0px;}
#banner .nexts{right:0;}
#banner .banShow a{display:block;width: 100%;height:465px;}
</style>
<div id="banner">
  <div class="banShow clearfix" style="width:100%;"> 
    <a href="#" class="bDiv" style="background: url(<?php echo IMG_PATH;?>xczs/images/y77.jpg) no-repeat center top;"></a>  
    <a href="#" class="bDiv" style="background:url(<?php echo IMG_PATH;?>xczs/images/1.jpg) no-repeat center top;"></a> 
  </div>
  <div class="searchBox">
   <div class="xbg"></div>
   <div class="xnrj">
   <img src="<?php echo IMG_PATH;?>xczs/images/in1.png"/>
    <form class="clearfix" action="index.php?m=kjlapi" method='post'>
          
      <input type="text" maxlength="" onkeyup="copyob1toob()" id="keyword1" name="keyword"  placeholder="请输入小区名称" class="left" />
       <input type="submit" value="" class="right" />
   
        <script type="text/javascript">
            var test = new Vcity.CitySelector({ input: 'keyword1' });
</script>
    </form>

   </div>
  </div>
  
</div>

  <div id="main">
   <div class="mDiv main-a">

    <div class="wrap">
          <div class="proMore"> 
<table width="100%" border="0">
  <tr>
      <td> <h1 class="left dInline"> 搜索户型结果 </h1></td>
       
   <!--  <td><a  onclick="more()">换一批</a></td>
      <td><a  onclick="more()">重新加载</a></td>
    <td><a  onclick="add()">自已画</a></td> -->
  </tr>
</table>
 </div>
      <div class="jpBox">
      
        <div class="jpCont">
          <div class="jpDl" style="display: block;">
     
          <?php $where = $_POST["keyword"]?>
          <!-- <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"json\" data=\"op=json&tag_md5=5d249570c2917dbd1327ac13d6dba1f0&url=http%3A%2F%2Flocalhost%2Fxczs%2Findex.php%3Fm%3Dkjlapi%26a%3Dgethxt&cache=86400\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('url'=>'http://localhost/xczs/index.php?m=kjlapi&a=gethxt',)).'5d249570c2917dbd1327ac13d6dba1f0');if(!$data = tpl_cache($tag_cache_name,86400)){$json = @file_get_contents('http://localhost/xczs/index.php?m=kjlapi&a=gethxt');$data = json_decode($json, true);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?> -->
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"vote\" data=\"op=vote&tag_md5=153e7d42b7213155cc0c9219bcc6024c&action=gethxt&nums=10&where=%24where&page=%24_GET%5B%27page%27%5D&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$vote_tag = pc_base::load_app_class("vote_tag", "vote");if (method_exists($vote_tag, 'gethxt')) {$pagesize = 20;$page = intval($_GET['page']) ? intval($_GET['page']) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$vote_total = $vote_tag->count(array('nums'=>'10','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'gethxt',));$pages = pages($vote_total, $page, $pagesize, $urlrule);$data = $vote_tag->gethxt(array('nums'=>'10','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'gethxt',));}?>
              <ul id="ullist" class="clearfix">
            <input type="hidden" name="keyname">
              <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>              
              <li class="pve">
                <div class="car-pic">
                              <img src='<?php echo $r['pics'];?>'@!200x200   /> 
                          
                                </div>
                                    <h3><?php echo $r['commName'];?></h3>
                                 <div class="price">面积：
                          <span class="num nBlue"><?php echo $r['srcArea'];?> </span><font> 平方米</font></div><p>户型：<?php echo $r['specName'];?></p>  
                         <p><div class="login-button">
                         <a id="dodiy" class="b-login" href="index.php?m=kjlapi&a=initkjl&pid=<?php echo $r['obsPlanId'];?>">
                         <input type="button" class="fM"  style="cursor:pointer; width:160px; height:40px;" value="家装DIY"  ></input>
                         </a>
                         </div></p>' 
                     
                    </li>
              <?php $n++;}unset($n); ?>
        </ul>
        <div class="c"></div>
        <div id="pages" class="text-c" style="margin-top:20px"><?php echo pages(1000,$page);?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

           
            <div class="proMore"> <table width="100%" border="0">
  <tr>
    
     <!--    <td><a  onclick="more()">重新加载</a></td>
    <td><a  onclick="add()">自已画</a></td> -->
  </tr>
</table> </div>
          </div>
          
         

        </div>
      </div>
    </div>
  </div>
 </div>


<!--底部的开始-->
<div id="footer">
  <div class="foot-a1">
    <div class="wrap">
      <ul class="clearfix">
        
      </ul>
    </div>
  </div>
  <div class="foot-a">
    <div class="wrap clearfix">
      <div class="fDl left dInline "> <strong>心成承诺</strong>
        <ul>
          <li><a href="#">质量保证</a></li>
        </ul>
      </div>
      <div class="fDl left dInline "> <strong>装修指南</strong>
        <ul>
          <li><a href="#" target="_blank">五要素</a></li>
          <li><a href="#" target="_blank">20年前开桑塔纳的大款们，</a></li>
        </ul>
      </div>
      <div class="fDl left dInline "> <strong>售后服务</strong>
        <ul>
          <li><a href="#">24小时上门</a></li>
          <li><a href="#">免费维修</a></li>
        </ul>
      </div>
      <div class="fDl left dInline "> <strong>关于心成</strong>
        <ul>
          <li><a href="#" target="_blank">心成动态</a></li>
          <li><a href="#" target="_blank">心成荣誉</a></li>
          <li><a href="#" target="_blank">心成优势</a></li>
          <li><a href="#" target="_blank">联系心成</a></li>
          <li><a href="#" target="_blank">心成团队</a></li>
        </ul>
      </div>
      <div class="fDl left dInline "> <strong>心成文化</strong>
        <ul>
          <li><a href="#">改变、规范、引领市场</a></li>
          <li><a href="#">颠覆装修理念</a></li>
        </ul>
      </div>
      <div class="fDl left dInline fDl1">
        <div class="dLx"> <img src="<?php echo IMG_PATH;?>xczs/images/dLx.jpg"/> </div>
        <div style="height:50px;"></div>
      </div>
    </div>
  </div>
  <div class="foot-b"> Copyright © 2007 - 2016 昆山心成装饰设计工程有限公司 版权所有 苏ICP备09040162号 <br/>
 
     </div>
</div>
<!--底部的结束-->

<!--右侧内容的开始-->
<div id="miniBus" style="right:-280px;">
  <div class="mini-bar">
    <div class="mini-barlist">
      <ul>
        <li class="miItem">
           
        </li>
        <li class="miItem">
           
        </li>
        <li>
           
        </li>
        <li class="callItem">
           
        </li>
        <li class="miItem">
           
        </li>
      </ul>
    </div>
    <a class="mini-gotop"></a>
    <a class="wx1"><img src="<?php echo IMG_PATH;?>xczs/mages/wx_1.png"></a>
    <div class="wmImg hide">
      <img src="<?php echo IMG_PATH;?>xczs/images/wx_2.png">
    </div>
  </div>
  <div class="mini-cont">
   </div>
   
</div>

<!--右侧内容的结束-->

<!--会员登录和注册弹出框开始-->
<!--会员登录和注册弹出框开始-->
<div id="popBox">
  <div class="popCont"> <a class="p_closed">关闭</a>
    <div class="p-tab"> <a>会员登录<i></i></a><a>会员注册<i></i></a> </div>
    <div class="p-detail">
      <div class="p-dl">
      <!-- index.php?m=kjlapi&a=loginwebsite -->
        <form  action="" onsubmit="return check();" enctype="multipart/form-data" method="post" name="form" id="form">
          <ul class="login-items">
            <li>
              <label>用户名(手机号)</label>
              <input class="input" type="text" value="" maxlength="32"  name="username" placeholder="请输入您的手机号">
            </li>
            <li>
              <label>密码</label>
              <input class="input" type="password" value="" maxlength="16"  name="password">
            </li>
          </ul>
          <div class="login-check">
            <input type="checkbox" name="checkbox" style=" width:auto;" />
            <label>记住我</label>
            <a href="Meet/editPass">忘记登录密码？</a> </div>
          <div class="login-button">
            <input type="hidden" value="" name="carid" class="ordercarid" />
            <input type="hidden" value="" name="carstatus" class="orderstatus" />
            <input type="button"  value="登&nbsp;&nbsp;&nbsp;&nbsp;陆" class="fM" onclick="$('#form').submit()" />
          </div>
          <!--<div class="security-pro">
                  <i class="icons ver-green-down"></i>
                  <b>您的信息已通过256位SGC加密保护，数据传输安全</b>
              </div>-->
        </form>
      </div>
      <div class="p-dl">
        <form class="registForm" onsubmit="return regcheck();" enctype="multipart/form-data" method="post" name="reg" id="reg">
          <ul class="login-items">
            <li class="clearfix">
              <input class="input" name="mobile" id="mobile" type="text" value="" placeholder="手机号码（登录帐号）">
            </li>
            <li class="clearfix">
              <input class="input left" type="text" value=""  name="verify" placeholder="输入验证码" style="width:100px;" />
              <div id="send">
                    <input type="button" "send_code right" id="btn" style="width:140px;height:42px" value="免费获取验证码" onClick="send(this)"/>
                 
            </li>
            <li class="clearfix">
              <input class="input" type="text" value=""  name="realname" placeholder="姓名">
            </li>
            <li class="clearfix sex">
              <input type="radio" checked="" name="gender" value="M" />
              男&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="gender" value="F" />
              女 </li>
            <li class="clearfix">
              <input id="" class="input" type="password" name="password" value="" placeholder="输入密码（六位字符）">
            </li>
              <li class="clearfix">
            <input type="text" width="20" class="xq" name="xq" id="citySelect" placeholder="请输入小区">
<!-- 实例化 -->
<script type="text/javascript">
    var test = new Vcity.CitySelector({ input: 'citySelect' });
</script> </li>

          </ul>
          <div class="login-button">
            <input type="hidden" value="" name="carid" class="ordercarid" />
            <input type="hidden" value="" name="carstatus" class="orderstatus" />
            <input type="button"  value="立即注册" class="fM" onclick="$('#reg').submit()" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


</div>
<!--会员登录和注册弹出框结束-->




<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/jquery.SuperSlide.2.1.1.js"></script> 
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/index.js"></script> 
<!--右侧滑动-->
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/miniBar.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/lg_reg.js"></script>

<!--搜索下图片切换-->
<!--<script type="text/javascript">
$(function(){
  $('.b_btn').hide();
  $('#banner').hover(function(){
    $(this).find('.b_btn').fadeIn();
  },function(){
    $(this).find('.b_btn').hide();
  });
  $('.bDiv').width($(window).width());
  $('.banShow').width($(window).width());
  $(window).resize(function(){
    $('.bDiv').width($(window).width());
    $('.banShow').width($(window).width());
  })
})
</script> -->



</body>


</html>