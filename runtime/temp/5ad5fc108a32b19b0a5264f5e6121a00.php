<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/user\view\role\roleedit.html";i:1518162720;s:87:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/user\view\..\..\com\view\public\meta.html";i:1518159452;s:89:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/user\view\..\..\com\view\public\footer.html";i:1518053708;}*/ ?>
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
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
	<input type="hidden" value="<?php echo $list['role_id']; ?>" name="id">
	<input type="hidden" value="<?php echo $list['role_status']; ?>" name="status">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['name']; ?>" placeholder="" id="roleName" name="roleName" datatype="*4-16" nullmsg="用户账户不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['bewrite']; ?>" placeholder="" id="" name="memo">
			</div>
		</div>
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="" name="user-Character-0" id="user-Character-0">
							用户管理</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0" id="user-Character-0-0">
									用户管理</label>
							</dt>
							<dd>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-0">
									添加</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-1">
									修改</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-2">
									删除</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-3">
									查看</label>
							</dd>
						</dl>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">
									角色管理</label>
							</dt>
							<dd>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">
									添加</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">
									修改</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">
									删除</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">
									查看</label>
							</dd>
						</dl>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">
									权限管理</label>
							</dt>
							<dd>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">
									添加</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">
									修改</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">
									删除</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">
									查看</label>
							</dd>
						</dl>
					</dd>
				</dl> -->
				<!-- <dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="" name="user-Character-0" id="user-Character-1">
							用户中心</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">
									用户管理</label>
							</dt>
							<dd>
								<label class="">
									<input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">
									添加</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">
									修改</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">
									删除</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">
									查看</label>
							</dd>
						</dl>
					</dd>
				</dl> -->
	<!-- 		</div>
		</div> -->
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
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
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
// $(function(){
// 	$(".permission-list dt input:checkbox").click(function(){
// 		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
// 	});
// 	$(".permission-list2 dd input:checkbox").click(function(){
// 		var l =$(this).parent().parent().find("input:checked").length;
// 		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
// 		if($(this).prop("checked")){
// 			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
// 			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
// 		}
// 		else{
// 			if(l==0){
// 				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
// 			}
// 			if(l2==0){
// 				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
// 			}
// 		}
// 	});
// 	});
$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			 $(form).ajaxSubmit(options);
            return false;
		}
	});
	var options = {
	    url: "<?php echo url('role/rolesave'); ?>",
	    type: 'post',
	    success: function(data) {
	    	layer.msg(data.result);
	    	if(data.status==1){
	    		// setTimeout("parent.layer.closeAll();",1000);
	    		setTimeout("parent.location.reload()",1000);
	    		}
	    	}
	    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>