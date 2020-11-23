<?php 
session_start(); 
include "db_conn.php";
?> 

<!doctype html> <html lang="ko"> <head> <title>게션
쇼핑몰</title> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta
charset="utf-8"> <meta name="viewport"
content="width=1200,user-scalable=yes,target-densitydpi=device-dpi"> <meta
name="format-detection" content="telephone=no, address=no, email=no"> <meta
name="Keywords" content="게션,게션코리아, 게션몰,GUESSION,게션 온라인 쇼핑몰,게션온라인,게션가방,게션슈즈">
<meta name="Description" content="게션코리아 공식 온라인 스토어"> <META NAME="ROBOTS"
CONTENT="INDEX, FOLLOW"> <meta property="og:url"
content="http//localhost.gession/main.php" /> <meta property="og:type"
content="website" /> <meta property="og:title" content="게션코리아 공식 온라인 스토어" />
<meta property="og:description" content="게스코리아 공식 온라인 스토어" /> <meta
property="og:image"
content="img/logo.png" />

<link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<link rel="stylesheet" type="text/css" href="static/css/common.css">
<link rel="stylesheet" type="text/css" href="static/css/component.css">
<link rel="stylesheet" type="text/css" href="static/css/content.css">
<link
    rel="stylesheet"
    type="text/css"
    href="static/css/jquery.mCustomScrollbar-3.1.3.css">
<link rel="stylesheet" type="text/css" href="static/css/slick.css">
<link
    rel='shortcut icon'
    href="../static/img/common/favicon.ico"
    type="image/x-ico">

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
    .header_wrp .logo {
    float: left;
    width: 110px;
    padding-top: 35px;
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
                    <a href="board.php" >
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

    </header>
    <!-- //header -->
    <div id="content" style="padding-bottom: 447px;">
    <main class="main_wrp">

    <!-- guessPick -->
            <!-- guessPick -->
            <div class="guess_pick_area">
        <h2 class="main_title">GUESSION'S SHOES</h2>
        <div class="pick_list_wrp">
            <?php
                $query = "select * from shop_data where category='shoes' order by id desc";
                $result = mysqli_query($conn, $query);
                $num = mysqli_num_rows($result);
                for($cnt = 0; $cnt < ($num/5); $cnt++){
            ?>
            <dl class="pick_list">
                <?php
                    for($i = 0; $i < 5; $i++){                
                    $data = mysqli_fetch_array($result);
                ?>
                <dd>
                    <div class="thumbnail">
                        <a href="productdetail.php?productcode=<?= $data['id']?>">
                            <div class="image">
                                <img class="already" src="<?= $data['img']?>">
                                <img class="ready" src="<?= $data['img']?>">
                                <div class="size-box">
                                    <div class="color-chip">
                                        <span style="background-color:#fdfbdc"></span>
                                        <span style="background-color:#e9d38d"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbnail-info transition-normal">
                                <div class="title">
                                    <?= $data['name'] ?>
                                </div>
                                <div class="price clear">
                                    <div class="pull-left">
                                        <del><?= $data['price']?>
                                        </del>
                                        <strong><?= $data['price']?></strong>
                                        <!-- <span class="discount">0%</span> -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </dd>
                <?php
                        }
                        ?>
            </dl>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- //guessPick -->
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
                        <span>게션</span><span>서울특별시 중랑구 용마산로</span><span>대표이사: 김수현</span></p>
                    <p>
                        <span>사업자 등록번호: 2020-11-18</span><span>통신판매업 신고: 20201118</span></p>
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
                        <span>게션 대표번호: 010-2357-9607&nbsp; AM 10:00 ~ PM 5:00</span></p>
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