<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="bg100 banner">
    <div class="iPlayer">
        <div class="bd">
			  <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fcf3e3c91036267684774374913cdb15&action=lists&catid=33&order=listorder+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'33','order'=>'listorder DESC','limit'=>'5',));}?>
              <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                 <li style="background-image:url(<?php echo $r['thumb'];?>); background-position:center center; background-repeat:no-repeat"><a href="<?php if(!$r[islink]==0) { ?><?php echo $r['url'];?><?php } ?>" target="_blank"><?php echo $r['title'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </ul>
        </div>
        <a class="next fr inbg" href="javascript:void(0)">&gt;</a>
        <a class="prev fl inbg" href="javascript:void(0)">&lt;</a>
    </div>
    <div class="c"></div>
</div>

<div class="main ksbj">
    <div class="bjbk">
        <div class="bjwz l"><div class="bjwzbg"><div class="bjimg inbg">快速报价</div></div></div>
        <div class="bjbd r"><iframe src="http://hefei.1j1j.cn/gsbj/bjjsq.jsp?jmid=ksxczs" width="960" height="166" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe></div>
        <div class="c"></div>
    </div>
</div>


<div class="bg100 case">
    <div class="main">
        <h2 class="tit inbg">经典案例</h2>
        <div class="tit2 huxing">
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=1&mj=&zj=&page=1" target="_blank">一室一厅</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=2&mj=&zj=&page=1" target="_blank">两室一厅</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=3&mj=&zj=&page=1" target="_blank">两室两厅</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=4&mj=&zj=&page=1" target="_blank">三室两厅</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=5&mj=&zj=&page=1" target="_blank">复式</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=6&mj=&zj=&page=1" target="_blank">别墅</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=7&mj=&zj=&page=1" target="_blank">酒店</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=8&mj=&zj=&page=1" target="_blank">办公</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=&hx=9&mj=&zj=&page=1" target="_blank">商业空间</a><span>|</span>
            <a href="<?php echo $CATEGORYS['29']['url'];?>">更多 ></a>
        </div>
        <div class="hx-box">
            <div class="hx1 l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8c315ed88946ded4505dc27a94e1f9d&action=position&posid=2&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <a href="<?php echo $r['url'];?>" target="_blank">
                      <img src="<?php echo thumb($r[thumb],288,216);?>" width="288" height="216" alt="住宅装修"/>
                      <div class="hx1bg inbg">
                         <p>住宅装修</p>
                         <em>Residential decoration</em>
                         <span><?php echo $r['title'];?></span>
                      </div>
                   </a>
                <?php $n++;}unset($n); ?>  
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
            <div class="hx1 l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e7ce794ede5218a50e0d4cd53c0448c&action=position&posid=17&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <a href="<?php echo $r['url'];?>" target="_blank">
                      <img src="<?php echo thumb($r[thumb],288,216);?>" width="288" height="216" alt="别墅装修"/>
                      <div class="hx1bg inbg">
                         <p>别墅装修</p>
                         <em>Villa decoration</em>
                         <span><?php echo $r['title'];?></span>
                      </div>
                   </a>
                <?php $n++;}unset($n); ?>  
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
            <div class="hx1 l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb3716f183be91db9a59b118c49ee4d2&action=position&posid=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <a href="<?php echo $r['url'];?>" target="_blank">
                      <img src="<?php echo thumb($r[thumb],288,216);?>" width="288" height="216" alt="酒店装修"/>
                      <div class="hx1bg inbg">
                          <p>酒店装修</p>
                          <em>Hotel decoration</em>
                          <span><?php echo $r['title'];?></span>
                      </div>
                   </a>
                <?php $n++;}unset($n); ?>  
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
            <div class="hx1 mr0 l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=539425e153ecf12411793da80d0477be&action=position&posid=16&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <a href="<?php echo $r['url'];?>" target="_blank">
                      <img src="<?php echo thumb($r[thumb],288,216);?>" width="288" height="216" alt="办公装修"/>
                      <div class="hx1bg inbg">
                         <p>办公装修</p>
                         <em>Office decoration</em>
                         <span><?php echo $r['title'];?></span>
                      </div>
                   </a>
                <?php $n++;}unset($n); ?>  
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
            <div class="c"></div>
        </div>
        <div class="tit2 fengge">
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=1&hx=&mj=&zj=&page=1" target="_blank">简约</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=2&hx=&mj=&zj=&page=1" target="_blank">现代</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=3&hx=&mj=&zj=&page=1" target="_blank">中式</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=4&hx=&mj=&zj=&page=1" target="_blank">欧式</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=5&hx=&mj=&zj=&page=1" target="_blank">美式</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=6&hx=&mj=&zj=&page=1" target="_blank">田园</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=7&hx=&mj=&zj=&page=1" target="_blank">新古典</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=8&hx=&mj=&zj=&page=1" target="_blank">混搭</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=9&hx=&mj=&zj=&page=1" target="_blank">地中海</a><span>|</span>
            <a href="index.php?m=content&c=index&a=lists&catid=29&fg=10&hx=&mj=&zj=&page=1" target="_blank">LOFT</a><span>|</span>
            <a href="<?php echo $CATEGORYS['29']['url'];?>" target="_blank">更多 ></a>
        </div>
        <div class="fg-box">
           <ul>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ac54e3e6420666d1162089ea5f1bda7&action=position&posid=15&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder DESC','limit'=>'7',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php $cs++?>
                   <li<?php if($cs==1) { ?> class="cs1 mb0"<?php } elseif ($cs==4) { ?> class="mr0"<?php } elseif ($cs==7) { ?> class="mr0 mb0"<?php } else { ?> class="mb0"<?php } ?>>
                   <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                      <?php if($cs==1) { ?><img src="<?php echo thumb($r[thumb],393,0);?>" width="357" height="396"/>
                      <?php } else { ?><img src="<?php echo thumb($r[thumb],292,209);?>" width="265" height="190"/><?php } ?>
                      <p><?php echo str_cut($r[title],40,'…');?></p>
                   </a>
                   </li>
                <?php $n++;}unset($n); ?>  
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
           </ul>
        </div>
    </div>
    <div class="c"></div>
</div>

<div class="bg100 bzgc">
    <h2 class="tit inbg">标准化工程</h2>
    <div class="bzgcbgimg">
        <ul>
            <?php $n=1;if(is_array(subcat(9,0))) foreach(subcat(9,0) AS $r) { ?>
            <li class="inbg"><p><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></p><span><?php echo $r['description'];?></span></li>
            <?php $n++;}unset($n); ?>
        </ul>
    </div>
    <div class="c"></div>
    <div class="main gc-box">
            <div class="gc-list l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd3fdfb9a9fbfb4c13044579f8cc68f&action=position&posid=18&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],125,125);?>" width="125" height="125"></a>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=46eb150c79adb20b2f8e103983e19905&action=lists&catid=17&order=listorder+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'17','order'=>'listorder DESC','limit'=>'5',));}?>
                <ul>
                    <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><span>·</span><?php echo str_cut($r[title],35,'…');?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="gc-list l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e65e97156e8f5663f9c6a09edf2d765&action=position&posid=19&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],125,125);?>" width="125" height="125"></a>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28ad1c92313fc1b1e498b05972a52476&action=lists&catid=18&order=listorder+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'18','order'=>'listorder DESC','limit'=>'5',));}?>
                <ul>
                    <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><span>·</span><?php echo str_cut($r[title],35,'…');?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="gc-list l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26fff2d1c2f267b50babb523297895ff&action=position&posid=20&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],125,125);?>" width="125" height="125"></a>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3a8ca11b2097c54cacc984b885c03f0f&action=lists&catid=19&order=listorder+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'19','order'=>'listorder DESC','limit'=>'5',));}?>
                <ul>
                    <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><span>·</span><?php echo str_cut($r[title],35,'…');?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="gc-list mr0 l">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9a65e764f053e7638a4414d8470a84bf&action=position&posid=21&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'1',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],125,125);?>" width="125" height="125"></a>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a7dbeeb1a2f14f3b78f1597b2abac17c&action=lists&catid=20&order=listorder+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'20','order'=>'listorder DESC','limit'=>'5',));}?>
                <ul>
                    <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><span>·</span><?php echo str_cut($r[title],35,'…');?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
    </div>
    <div class="c"></div>
</div>

<div class="bg100 tuan">
    <div class="main">
        <h2 class="tit inbg">公司团队</h2>
        <div class="tit2">
            <a href="<?php echo $CATEGORYS['24']['url'];?>" target="_blank">管理</a><span>|</span><a href="<?php echo $CATEGORYS['25']['url'];?>" target="_blank">设计</a><span>|</span>
            <a href="<?php echo $CATEGORYS['26']['url'];?>" target="_blank">客服</a><span>|</span><a href="<?php echo $CATEGORYS['27']['url'];?>" target="_blank">施工</a><span>|</span><a href="<?php echo $CATEGORYS['7']['url'];?>" target="_blank">更多 ></a>
        </div>
        <div class="eq_n">
            <div class="LeftBotton inbg" id="LeftArr"></div>
            <div class="Cont" id="ISL_Cont_1">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af76a11bc1f68bed65918f3c529fd27f&action=position&posid=22&order=listorder+DESC&num=24\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder DESC','limit'=>'24',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                      <div class="box">
                          <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>-<?php echo $r['zhiwu'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],200,250);?>" width="180" height="225" alt="<?php echo $r['title'];?>" class="tx"></a>
                          <div class="wz">
                              <a href="tencent://message/?uin=<?php echo $r['QQ'];?>&Site=&Menu=yes" title="QQ咨询设计"><span class="qq inbg">QQ咨询</span></a>
                              <p><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>-<?php echo $r['zhiwu'];?>" target="_blank"><?php echo $r['title'];?><br><em><?php echo $r['zhiwu'];?></em></a></p>
                          </div>
                      </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="RightBotton inbg" id="RightArr"></div>
            <script type="text/javascript" src="<?php echo JS_PATH;?>xczs/ScrollPic.js"></script>
            <script language=javascript type=text/javascript>
		     var scrollPic_02 = new ScrollPic();
		     scrollPic_02.scrollContId   = "ISL_Cont_1"; //内容容器ID
		     scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
		     scrollPic_02.arrRightId     = "RightArr"; //右箭头ID
		     scrollPic_02.frameWidth     = 1200;//显示框宽度
		     scrollPic_02.pageWidth      = 204; //翻页宽度
		     scrollPic_02.speed          = 100; //移动速度(单位毫秒，越小越快)
		     scrollPic_02.space          = 204; //每次移动像素(单位px，越大越快)
		     scrollPic_02.autoPlay       = true; //自动播放
		     scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)
		     scrollPic_02.initialize(); //初始化							
            </script>
        </div>
        <div class="c"></div>
    </div>
</div>

<div class="main zixun">
    <div class="activ l">
        <div class="tit3 inbg"><a href="<?php echo $CATEGORYS['14']['url'];?>" target="_blank">更多+</a></div><div class="c"></div>
        <div class="actj">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5eece9c165aa8f3f9d8419e44d0c6f56&action=position&posid=10&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder DESC','limit'=>'1',));}?>
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],355,100);?>" width="355" height="100" alt="<?php echo str_cut($r[title],36,'');?>"><p><?php echo str_cut($r[title],60,'…');?></p></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d5b0d89c912e629908c61055c1f66f91&action=lists&catid=14&order=listorder+DESC&num=6&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'14','order'=>'listorder DESC','limit'=>'6',));}?>
            <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><span>·</span><?php echo str_cut($r[title],80,'…');?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="xins l">
        <div class="tit3 inbg"><a href="<?php echo $CATEGORYS['15']['url'];?>" target="_blank">更多+</a></div><div class="c"></div>
        <ul class="xinstj">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=69c104307b54a0a5bf7beff92be0ed8f&action=position&posid=9&order=listorder+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder DESC','limit'=>'2',));}?>
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php $xs++?>
              <li<?php if($xs%2==0) { ?> class="mr0"<?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],150,0);?>" width="150" height="130" alt="<?php echo str_cut($r[title],36,'');?>"></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="c"></div>
        <ul class="xs-li">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff4d05e48b7be272b90d294f9fc50c04&action=lists&catid=15&order=listorder+DESC&num=6&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'15','order'=>'listorder DESC','limit'=>'6',));}?>
            <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
               <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><span>·</span><?php echo str_cut($r[title],80,'…');?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="news l">
        <div class="tit3 inbg"><a href="<?php echo $CATEGORYS['16']['url'];?>" target="_blank">更多+</a></div><div class="c"></div>
        <div class="new-box">
            <ul class="new-img">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d5a8922135e125688d21b3cc006e4ee&action=position&posid=8&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'listorder DESC','limit'=>'3',));}?>
        	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php $new++?>
                  <li<?php if($new%3==0) { ?> class="mb0"<?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],130,95);?>" width="130" height="95" alt="<?php echo str_cut($r[title],36,'');?>"></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="new-wz">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c3d8c372989ccc10a770436390b1b98a&action=lists&catid=16&order=listorder+DESC&num=12&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'16','order'=>'listorder DESC','limit'=>'12',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><span>·</span><?php echo str_cut($r[title],46,'…');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="c"></div>
        </div>
    </div>
    <div class="c"></div>
</div>

<div class="bg100 link">
   <div class="main">
       <div class="tit3 inbg"></div>
       <div class="hz">
            <div class="LeftBotton inbg" id="LeftArr"></div>
            <div class="Cont" id="ISL_Cont_2">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=1b363042ab448fe7da5b2bdded7d728e&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=24&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'24',));}?>
                <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                      <div class="box"><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="133" height="45" class="tx"></a></div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="RightBotton inbg" id="RightArr"></div>
            <script language=javascript type=text/javascript>
		     var scrollPic_02 = new ScrollPic();
		     scrollPic_02.scrollContId   = "ISL_Cont_2"; //内容容器ID
		     scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
		     scrollPic_02.arrRightId     = "RightArr"; //右箭头ID
		     scrollPic_02.frameWidth     = 1199;//显示框宽度
		     scrollPic_02.pageWidth      = 1216; //翻页宽度
		     scrollPic_02.speed          = 200; //移动速度(单位毫秒，越小越快)
		     scrollPic_02.space          = 1; //每次移动像素(单位px，越大越快)
		     scrollPic_02.autoPlay       = true; //自动播放
		     scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)
		     scrollPic_02.initialize(); //初始化							
            </script>
            <div class="c"></div>
       </div>
       <div class="lj">
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=a1093d75486a180a70eb6ef050941eaa&action=type_list&siteid=%24siteid&linktype=0&order=listorder+DESC&num=20&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'0','order'=>'listorder DESC','limit'=>'20',));}?>
		    <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>
	     	<?php $n++;}unset($n); ?>
	       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </div>
   </div>
</div>
<?php include template("content","footer"); ?>