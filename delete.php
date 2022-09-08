<?php

	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	
	$sql = "select * from member where memberINDEX = '".$_GET['memberINDEX']."'";

	$ret = mysqli_query($con, $sql);
	
	if($ret){
		$count = mysqli_num_rows($ret);
		if($count == 0){
			echo $_GET['memberINDEX']." 번 회원이 없음!!!"."<br>";
			echo "<br> <a href='select.php'> [관리자 메인] </a>";
			exit();
		}
	}else{
		echo "데이터 검색 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		echo "<br> <a href='select.php'> [관리자 메인] </a>";
		exit();
	}
	
	$row = mysqli_fetch_array($ret);
	$memberINDEX = $row['memberINDEX'];
	$name = $row["name"];

?>

<html>
<head>
	<META http-equiv="content-type" content="text/html; charset=utf-8">
	<Title>관리자 페이지</Title>
</head>
<body>

<h1>회원 삭제</h1>
<form method="post" action="delete_result.php">
	아이디 : <input type="text" name="memberINDEX" value=<?php echo $memberINDEX ?> readonly> <br>
	이름 : <input type="text" name="name" value=<?php echo $name ?> readonly> <br>
	<br><br>
	위 회원을 삭제하시겠습니까?
	<input type="submit" value="회원 삭제">
</form>

</body>
</html>