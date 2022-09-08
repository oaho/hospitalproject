<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");

	$memberINDEX = $_POST["memberINDEX"];
	$name = $_POST["name"];
	$id = $_POST["id"];
	$password = $_POST["password"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	$residentRegistrationNumber = $_POST["residentRegistrationNumber"];
	/*
	$sql = "INSERT INTO userTBL VALUES ('".$userID."','".$userName."',".$birthYear;
	$sql = $sql.",'".$addr."','".$mobile1."','".$mobile2."','".$height."','".$mDate."')";
	*/
	$sql = "UPDATE member SET memberINDEX='".$memberINDEX."', mobile='".$mobile;
	$sql = $sql."', residentRegistrationNumber='".$residentRegistrationNumber."', id='".$id."', password='".$password;
	$sql = $sql."', name='".$name."', address='".$address."' where memberINDEX='".$memberINDEX."'";

	//$sql2 = "SELECT * FROM member where memberINDEX='".$memberINDEX."'";
	
	$ret = mysqli_query($con, $sql);
	//$ret2 = mysqli_query($con, $sql2);
	
	echo "<h1>회원 정보 수정 결과</h1>";
	
	if($ret){
		echo "데이터가 성공적으로 입력됨.";
	}else{
		echo "데이터 입력 실패!!!"."<br>";
		echo "실패 원인 : ", mysqli_error($con);
		
	}

	mysqli_close($con);
	echo "<br> <a href='select.php'> [관리자 메인] </a>";

?>

<html>
<head>
	<Title>관리자 페이지</Title>
</head>
<body>

</body>
</html>