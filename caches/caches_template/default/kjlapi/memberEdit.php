<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
<meta charset="UTF-8">
<title>心成装饰</title>
<meta name="description" content="心成装饰"/>
<meta name="keywords" content="心成装饰">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/hurst.css">
<script src="<?php echo JS_PATH;?>xczs/js/jquery.cookie.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/index.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>xczs/css/layout.css">
<link href="<?php echo CSS_PATH;?>xczs/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript">
$(function(){
    $('.mr-tab a').each(function(index){
        $(this).click(function(){
            $(this).addClass('on').siblings().removeClass('on');
            $('.me-dl').eq(index).show().siblings().hide();
        })
    });
})
</script>
<script>
var tel="<?php echo $tel?>";
function checkpost(){
    var realname=editM.realname.value;//手机号
    var gender=editM.gender.value;//验证码
    var email=editM.email.value;//姓名
    //var Yemail = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/; //邮箱验证
    var url='index.php?m=kjlapi&a=regwebsite';
    if(realname.length>10){
        alert("姓名要不得大于10个字符");
        editM.realname.focus();
        return false;
    }
    // if(!Yemail.exec(email)&&email!=''){
    //     alert("邮箱格式不正确");
    //     editM.email.focus();
    //     return false;
    // }
    $.ajax({
         type: "POST",
         url: url,
         data: {realname:realname, gender:gender,xq:email,id:'1'},
         // dataType: "json",
         success: function(data){
            // alert(data.msg);
            if(data=='true')
            	alert("修改成功！");
            else	alert("修改失败！"+data);
        }
     });
     return false;
}
function checkPasspost(){

    var passwordold=editP.password.value;//性别
    var password=editP.password1.value;//密码
    var password2=editP.password2.value;//密码
    var Ypass=/\S{6,}/;//密码验证
    var url='index.php?m=kjlapi&a=updatepwd';
    if(!password){
        alert("请输入新密码");
        editP.password1.focus();
        return false;
    }
    if(!password2){
        alert("请重复输入新密码");
        editP.password2.focus();
        return false;
    }
    if(password!=password2){
        alert("两次新密码输入不同");
        editP.password1.focus();
        return false;
    }
    // if(!Ypass.exec(password1)){
    //     alert("密码格式不正确，必须以字母开头的6-16 字母，数字");
    //     editP.password1.focus();
    //     return false;
    // }
    $.ajax({
         type: "POST",
         url: url,
         data: {mobile:tel,passwordold:passwordold,password:password,id:'1'},
         // dataType: "json",
         success: function(data){
             //alert(data.msg);
             // alert(data.msg);
            if(data=='true')
            	{
            		alert("修改成功！请重新登录！！");
        }
            else	alert("修改失败！"+data);
        }
     });
     return false;
}
</script>
        </script>
</head>
<body>
 

<div id="DIV1">
	<div class="top">
		<div class="wrap clearfix">
			<a href="#" class="logo left"><img src="<?php echo IMG_PATH;?>xczs/images/logo.png"/></a>
			<div class="nav left dInline" id="Div2">
          <a href="http://www.xczs.com">首页</a>
      <a href="index.php?m=kjlapi">家装DIY</a>
      <a href="#">看案例</a>
                  <a id="MemberMenuChange" class="b-login"  href="index.php?m=kjlapi&a=initmember">个人中心</a>
      </div>
				<span class="right" id="rightMenuHtml">
         <?php echo L('hello'),$nickname?> |<a href="#" id="b-tuichu">退出</a>|&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
		</div>
	</div>

</div>

<div id="div2">
	<div class="mebBox">
		<div class="meb-cont clearfix wrap">
			<div class="meb-nav left dInline">
				<ul class="clearfix">
					<li ><a href="member.aspx">会员中心</a></li>
                  <!--  <%-- <li ><a href="#">我的设计</a></li>--%> -->
          
                    <li class="on"><a href="#">账户管理</a></li>				
                </ul>
			</div>
			<div class="meb-right right dInline">
				<div class="mr-top">
    <div class="mr-top-div clearfix">
        <span class="left">
            <img src="<?php echo IMG_PATH;?>xczs/images/photo.png"/>
        </span>
        <div class="mr-infor left dInline" >
           <span class="left" id="divhy"></span>
        </div>
    </div>
</div>
<!-- <%-- 开始 --%> -->
	<div class="mr-detail">
					<div class="mr-tab clearfix">
						<a class="on">个人资料管理 </a>
                        <a>修改密码</a>
					</div>
					<div class="me-box me-box1">
						<div class="me-dl" style="display:block;">
							<div class="me-one">
								<div class="accForm">
									<form action="" enctype="multipart/form-data" name="editM" method="post" onsubmit="return checkpost();">
										<div class="afl clearfix">
											<label class="left">
												手机号码
											</label>
											<div class="af-r left dInline">
												<input type="text" id="mobile" class="ar-txt" name="mobile" placeholder="请输入手机号码" value="<?php echo $tel?>" disabled="disabled" />
											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
												姓名
											</label>
											<div class="af-r left dInline">
												<input type="text" class="ar-txt" id="realname" name="realname" placeholder="请输入您的姓名" value="<?php echo $nickname?>"  />
											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
												性别
											</label>
											<div class="af-r left dInline">
												<span>
													<input type="radio" name="gender" value="M"> 男
												</span>
												<span>
													<input type="radio" name="gender" checked="" value="F"> 女
												</span>											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
												小区
											</label>
											<div class="af-r left dInline">
												<input type="text" class="ar-txt" id="email"  name="email" placeholder="请输入您的小区" value="<?php echo $xq?>"  />
											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
											</label>
											<div class="af-r left dInline">
												<input type="submit" value="提 交"  class="ar-btn">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
                        <div class="me-dl" style="display:block;">
							<div class="me-one">
								<div class="accForm">
									<form action="" enctype="multipart/form-data" name="editP" method="post" onsubmit="return checkPasspost();">
										<div class="afl clearfix">
											<label class="left">
												当前密码
											</label>
											<div class="af-r left dInline">
												<input type="password" class="ar-txt" name="password" placeholder="请输入当前密码" value="" />
											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
												新密码
											</label>
											<div class="af-r left dInline">
												<input type="password" class="ar-txt" name="password1" placeholder="请输入新密码" value="" />
											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
												确认新密码
											</label>
											<div class="af-r left dInline">
												<input type="password" class="ar-txt" name="password2" placeholder="请确认输入的新密码" value="" />
											</div>
										</div>
										<div class="afl clearfix">
											<label class="left">
											</label>
											<div class="af-r left dInline">
												<input type="submit" value="提 交"   class="ar-btn">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
<%-- 结束 --%>


	 		</div>
		</div>
	</div>
</div>


<!--底部的开始-->
<div id="footer">
  <div class="foot-a">
  </div>
  <div class="foot-b"> Copyright © 2007 - 2016 昆山心成装饰设计工程有限公司 版权所有 苏ICP备09040162号 <br/>
 
     </div>
</div>
<!--底部的结束-->
<!--footer部分结束-->
<div id="miniBus" style="right:-270px;">
	<div class="mini-cont">
		<div class="mini-contlist">
		 </div>
	</div>
 </div>
 
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/miniBar.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/lg_reg.js"></script>
 
</body>
</html>