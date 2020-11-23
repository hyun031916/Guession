<?php 
    session_start(); 
    include './db_conn.php';
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

        <meta property="og:url" content="https://www.guesskorea.com/main/main.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="게스코리아 공식 온라인 스토어"/>
        <meta property="og:description" content="게스코리아 공식 온라인 스토어"/>
        <meta
            property="og:image"
            content="https://www.guesskorea.com/static/img/common/h1_logo.png"/>

        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer'
                        ? '&l=' + l
                        : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f
                    .parentNode
                    .insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5HN6QJ');
        </script>
        <!-- End Google Tag Manager -->

        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) 
                    return;
                n = f.fbq = function () {
                    n.callMethod
                        ? n
                            .callMethod
                            .apply(n, arguments)
                        : n
                            .queue
                            .push(arguments)
                };
                if (!f._fbq) 
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s
                    .parentNode
                    .insertBefore(t, s)
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '638329400239809');
            fbq('init', '268414767467045');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img
                height="1"
                width="1"
                src="https://www.facebook.com/tr?id=638329400239809&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

        <script
            src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js"
            defer="defer"
            onload="mobRf()"></script>

        <!-- Global site tag (gtag.js) - Google Ads: 682328245 -->
        <script
            async="async"
            src="https://www.googletagmanager.com/gtag/js?id=AW-682328245"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-682328245');
        </script>

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

        <!-- 공통 스크립트, 다음 주소팝업, 분석스크립트 Start (2016.07.28 - 김재수) -->
        <script src="../lib/lib.js.php" type="text/javascript"></script>
        <!-- 공통 스크립트, 다음 주소팝업, 분석스크립트 End (2016.07.28 - 김재수) -->

        <!-- 그루비:S -->
        <script type="text/javascript">
            (function (a, i, u, e, o) {
                a[u] = a[u] || function () {
                    (a[u].q = a[u].q || []).push(arguments)
                };
            })(window, document, "groobee");
            groobee("serviceKey", "803b67adbe76447e8ec7b197c04fb68c");
            groobee("siteType", "custom");
        </script>
        <script charset="utf-8" src="//static.groobee.io/dist/lib/groobee.init.min.js"></script>
        <!-- 그루비:S -->

        <style>
            .table {
                width: 60%;
                margin: 0 auto;
            }
            .header_wrp .logo {
                float: left;
                width: 110px;
                padding-top: 35px;
            }
            .img{
                width: 100px;
                height:150px;
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
                        </ul>
                    </nav>
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
                                    <li>
                                        <a href="login_form.php">로그인</a>
                                    </li>
                                    <li>
                                        <a href="join_form.php">회원가입</a>
                                    </li>
                                    <li>
                                        <a href="mypage.php">마이페이지</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- //검색버튼,마이메뉴 -->
                </div>
            </header>
            <div id="content" style="padding-bottom: 447px;">
                <main class="main_wrp">
                    <?php
                        $query="select * from shop_data order by no desc";
                        $result = mysqli_query($conn, $query);

                        //한화면에 보여질 게시글 수
                        $page_num = 10;
                        
                        //맨 처음 접속할 경우 처음부터 출력하기 위한 값
                        if(!$start) $start = 0;

                        //현재 테이블의 전체 개수
                        $query = "select * from shop_data";
                        $result = mysqli_query($conn, $query);
                        $tmp = mysqli_fetch_array($result);
                        $cnt = mysqli_num_rows($result);
                        $total = $tmp[$cnt];

                    ?>

                    <table class="table table-hover">
                        <tr>
                            <td>
                                <a href="shop_add.php?">[상품추가]</a>
                                <a href="order_list.php">[주문내역]</a>
                            </td>
                        </tr>
                        <tr>
                            <th>번호</th>
                            <th>상품명</th>
                            <th>상품이미지</th>
                            <th>가격</th>
                            <th>카테고리</th>
                            <th>기타</th>
                        </tr>
                        <?php
                            $query = "select * from shop_data order by id desc limit $start, $page_num";

                            $result = mysqli_query($conn, $query);
                            while($data = mysqli_fetch_array($result)){ 
                        ?>
                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['name'] ?></td>
                            <td>
                                <img src="<?= $data['img'];?>" width="80px" height="100px">
                                <!-- <img src="./shop_img/shirts1.jpeg" width="70%" height="70%"> -->
                            </td>
                            <td><?= number_format($data['price']) ?></td>
                            <td><?= $data['category'] ?></td>
                            <td>
                                <a href="shop_edit.php?no<?=$data['id']?>" style="text-decoration:none;">상품수정</a><br>
                                <a href="shop_list_del_form.php?no=<?=$data['id']?>" style="text-decoration:none;">상품삭제</a>
                            </td>
                            
                        <?php 
                            } 
                        ?>
                        </tr>
                    </table><br>
                    <!-- <?php
                    $pages = $total/$page_num;
                    for($i=0; $i<$pages; $i++){
                        $assa = $page_num * $i;
                        echo "<a href=$PHP_SELF?start=$assa>⬛</a>";
                    }
                    ?> -->

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
            </div>
        </body>
        </html>