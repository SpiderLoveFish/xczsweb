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
        	<?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                <li<?php if($catid==$cid) { ?> class="cur"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
    </ul>
    
    <div class="c"></div>
</div>
<div class="main content">
   <div class="left l"><?php echo $content;?></div>
   <div class="right r">
   <?php if($catid==2) { ?>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="480" height="340"> 
          <param name="movie" value="<?php echo IMG_PATH;?>xczs/vcastr22.swf?vcastr_file=<?php echo IMG_PATH;?>xczs/xczs.flv&IsAutoPlay=1" allowfullscreen="true"> 
          <param name="quality" value="high"> 
          <param name="allowFullScreen" value="true" />
          <embed src="<?php echo IMG_PATH;?>xczs/vcastr22.swf?vcastr_file=<?php echo IMG_PATH;?>xczs/xczs.flv&IsAutoPlay=1" allowfullscreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" height="340"> 
          </embed>
          </object>
           
    <?php } elseif ($catid==3) { ?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=be0ac3b40c48640073f72769330515d1&sql=SELECT+setting%2Cname+FROM+v9_poster+WHERE+spaceid+%3D+11+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting,name FROM v9_poster WHERE spaceid = 11 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=be0ac3b40c48640073f72769330515d1&sql=SELECT+setting%2Cname+FROM+v9_poster+WHERE+spaceid+%3D+11+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting,name FROM v9_poster WHERE spaceid = 11 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <?php eval("\$narry =$r[setting];");?> 
          <a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $r['name'];?>" width="480"/></a><br><br>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <?php } elseif ($catid==4) { ?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=caa6214af821defd5fa95181f0b31535&sql=SELECT+setting%2Cname+FROM+v9_poster+WHERE+spaceid+%3D+12+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting,name FROM v9_poster WHERE spaceid = 12 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=caa6214af821defd5fa95181f0b31535&sql=SELECT+setting%2Cname+FROM+v9_poster+WHERE+spaceid+%3D+12+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting,name FROM v9_poster WHERE spaceid = 12 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <?php eval("\$narry =$r[setting];");?> 
          <a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $r['name'];?>" width="480"/></a><br><br>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <?php } ?>
    </div>
    <div class="c"></div>
</div>
<?php include template("content","footer"); ?>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>
