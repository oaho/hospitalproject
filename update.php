<?php

	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	
	$sql = "select * from member where memberINDEX = '".$_GET['memberINDEX']."'";

	$ret = mysqli_query($con, $sql);
	
	if($ret){
		$count = mysqli_num_rows($ret);
		if($count == 0){
			echo $_GET['memberINDEX']. "회원번호 회원이 없음!!!"."<br>";
			echo "<br> <a href='index.php'> [초기 화면] </a>";
			exit();
		}
	}else{
		echo "데이터 검색 실패!!!"."<br>";
		echo "실패 원인 :", mysqli_error($con);
		echo "<br> <a href='index.php'> [초기 화면] </a>";
		exit();
	}
	
	$row = mysqli_fetch_array($ret);
	$memberINDEX = $row["memberINDEX"];
	$name = $row["name"];
	$id = $row["id"];
	$password = $row["password"];
	$mobile = $row["mobile"];
	$address = $row["address"];
	$residentRegistrationNumber = $row["residentRegistrationNumber"];

?>

<html>
<head>
	<META http-equiv="content-type" content="text/html; charset=utf-8">
	<Title>관리자 페이지</Title>
</head>
<body>

<h1>회원 정보 수정</h1>
<form method="post" action="update_result.php">
	회원번호 : <input type="text" name="memberINDEX" value=<?php echo $memberINDEX ?> readonly> <br>
	이름 : <input type="text" name="name" value=<?php echo $name ?>> <br>
	아이디 : <input type="text" name="id" value=<?php echo $id ?>> <br>
	비밀번호 : <input type="text" name="password" value=<?php echo $password ?>> <br>
	전화번호 : <input type="text" name="mobile" value=<?php echo $mobile ?>> <br>
	주소 : <input type="text" name="address" value=<?php echo $address ?>> <br>
	주민등록번호 : <input type="text" name="residentRegistrationNumber" value=<?php echo $residentRegistrationNumber ?>> <br>
	<br><br>
	<input type="submit" value="정보 수정">
</form>

</body>
</html>