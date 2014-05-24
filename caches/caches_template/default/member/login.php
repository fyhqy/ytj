<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header-page'); ?>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({onshow:"<?php echo L('input').L('username');?>",onfocus:"<?php echo L('between_2_to_20');?>"}).inputValidator({min:2,max:20,onerror:"<?php echo L('between_2_to_20');?>"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"<?php echo L('username').L('format_incorrect');?>"});
	$("#password").formValidator({onshow:"<?php echo L('input').L('password');?>",onfocus:"<?php echo L('password').L('between_6_to_20');?>"}).inputValidator({min:6,max:20,onerror:"<?php echo L('password').L('between_6_to_20');?>"});

});
//-->
</script>

<link href="<?php echo CSS_PATH;?>dialog_simp.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.submit,.pass-logo a,.form-login .input label,.item span{display:inline-block;zoom:1;*display:inline;}
.blue,.blue a{color:#377abe}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log span{color:#ced9e7}
.log a{color:#049;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header{ height:94px; background:url(<?php echo IMG_PATH;?>member/h.png) repeat-x}
#header .logo{ padding-right:100px;float:left;background:url(<?php echo IMG_PATH;?>member/login-logo.png) no-repeat right 2px;}
#header .content{width:920px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:920px; margin:auto; padding:36px 0 0 0}
.form-login{ width:440px; padding-left:40px}
.form-login h2{font-size:25px;color:#494949;border-bottom: 1px dashed #CCC;padding-bottom:3px; margin-bottom:10px}
.form-login .input{ padding:7px 0}
.form-login .input label{ width:84px;font-size:14px; color:#888; text-align:right}
.take,.reg{padding:0 0 0 84px}
.take .submit{ margin-top:10px}
.form-login .hr{background: url(<?php echo IMG_PATH;?>member/line.png) no-repeat left center; height:50px;}
.form-login .hr hr{ display:none}

.submit{padding-left:3px}
.submit,.submit input{ background: url(<?php echo IMG_PATH;?>member/but.png) no-repeat; height:29px;cursor:hand;}
.submit input{background-position: right top; border:none; padding:0 10px 0 7px; font-size:14px}
.reg{ color:#666; line-height:24px}
.reg .submit{background-position: left -35px; height:35px}
.reg .submit input{background-position: right -35px; font-weight:700; color:#fff; height:35px}

.col-1{position:relative; float:right; border:1px solid #c4d5df; zoom:1;background: url(<?php echo IMG_PATH;?>member/member_title.png) repeat-x; width:310px; margin: auto; height:304px}
.col-1 span.o1,
	.col-1 span.o2,
	.col-1 span.o3,
	.col-1 span.o4{position:absolute;width:3px;height:3px; overflow:hidden;background: url(<?php echo IMG_PATH;?>fillet.png) no-repeat}
	.col-1 span.o1{background-position: left -6px; top:-1px; left:-1px}
	.col-1 span.o2{background-position: right -6px; top:-1px; right:-1px}
	.col-1 span.o3{background-position: left -9px; bottom:-1px; left:-1px}
	.col-1 span.o4{background-position: right -9px; bottom:-1px; right:-1px;}
.col-1 .title{color:#386ea8; padding:5px 10px 3px}
.col-1 div.content{padding:0px 10px 10px}
.col-1 div.content h5{background: url(<?php echo IMG_PATH;?>member/ext-title.png) no-repeat 2px 10px; height:34px}
.col-1 div.content h5 strong{ visibility: hidden}
.pass-logo{ margin:auto; width:261px; padding-top:15px}
.pass-logo p{border-top: 1px solid #e1e4e8; padding-top:15px}
.item{padding:10px 0; vertical-align:middle; margin-bottom:10px}
.item span{ color:#8c8686}
.login-list li{ float:left;height:26px; margin-bottom:14px;width:123px;background:url(<?php echo IMG_PATH;?>member/mbg.png) no-repeat}
.login-list li a{ display:block;background-repeat:no-repeat; background-position:6px 5px;height:26px; padding-left:36px; line-height:26px}
.login-list li a:hover{text-decoration: none;}
#footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
#footer a{color:#666;}

</style>

<div class="frontLayer onDesktop">
  
  <section class="row-fluid" id="mainContainer">
    
	<div class="span10 content borBox pull-right">
    	<div class="row-fluid blogPost">
      		<div class="span8">
    			<form accept-charset="UTF-8" action="" onsubmit="save_username();" class="simple_form form-horizontal new_user" id="new_user" method="post" novalidate="novalidate">
      <fieldset>
        <legend>登录</legend>
        <div class="control-group string required"><label class="string required control-label" for="user_login"><abbr title="required">*</abbr> 登录名</label><div class="controls"><input class="string required" id="user_login" name="username" size="50" style="width:180px;" type="text" /></div></div>
        <div class="control-group password optional"><label class="password optional control-label" for="user_password">密码</label><div class="controls"><input class="password optional" id="user_password" name="password" size="50" style="width:180px;" type="password" /></div></div>
        <div class="control-group password optional"><label class="password optional control-label" for="user_password">验证码</label><div class="controls"><input class="password optional" id="code" name="code" size="50" style="width:180px;" type="text" /> <?php echo form::checkcode('code_img', '5', '14', 120, 26);?></div></div>
        <div class="control-group checkbox optional">
          <label class="checkbox optional control-label"></label>
          <div class="controls">
            <div class="inputs-list"><label for="user_remember_me"><input type="checkbox" name="cookietime" value="2592000" id="cookietime">记住登录状态</label></div>
          </div>
        </div>
        <div class="form-actions">
          <input class="btn btn-primary" data-disable-with="正在登录" name="dosubmit" type="submit" value="登录" />
        </div>
      </fieldset>
</form>   
			</div>
      		<div class="span4 krSide">
        		<div class="signup_box">
          			<h6 class="sidebar_title">已经有帐号了？</h6>
          			<ul>
          				<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login">登录</a><br />

					  	<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>">现在注册</a><br />

					  	<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=public_get_password_type&siteid=<?php echo $siteid;?>">忘记了密码?</a><br />


					</ul>
        		</div>
				<div class="signin_box">
              <h6 class="sidebar_title">用其他平台的帐号登录</h6>
              <ul>
                <li><a href="/account/auth/qq" data-no-turbolink="true">QQ 帐号</a> </li>
                <li><a href="/account/auth/weibo" data-no-turbolink="true">新浪微博</a> </li>
                <li><a href="/account/auth/renren" data-no-turbolink="true">人人网</a> </li>
                <li><a href="/account/auth/github" data-no-turbolink="true">Github</a> </li>
              </ul>
          </div>
      		</div>    

  		</div>
  		
	</div> 
	<?php include template('member', 'menu'); ?>
  </section>   
<a class="go_top hidden hidden-phone" href="#top" style="display: inline; "><i class="icon icons_go_top"></i></a>


</div>


<script language="JavaScript">
<!--

	$(function(){
		$('#username').focus();
	})

	function save_username() {
		if($('#cookietime').attr('checked')==true) {
			var username = $('#username').val();
			setcookie('username', username, 3);
		} else {
			delcookie('username');
		}
	}
	var username = getcookie('username');
	if(username != '' && username != null) {
		$('#username').val(username);
		$('#cookietime').attr('checked',true);
	}

	function show_login(site) {
		if(site == 'sina') {
			art.dialog({lock:false,title:'<?php echo L('sina_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_sina_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'snda') {
			art.dialog({lock:false,title:'<?php echo L('snda_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_snda_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'qq') {
			art.dialog({lock:false,title:'<?php echo L('qq_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_qq_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		}
	}
//-->
</script>

<?php include template('member', 'footer'); ?>