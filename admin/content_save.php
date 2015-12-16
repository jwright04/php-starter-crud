<?php

$title = $_POST['title'];
$createby = $_POST['createby'];
$createtime = $_POST['createtime'];
$content = $_POST['content'];

$sql ="INSERT INTO tbl_content (`title`, `createby`, `createtime`, `content`) 
VALUES('$title', '$createby', '$createtime', '$content')";

$res = $mysqli->query($sql) or die ($mysqli->error);
if($res){
	echo '<div class="alert alert-success h3 text-center" role="alert"><span class="glyphicon glyphicon-ok"></span> บันทึกเรียบร้อย</div>';
	echo '<a class="btn btn-primary btn-block" href="?page=content_list"><span class="glyphicon glyphicon-chevron-left"></span> กลับหน้าจัดการบันทึก</a>';
}else{
	echo '<div class="alert alert-danger" role="alert">มีข้อผิดพลาด บันทึกไม่สำเร็จ</div>';
}

?>