<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
</head>
<body>
	<?php if(is_array($book_list)): $i = 0; $__LIST__ = $book_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><b><?php echo ($vo['book_id']); ?></b></p> 
<p><?php echo ($vo['book_name']); ?> <p>
<p><?php echo ($vo['book_author']); ?></p>
<p><?php echo ($vo['createtime']); ?></p>
<p></p><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>