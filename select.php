<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	
	$sql1 = "SELECT * FROM member";
	$sql2 = "SELECT * FROM doctor";
	$sql3 = "SELECT * FROM reservation";
	
	$ret1 = mysqli_query($con, $sql1);
	$ret2 = mysqli_query($con, $sql2);
	$ret3 = mysqli_query($con, $sql3);
	
	if($ret1){
		echo "회원정보 ", mysqli_num_rows($ret1), "건이 검색됨<br>";
	}else{
		echo "member 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
		exit();
	}
	
	if($ret2){
		echo "의사정보 ", mysqli_num_rows($ret2), "건이 검색됨<br><br>";
	}else{
		echo "doctor 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
		exit();
	}
	
	if($ret3){
		echo "예약정보 ", mysqli_num_rows($ret3), "건이 검색됨<br><br>";
	}else{
		echo "reservation 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
		exit();
	}
?>
<html>
<head>
	<Title>관리자 메인</Title>
</head>
<body>
	<h1>회원 검색 결과</h1>
	<table bgcolor="black" cellspacing="1" cellpadding="2">
		<tr bgcolor="lightcyan">
			<th>회원번호</th> <th>이름</th> <th>아이디</th> <th>비밀번호</th> <th>전화번호</th>
			<th>주소</th> <th>주민등록번호</th> <th>수정</th> <th>삭제</th>
		</tr>
<?php
	while($row=mysqli_fetch_array($ret1)) {
?>
		<tr bgcolor="white" align="center">
			<td><?php echo $row['memberINDEX']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['password']?></td>
			<td><?php echo $row['mobile']?></td>
			<td><?php echo $row['address']?></td>
			<td><?php echo $row['residentRegistrationNumber']?></td>
			<td><a href='update.php?memberINDEX=<?php echo $row['memberINDEX'] ?>'>수정</a></td>
			<td><a href='delete.php?memberINDEX=<?php echo $row['memberINDEX'] ?>'>삭제</a></td>
		</tr>
<?php
	}
?>
	</table>
	
	<h1>의사 검색 결과</h1>
	<table bgcolor="black" cellspacing="1" cellpadding="2">
		<tr bgcolor="lightcyan">
			<th>의사번호</th> <th>이름</th> <th>의사성별</th> <th>의사소개</th> <th>진료과번호</th>
		</tr>
<?php
	while($row=mysqli_fetch_array($ret2)) {
?>
		<tr bgcolor="white" align="center">
			<td><?php echo $row['doctorINDEX']?></td>
			<td><?php echo $row['doctorName']?></td>
			<td><?php echo $row['doctorGender']?></td>
			<td><?php echo $row['doctorIntroduction']?></td>
			<td><?php echo $row['fk_doctor_departmentINDEX']?></td>
		</tr>
<?php
	}
?>	
	<table>
	
	<h1>예약 조회 결과</h1>
	<table bgcolor="black" cellspacing="1" cellpadding="2">
		<tr bgcolor="lightcyan">
			<th>예약번호</th> <th>예약시간</th> <th>내용</th> <th>의사번호</th> <th>회원번호</th>
			<th>전화번호</th> </th> <th>삭제</th>
		</tr>
<?php
	while($row=mysqli_fetch_array($ret3)) {
?>
		<tr bgcolor="white" align="center">
			<td><?php echo $row['reservationINDEX']?></td>
			<td><?php echo $row['reservationDatetime']?></td>
			<td><?php echo $row['content']?></td>
			<td><?php echo $row['fk_reservation_doctorINDEX']?></td>
			<td><?php echo $row['fk_reservation_memberINDEX']?></td>
			<td><?php echo $row['fk_reservation_mobile']?></td>
			<td><a href='deleteReservation_result.php?reservationINDEX=<?php echo $row['reservationINDEX'] ?>'>삭제</a></td>
		</tr>
<?php
	}
	mysqli_close($con);
?>
	</table>
	<br> <a href='index.php'> [메인 화면] </a>
</body>
</html>