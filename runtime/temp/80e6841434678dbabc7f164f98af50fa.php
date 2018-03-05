<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/system\view\log\index.html";i:1519976081;s:89:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/system\view\..\..\com\view\public\meta.html";i:1518159452;s:91:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/system\view\..\..\com\view\public\footer.html";i:1518053708;}*/ ?>
﻿<!DOCTYPE HTML>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	系统管理
	<span class="c-gray en">&gt;</span>
	系统日志
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<form action="<?php echo url('system/log/search'); ?>" method="post">
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="" size="17" class="date input-text Wdate" id="logmax" style="width:120px;" readonly> - <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="" size="17" class="date input-text Wdate" id="logmax" style="width:120px;" readonly>
		<input type="text" name="value" id="" placeholder="日志内容" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜日志</button>
	</div>
	</form>	
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		</span>
		<span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
	</div>
	<form action="">
	<table class="table table-border table-bordered table-bg table-hover table-sort">
		<thead>
			<tr class="text-c">
				<th><input type="checkbox" name="" id="checkbox"></th>
				<th width="">ID</th>
				<th width="">用户名</th>
				<th>姓名</th>
				<th width="">内容</th>
				<th width="">时间</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td width="25"><input type="checkbox" value="<?php echo $vo['log_id']; ?>" name="delete[]" ></td>
				<td><?php echo $vo['log_id']; ?></td>
				<td><?php echo $vo['log_user_name']; ?></td>
				<td><?php echo $vo['log_name']; ?></td>
				<td><?php echo $vo['log_operation']; ?></td>
				<td><?php echo date('Y-m-d h:m:s',$vo['create_time']); ?></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	</form>
	<div id="pageNav" class="pageNav"></div>
	<?php echo $list->render(); ?>
</div>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*日志-删除*/
function datadel(){
	var len=$("input:checkbox:checked").length;
	if($('#checkbox').prop('checked') ){
		len = len-1
	}
	 if(len==0){
	 layer.msg("没有选中记录。");
	}
	 else{
	 	layer.confirm('确定要删除这'+len+'条日志吗？',function(){
	 	$.post("<?php echo url('Log/deletelog'); ?>",$('form').serializeArray(),
	 	 function(data){
	 		layer.msg(data.message);
	 		setTimeout("location.reload()",1000);
	 	});
	 })
	}
}
//日期选择函数
function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd'})}
    }
 }
</script>
</body>
</html>