<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>xczs/list.css" rel="stylesheet" type="text/css" />

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e69119ea87594bfb7a1eb4d115dd22aa&action=lists&catid=37&order=listorder+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'37','order'=>'listorder DESC','limit'=>'1',));}?>
<?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
<div class="bg100 ba-case" style="background:url(<?php echo $r['thumb'];?>) center no-repeat">
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

      <div class="main">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=86ecc7c948dc1a2dcb606cbf01a12ae3&action=category&catid=9&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
      <div class="ba-case-l">
         <ul>
          <li class="tital">标准化工程</li>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
          <li<?php if($catid==$v[catid]) { ?> class="on"<?php } ?>><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
          <?php $n++;}unset($n); ?>
         </ul>
         <div class="crumbs">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 列表</div>
      </div>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e69119ea87594bfb7a1eb4d115dd22aa&action=lists&catid=37&order=listorder+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'37','order'=>'listorder DESC','limit'=>'1',));}?>
          <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
          <a href="<?php if(!$r[islink]==0) { ?><?php echo $r['url'];?><?php } ?>" target="_blank" class="ba-case-a"><?php echo $r['title'];?></a>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

      </div>
</div>


<div class="main list">
    <div class="col-left l">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=022bb625e00c54ca24c2d7268d0e58d4&action=lists&catid=%24catid&num=12&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="list-gc">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php if(!$r[thumb]) { ?><?php } else { ?><img src="<?php echo thumb($r[thumb],150,102);?>" alt="<?php echo $r['title'];?>" width="150" height="102"><?php } ?><p><b><?php echo $r['title'];?></b><span><?php echo $r['description'];?></span><br><i>[ 心成装饰 - <?php echo $CATEGORYS[$r['catid']]['catname'];?>]</i><i>更新时间：<?php echo date('Y-m-d H:i:s',$r[updatetime]);?> </i></p></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <div class="c"></div>
        <div id="pages" class="text-c" style="margin-top:20px"><?php echo $pages;?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="col-right r">
        <div class="pad25">
          <h3 class="t2">样板案例视频</h3>
          <ul class="sp">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c0359eec6d739d7ac2dc049c08abc668&action=lists&catid=31&num=2&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'31','order'=>'listorder DESC','limit'=>'2',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],180,118);?>" alt="<?php echo $r['title'];?>" width="180" height="118"><p><?php echo str_cut($r[title],40);?></p></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
          <h3 class="t2">装修指南</h3>
          <ul class="sp">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=def5c4962be33bdd8d7c5e6e2bfad3a5&action=lists&catid=16&num=2&thumb=1&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','thumb'=>'1','order'=>'id DESC','limit'=>'2',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],180,118);?>" alt="<?php echo $r['title'];?>" width="180" height="118"><p><?php echo str_cut($r[title],40);?></p></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
        </div>
    </div>
    <div class="c"></div>
</div>

<?php include template("content","footer"); ?>