<?php
     require_once('../connect.php');
     
    if(!(isset($_POST['title']) && (!empty($_POST['title'])))) {
     	echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
     } 

     $title = $_POST['title'];
     $author = $_POST['author'];
     $description = $_POST['description'];
     $content = $_POST['content'];
     $dateline = time();

     $insertSql = "insert into article(title, author, description, content, dateline) values('$title','$author','$description','$content',$dateline)";
     if(mysqli_query($link,$insertSql)){
     	echo "<script>alert('插入成功');window.location.href='article.add.php'</script>";
     }else{
     	echo "<script>alert('插入失败');window.location.href='article.add.handle.php'</script>";
     }
?>