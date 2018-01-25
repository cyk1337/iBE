<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我要发布</title>
<!-- <?php echo ($title); ?> -->

<link rel="stylesheet" href="__PUBLIC__/Css/admin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/admin/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/admin/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__ROOT__/ueditor/themes/default/ueditor.css"/>


<!-- <script type="text/javascript" src="__PUBLIC__/Js/admin/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/cyk.jquery.configuration.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/facebox.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery.wysiwyg.js"></script> -->

<script type="text/javascript" src="__ROOT__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__ROOT__/ueditor/editor_all.js"></script>


</head>

<body>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
     
      	<h1 id="sidebar-title"><a href="#">iBookExchange Admin</a></h1>
      	<img id="logo" src="__PUBLIC__/Images/admin/logo.png" alt=" Admin login" />

      	<div id="profile-links"> 
      		您好,<a href="#" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
	 		<a href="__URL__/quit" title="退出">退出</a> 
       	</div>
       	
	    <ul id="main-nav">
     		<!--  <li> <a href="#" class="nav-top-item">书书约吗</a>
	          <ul>
	            <li><a href="#" id="nav_jianjie">项目简介</a></li>
	            <li><a href="#" id="nav_women">联系我们</a></li>
	         
	          </ul>
	        </li>-->
	        
	        <li> <a href="#" class="nav-top-item">发布模块</a>
	          <ul>
	            
	            <li><a href="#" id="nav_fabu">匿名发布</a></li>
	            <!-- <li><a href="#">2</a></li> -->
	          </ul>
	        </li>
	              
	    	<li> <a href="#" class="nav-top-item"></a>
	          <ul>
	            <!-- <li><a href="#">其他</a></li> -->
	            
	          </ul>
	        </li> 
	        
	       <!--  <li> <a href="#" class="nav-top-item">友情链接</a>
	          <ul>
	            <li><a href="#" id="nav_zhandian">站点</a></li>
	            
	          </ul>
	        </li>
	     </ul> -->
         
    </div>
  </div>
   
  <div id="main-content">
 
    <noscript>
    <!-- Show a notification if the user has disabled javascript -->
	    <div class="notification error png_bg">
	      	<div> 您好，您的浏览器不支持JavaScript，请打开JavaScript     </div>
	    </div>
    </noscript>
    
    <h2>我要发布</h2>
	<br></br>
	
   	<!-- 实例化百度编辑器 -->

   	<form action="__URL__/<?php echo ($btn_ok_act); ?>"  method="post">
   		<p class="subtit">图书信息</p>
		<div>
			<select id="selType">
				<option value="0">请选择</option>
				<option value="1">社会科学</option>
				<option value="2">军事科学</option>
				<option value="3">历史地理</option>
				<option value="4">财经管理 </option>
				<option value="5">计算机技术</option>
				<option value="6">其他</option>
			</select>
			<input type="text" id="txtTitle" name="subject" style="width:560px; height:20px; float:left;" maxlength="100" value="<?php echo ($article_item["subject"]); ?>"/>
		</div>
		<br></br>
		<p class="subtit">图书内容</p>
	    <div id="myEditor">
			<script type="text/javascript">
				var editor = new baidu.editor.ui.Editor({
				    initialContent: '<?php echo ($article_item["message"]); ?>'
				});
				editor.render("myEditor");
			</script>
		</div>
		<br></br>
		<input type="hidden" value="<?php echo ($article_item["id"]); ?>" name="id"/>
		<input type="submit" value="<?php echo ($btn_ok_text); ?>"/>
	</form>
    <div class="clear"></div>
        
    <div id="footer"> 
    	<small>
      		&#169; Copyright 2015 ISTA	<a href="#"></a> 
      	</small> 
    </div>
    
  </div>

</div>
<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/cyk.jquery.configuration.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/facebox.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/manageTab.js"></script>

</body>
</html>