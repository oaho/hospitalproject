<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	
	$sql1 = "SELECT * FROM member where mobile = '".$_GET['mobKim']."'";

	$ret1 = mysqli_query($con, $sql1);

	while($row = mysqli_fetch_array($ret1)) {
		$memberINDEX= $row['memberINDEX'];
	}

	$reservationDatetime = $_GET["datetimeKim"];
	$content = $_GET['conKim'];
	$fk_reservation_doctorINDEX = 10001;
	$fk_reservation_memberINDEX = $memberINDEX;
	$fk_reservation_mobile = $_GET["mobKim"];


	$sql2 = "INSERT INTO reservation VALUES (NULL,'".$reservationDatetime."','".$content;
	$sql2 = $sql2."','".$fk_reservation_doctorINDEX."','".$fk_reservation_memberINDEX."','".$fk_reservation_mobile."')";

	$ret2 = mysqli_query($con, $sql2);

	mysqli_close($con);

?>

<html>
<head>
	<Title>김의사 예약</Title>
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