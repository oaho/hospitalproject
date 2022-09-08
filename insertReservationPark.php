<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	
	$sql1 = "SELECT * FROM member where mobile = '".$_GET['mobPark']."'";

	$ret1 = mysqli_query($con, $sql1);

	while($row = mysqli_fetch_array($ret1)) {
		$memberINDEX= $row['memberINDEX'];
	}

	$reservationDatetime = $_GET["datetimePark"];
	$content = $_GET['conPark'];
	$fk_reservation_doctorINDEX = 10003;
	$fk_reservation_memberINDEX = $memberINDEX;
	$fk_reservation_mobile = $_GET["mobPark"];


	$sql2 = "INSERT INTO reservation VALUES (NULL,'".$reservationDatetime."','".$content;
	$sql2 = $sql2."','".$fk_reservation_doctorINDEX."','".$fk_reservation_memberINDEX."','".$fk_reservation_mobile."')";

	$ret2 = mysqli_query($con, $sql2);

	if($ret2){
		echo "예약이 완료되었습니다.";
	}else{
		echo "예약에 실패하였습니다."."<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}

	mysqli_close($con);
	
	echo "<br> <a href='index.php'> [초기 화면] </a>";

?>

<html>
<head>
	<Title>박의사 예약</Title>
</head>
<body>
	<?php
		if($ret2){
	?>
			<script>alert('예약이 완료되었습니다.');</script>
	<?php
		}else{
	?>
			<script>alert('예약에 실패하였습니다.');</script>
	<?php
		}
	?>
	<script>document.location.href="index.php";</script>
</body>
</html>