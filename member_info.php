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
content="img/logo.png" /> <!--
groobee -->
<!-- groobee:E -->

<!-- 20170523 수정 -->
<!-- <meta name="robots" content="index">-->
<!-- <meta name="googlebot" content="index">-->

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

<!-- Global site tag (gtag.js) - Google Analytics <script async
src="https://www.googletagmanager.com/gtag/js?id=UA-71674745-1"></script>
<script> window.dataLayer = window.dataLayer || []; function
gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config',
'UA-71674745-1'); </script> -->

<!-- 픽셀아이디:S -->
<!-- Facebook Pixel Code -->
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
<!-- 픽셀아이디:E -->

<!-- 모비온공통:S -->
<!-- Enliple Common Tracker v3.6 [공용] start -->
<script type="text/javascript">
    <!--
    function mobRf() {
        var rf = new EN();
        rf.setData("userid", "guesskorea");
        rf.setSSL(true);
        rf.sendRf();
    }

    //-->
</script>
<script
    src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js"
    defer="defer"
    onload="mobRf()"></script>
<!-- Enliple Common Tracker v3.6 [공용] end -->
<!-- 모비온공통:E -->

<!-- 카카오톡방문 -->
<script
    type="text/javascript"
    charset="UTF-8"
    src="//t1.daumcdn.net/adfit/static/kp.js"></script>
<script type="text/javascript">
    kakaoPixel('6813063462834096578').pageView();
</script>

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

<!-- 페이스북 상세페이지 조회 이벤트 -->
<!-- Facebook Pixel Code -->

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
<style type="text/css">
    .header_wrp .logo {
    float: left;
    width: 110px;
    padding-top: 35px;
}
</style>
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
        <button type="button" class="btn-close
        is-medium">큐레이션 닫기</button>
    </div>
</div>
        <!-- //RNB(큐레이션) -->

        <!-- 검색박스 -->
        <div class="sch_wrp">
            <div class="sch_box">
                <form
                    id="FrmTopSearch"
                    name="FrmTopSearch"
                    onsubmit="return false"
                    action="/front/search.php">
                    <div class="sch_frm"><input
                        type="text"
                        name="sw"
                        id="sw"
                        placeholder="검색어를 입력하세요"
                        title="검색어를 입력하세요"
                        value="수지"
                        data-value="수지"
                        class="validate[required]"
                        data-errormessage-value-missing="검색어를 입력하세요">
                        <button type="submit">
                            <span class="icon-sch">검색</span></button>
                    </div>
                    <div class="sch_tabs" data-ui="TabMenu">
                        <ul class="tabs-menu dir-center">
                            <li>
                                <button type="button" data-content="menu">
                                    <span>최근검색어</span></button>
                            </li>
                            <li>
                                <button type="button" data-content="menu" class="active" title="선택됨">
                                    <span>인기검색어</span></button>
                            </li>
                        </ul>
                        <!-- 최근검색어 -->
                        <div class="clear" data-content="content">
                            <div class="sch_recent">
                                <ul class="list">
                                    <li class="empty ">최근 검색어내역이 없습니다.
                                    </li>
                                </ul>
                                <div class="del_all">
                                    <button type="button" onclick="TopSearch.remove()">검색어 전체 삭제</button>
                                </div>
                            </div>
                            <div class="sch_banner">
                                <a
                                    href="https://guesskorea.com/front/productdetail.php?productcode=001008002000002210"
                                    target="_self">
                                    <img
                                        src="/data/shopimages/mainbanner/20bd631e9d7c1bf26c4ecca1dc194dcd0.jpg"
                                        alt="프로모션 배너">
                                </a>
                            </div>
                        </div>
                        <!-- //최근검색어 -->
                        <!-- 인기검색어 -->
                        <div class="active clear" data-content="content">
                            <div class="sch_popular">
                                <ul class="list">
                                    <li>
                                        <span class="num point-color">1</span>
                                        <a href="javascript:;" onclick="TopSearch.search('수지');">수지</a>
                                    </li>
                            </div>
                            <div class="sch_banner">
                                <a
                                    href="https://guesskorea.com/front/productdetail.php?productcode=001008002000002210"
                                    target="_self">
                                    <img
                                        src="/data/shopimages/mainbanner/20bd631e9d7c1bf26c4ecca1dc194dcd0.jpg"
                                        alt="프로모션 배너">
                                </a>
                            </div>
                        </div>
                        <!-- //인기검색어 -->
                    </div>
                </div>
            </form>
            <button class="btn-close is-large btn_sch_cls" type="button">닫기</button>
        </div>
        <script type="text/javascript" src="/static/js/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="/static/js/jquery.validationEngine-kr.js"></script>
        <script type="text/javascript">
            var TopSearch = {
                init: function () {
                    var me = this;
                    var option = $.extend({}, validation_option, {
                        validateNonVisibleFields: false,
                        onValidationComplete: function (form, status) {
                            if (status) 
                                me.search();
                            }
                        });
                    $("#FrmTopSearch").validationEngine('attach', option);
                    $('#sw').on('focus', function () {
                        this.value = '';
                    });
                },
                search: function (word) {
                    if (word) 
                        $('#sw').val(word);
                    else {
                        word = $('#sw').val();
                    }
                    $.ajax({
                        url: '/proc/widget.proc.php',
                        data: {
                            mode: 'search',
                            act: 'word_add',
                            word: word
                        },
                        type: 'POST',
                        success: function () {
                            document
                                .FrmTopSearch
                                .submit();
                        }
                    })

                },
                remove: function (e, word) {
                    if (word) 
                        $(e)
                            .closest('li')
                            .remove();
                    else 
                        $('.sch_recent li:not(.empty)').remove();
                    TopSearch.reset();

                    $.ajax({
                        url: '/proc/widget.proc.php',
                        data: {
                            mode: 'search',
                            act: 'word_remove',
                            word: word
                        },
                        type: 'POST'
                    })
                },
                reset: function () {
                    var li = $('.sch_recent li:not(.empty)');
                    if (li.length < 1) 
                        $('.sch_recent li.empty').removeClass('hide');
                    }
                
            }

            $(function () {
                TopSearch.init();
            })
        </script>
        <!-- //검색박스 -->
    </header>
    <!-- //header -->
    <!-- 방문자 카운트 -->
    <span class="hide"><img src="../front/counter.php?ref=" width="0" height="0"></span>
    <!-- 방문자 카운트 끝 -->
    <script>
        $(document).ready(function () {
            $(".chcolor").on({
                mouseover: function () {
                    color = $(this).css('color');

                    if ($(this).attr("chcolor") != "") 
                        $(this).css("color", $(this).attr("chcolor"));
                    }
                ,
                mouseout: function () {
                    $(this).css("color", color);
                }
            });
        });
    </script>
    <script>
        $('body').addClass('in_main');
    </script>
    <!-- //header -->
        <div id="content" style="padding-bottom: 447px;">
        <main class="main_wrp">

        <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="text-center">번호</th>
          <th scope="col" class="text-center">ID</th>
          <th scope="col" class="text-center">비밀번호</th>
          <th scope="col" class="text-center">이메일</th>
          <th scope="col" class="text-center">전화번호</th>
          <th scope="col" class="text-center">도시</th>
          <th scope="col" class="text-center">가입날짜</th>
          <th scope="col" class="text-center">기타</th>
        </tr>
      </thead>
      <?php
      $sql = "select * from register order by id desc";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      for($i=1; $i<=$count; $i++){
        $row = mysqli_fetch_row($result);
      ?>
      <tr>
        <td scope='col' class='text-center'><?php echo $row[0]; ?></td>
        <td scope='col' class='text-center'><?php echo $row[1]; ?></td>
        <td scope='col' class='text-center'><?php echo $row[2]; ?></td>
        <td scope='col' class='text-center'><?php echo $row[3]; ?></td>
        <td scope='col' class='text-center'><?php echo $row[4]; ?></td>
        <td scope='col' class='text-center'><?php echo $row[5]; ?></td>
        <td scope='col' class='text-center'><?php echo $row[6]; ?></td>
        <td scope='col' class='text-center'>
          <button type='button' onclick="location.href='update_member_form.php?idx=<?php echo $row[0]; ?>'">수정</button> | 
          <button type='button' onclick="location.href='delete_member_form.php?idx=<?php echo $row[0]; ?>'">삭제</button>
        </td>
      </tr>
      <?php
      }
      ?>
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