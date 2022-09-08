<?php
	$con = mysqli_connect("localhost", "root", "1234", "hospitalDB") or die("MySQL 접속 실패!!");
	//$sql = "SELECT * FROM reservation WHERE fk_reservation_mobile = '".$_GET['mobileReservation']."'";
	//$ret = mysqli_query($con, $sql);

	/*
	if(mysqli_connect_error($con)){
		echo "MySQL 접속 실패!!", "<br>";
		echo "오류 원인 : ", mysqli_connect_error();
	}else{
		echo "MySQL 접속 완전히 성공!!<br>";
	}

	/*
	$sql = "SELECT * FROM member";
	$ret = mysqli_query($con, $sql);
	
	if($ret){
		echo mysqli_num_rows($ret), "건이 검색됨<br><br>";
	}else{
		echo "member 데이터 검색 실패!!", "<br>";
		echo "실패 원인 : ", mysqli_error($con);
		exit();
	}
	*/

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta name="naver-site-verification" content="00d76fc94e7183db9c74d3c95e1b35e26aac70f9"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>가상병원 홈페이지</title>
    <meta name="description"
          content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic"/>
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
    <meta name="author" content="Luka Cvetinovic for Codrops"/>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="import" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/cardio.css">
    <style>
        .map {
            width: 550px;
            height: 350px;
            padding-top: 50px;
        }

        .way {
            padding: 50px 0px 13px 0px;
        }

        .copyright {
            padding-left: 190px;
        }

        .introduction {
            margin: auto;
        }

        .mdl2 {
            width: 600px;
        }

        .well {
            padding-top: 20px;
        }

        .up {
            margin-bottom: 20px;
        }

        .pricings .pricing .box-main,
        .pricings .pricing .box-second {
            height: 330px;
        }

        .inquire {
            padding-bottom: 20px;
        }

    </style>
</head>

<body>

<!--<input type="text" id="datePicker" class="form-control" value=${currentdate} />-->
<div class="preloader">
    <img src="img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="#intro">홈</a></li>
                <li><a href="#team">의료진</a></li>
                <li><a href="#services">진료과</a></li>
                <li><a href="#pricing">예약조회</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue" id="mainLogin"><strong>회원가입</strong></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header id="intro">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="light white">경영정보시스템 8조</h3>
                        <h1 class="white typed">가상병원 홈페이지</h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row intro-tables">
            <div class="col-md-4">
                <div class="intro-table intro-table-first">
                    <h5 class="white heading"><strong>6월 의료진 휴무</strong></h5>
                    <div class="owl-carousel owl-schedule bottom">
                        <div class="item">
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">이의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/13</h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">이의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/20</h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">이의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/27</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">박의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/14</h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">박의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/21</h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">박의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/28</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">최의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/15</h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">최의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/22</h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">최의사</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white">6/29</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-table intro-table-hover">
                    <h5 class="white heading hide-hover"><strong>예약신청 및 예약조회</strong></h5>
                    <div class="bottom up">
                        <h4 class="white heading small-heading no-margin regular">아래에서 확인해보세요</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-table intro-table-third">
                    <h5 class="white heading"><strong>병원 소개</strong></h5>
                    <div class="owl-testimonials bottom">
                        <div class="item introduction">
                            <h4 class="white heading content"><strong>천안시 최대 규모의 병원!</strong></h4>
                            <h5 class="white heading light author"></h5>
                        </div>
                        <div class="item introduction">
                            <h4 class="white heading content"><strong>탄탄한 최첨단 인프라!</strong></h4>
                            <h5 class="white heading light author"></h5>
                        </div>
                        <div class="item introduction">
                            <h4 class="white heading content"><strong>대학 연계 최고의 연구진!</strong></h4>
                            <h5 class="white heading light author"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------------------------------------------- 의료진 ----------------------------------------------->
<section id="team" class="section gray-bg">
    <div class="container">
        <div class="row title text-center">
            <h2 class="margin-top"><strong>의료진</strong></h2>
            <h4 class="light muted">최고의 의료진을 소개합니다</h4>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover"
                         style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">정형외과</h3>
                            <h5 class="light light-white">병원장</h5>
                        </div>
                    </div>
                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>김의사</strong></h4>
                        <h5 class="muted regular">정형외과 전문의</h5>
                    </div>
                    <a onclick="rsvKim2()" class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form method="get" action="insertReservationKim.php" class="well" name="reservationKim" id="reservationKim2">
                    <input type="text" name="mobKim" placeholder="전화번호">
					<input type="text" name="conKim" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeKim">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">가정의학과</h3>
                            <h5 class="light light-white">전문의 10년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team3.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>이의사</strong></h4>
                        <h5 class="muted regular">가정의학과 전문의</h5>
                    </div>
                    <button onclick="rsvLee2()" class="btn btn-blue-fill">예약하기</button>
                </div>
                <form action="insertReservationLee.php" class="well" name="reservationLee" id="reservationLee2">
                    <input type="text" name="mobLee" placeholder="전화번호">
					<input type="text" name="conLee" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeLee">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">외과</h3>
                            <h5 class="light light-white">전문의 5년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>박의사</strong></h4>
                        <h5 class="muted regular">외과 전문의</h5>
                    </div>
                    <a onclick="rsvPark2()" class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationPark.php" class="well" name="reservationPark" id="reservationPark2">
                    <input type="text" name="mobPark" placeholder="전화번호">
					<input type="text" name="conPark" placeholder="진료내용">
                    <input type="datetime-local" name="datetimePark">
                    <input type="submit">
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">감염내과</h3>
                            <h5 class="light light-white">전문의 3년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team2.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>최의사</strong></h4>
                        <h5 class="muted regular">감염내과 전문의</h5>
                    </div>
                    <a onclick="rsvChoi2()" class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationChoi.php" class="well" name="reservationChoi" id="reservationChoi2">
                    <input type="text" name="mobChoi" placeholder="전화번호">
					<input type="text" name="conChoi" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeChoi">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4" id="Han2">
                <div class="team text-center">
                    <div class="cover"
                         style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">안과</h3>
                            <h5 class="light light-white">레지던트 3년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>한의사</strong></h4>
                        <h5 class="muted regular">안과 레지던트</h5>
                    </div>
                    <a onclick="rsvHan2()" class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationHan.php" class="well" name="reservationHan" id="reservationHan2">
                    <input type="text" name="mobHan" placeholder="전화번호">
					<input type="text" name="conHan" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeHan">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</section>
<!----------------------------------------------- 진료과 ----------------------------------------------->
<section id="services" class="section section-padded">
    <div class="container">
        <div class="row text-center title department">
            <h2><strong>진료과</strong></h2>
            <h4 class="light muted">무슨 일로 찾으셨나요?</h4>
        </div>
        <div class="well">
            <ul class="listcon_medical">
                <li>
                    <a href="#" onclick="openChoi(); return false;">감염내과</a>
                </li>
                <li>
                    <a href="#" onclick="openLee(); return false;">가정의학과</a>
                </li>
                <li>
                    <a href="#" onclick="openPark(); return false;">외과</a>
                </li>
                <li>
                    <a href="#" onclick="openHan(); return false;">안과</a>
                </li>
                <li>
                    <a href="#" onclick="openKim(); return false;">정형외과</a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-4" id="Kim">
                <div class="team text-center">
                    <div class="cover"
                         style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">정형외과</h3>
                            <h5 class="light light-white">병원장</h5>
                        </div>
                    </div>
                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>김의사</strong></h4>
                        <h5 class="muted regular">정형외과 전문의</h5>
                    </div>
                    <a onclick="rsvKim()" class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationKim.php" class="well" name="reservationKim" id="reservationKim">
                    <input type="text" name="mobKim" placeholder="전화번호">
					<input type="text" name="conKim" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeKim">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4" id="Lee">
                <div class="team text-center">
                    <div class="cover"
                         style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">가정의학과</h3>
                            <h5 class="light light-white">전문의 10년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team3.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>이의사</strong></h4>
                        <h5 class="muted regular">가정의학과 전문의</h5>
                    </div>
                    <button onclick="rsvLee()" class="btn btn-blue-fill ripple">예약하기</button>
                </div>
                <form action="insertReservationLee.php" class="well" name="reservationLee" id="reservationLee">
                    <input type="text" name="mobLee" placeholder="전화번호">
					<input type="text" name="conLee" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeLee">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4" id="Park">
                <div class="team text-center">
                    <div class="cover"
                         style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">외과</h3>
                            <h5 class="light light-white">전문의 5년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>박의사</strong></h4>
                        <h5 class="muted regular">외과 전문의</h5>
                    </div>
                    <a onclick="rsvPark()"
                       class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationPark.php" class="well" name="reservationPark" id="reservationPark">
                    <input type="text" name="mobPark" placeholder="전화번호">
					<input type="text" name="conPark" placeholder="진료내용">
                    <input type="datetime-local" name="datetimePark">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4" id="Choi">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">감염내과</h3>
                            <h5 class="light light-white">전문의 3년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team2.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>최의사</strong></h4>
                        <h5 class="muted regular">감염내과 전문의</h5>
                    </div>
                    <a onclick="rsvChoi()"
                       class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationChoi.php" class="well" name="reservationChoi" id="reservationChoi">
                    <input type="text" name="mobChoi" placeholder="전화번호">
					<input type="text" name="conChoi" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeChoi">
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-4" id="Han">
                <div class="team text-center">
                    <div class="cover"
                         style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">안과</h3>
                            <h5 class="light light-white">레지던트 3년차</h5>
                        </div>
                    </div>
                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
                    <div class="title">
                        <h4><strong>한의사</strong></h4>
                        <h5 class="muted regular">안과 레지던트</h5>
                    </div>
                    <a onclick="rsvHan()"
                       class="btn btn-blue-fill ripple">예약하기</a>
                </div>
                <form action="insertReservationHan.php" class="well" name="reservationHan" id="reservationHan">
                    <input type="text" name="mobHan" placeholder="전화번호">
					<input type="text" name="conHan" placeholder="진료내용">
                    <input type="datetime-local" name="datetimeHan">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</section>
<section id="pricing" class="section">
    <div class="container">
        <div class="row title text-center">
            <h2 class="margin-top white"><strong>예약조회</strong></h2>
            <h4 class="light white">예약을 확인해보세요</h4>
        </div>
        <div class="row no-margin">
            <div class="col-md-7 no-padding col-md-offset-5 pricings text-center reservation">
                <div class="pricing">
                    <div class="box-main active" data-img="img/pricing1.jpg">
                        <h4 class="white inquire" name="inquire">전화번호로 조회하기</h4>
						<form method="get" action="selectReservation_result.php">
                        	<input type="text" class="form-control form-white" name="mobileReservation" placeholder="전화번호">
                        	<button type="submit" class="btn btn-white-fill">조회하기</button>
						</form>
                        <i class="info-icon icon_question" name="icon"></i>
                    </div>
                    <div class="box-second active">
                        <ul class="white-list text-left">
                            <li>전화번호로 조회한 내역</li>
							<!-- 
							회원이름 부서이름   의사이름  진료시간    진료내용
							member department doctor reservation reservation
							-->
                        </ul>
                    </div>
                </div>
				<!--
                <div class="pricing lightGrey">
                    <div class="box-main" data-img="img/pricing2.jpg">
                        <h4 class="white">계정으로 조회하기</h4>
                        <input type="text" class="form-control form-white" placeholder="아이디">
                        <input type="text" class="form-control form-white" placeholder="비밀번호">
                        <a type="submit" method="get" class="btn btn-white-fill">조회하기</a>
                        <i class="info-icon icon_question"></i>
                    </div>
                    <div class="box-second">
                        <ul class="white-list text-left">
                            <li id="ID">계정으로 조회한 내역</li>
                        </ul>
                    </div>
                </div>
				-->
            </div>
        </div>
    </div>
</section>
<!----------------------------------------------- 회원가입 ----------------------------------------------->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup mdl2">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white"><strong>가상병원</strong></h3>
            <form method="post" action="signup_result.php" class="popup-form">
                <input type="text" class="form-control form-white" id="name" name="name" placeholder="이름">
                <input type="text" class="form-control form-white" id="id_insert" name="id" placeholder="아이디">
                <input type="password" class="form-control form-white" id="pw" name="password" placeholder="비밀번호">
                <input type="password" class="form-control form-white" id="pwCheck" name="pwCheck" placeholder="비밀번호 확인">
                <input type="text" class="form-control form-white" id="phonenumber" name="mobile" placeholder="전화번호">
                <input type="text" class="form-control form-white" id="address" name="address" placeholder="주소">
                <input type="text" class="form-control form-white" id="residentRegistrationNumber" name="residentRegistrationNumber" placeholder="주민등록번호">
                <div class="checkbox-holder text-left">
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="None" id="squaredOne" name="check"/>
                            <label for="squaredOne"><span><strong>약관동의</strong></span></label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">회원가입</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center-mobile">
                <h3 class="white way"><strong>찾아오시는 길</strong></h3>
                <h5 class="light regular light-white">도로명: 충남 천안시 동남구 망향로 201</h5>
                <h5 class="light regular light-white">지번: 충남 천안시 동남구 안서동 산16-5</h5>
            </div>
            <div class="col-sm-6 text-center-mobile">
                <img src="https://momshospital.com/data/9.jpg" class="map">
            </div>
        </div>
    </div>
    <div class="row bottom-footer text-center-mobile">
        <div class="col-sm-8">
            <p class="copyright">&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a>
                exclusively for <a
                        href="http://tympanus.net/codrops/">Codrops</a></p>
        </div>

    </div>
    </div>
</footer>
<!-- Holder for mobile navigation -->
<div class="mobile-nav">
    <ul>
    </ul>
    <a href="#" class="close-link"><i class="arrow_up"></i></a>
</div>
<!-- Scripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/typewriter.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        let status_kim = $('#Kim').css('display');
        let status_lee = $('#Lee').css('display');
        let status_park = $('#Park').css('display');
        let status_choi = $('#Choi').css('display');
        let status_han = $('#Han').css('display');

        if (status_kim == 'block') {
            $('#Kim').hide();
        }
        if (status_lee == 'block') {
            $('#Lee').hide();
        }
        if (status_park == 'block') {
            $('#Park').hide();
        }
        if (status_choi == 'block') {
            $('#Choi').hide();
        }
        if (status_han == 'block') {
            $('#Han').hide();
        }

        let status_rsvKim = $('#reservationKim').css('display');
        let status_rsvLee = $('#reservationLee').css('display');
        let status_rsvPark = $('#reservationPark').css('display');
        let status_rsvChoi = $('#reservationChoi').css('display');
        let status_rsvHan = $('#reservationHan').css('display');

        if (status_rsvKim == 'block') {
            $('#reservationKim').hide();
        }
        if (status_rsvLee == 'block') {
            $('#reservationLee').hide();
        }
        if (status_rsvPark == 'block') {
            $('#reservationPark').hide();
        }
        if (status_rsvChoi == 'block') {
            $('#reservationChoi').hide();
        }
        if (status_rsvHan == 'block') {
            $('#reservationHan').hide();
        }

        let status_rsvKim2 = $('#reservationKim2').css('display');
        let status_rsvLee2 = $('#reservationLee2').css('display');
        let status_rsvPark2 = $('#reservationPark2').css('display');
        let status_rsvChoi2 = $('#reservationChoi2').css('display');
        let status_rsvHan2 = $('#reservationHan2').css('display');

        if (status_rsvKim2 == 'block') {
            $('#reservationKim2').hide();
        }
        if (status_rsvLee2 == 'block') {
            $('#reservationLee2').hide();
        }
        if (status_rsvPark2 == 'block') {
            $('#reservationPark2').hide();
        }
        if (status_rsvChoi2 == 'block') {
            $('#reservationChoi2').hide();
        }
        if (status_rsvHan2 == 'block') {
            $('#reservationHan2').hide();
        }


    });


    //진료과 검색
    function openKim() {
        $('#Kim').show();
        $('#Lee').hide();
        $('#Park').hide();
        $('#Choi').hide();
        $('#Han').hide();
    }

    function openLee() {
        $('#Lee').show();
        $('#Kim').hide();
        $('#Park').hide();
        $('#Choi').hide();
        $('#Han').hide();
    }

    function openPark() {
        $('#Park').show();
        $('#Lee').hide();
        $('#Kim').hide();
        $('#Choi').hide();
        $('#Han').hide();
    }

    function openChoi() {
        $('#Choi').show();
        $('#Park').hide();
        $('#Lee').hide();
        $('#Kim').hide();
        $('#Han').hide();
    }

    function openHan() {
        $('#Han').show();
        $('#Choi').hide();
        $('#Park').hide();
        $('#Lee').hide();
        $('#Kim').hide();
    }

    //달력 띄우기
    function rsvKim() {
        $('#reservationKim').show();
    }

    function rsvLee() {
        $('#reservationLee').show();
    }

    function rsvPark() {
        $('#reservationPark').show();
    }

    function rsvChoi() {
        $('#reservationChoi').show();
    }

    function rsvHan() {
        $('#reservationHan').show();
    }

    //의료진 버튼
    function rsvKim2() {
        $('#reservationKim2').show();
    }
    function rsvLee2() {
        $('#reservationLee2').show();
    }

    function rsvPark2() {
        $('#reservationPark2').show();
    }

    function rsvChoi2() {
        $('#reservationChoi2').show();
    }

    function rsvHan2() {
        $('#reservationHan2').show();
    }

    function successSignup() {
        let pw_val = $('#pw').val();
        let pwCheck_val = $('#pwCheck').val();
        if(pw_val == ''){
            alert('비밀번호를 입력해주세요.');
        }else{
            if(pwCheck_val == pw_val){
                alert('회원가입이 완료되었습니다.');
            }else{
                alert('비밀번호를 확인해주세요.');
            }
        }
    }
</script>
</body>

</html>
