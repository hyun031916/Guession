<?php 
session_start(); 
include "db_conn.php";
$id = $_GET['idx'];
?>

<!doctype html>
<html lang="ko">
    <head>
        <title>게션 쇼핑몰</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=1200,user-scalable=yes,target-densitydpi=device-dpi">
        <meta name="format-detection" content="telephone=no, address=no, email=no">
        <meta
            name="Keywords"
            content="게션,게션코리아, 게션몰,GUESSION,게션 온라인 쇼핑몰,게션온라인,게션가방,게션슈즈">
        <meta name="Description" content="게션코리아 공식 온라인 스토어">
        <meta name="ROBOTS" content="INDEX, FOLLOW">
        <meta property="og:url" content="http//localhost.gession/main.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="게션코리아 공식 온라인 스토어"/>
        <meta property="og:description" content="게스코리아 공식 온라인 스토어"/>
        <meta property="og:image" content="img/logo.png"/>
        <!-- groobee -->
        <!-- groobee:E -->

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        
        <!-- jquery 연속방지 js추가 2016-09-25 -->
        <script src="static/js/jquery.blockUI.min.js"></script>
        <script type="text/javascript" src="static/js/dev.min.js"></script>

        <script charset="utf-8" src="//static.groobee.io/dist/lib/groobee.init.min.js"></script>
        <!-- 그루비:S -->
        <style>
        .table{
            width:60%;
            margin:0 auto;
        }
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
                            <a href="board.php">
                                <i class="icon-board">검색</i>
                            </a>
                        </li>
                    </ul>
                    <!-- //검색버튼,마이메뉴 -->
                </div>

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
                            title="TODAY
        HISTORY & MY LIKE ITEMS">
                            <span class="icon-curation-like">TODAY HISTORY & MY LIKE ITEMS</span>
                        </button>
                        <button type="button" class="btn btn_sch_open
        btn_util" title="검색">
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
                    <div class="curation_wrp">
                        <!-- 큐레이션 > 장바구니목록:S -->
                        <div class="sc_custom_wrp" data-content="curationCon">
                            <div class="tit_area">
                                <a href="/front/basket.php">
                                    <h2>쇼핑백</h2>
                                    <i class="move"></i>
                                </a>
                            </div>
                            <div class="js-scroll">
                                <div id="float_basket"></div>
                            </div>
                        </div>
                        <!-- 큐레이션 > 장바구니목록:E 큐레이션 > 최근본상품 & 좋아요목록 -->
                        <div class="sc_custom_wrp" data-content="curationCon">
                            <div class="" data-ui="TabMenu">
                                <ul class="tit_area tab">
                                    <li>
                                        <button type="button" data-content="menu" class="active" title="선택됨">
                                            <span>TODAY HISTORY</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" data-content="menu" class="">
                                            <span>MY LIKE ITEMS</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="js-scroll">
                                    큐레이션 > 최근본상품목록:S
                                    <div class="cu_history_wrp active" data-content="content">
                                        <div id="float_today"></div>
                                    </div>
                                    //큐레이션 > 최근본상품목록:E 큐레이션 > 좋아요목록:S
                                    <div class="" data-content="content">
                                        <div id="float_like"></div>
                                    </div>
                                    //큐레이션 > 좋아요목록
                                </div>
                            </div>
                        </div>
                        //큐레이션 > 최근본상품 & 좋아요목록
                        <button type="button" class="btn-closeis-medium">큐레이션 닫기</button>
                    </div>
                </div>
                <!-- //RNB(큐레이션) -->
            </header>

                <!-- guessPick -->
                <?php
                    $sql = "select * from shop_data";
                ?>
                <div id="content" style="padding-bottom: 447px;">
                    <main class="main_wrp">
                        <?php
                        include './db_conn.php';

                        $sql = "select * from board where id=$id";
                        $result = mysqli_query($conn, $sql);
                        $hit = mysqli_fetch_array($result);
                        $hit = $hit['hit']+1;

                        $sql1 = "update board set hit = '$hit' where id='$id'";
                        $result = mysqli_query($conn, $sql1);

                        $sql2 = "select * from board where id='$id'";
                        $result2 = mysqli_query($conn, $sql2);
                        $row = mysqli_fetch_row($result2);
                        ?>
                        <table class="table table-hover">
                            <tr>
                                <td scope='col' class='text-center'>제목</td>
                                <td scope='col' class='text-center'><?php echo $row[3];?></td>
                            </tr>
                            <tr>
                                <td scope='col' class='text-center'>작성자</td>
                                <td scope='col' class='text-center'><?php echo $row[1];?></td>
                            </tr>
                            <tr>
                                <td scope='col' class='text-center'>작성일</td>
                                <td scope='col' class='text-center'><?php echo $row[5];?></td>
                                <td scope='col' class='text-center'>조회수</td>
                                <td scope='col' class='text-center'><?php echo $row[6];?></td>
                            </tr>
                            <tr>
                                <td scope='col' class='text-center'>내용</td>
                                <td scope='col' class='text-center'><?php echo $row[4];?></td>
                            </tr>
                        </table>
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
                        <div id="btn_top">
                            <a href="javascript:;">
                                <i class="icon-gotop">맨위로</i>
                            </a>
                        </div>
                    </div>
                </footer>
                <!-- //footer -->
            </div>
        </body>
    </html>