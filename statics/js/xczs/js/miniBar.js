$(function(){
	$('.mini-bar li').hover(function(){
		$(this).addClass('on');
		$(this).find('span').css({'left':'-80px','visibility':'visible'});
	},function(){
		$(this).removeClass('on');
		$(this).find('span').css({'left':'0px','visibility':'hidden'});
	});
	$('.mini-bar li.miItem').each(function(index){
		$(this).click(function(){
			$('#lf-view').css({'left':'0'});
			var miDiv=$('.mini-ni').eq(index);
			$(this).find('span').css({'left':'0px','visibility':'hidden'});
			if(miDiv.is(':hidden')){
				$('#miniBus').animate({right:'0'});
			 	$(this).addClass('select').siblings().removeClass('select');
				miDiv.show();
				$('.mini-ni').eq(index).siblings().hide();

			}else{
				$('#miniBus').animate({right:'-270px'});
				miDiv.hide();
				$(this).removeClass('select');
			}
		})
	});
	$('.mini-close').click(function(){
		$('#miniBus').animate({right:'-270px'},'fast');
		$('.mini-bar li').removeClass('select');
	});
	var callTop=$('.mini-barlist ul').position().top-$('.callItem').position().top-18;
	$('#lf-view').css('top',callTop);
	$('.callItem').click(function(){
		$('#mini-idea').hide();
		$('#lf-view').animate({left:'-405'});
	});
	$('#viewClose').click(function(){
		$('#lf-view').css({'left':'0'});
	});
	$('#lf-view dfn').click(function(){
		$('#lf-view dfn').removeClass('on')
		$(this).addClass('on');
	})
})
var yz=/\S{6,}/;
var m=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
function regcheck(){
	var mob=reg.mobile.value;//手机号
	var ver=reg.verify.value;//验证码
	var name=reg.realname.value;//姓名
	var gen=reg.gender.value;//性别
	var pass=reg.password.value;//密码
	var carid=form.carid.value;
	var carstatus=form.carstatus.value;
	var xq=reg.xq.value;//小区
	var url='index.php?m=kjlapi&a=regwebsite';
	if(mob==''){
		alert("手机不能为空");
		reg.mobile.focus();
		return false;
	}
	if(!m.exec(mob)){
		alert("手机号格式不正确");
		reg.mobile.focus();
		return false;
    }
	if(ver==''){
		alert("验证码不能为空");
		reg.verify.focus();
		return false;
	}
	if(pass==''){
		alert("密码不能为空");
		reg.password.focus();
		return false;
	}
	if(!yz.exec(pass)){
		alert("密码格式不正确");
		reg.password.focus();
		return false;
    }
	$.ajax({
		 type: "POST",
		 url: url,
		 data: {mobile:mob, password:pass,verify:ver,realname:name,xq:xq,gender:gen,carid:carid,carstatus:carstatus},
		 // dataType: "json",
		 success: function(datas){
		 	alert(datas);
		      if(datas=="false")
		      {
		      	alert('注册失败！！！');
		      }
		      else if(datas=="false:tel")
		      {
		      	alert('账号重复，注册失败！！！');
		      }
		  else
		  {
			  var data = $.parseJSON(datas);
			 if(data.tel>0){
				 	$('#popBox').fadeOut();
					$("#MemberMenuChange").removeClass();
					$("#MemberMenuChange").attr("href", "index.php?m=kjlapi&a=initmember");
					$("#rightMenuHtml").html('<a href="index.php?m=kjlapi&a=initmember">'+data.nickname+'</a>|<a href="#" id="b-tuichu">退出</a>|&nbsp;&nbsp;&nbsp;&nbsp;<img src="Public/Home/images/tel.png"/>');
				
			 }
			 }
		}
	 });
	 return false;
}
function check(){
	var user=form.username.value;
	var pass=form.password.value;
	var check=form.checkbox.value;
	var carid=form.carid.value;
	var carstatus=form.carstatus.value;
	var url='index.php?m=kjlapi&a=loginwebsite';
	//alert(tempurl);
	if(user==''){
		alert("登录名不能为空");
		form.username.focus();
		return false;
	}
	if(pass==''){
		alert("密码不能为空");
		form.password.focus();
		return false;
	}

	$.ajax({
		     url:url, type: "POST",
                data: {username:user, password:pass,checkbox:check,carid:carid,carstatus:carstatus},
                //contentType: "application/json; charset=utf-8",
                //dataType: "json",
                success: function (data) {
			
			 var obj = eval(data);
			if(obj[0].userid!=''&&obj[0].userid!=undefined){
				{
					$('#popBox').fadeOut();
					$("#MemberMenuChange").removeClass();
					$("#MemberMenuChange").attr("href", "index.php?m=kjlapi&a=initmember");
					$("#rightMenuHtml").html('<a href="index.php?m=kjlapi&a=initmember">'+obj[0].nickname+'</a>|<a href="#" id="b-tuichu">退出</a>|&nbsp;&nbsp;&nbsp;&nbsp;<img src="Public/Home/images/tel.png"/>');
				}
			}
		},
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(XMLHttpRequest.status);
                    
                }
	 });
	 return false;
}
$('.Smakeid').change(function(){
	var sel=$(this).children('option:selected').val();//这就是selected的值 对，没错
	var url='/Tailor/Select/channel/4';
	$.ajax({
		type: "POST",
		url: url,
		data: {sel:sel},
		dataType: "json",
		success: function(data){
			if(data.status==1){
				$('#xlselect').html(data.html);
			}
		}
	 });
	// return false;
})

function cleckform(){
	var makeid=dForm.makeid.value;
	var modeid=dForm.modeid.value;
	var years=dForm.years.value;
	var dprice=dForm.dprice.value;
	var hprice=dForm.hprice.value;
	var buytime=dForm.buytime.value;
	var content=dForm.content.value;
	var mobile=dForm.mobile.value;
	var verify=dForm.verify.value;
	var url='/Tailor/liang/channel/4';
	if(makeid==''){
		alert("品牌不能为空");
		return false;
	}
	if(modeid==''){
		alert("车系不能为空");
		return false;
	}
	var remember='';
	if ($('#remembermobile').attr('checked')) {
		remember = 2;
	}else{
		remember='';
	}
	$.ajax({
		 type: "POST",
		 url: url,
		 data: {makeid:makeid, modeid:modeid, years:years, dprice:dprice, hprice:hprice,ckmobile:remember,buytime:buytime, content:content,mobile:mobile,verify:verify},
		 dataType: "json",
		 success: function(data){
			// alert(data);
			if(data.result>0){
				alert('提交成功');
				window.location.reload();
			}else if(data.result==-1){
				$('#popBoxYzm').fadeIn();
				alert('验证码错误');
			}else{
				$('#popBoxYzm').fadeIn();
				alert('提交失败');
			}
		}
	 });
	return false;
}
$('.send_code').click(function(){
	var url='/Member/sendMess/channel/7';
	var mobile=$('#mobile').val();
	var m=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
	if(!m.exec(mobile)){
		alert("手机号格式不正确");
		$('#mobile').focus();
		return false;
    }
	$.ajax({
		type: "POST",
		url: url,
		data: {mobile:mobile},
		dataType: "json",
		success: function(data){
			if(data.sta=='1'){
				alert('发送成功');
				$('#send').html('<a class="send_code right">已发送</a>');
			}else{
				alert('发送失败');
			}
		}
	 });
	 return false;
})

function Lmessage(){
	var bankAuthSrc=leaveMess.bankAuthSrc.value;
	var mobile=leaveMess.mobile.value;
	var url='/Tailor/leaveMessage/channel/4';
	if(bankAuthSrc==''){
		alert("请输入您的留言");
		leaveMess.bankAuthSrc.focus();
		return false;
	}
	if(mobile==''){
		alert("手机号码不能为空");
		leaveMess.mobile.focus();
		return false;
	}
	var m=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
	if(!m.exec(mobile)){
		alert("手机号格式不正确");
		leaveMess.mobile.focus();
		return false;
    }
	$.ajax({
		 type: "POST",
		 url: url,
		 data: {bankAuthSrc:bankAuthSrc, mobile:mobile},
		 dataType: "json",
		 success: function(data){
			if(data.result>0){
				alert('留言成功');
				window.location.reload();
			}else{
				alert('留言失败');
			}
		}
	 });
	return false;
}






BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 4000337777, selector: 'BizQQWPA'});

