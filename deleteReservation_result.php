<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");

	$reservationINDEX = $_GET["reservationINDEX"];

	$sql = "DELETE FROM reservation WHERE reservationINDEX='".$reservationINDEX."'";

	$ret = mysqli_query($con, $sql);
	/*
	if($ret){
		echo "회원이 성공적으로 삭제됨.";
	}else{
		echo "데이터 삭제 실패!!!"."<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
	*/
?>

<html>
<head>
	<Title>예약 삭제</Title>
</head>
<body>
	<?php
		if($ret){
	?>
			<script>alert('삭제가 완료되었습니다.');</script>
	<?php
		}else{
	?>
			<script>alert('삭제에 실패하였습니다.');</script>
	<?php
		}
		mysqli_close($con);
	?>
	<script>document.location.href="select.php";</script>
</body>
</html>