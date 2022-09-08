<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	
	
	$memberINDEX = mysqli_insert_id($con);
	$name = $_POST["name"];
	$id = $_POST["id"];
	$password = $_POST["password"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	$residentRegistrationNumber = $_POST["residentRegistrationNumber"];
	
	$sql = "INSERT INTO member VALUES ('".$memberINDEX."','".$mobile."',".$residentRegistrationNumber;
	$sql = $sql.",'".$id."','".$password."','".$name."','".$address."')";

	$ret = mysqli_query($con, $sql);

	
	if($ret){
		echo "회원가입이 완료되었습니다.";
	}else{
		echo "회원가입에 실패하였습니다."."<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
	
	mysqli_close($con);
	
	echo "<br> <a href='index.php'> [메인 화면] </a>";

?>
<html>
<head>
	<Title>회원가입</Title>
</head>
</html>