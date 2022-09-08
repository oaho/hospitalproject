<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");

	$sql1 = "SELECT * FROM reservation WHERE fk_reservation_mobile = '".$_GET['mobileReservation']."'";
	$ret1 = mysqli_query($con, $sql1);
	

/*
							회원이름   부서이름   의사이름  진료내용    진료시간
							member   department doctor reservation  reservation
*/

	if($ret1){
		if(mysqli_num_rows($ret1)==0){
			echo "예약정보가 없습니다.<br>";
		}else{
			echo "예약정보 ", mysqli_num_rows($ret1), "건이 검색됨<br>";
		}
	}else{
		echo "reservation 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
/*
	$reservationINDEX = array();
	$reservationINDEX = array();
	$reservationINDEX = array();
	$reservationINDEX = array();

	for($i = 0; $i <mysqli_num_rows($ret1); $i++){
		$reservationINDEX[i] = $row['reservationINDEX'];
	}
	*/
	while($row=mysqli_fetch_array($ret1)){
		$reservationINDEX = $row['reservationINDEX'];
		$reservationDatetime = $row['reservationDatetime'];								//진료시간
		$content = $row['content'];														//진료내용
		$doctorINDEX = $row['fk_reservation_doctorINDEX'];
	}

	$sql2 = "SELECT * FROM member WHERE mobile = '".$_GET['mobileReservation']."'";
	$ret2 = mysqli_query($con, $sql2);
/*
	if($ret2){
		echo "회원정보 ", mysqli_num_rows($ret2), "건이 검색됨<br>";
	}else{
		echo "member 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
*/
	while($row=mysqli_fetch_array($ret2)){
		$name =$row['name'];																		//회원이름
	}

	$sql3 = "SELECT * FROM doctor WHERE doctorINDEX = '".$doctorINDEX."'";
	$ret3 = mysqli_query($con, $sql3);
/*
	if($ret3){
		echo "의사정보 ", mysqli_num_rows($ret3), "건이 검색됨<br>";
	}else{
		echo "doctor 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
*/
	while($row=mysqli_fetch_array($ret3)){
		$doctorName = $row['doctorName'];																			//의사이름
		$departmentINDEX = $row ['fk_doctor_departmentINDEX'];
	}

	$sql4 = "SELECT * FROM department WHERE departmentINDEX = '".$departmentINDEX."'";
	$ret4 = mysqli_query($con, $sql4);
/*
	if($ret4){
		echo "부서정보 ", mysqli_num_rows($ret4), "건이 검색됨<br>";
	}else{
		echo "department 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
	}
*/
	while($row=mysqli_fetch_array($ret4)){
		$departmentName = $row['departmentName'];																//부서이름
	}
	if(mysqli_num_rows($ret1)!=0){
		echo $name, " ", $departmentName, " ", $doctorName, " ", $content, " ", $reservationDatetime;
	}
	echo "<br> <a href='index.php'> [메인 화면] </a>";
?>

<html>
<head>
	<Title>예약조회</Title>
	<style>
		.footer{
			background: url('../img/footer.jpg');
		}
	</style>
</head>
<body>
	<footer>
    	<div class="footer container">
    	</div>
    	<div class="row bottom-footer text-center-mobile">
        	<div class="col-sm-8"></div>
 		</div>
	</footer>
</body>
</html>