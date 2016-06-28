<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>xczs/page.css" rel="stylesheet" type="text/css" />
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ad593515579e5a85ef74e7d9889ad774&action=lists&catid=35&order=listorder+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'35','order'=>'listorder DESC','limit'=>'1',));}?>
             <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                 <div class="bg100 ba-page" style="background:url(<?php echo $r['thumb'];?>) center no-repeat"><a href="<?php if(!$r[islink]==0) { ?><?php echo $r['url'];?><?php } ?>" target="_blank"><?php echo $r['title'];?></a></div>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<div class="main page">
    <ul class="p-tit">
         <div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 正文</div>
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bb374909f0247000ddf0117eb4605b89&action=category&catid=1&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                <li<?php if($catid==$r[catid]) { ?> class="cur"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="c"></div>
</div>
<div class="main content">
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9733eab3122e8e0faff630f4acd96fc6&action=lists&catid=%24catid&num=9&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="list-fc">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],350,240);?>" alt="<?php echo $r['title'];?>" width="350" height="240"><p><?php echo $r['title'];?></p></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <div class="c"></div>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="c"></div>
</div>
<?php include template("content","footer"); ?>