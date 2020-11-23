<?php
    $_productcode = $_GET['productcode'];
    echo $_productcode;
    session_start(); 
    include "db_conn.php";
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
        <meta property="og:image" content="img/logo.png"/>

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
            </header>
            <!-- //header -->
            <?php
            $sql = "select * from shop_data where id='$_productcode'";
            $result = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($result)){
            ?>
            <div id="content" style="padding-bottom: 447px;">
                <div class="detail-breadcrumb">
                    <a href="/">HOME</a>
                    <a href="/gession/<?= $data['category']?>_list.php"><?= $data['category'];?></a>
                    <a href="#">PRODUCT</a>
                </div>
                <div class="inner_align">
                    <div class="goods-info-area clear">
                        <div class="thumb-box">
                            <div class="big-thumb">
                                <ul class="thumb-list-big">
                                    <li>
                                        <img src="<?= $data['img']?>" alt="상품 대표 썸네일">
                                    </li>
                                </ul>
                            </div>
                            <ul class="thumb-list-small clear">
                                <li>
                                    <a data-slide-index="0">
                                        <img src="<?= $data['img']?>" alt="작은 썸네일">
                                    </a>
                                </li>                                
                                <li>
                                    <a data-slide-index="1">
                                        <img src="<?= $data['img']?>" alt="작은 썸네일">
                                    </a>
                                </li>                                
                                <li>
                                    <a data-slide-index="2">
                                        <img src="<?= $data['img']?>" alt="작은 썸네일">
                                    </a>
                                </li>                                
                                <li>
                                    <a data-slide-index="3">
                                        <img src="<?= $data['img']?>" alt="작은 썸네일">
                                    </a>
                                </li>                                
                                <li>
                                    <a data-slide-index="4">
                                        <img src="<?= $data['img']?>" alt="작은 썸네일">
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- //.thumb-box -->
                        <div class="specification">
                            <section class="box-intro">
                                <h2 class="v-hidden">상품명,간략소개</h2>
                                <div class="clear">
                                    <p class="pull-left goods-code">NK5K3006</p>
                                    <div class="pull-right">
                                        <div class="btn-like-count " data-hottcode="001001011000008895" data-section="product" id="wishBtn">
                                            <i class="icon-like small">좋아요</i>
                                            <span>6</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="goods-nm"><?= $data['name']?></p>
                                <div class="price-area clear">
                                    <div class="discount">50
                                        <span>%</span>
                                    </div>
                                    <div class="price">
                                        <del>300,000원</del>
                                    <strong><?= $data['price']?></strong>원</div>
                                    <div class="card-benefit">
                                        <a href="#popup-card-benefit" class="btn-small is-line">카드혜택 보기</a>
                                    </div>
                                </div>
                            </section>
                            <!-- //.box-intro -->
                            <section class="box-summary ">
                                <h2 class="v-hidden">상품의 금액, 쿠폰, 배송비 정보</h2>
                                <ul class="goods-summary">
                                    <li>
                                        <label style="top:10px">배송</label>
                                        <div class="inner clear">
                                            <div class="pull-left">
                                                <div class="option-box dir-flow">
                                                    <div>
                                                        <input type="radio" id="delivery_type1" name="delivery_type_choice" checked="checked" data-toggle="delivery" data-sync="basket_delivery_type" value="normal">
                                                        <label style="margin-right:11px" for="delivery_type1">택배배송</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pull-right delivery-comment ta-r">
                                                <div>
                                                    <div class="tooltip reverse">
                                                        30,000원 이상 무료배송 &nbsp;<i class="icon-how-use">사용방법</i>
                                                        <div class="cover" style="width:300px">
                                                            <div class="box ta-l">
                                                                - 택배로 발송하는 기본 배송 서비스입니다.
                                                                <br> - 30,000 이상 구매시 무료배송됩니다.
                                                                <br> - 30,000 미만 구매시 배송비 2,500원이 부과됩니다.
                                                                <br> - 도서산간 지역은 배송비가 추가 될 수 있습니다.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                            <!-- //.box-summary -->

 			                <section class="box-option">
					        <h2 class="v-hidden">상품의 옵션 선택</h2>
                                <ul>
                                    <li>
                                        <label class="trans-y">COLOR </label>
                                        <div class="opt-colors">
                                            <input type="radio" name="opt_color" data-toggle="stock" data-sync="basket_color" value="CRM" id="CRM" checked   >
                                            <label class="tone-bright" style="background-color:#f4f4d1" for="CRM" title="크림"></label>
                                            <input type="radio" name="opt_color" data-toggle="stock" data-sync="basket_color" value="DBL" id="DBL"    >
                                            <label class="tone-dark" style="background-color:#001679" for="DBL" title="다크블루"></label>
                                            <input type="radio" name="opt_color" data-toggle="stock" data-sync="basket_color" value="MGY" id="MGY"    >
                                            <label class="tone-bright" style="background-color:#CFCECA" for="MGY" title="멜란지그레이"></label>
                                        </div>
                                    </li>
                                    <li class="opt">
                                        <label>SIZE</label>
                                        <div class="opt-size detail-page">
                                            <div id="option-size-M" class="">
                                                <input type="radio" name="opt_size" data-toggle="stock" data-sync="basket_size"  id="sizeM" value="M" checked >
                                                <label for="sizeM">M</label>
                                            </div>
                                            <div id="option-size-L" class="">
                                                <input type="radio" name="opt_size" data-toggle="stock" data-sync="basket_size"  id="sizeL" value="L"  >
                                                <label for="sizeL">L</label>
                                            </div>
                                        </div>
                                        <a href="#popup-size-chart" class="btn-size-chart">사이즈 조견표
                                            <i class="icon-ruler"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <label class="trans-y">QTY</label>
                                        <div class="quantity">
                                            <input type="text" value="1" name="qty" data-sync="basket_qty" title="구매수량" readonly>
                                            <button class="plus" >수량증가</button>
                                            <button class="minus" >수량감소</button>
                                        </div>
                                    </li>
                                    <li class="total-price">
                                        <label class="trans-y">TOTAL</label>
                                        <div class="total" id="price_total">
                                        <strong data-sync="basket_price_total"><?= $data['price']?></strong>원</div>
                                    </li>
                                </ul>
				            </section>
                            <!-- //.box-option -->
                            <div class="area-button">
                                <div class="" data-soldout="N">
                                    <a href="javascript:;" onclick="ProductDetail.order('buy');" class="btn-motion is-point hv-skew">
                                        <span>BUY NOW</span>
                                    </a>
                                    <a href="javascript:;" onclick="ProductDetail.order('basket');" class="btn-motion is-line hv-draw" id="cartBtn">
                                        <span>SHOPPING BAG</span>
                                    </a>
                                </div>
                                <div class="hide" data-soldout="Y">
                                    <a href="javascript:;" class="btn-motion is-line-red w100-per"><span>일시품절</span></a>
                                </div>
                            </div>
                            <div class="user-entry clear">
                                <div class="pull-left">
                                    <a href="/front/mypage_personalwrite.php?productcode=001001011000008895" target="_blank">1:1 문의</a>
                                </div>
                                <div class="pull-right">
                                    <a href="javascript:;" onclick="SNS.facebook();">
                                        <i class="icon-sns-facebook-blk">페이스북</i>
                                    </a>
                                    <a href="javascript:;" onclick="SNS.naverblog('[CREW] 앞뒤 심플 아트웍 맨투맨')">
                                        <i class="icon-sns-blog-blk">블로그</i>
                                    </a>
                                    <a href="javascript:;" onclick="ProductDetail.urlCopy()">
                                        <i class="icon-sns-url-blk">URL</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- //.specification -->
                    </div>
                    <!-- //.goods-info-area -->

                    <div class="detail-content">
			<div class="detail-tabs" id="tab-nav">
				<a href="#tab1" class="active">
					<span>상품상세정보</span>
				</a>
				<a href="#tab2">
					<span>구매후기 (<em data-field="review_count">0</em>)</span>
				</a>
				<a href="#tab3">
					<span>배송/교환/반품</span>
				</a>
			</div>
			<div id="tab1" class="articles">
				<h2 class="v-hidden">상품의 상세한 설명</h2>
				<div class="editor-area-detail">
					<div class="youtube">
						<div class="ment">
							<img src="<?= $data['img']?>" title="1600237955-49.jpg"><br style="clear:both;"><br>
						</div>
                        <table class="th-left">
						<caption>제품설명</caption>
						<colgroup>
						<col style="width:147px">
						<col style="width:auto">
						</colgroup>
						<tbody>
							<tr>
								<th scope="row">설명</th>
								<td><?= $data['memo']?></td>
							</tr>
						</tbody>
					</table>
						
					</div>
				</div>
				<div class="quick-reference">

					<table class="th-left">
						<caption>제품정보</caption>
						<colgroup>
						<col style="width:147px">
						<col style="width:auto">
						</colgroup>
						<tbody>
							<tr>
								<th scope="row">소재</th>
								<td>겉감: 면100% (장식제외)</td>
							</tr>
							<tr>
								<th scope="row">색상</th>
								<td>
									MGY(멜란지그레이)
,									CRM(크림)
,									DBL(다크블루)
								</td>
							</tr>
							<tr>
								<th scope="row">사이즈</th>
								<td>M,L</td>
							</tr>
							<tr>
								<th scope="row">제조국</th>
								<td>CHINA</td>
							</tr>
							<tr>
								<th scope="row">제조사</th>
								<td>게션코리아</td>
							</tr>
							<tr>
								<th scope="row">제조연월</th>
								<td>2020</td>
							</tr>
						</tbody>
					</table>
					<div class="real-size clear">
						<div class="pull-left table">
							<table class="th-top">
								<caption>실측 사이즈</caption>
								<colgroup>
									<col style="width:100px">
									<col style="width:auto">
								</colgroup>
								<thead>
									<tr>
										<th scope="col">사이즈</th>
										<th scope="col">M</th>
										<th scope="col">L</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">어깨너비</th>
										<td>57</td>
										<td>59</td>

									</tr>
									<tr>
										<th scope="row">가슴둘레</th>
										<td>115</td>
										<td>120</td>

									</tr>
									<tr>
										<th scope="row">소매길이</th>
										<td>57</td>
										<td>58</td>

									</tr>
									<tr>
										<th scope="row">총길이</th>
										<td>69</td>
										<td>71</td>

									</tr>
								</tbody>
							</table>
							<ul class="notice">
								<li>- 이미지의 색상은 모니터 사양과 해상도에 따라 차이가 있을 수 있습니다. </li>
								<li>- 사이즈 단위는 cm이며, 상품소재나 재는 위치에 따라 오차가 있을 수 있습니다.</li>
								<li>- 위 사항들은 교환 및 반품, 환불의 사유가 될 수 없으며, 고객님의 단순변심으로 분류됩니다.</li>
							</ul>
						</div>
						<div class="pull-right picture ta-c ">
							<img src="<?= $data['img']?>" alt="실제 사이즈">
						</div>
					</div>

				</div>
				<!-- //.quick-reference -->
			</div>

			<div id="tab2" class="articles review-detail">
				<h2 class="v-hidden">구매자가 작성한 상품의 리뷰</h2>
				<div class="head clear">
					<div class="pull-left">
						<p class="count">구매후기 (<span data-field="review_count">0</span>)</p>
						<div class="total-rating clear">
							<div class="pull-left score-bg">
								<div class="gauge" style="width:0%"></div>
							</div>
							<div class="pull-right score-num">0</div>
						</div>
					</div>
					<div class="pull-right">
						<div class="select" style="width:100px">
							<span class="ctrl">
								<span class="arrow"></span>
							</span>
							<button type="button" class="my_value">
							<span>최신등록순</span>
							</button>
							<ul class="a_list">
								<li>
									<a href="javascript:;" onclick="Review.setSort('recent')">최신등록순</a>
								</li>
								<li>
									<a href="javascript:;" onclick="Review.setSort('upper')">평점높은순</a>
								</li>
								<li>
									<a href="javascript:;" onclick="Review.setSort('lower')">평점낮은순</a>
								</li>
							</ul>
						</div>
						<a href="javascript:;" onclick="Review.write()" class="btn-regular is-point">구매후기 작성</a>

					</div>
				</div>
				<div id="inner_review"></div>
			</div>

			<div id="tab3" class="articles delivery-policy clear">
				<h2 class="v-hidden">배송/교환/반품 시 자세한 설명</h2>
				<article class="pull-left">
						<h3>배송안내</h3><p style="margin-left: 0px;">
						</p><p></p><p></p>
                                                 <dl>
							<dt>배송기간</dt>
							<dd>본 상품은 입금일 기준 평균 3~5일이 소요됩니다. (토/일/공휴일 제외)</dd>
							<dd>본 상품은 오프라인 매장과 동시 판매되고 있으므로,<br>주문접수 후 상품준비 도중 판매가 증가하여 발송지연<br> 또는 품절 될 수 있으니 이점 양해 바랍니다.</dd>
                                                        <dd> 배송이 지연되는 경우 고객님께 빠르게 안내 될 수 있도록 노력하겠습니다.</dd>
                                                 </dl>
                                                <dl>
					               <dt>배송업체</dt>
							<dd>SH 수현 택배    │ 대표번호   <span style="color: rgb(253, 68, 28);">0000-0000</span>  
                                                          <br> 상담 운영 시간   월~금요일 08:00~18:00 / 토요일 09:00~13:00 </dd>
                                                 </dl>
                                                 <dl>
                                                        <dt>배송지역</dt>
							<dd>전국배송 가능 (제주도나 기타도서산간 지역은 별도의 추가요금이 부과될 수 있습니다.)</dd>
						</dl>
						<dl>
							<dt>배송비</dt>
							<dd>결제 금액 기준 30,000원 이상 구매시 무료배송 (할인쿠폰 적용금액 기준)<br>구매 시 배송비는 2,500원 (3만원 이상 무료)</dd><dd> 도서,산간,오지 일부 지역은 배송비가 추가됩니다. 
  </dd>
                                                        <dd>전국 배송 가능 (제주도나 기타도서 지방은 별도의 요금이 부과됩니다.)</dd>
						</dl>
						<dl>
							<dt><br></dt>
						</dl>
					</article>
					<article class="pull-left">
						</article><p></p><p></p><p></p><p></p><article class="pull-left"><h3>교환/반품안내</h3><p>
						</p><p></p><dl>
							<dt>신청 방법 및 절차</dt>
							<dd>마이페이지 &gt; 주문조회 메뉴에서 접수 가능합니다.</dd>
							<dd>반품접수 후 영업일 기준 2~3일 이내에 자사 지정 택배 기사님이 직접 방문하여 상품을 수거합니다.</dd>
							<dd>지정택배를 통해서 교환/반품이 가능합니다</dd>
						</dl>
						<dl>
							<dt>교환/반품 시 주의사항</dt>
							<dd>교환 및 반품은 상품 수령 후 14일 이내에 신청 가능합니다.</dd>
							<dd>상품은 착용한 흔적이 있거나, 상품 TAG이 손상된 경우 교환/반품/환불이 불가합니다.
							 <br>교환 시 맞교환은 불가능하며, 상품 입고 후 교환을 원하시는 제품으로 배송해드립니다.</dd>
							<dd>교환 및 반품 내역이 접수되지 않거나, 지정된 반송처로 반송되지 않을 시, 교환/반품/환불 절차가 지연되오니 양해 부탁 드립니다.</dd>

						</dl>
						<dl>
							<dt>교환/반품 가능한 경우</dt>
							<dd>교환 및 반품은 상품 수령 후 14일 이내에 신청 가능합니다.</dd>
							<dd>상품을 미사용한 상태에서 반송하여 주십시오.</dd>
							<dd>반송된 후 물류센터에서 반송확인 후 환불 및 교환처리 됩니다.</dd>
						</dl>
						<dl>
							<dt>교환/반품 불가능한 경우</dt>
							<dd>교환 또는 반품 요청 후 상품이 5일 이내 도착하지 않은 경우, 교환/반품이 되지 않습니다.</dd>
							<dd>고객님의 책임 있는 사유로 상품이 훼손된 경우,</dd>
							<dd>상품 고유의 포장이 훼손되어 상품가치가 상실된 경우 (TAG/라벨/비닐포장/케이스 등의 훼손 및 분실)</dd>
							<dd>데님의 특성상 워싱은 상품마다 차이가 있을 수 있으며, 이로 인한 무료 반품은 불가합니다.</dd>
						</dl>
						<dl>
							<dt>교환/반품 배송비</dt>
							<dd>교환,반품 배송비 : 5,000원<br>묶음 주문의 부분 교환 : 5,000원 (왕복 택배비)</dd>
							<dd>묶음 주문의 부분 반품 : 2,500원
<br>단, 부분 반품 시 3만원 이상 무료 배송인 원 주문의 총 결재 금액이 3만원 미만이 될 경우, 왕복 배송비 5,000원 과금되며 교환 / 반품시 배송비 결제</dd><dd>신청 방법: 신청사유 입력 및 배송비 결제→자사 지정택배 자동 수거지시</dd></dl><p></p><article class="pull-left"><dl>

						</dl>
					</article><p></p></article>
			</div>
                </div>
            </div>

            <?php }?>

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