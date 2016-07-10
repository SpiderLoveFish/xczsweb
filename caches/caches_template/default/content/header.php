<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">


<link href="<?php echo CSS_PATH;?>xczs/style.css" rel="stylesheet" type="text/css" />
<?php if(!$catid) { ?><link href="<?php echo CSS_PATH;?>xczs/index.css" rel="stylesheet" type="text/css" /><?php } ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/nav-ban.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>xczs/sysc.js"></script>
<script>
$(document).ready(function(e){

    jQuery(".iPlayer").slide({effect:"fade",mainCell:".bd ul",autoPlay:true,autoPage:"<li></li>",trigger:"click"});
	$(window).resize(function(){$(".slideBox .tempWrap,.slideBox .bd ul,.slideBox .bd li,.iMadeFocus .tempWrap,.iMadeFocus .bd ul,.iMadeFocus .bd li").css({width:$(window).width()})});

	$(".Nav li").hover( function(){
		$(this).children(".tt").stop(true,true).slideDown();
	},function(){$(this).children(".tt").stop(true,true).slideUp();})
});
</script>

</head>
<body>

<div class="bg100 header">
    <div class="top-bg">
        <div class="main top">
            <span class="wr r">
                <a href="<?php echo $CATEGORYS['4']['url'];?>" target="_blank">人才招聘</a><em>|</em><a href="javascript:void(0)" onclick="SetHome(this,window.location)">设为首页</a>
                <em>|</em><a href="javascript:void(0)" onclick="shoucang(document.title,window.location)">加入收藏</a>
            </span>
            <p class="wl l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=650505ea21a4a088c2416941a4cc7f91&sql=SELECT+content+FROM+v9_announce+WHERE+aid%3D1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT content FROM v9_announce WHERE aid=1 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <?php echo $r['content'];?>
                        <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </p>
        </div>
        <div class="c"></div>
    </div>
    <div class="main logo-tel">
        <div class="wx r sbg"><img src="<?php echo IMG_PATH;?>xczs/weixin.png" width="75" height="75" alt="官方微信"><span>心成装饰<br>官方微信<br>欢迎关注</span></div>
        <div class="tel r sbg">24小时免费咨询热线：400-0512-004</div>
        <div class="logo l sbg"><a href="<?php echo siteurl($siteid);?>">心成装饰官方网站</a></div>
        <div class="c"></div>
    </div>
</div>
<div class="bg100 nemu">
    <div class="main">
    <ul class="Nav fl">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=49e1cb31e8e8254e69addb9e9ca09791&action=category&catid=0&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
			<li<?php if(!$catid) { ?> class="on"<?php } ?>><a href="<?php echo siteurl($siteid);?>"  class="current da"><span>网站首页</span></a></li>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
             <?php if(count(subcat($r[catid])) > 0 && $r[modelid] == 0 || $r[catid]==8 ||$r[catid]==10 ) { ?>
             <?php $zi_arr = explode(',',$r[arrchildid])?>
              <?php $url = $CATEGORYS[$zi_arr[1]][url]?>
            <?php } else { ?>
              <?php $url  = $r[url]?>
            <?php } ?>
            <?php $a++?>
			<li<?php if($catid==$r[catid] || $top_parentid==$r[catid]) { ?> class="on"<?php } ?><?php if($parentid==$r[catid]) { ?> class="on"<?php } ?>>
                <a href="<?php echo $url;?>" class="da"<?php if($r[catid]==11) { ?> target="_blank"<?php } ?>><?php echo $r['catname'];?></a>
                    <?php if(!$r[arrchildid]) { ?><?php } else { ?>
                    <?php if($r[arrchildid]!=$r[catid]) { ?>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=050b6fa64652ce6258bc9e7d61f5b7cc&action=category&catid=%24k&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                    <div class="tt">
                       <div class="main"><div class="xiao<?php echo $a;?>">
                          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                          <a href="<?php echo $v['url'];?>"<?php if($v[catid]==32) { ?> target="_blank"<?php } ?>><?php echo $v['catname'];?></a>
                          <?php $n++;}unset($n); ?>
                       </div></div>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php } ?>
                    <?php } ?>
            </li>
			<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="c"></div>
    </div>
</div>