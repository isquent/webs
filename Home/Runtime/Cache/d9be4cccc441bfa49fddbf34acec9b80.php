<?php if (!defined('THINK_PATH')) exit();?><!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>仿手机腾讯网图片轮播效果</title>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/test.css" />
</head>

<body>
<div id="main">
  <div id="picbox">
    <div id="pic1" class="pics"></div>
    <div id="pic2" class="pics"></div>
    <div id="pic3" class="pics"></div>
    <div id="pic4" class="pics"></div>
    <div id="pic5" class="pics"></div>
  </div>
  <div id="nav">
    <li id="navli1" class="anvli navnow" value="1"></li>
    <li id="navli2" class="anvli" value="2"></li>
    <li id="navli3" class="anvli" value="3"></li>
    <li id="navli4" class="anvli" value="4"></li>
    <li id="navli5" class="anvli" value="5"></li>
  </div>
  <div id="pre" class="hbut"></div>
  <div id="next" class="hbut"></div>
</div>
<script src="http://h.qhimg.com/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
    var i=0;
	var m;
	$(".hbut").hide();
	$("#main").hover(function(){
		$(".hbut").show();	
},function(){
		$(".hbut").hide();
	});

	$(document).ready(function(){
		setInterval( function autodo(){
	i++;
	if(i>5){i=1}
	doit(i);
		
},1500);
$(".anvli").hover(function(){
			 i = $(this).val();
			 doit(i);		
});
$("#pre").click(function(){
			 i--;
			 if(i<0){i=5}
			 doit(i);		
});
$("#next").click(function(){
			 i++;
			 if(i>5){i=1}
			 doit(i);		
});
});
function doit(i){
		 m = -960*(i-1);
		 $(".anvli").removeClass("navnow");
		 $("#navli"+i).addClass("navnow");
		 $("#picbox").stop(true, true).animate({"left":m+"px"},700);
}
</script> 
</body>
</html> -->