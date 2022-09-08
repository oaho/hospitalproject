<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");

	$memberINDEX = $_POST["memberINDEX"];

	$sql = "DELETE FROM member WHERE memberINDEX='".$memberINDEX."'";
	
	$ret = mysqli_query($con, $sql);
	
	echo "<h1>회원 삭제 결과</h1>";
	
	if($ret){
		echo "회원이 성공적으로 삭제됨.";
	}else{
		echo "데이터 삭제 실패!!!"."<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
	
	mysqli_close($con);
	
	echo "<br> <a href='select.php'> [관리자 메인] </a>";

?>