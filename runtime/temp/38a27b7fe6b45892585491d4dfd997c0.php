<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/user\view\user\useredit.html";i:1518397507;s:87:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/user\view\..\..\com\view\public\meta.html";i:1518159452;s:89:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/user\view\..\..\com\view\public\footer.html";i:1518053708;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap_page.css" />
<!-- <script type="text/javascript" src="__STATIC__/bootstrap/bootstrap.min.js"></script> -->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
	<input type="hidden" name="id" value="<?php echo $list['id']; ?>">
	<input type="hidden" name="password" value="<?php echo $list['userpwd']; ?>">
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户编号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['usercode']; ?>" placeholder="" id="" name="usercode">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['username']; ?>" placeholder="" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['mobile']; ?>" placeholder="" id="mobile" name="mobile">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>微信号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['openid']; ?>" name="openid" id="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['email']; ?>" name="email" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">用户类型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="usertype">
				<?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $name['role_id']; ?>" <?php if(($list['roleid'] == $name['role_id'])): ?>selected<?php endif; ?>><?php echo $name['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所在公司：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="company">
					<option value="<?php echo $list['company']; ?>" selected><?php echo $list['company']; ?></option>
					<?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $list['name']; ?>"><?php echo $list['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="status" type="radio" id="sex-1" value="1" checked>
					<label for="sex-1">启用</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="status" value="0">
					<label for="sex-2">停用</label>
				</div>
			</div>
		</div>
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="button" onclick="submit_form()" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
function submit_form(){
        $.ajax({
            type:"POST",
            // url:"<?php echo url('loginvalidate'); ?>",
            url:"<?php echo url('usersave'); ?>",
            data:$("form").serialize(),//将表单序列化
            dataType:'json',
            success:function(data){
                    layer.alert(data.message);
                    if(data.status===1){
                    setTimeout("parent.location.reload()",500);
                    }
            }
        })
    }
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>