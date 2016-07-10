<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE HTML>
<html>
<head>
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


<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<script>
        DD_belatedPNG.fix('*');
    </script>
<![endif]-->

</head>                                        
<body>
 
<div id="DIV1">
	<div class="top">
		<div class="wrap clearfix">
			<a href="#" class="logo left"><img src="<?php echo IMG_PATH;?>xczs/images/logo.png"/></a>
			<div class="nav left dInline" id="Div2">
       
      <a href="index.php?m=kjlapi">家装DIY</a>
 
              <a id="MemberMenuChange" class="b-login" href="index.php?m=kjlapi&a=initmember">会员中心</a>
      </div>
				<span class="right" id="rightMenuHtml">

        <?php echo L('hello'),$nickname?> |<a href="#" id="b-tuichu">退出</a>|&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
		</div>
	</div>

</div>

<!--头部的结束-->
<div id="header">

 
</div>

<div >
	<div class="mebBox">
		<div class="meb-cont clearfix wrap">
			<div class="meb-nav left dInline">
				<ul class="clearfix">
					<li class="on"><a href="index.php?m=kjlapi&a=initmember">会员中心</a></li>
                    <li ><a href="index.php?m=kjlapi&a=initmypic">我的方案</a></li>
          
                    <li><a href="index.php?m=kjlapi&a=initmember">账户管理</a></li>				
                </ul>
			</div>
            	<div class="mr-top">
    <div class="mr-top-div clearfix">
        <span class="left">
            <img src="<?php echo IMG_PATH;?>xczs/images/photo.png"/>
        </span>
        <div class="mr-infor left dInline">
            <h2>会员姓名： <b> <?php echo $nickname?> </b><?php if($sex=='M') echo '先生'; else '小姐';?></h2>
            <p>
             <?php echo $tel?>  <b> <?php echo $village?></b></p>
        </div>
    </div>
</div>
            <div class="mr-detail">
			  <div class="me-box">
						<div class="mx-a">
							<ul class="clearfix">
								<li>
									<img src="<?php echo IMG_PATH;?>xczs/images/hu1.png"/>
								 <span>您目前有 <strong style="color:#F00"> <?php echo $count;?></strong> 个装修方案</span></li>
							</ul>
						</div>
						<div class="mx-b">
							<ul>
								<li class="clearfix">
									<span class="left">
										<img src="<?php echo IMG_PATH;?>xczs/images/hu3.png"/>
									</span>
									<div class="mb-txt left dInline">
										<h2>马上查看 <a href="index.php?m=kjlapi&a=initmypic">我的方案</a> </h2>
										<p></p>
									</div>
								</li>
								<!--<li class="clearfix last">
									<span class="left">
										<img src="images/hu4.png"/>
									</span>
									<div class="mb-txt left dInline">
										<h2>您可以定制 <a href="#">到车通知</a> </h2>
										<p>不想在每天数以万计的车源中错过自己满意的二手车吗？亿金收集您的需求，第一时间为您推送符合您的信息</p>
									</div>
								</li>-->
							</ul>
						</div>
			  </div>
					
		  </div>
		</div>
	</div>
</div>


<!--底部的开始-->
<div id="footer">
  <div class="foot-a">
      <br />
  </div>
  <div class="foot-b"> Copyright © 2007 - 2016 昆山心成装饰设计工程有限公司 版权所有 苏ICP备09040162号 <br/>
 
  </div>
</div>
<!--底部的结束-->
<!--footer部分结束--><script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/lg_reg.js"></script>
 
</body>
</html>