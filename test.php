<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<style>
		iframe {
			width: 100%;
			height: 100%;
			position: absolute;
			overflow: hidden;
		}
	</style>


	<iframe id="if1" src="https://h5.m.taobao.com/awp/core/detail.htm?id=544777146464&abtest=17&rn=4971b1e2d04a1561775842e2e2e4db21&sid=ea9fc8ce245018ed71516878ff6af067" frameborder="0"></iframe>


	<script>
		console.log($(window.frames["if1"].document).find("#J_newDetail").html());
	</script>
	
</body>
</html>