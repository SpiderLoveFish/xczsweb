<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="bg100 footer">
    <div class="main">
        <div class="wx sbg r"><img src="<?php echo IMG_PATH;?>xczs/weixin.png" width="83" height="83" alt="官方微信"><span>心成装饰<br>官方微信<br>欢迎关注</span></div>
        <div class="lxfs r">
            <ul>
                <li><img src="<?php echo IMG_PATH;?>xczs/f1.png" width="19" height="18" alt="电话">电话：400-0512-004、0512-36865845</li>
                <li><img src="<?php echo IMG_PATH;?>xczs/f2.png" width="19" height="18" alt="传真">传真：0512-36865846</li>
                <li><img src="<?php echo IMG_PATH;?>xczs/f3.png" width="19" height="18" alt="邮箱">E-mail：<a href="mailto:yxs@xczs.com">yxs@xczs.com</a></li>
                <li><img src="<?php echo IMG_PATH;?>xczs/f4.png" width="19" height="18" alt="地址">地址：江苏昆山市新城域北门59-33号(中环南线)</li>
            </ul>
        </div>
        <div class="f-logo sbg l"><a href="<?php echo siteurl($siteid);?>">心成装饰官方网站</a></div>
        <div class="c"></div>
    </div>
</div>
<div class="bg100 bottom">
    <div class="main">
        Copyright © 2007<?php if(date('Y',SYS_TIME)==2007) { ?><?php } else { ?> - <?php echo date('Y',SYS_TIME);?><?php } ?>  昆山心成装饰设计工程有限公司 版权所有 苏ICP备09040162号  技术支持：<a href="http://www.xwujiang.com" target="_blank">行无疆网络</a> 
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256361265'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256361265%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>

<div id="big_C">
    <div class="top kfbg"><a class="bbg btn1" onclick="showSmall_C();" title="最小化" ></a></div>
    <div class="kefu-list sj">
        <p>设计师在线</p>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fbcd0d23629301c47766e82bccfff71d&action=lists&catid=25&num=10&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'25','order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'25','order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="tencent://message/?uin=<?php echo $r['QQ'];?>&Site=&Menu=yes"><?php echo $r['title'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="kefu-list dsz">
        <p>董事长在线</p>
        <ul>
            <li><a href="tencent://message/?uin=320186500&Site=&Menu=yes">尹先山</a></li>
        </ul>
    </div>
    <div class="wyzx kfbg">
        <a href="<?php echo $CATEGORYS['22']['url'];?>" target="_blank">我要装修</a>
    </div>
    <a class="bbg btn6" onclick="$(window).scrollTop(0);"><p class="kfbg">返回顶部</p></a>
</div>
<div id="small_C">
    <a class="kfbg stb" onclick="showBig_C();"></a><a class="kfbg slbxs" onclick="$(window).scrollTop(0);"></a>
</div>
<script type="text/javascript">
$("#big_C .btn5").hover(function(){
$("#big_C #wx").show();
},function(){
$("#big_C #wx").hide();
});
$('#small_C').hide();
$(window).scroll(function(){
if($(this).scrollTop()>200){
$("#big_C .btn6").show();
$("#small_C .btn1").show();
}else{
$("#big_C .btn6").hide();
$("#small_C .btn1").hide();
}
});
function showBig_C(){
  $('#small_C').hide(200);$('#big_C').show(200);
}
function showSmall_C(){
  $('#big_C').hide(200);$('#small_C').show(200);
}
$("#big_C .btn2").click(function(){
$("#iconDivMain1 img").eq(0).parent().parent().click();
});
$("#big_C .btn3").click(function(){
$("#iconDivMain1 img").eq(2).parent().parent().click();
});
$("#big_C .btn4").click(function(){
$("#iconDivMain1 img").eq(1).parent().parent().click();
});
</script>


</body>
</html>