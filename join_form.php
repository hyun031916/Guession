<!doctype html>
<html lang="ko">

<head>
    <title>게션 쇼핑몰</title>
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200,user-scalable=yes,target-densitydpi=device-dpi">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="Keywords" content="게션,게션코리아, 게션몰,GUESSION,게션 온라인 쇼핑몰,게션온라인,게션가방,게션슈즈">
    <meta name="Description" content="게션코리아 공식 온라인 스토어">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta property="og:image"         content="img/logo.png" />



	<script src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js" defer="defer" onload="mobRf()"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="static/css/common.css">
    <link rel="stylesheet" type="text/css" href="static/css/component.css">
    <link rel="stylesheet" type="text/css" href="static/css/content.css">
    <link rel="stylesheet" type="text/css" href="static/css/jquery.mCustomScrollbar-3.1.3.css">
    <link rel="stylesheet" type="text/css" href="static/css/slick.css">
    <link rel='shortcut icon' href="../static/img/common/favicon.ico" type="image/x-ico" >

    <script src="static/js/jquery-1.12.0.min.js"></script>
    <script src="static/js/placeholders.min.js"></script>
    <script src="static/js/jquery.cooke.js"></script>
    <script src="static/js/slick.min.js"></script>
    <script src="static/js/jquery.bxslider.min.js"></script>
    <script src="static/js/skrollr.min.js"></script>
    <script src="static/js/jquery.mCustomScrollbar.concat-3.1.3.min.js"></script>
    <script src="static/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="static/js/ui.js"></script>
    <script type="text/javascript" src="static/js/guessiion.common.js?1605626230"></script>
    <script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>

    <!-- jquery 연속방지 js추가 2016-09-25 -->
    <script src="static/js/jquery.blockUI.min.js"></script>
    <script type="text/javascript" src="static/js/dev.min.js"></script>


    <style type="text/css">
      </style><!--BootStrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
       <!-- 합쳐지고 최소화된 최신 CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

       <!-- 부가적인 테마 -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

       <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        </script>
        <style>
        .header_wrp .logo {
            float: left;
            width: 110px;
            padding-top: 35px;
        }
        </style>
        <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .join-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
            }
        
            .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            height: 600px;
        }
            .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            }
            .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #FFC800;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            }
            .form button:hover,.form button:active,.form button:focus {
            background: #43A047;
            }
            .form .message {
            color: #b3b3b3;
            font-size: 12px;
            }
            .form .message a {
            color: #4CAF50;
            text-decoration: none;
            }
            .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
            }
            .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
            }
            .container .info {
            margin: 50px auto;
            text-align: center;
            }
            .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
            }
            .container .info span {
            color: #4d4d4d;
            font-size: 12px;
            }
            .container .info span a {
            color: #000000;
            text-decoration: none;
            }
            .container .info span .fa {
            color: #EF3B3A;
            }
        </style>


</head>
<body>
        <?php
		if(isset($_SESSION['userid']) && isset($_SESSION['userpwd'])){
			$userid = $_SESSION['userid'];
			$userpwd = $_SESSION['userpwd'];
		}
	?>
        <!-- wrap -->
        <div id="wrap">
            <!-- header -->
            <header id="header">
                <div class="header_wrp clear">
                    <h1 class="logo">
                        <a href="main.php"><img src="img/logo.png" alt="GUESS"></a>
                    </h1>
                    <!-- GNB -->
                    <nav id="gnb">
                        <ul class="gnb_menu">
                            <li>
                                <a href="outer_list.php">OUTER</a>
                                <div class="sub_container">
                                    <div class="sub_menu_wrp">
                                        <ul class="sub_menu">
                                            <li>
                                                <a href="/front/productlist.php?code=001001006000">COATS/JACKETS</a>
                                            </li>
                                            <li>
                                                <a href="/front/productlist.php?code=001001007000">T-SHIRTS/SHIRTS/SWEATER</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="top_list.php">TOP</a>
                                <div class="sub_container">
                                    <div class="sub_menu_wrp">
                                        <ul class="sub_menu">
                                            <li>
                                                <a href="/front/productlist.php?code=001001006000">COATS/JACKETS</a>
                                            </li>
                                            <li>
                                                <a href="/front/productlist.php?code=001001007000">T-SHIRTS/SHIRTS/SWEATER</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="pants_list.php">PANTS</a>
                                <div class="sub_container">
                                    <div class="sub_menu_wrp">
                                        <ul class="sub_menu">
                                            <li>
                                                <a href="/front/productlist.php?code=001001006000">COATS/JACKETS</a>
                                            </li>
                                            <li>
                                                <a href="/front/productlist.php?code=001001007000">T-SHIRTS/SHIRTS/SWEATER</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="bags_list.php">BAGS</a>
                                <div class="sub_container">
                                    <div class="sub_menu_wrp">
                                        <ul class="sub_menu">
                                            <li>
                                                <a href="/front/productlist.php?code=001001006000">COATS/JACKETS</a>
                                            </li>
                                            <li>
                                                <a href="/front/productlist.php?code=001001007000">T-SHIRTS/SHIRTS/SWEATER</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="shoes_list.php">SHOES</a>
                                <div class="sub_container">
                                    <div class="sub_menu_wrp">
                                        <ul class="sub_menu">
                                            <li>
                                                <a href="/front/productlist.php?code=001001006000">COATS/JACKETS</a>
                                            </li>
                                            <li>
                                                <a href="/front/productlist.php?code=001001007000">T-SHIRTS/SHIRTS/SWEATER</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <?php if($userid=="admin"){
					?>
                            <li class="with_bar">
                                <a
                                    href="member_info.php"
                                    class="chcolor"
                                    chcolor="#FF0000"
                                    style="color:#FF0000">Member Info</a>
                            </li>
                            <li class="with_bar">
                                <a
                                    href="shop_list.php?"
                                    class="chcolor"
                                    chcolor="#FF0000"
                                    style="color:#FF0000">Item List</a>
                            </li>
                            <?php
					}
					?>
                        </ul>
                    </nav>
                    <!-- //GNB -->
                    <!-- 검색버튼,마이메뉴 -->
                    <ul class="util_menu">
                        <li>
                            <a href="javascript:;" class="btn_sch_open">
                                <i class="icon-sch">검색</i>
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:;">
                                <i class="icon-mymenu">마이메뉴</i>
                            </a>
                            <div class="sub_container" style="display: block;">
                                <ul class="my_menu" style="display: block;">
                                    <?php
							if($userid && $userpwd){
						?>
                                    <li>
                                        <a href="logout.php">로그아웃</a>
                                    </li>
                                <?php
							}else{
						?>
                                    <li>
                                        <a href="login_form.php">로그인</a>
                                    </li>
                                    <li>
                                        <a href="join_form.php">회원가입</a>
                                    </li>
                                    <?php
							}
						?>
                                    <li>
                                        <a href="mypage.php">마이페이지</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="board.php">
                                <i class="icon-board">검색</i>
                            </a>
                        </li>
                    </ul>
                    <!-- //검색버튼,마이메뉴 -->
                </div>
                <?php
			if($userid && $userpwd){
			echo $userid."님 반갑습니다.";
		}
		?>

                <!-- RNB(큐레이션) -->
                <div id="curation" data-ui="curation">
                    <div class="menu">
                        <button type="button" class="btn" data-content="curationMenu" title="쇼핑백">
                            <span class="v-hidden">쇼핑백</span>
                            <span class="icon-curation-cart">0</span>
                        </button>
                        <button
                            type="button"
                            class="btn"
                            data-content="curationMenu"
                            title="TODAY HISTORY & MY LIKE ITEMS">
                            <span class="icon-curation-like">TODAY HISTORY & MY LIKE ITEMS</span>
                        </button>
                        <button type="button" class="btn btn_sch_open btn_util" title="검색">
                            <span class="icon-sch wh">검색</span>
                        </button>
                        <button
                            type="button"
                            class="btn btn_util"
                            onclick="location.href='../front/login.php?chUrl=%2Fmain%2Fmain.php'"
                            title="마이메뉴">
                            <span class="icon-mymenu wh">마이메뉴</span>
                        </button>
                    </div>
                </header>
                <!-- //header -->
                <div id="content" style="padding-bottom: 447px;">
                    <main class="main_wrp">
                    <div class="login-page">
                        <div class="form">
                            <form class="join-form" method="POST" action="join.php">
                            <div class="form-group">
                                <label for="inputName">아이디</label>
                                <input type="text" class="form-control" name="userId" id="inputName" placeholder="이름을 입력해 주세요">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">비밀번호</label>
                                <input type="password" class="form-control" name="userPwd" id="inputPassword" placeholder="비밀번호를 입력해주세요">
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordCheck">비밀번호 확인</label>
                                <input type="password" class="form-control" name="userPwd2" id="inputPasswordCheck" placeholder="비밀번호 확인을 위해 다시한번 입력 해 주세요">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">이메일 주소</label>
                                <input type="email" class="form-control" name="email" id="InputEmail" placeholder="이메일 주소를 입력해주세요">
                            </div>
                            <div class="form-group">
                                <label for="inputMobile">전화 번호</label>
                                <input type="tel" class="form-control" name="tel" id="inputMobile" placeholder="휴대폰번호를 입력해 주세요">
                            </div>
                            <div class="form-group">
                                <label for="city">지역</label>
                                <select name="city">
                                    <option value="서울시">서울시</option>
                                    <option value="경기도">경기도</option>
                                    <option value="부산광역시">부산광역시</option>
                                    <option value="대구광역시">대구광역시</option>
                                    <option value="인천광역시">인천광역시</option>
                                    <option value="광주광역시">광주광역시</option>
                                    <option value="대전광역시">대전광역시</option>
                                    <option value="울산광역시">울산광역시</option>
                                    <option value="세종광역시">세종광역시</option>
                                    <option value="강원도">강원도</option>
                                    <option value="경상도">경상도</option>
                                    <option value="전라도">전라도</option>
                                    <option value="충청도">충청도</option>
                                    <option value="제주도">제주도</option>
                                </select>
                            </div>
                                <label for="description">약관 동의
                                    <input id="agree" type="checkbox" autocomplete="off" checked>
                                </label>
                                <p class="message">약관 동의<a href="#">이용약관</a>에 동의합니다.</p> 
                            <button type="submit">Join</button>
                            </form>
                        </div>
                    </div>
                </main>
     </div>
<!-- footer -->
<footer id="footer">
<div class="inner_align">
    <div class="ft_info">
        <ul class="ft_menu">
            <li>
                <a href="#">회사소개</a>
            </li>
            <li>
                <a href="#">매장안내</a>
            </li>
            <li>
                <a href="#">개인정보처리방침</a>
            </li>
            <li>
                <a href="#">이용약관</a>
            </li>
            <li>
                <a href="#">고객센터</a>
            </li>
        </ul>
        <div class="link">
            <a href="https://www.facebook.com/hyun031916" target="_blank">
                <i class="icon-sns-facebook-grey" style="opacity:1">페이스북</i>
            </a>
            <a href="https://blog.naver.com/huribian" target="_blank">
                <i class="icon-sns-blog-grey">블로그</i>
            </a>
        </div>
        <div class='company_info'>
            <p>
                <span>게션</span>
                <span>서울특별시 중랑구 용마산로</span>
                <span>대표이사: 김수현</span>
            </p>
            <p>
                <span>사업자 등록번호: 2020-11-18</span>
                <span>통신판매업 신고: 20201118</span>
            </p>
            <p>
                <a
                    href='javascript:;'
                    onclick='javascript:window.open("http://www.ftc.go.kr/bizCommPop.do?wrkr_no=2118783034&apv_perm_no=", "communicationViewPopup", "width=750, height=600");'>사업자정보확인</a>
                <a
                    href='javascript:;'
                    onclick='javascript:window.open("http://admin.kcp.co.kr/Modules/escrow/kcp_pop.jsp?site_cd=A7X3A", "KCPHelp","width=500,height=450,scrollbars=auto,resizable=yes");'>에스크로 서비스 가입 확인</a>
            </p>
        </div>
        <div class='company_info'>
            <p>
                <span class='text-tone-c'>온라인 쇼핑몰 관련문의:
                    <strong>0319-0502</strong>
                </span>&nbsp;(주문,배송,교환,환불문의)&nbsp; AM 10:00 ~ PM 5:00 (토,일, 공휴일 휴무)</p>
            <p>
                <span>게션 대표번호: 010-2357-9607&nbsp; AM 10:00 ~ PM 5:00</span>
            </p>
        </div>
    </div>
</div>
<div id="btn_top">
    <a href="javascript:;">
        <i class="icon-gotop">맨위로</i>
    </a>
</div>
</footer>
<!-- //footer -->
<script type="text/javascript" src="/static/js/guess.pc.js"></script>
</div>
</body>
</html>