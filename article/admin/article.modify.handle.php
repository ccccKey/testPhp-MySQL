<?php 
	require_once('../connect.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline =  time();
	$updateSql = "update article set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id=$id;";
	if(mysqli_query($link,$updateSql)){
		echo "<script>alert('修改文章成功');</script>";
	}else{
		echo "<script>alert('修改文章失败');window.location.href='article.manage.php';</script>";
	}
?>