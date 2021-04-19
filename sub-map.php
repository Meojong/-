<?php include "sub-head.php" ?>
<?php include "header.php" ?>
<body>
<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<!-- <div id="map" style="width:1000px;height:700px;"></div>
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=4ca19b8f55c85efef963327148d045e3"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(33.450701, 126.570667),
			level: 3
		};

		var map = new kakao.maps.Map(container, options);
    </script> -->

    <div class="sub-spot">
        <img class="sub-spot-img" src="img/subimg/sub-spot.jpg" alt="">
        <div class="sub-ani-txt">
		<h2 class="sub-ani-title">매장찾기</h2>
            <ul class="subnav">
                <li><a href="index.php">홈</a></li>
                <li><a href="sub-test1.php">매뉴</a></li>
                <li><a href="sub-map.php">매장찾기</a></li>
            </ul>
        </div>
    </div>

    <div class="store">
        <div class="store-txt">
            <h1 class="store-style1">오프라인</h1>
            <h1 class="store-style2">매장찾기</h1>
            <h2>고객님 주변에 있는 맥도리아를 찾아보세요!</h2>
            <h2>원하시는 매장을 쉽고 편리하게 찾으실 수 있습니다.</h2>
        </div>
    </div>
    
    <div class="map_wrap">
        <div id="map" style="width:1000px;height:700px;position:relative;overflow:hidden;"></div>

        <div id="menu_wrap" class="bg_white">
            <div class="option">
                <div>
                    <form onsubmit="searchPlaces(); return false;">
                        키워드 : <input type="text" value="안양 맥도날드" id="keyword" size="15"> 
                        <button type="submit">검색하기</button> 
                    </form>
                </div>
            </div>
            <hr>
            <ul id="placesList"></ul>
            <div id="pagination"></div>
        </div>
    </div>
    <div class="store2">
        <div class="store-txt">
            <h1 class="store-style1">오프라인</h1>
            <h1 class="store-style2">매장소개</h1>
            <h2>맥도리아는 현재 안양역, 신촌역, 홍대역 등</h2>
            <h2>주요 지역에 입점해 있으며, 전국권으로 확상 중에 있습니다.</h2>
        </div>
    </div>








    <div id="devCallShopList" class="devCallShopList">
			<div class="bx_flex bx_list" style="margin-top:-7px;">
				<div class="roundTop"></div>
				<div class="roundArea">
					<input type="hidden" name="listTotalCnt" value="1339">
					<table class="list" width="100%" border="0" cellspacing="0" cellpadding="0">
						<caption></caption>
						<colgroup>
							<col width="230">
							<!-- col width="" -->
							<col width="294">
							<col width="100">
							<col width="100">
						</colgroup>
						<tbody><tr>
							<!-- th class="first " scope="col"><img src="/Images/common/thead_list_no.gif" alt="번호"></th -->
							<th class="first " scope="col"><img src="img/subimg/thead_shop.gif" alt="매장명"></th>
							<!-- th scope="col"><img src="/Images/event/thead_address.gif" alt="주소"></th -->
							<th scope="col"><img src="img/subimg/thead_option.gif" alt="매장 제공 서비스"></th>
							<th scope="col"><img src="img/subimg/thead_number.gif" alt="전화번호"></th>
							<th class="end" scope="col"><img src="img/subimg/thead_shop_guide.gif" alt="매장지도"></th>
						</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num"><img src='/Images/event/icon_open.gif' alt='OPEN'></td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4119, '12974'); return false;">안양역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4119, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type2_on.gif" alt="와이파이"></li><li><img src="img/subimg/icon_type4_on.gif" alt="홈서비스"></li><li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">031-463-2753</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/AwriU50D0" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num"><img src='/Images/event/icon_open.gif' alt='OPEN'></td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4141, '12996'); return false;">신촌역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4141, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type4_on.gif" alt="홈서비스"></li><li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">02-324-3894</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/qaMsI50DT" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num"><img src='/Images/event/icon_open.gif' alt='OPEN'></td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4143, '12998'); return false;">홍대역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4143, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type4_on.gif" alt="홈서비스"></li><li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">02-926-8884</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/HXx2I80Do" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num"><img src='/Images/event/icon_open.gif' alt='OPEN'></td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4137, '12992'); return false;">신도림역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4137, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">02-3439-8100</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/SapqU80Yp" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num"><img src='/Images/event/icon_open.gif' alt='OPEN'></td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4150, '13005'); return false;">철산역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4150, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">070-7017-0580</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/oPXvI80Yo" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num"><img src='/Images/event/icon_open.gif' alt='OPEN'></td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4128, '12983'); return false;">장안SK점</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4128, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type4_on.gif" alt="홈서비스"></li><li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">070-7438-8236</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/0XHUI5jYT" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num">1333</td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4142, '12997'); return false;">청주남문성안길</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4142, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type4_on.gif" alt="홈서비스"></li><li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">043-222-7406</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://map.daum.net/?q=%EB%A1%AF%EB%8D%B0%EB%A6%AC%EC%95%84+%EC%B2%AD%EC%A3%BC%EB%82%A8%EB%AC%B8%EC%84%B1%EC%95%88%EA%B8%B8%EC%A0%90&amp;map_type=TYPE_MAP" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num">1332</td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4140, '12995'); return false;">노원역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4140, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type2_on.gif" alt="와이파이"></li><li><img src="img/subimg/icon_type4_on.gif" alt="홈서비스"></li><li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">070-7462-6806</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://kko.to/Bvk_U50YB" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch ">
<!--										<td class="first num">1331</td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4139, '12994'); return false;">부평역</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4139, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">032-515-0501</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://map.daum.net/?q=%EB%A1%AF%EB%8D%B0%EB%A6%AC%EC%95%84+%EB%B6%80%ED%8F%89%EC%97%AD%EC%A0%90&amp;map_type=TYPE_MAP" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
								<tr class="shopSearch last">
<!--										<td class="first num">1330</td>-->
									<td class="first num" style="padding-right:10px;"><a href="#" onclick="goView(4133, '12988'); return false;">오송역사</a></td>
									<!-- td style="padding-right:10px;"><a href="#" onclick="goView(4133, ''); return false;"></a></td -->
									<td class="type-list">
										<ul><!-- 활성화 되는 아이콘만 노출 시켜주세요. -->
											<li><img src="img/subimg/icon_type8_on.gif" alt="리아오더"></li>
										</ul>
									</td>
									<td class="num">043-231-8085</td>
									<td>
										<span class="input_05">
											<a class="searchset_btn" href="http://map.daum.net/?q=%EB%A1%AF%EB%8D%B0%EB%A6%AC%EC%95%84+%EC%98%A4%EC%86%A1%EC%97%AD%EC%82%AC%EC%A0%90&amp;map_type=TYPE_MAP" target="_blank" title="매장 위치 새창으로 보기">
												<img src="img/subimg/btn_guide_view.gif" alt="지도보기">
											</a>
										</span>
										<!-- 
										<a href="#" onclick="alert('지도를 표시할 수 없습니다.'); return false;"><img src="/Images/event/btn_guide_view.gif" alt="지도보기"></a>
										 -->
									</td>
								</tr>
						
						<!--// loop -->
					</tbody></table>
				</div>
				<div class="roundBottom"></div>
			</div>

			<!-- 페이징 -->
            <!-- <div class="paging_basic"><span class="wrap"><a href="javascript: goPage(1);" class="go first"><img src="img/subimg/btn_paging_first.gif" alt="처음 페이지로 이동"></a>
<a href="javascript: goPage(1);" class="go prev"><img src="img/subimg/btn_paging_prev.gif" alt="이전 블럭 페이지로 이동"></a>

<strong>1</strong><a href="javascript: goPage(2);">2</a><a href="javascript: goPage(3);">3</a><a href="javascript: goPage(4);">4</a><a href="javascript: goPage(5);">5</a><a href="javascript: goPage(6);">6</a><a href="javascript: goPage(7);">7</a><a href="javascript: goPage(8);">8</a><a href="javascript: goPage(9);">9</a><a href="javascript: goPage(10);">10</a>

<a href="javascript: goPage(11);" class="go next"><img src="img/subimg/btn_paging_next.gif" alt="다음 블럭 페이지로 이동"></a>
<a href="javascript: goPage(134);" class="go end"><img src="img/subimg/btn_paging_end.gif" alt="끝 페이지로 이동"></a></span></div> -->
            <!-- //페이징 -->
	</div>









<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=4ca19b8f55c85efef963327148d045e3&libraries=services"></script>
<script>
// 마커를 담을 배열입니다
var markers = [];

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new kakao.maps.LatLng(37.566826, 126.9786567), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };  

// 지도를 생성합니다    
var map = new kakao.maps.Map(mapContainer, mapOption); 

// 장소 검색 객체를 생성합니다
var ps = new kakao.maps.services.Places();  

// 검색 결과 목록이나 마커를 클릭했을 때 장소명을 표출할 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({zIndex:1});

// 키워드로 장소를 검색합니다
searchPlaces();

// 키워드 검색을 요청하는 함수입니다
function searchPlaces() {

    var keyword = document.getElementById('keyword').value;

    if (!keyword.replace(/^\s+|\s+$/g, '')) {
        alert('키워드를 입력해주세요!');
        return false;
    }

    // 장소검색 객체를 통해 키워드로 장소검색을 요청합니다
    ps.keywordSearch( keyword, placesSearchCB); 
}

// 장소검색이 완료됐을 때 호출되는 콜백함수 입니다
function placesSearchCB(data, status, pagination) {
    if (status === kakao.maps.services.Status.OK) {

        // 정상적으로 검색이 완료됐으면
        // 검색 목록과 마커를 표출합니다
        displayPlaces(data);

        // 페이지 번호를 표출합니다
        displayPagination(pagination);

    } else if (status === kakao.maps.services.Status.ZERO_RESULT) {

        alert('검색 결과가 존재하지 않습니다.');
        return;

    } else if (status === kakao.maps.services.Status.ERROR) {

        alert('검색 결과 중 오류가 발생했습니다.');
        return;

    }
}

// 검색 결과 목록과 마커를 표출하는 함수입니다
function displayPlaces(places) {

    var listEl = document.getElementById('placesList'), 
    menuEl = document.getElementById('menu_wrap'),
    fragment = document.createDocumentFragment(), 
    bounds = new kakao.maps.LatLngBounds(), 
    listStr = '';
    
    // 검색 결과 목록에 추가된 항목들을 제거합니다
    removeAllChildNods(listEl);

    // 지도에 표시되고 있는 마커를 제거합니다
    removeMarker();
    
    for ( var i=0; i<places.length; i++ ) {

        // 마커를 생성하고 지도에 표시합니다
        var placePosition = new kakao.maps.LatLng(places[i].y, places[i].x),
            marker = addMarker(placePosition, i), 
            itemEl = getListItem(i, places[i]); // 검색 결과 항목 Element를 생성합니다

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
        // LatLngBounds 객체에 좌표를 추가합니다
        bounds.extend(placePosition);

        // 마커와 검색결과 항목에 mouseover 했을때
        // 해당 장소에 인포윈도우에 장소명을 표시합니다
        // mouseout 했을 때는 인포윈도우를 닫습니다
        (function(marker, title) {
            kakao.maps.event.addListener(marker, 'mouseover', function() {
                displayInfowindow(marker, title);
            });

            kakao.maps.event.addListener(marker, 'mouseout', function() {
                infowindow.close();
            });

            itemEl.onmouseover =  function () {
                displayInfowindow(marker, title);
            };

            itemEl.onmouseout =  function () {
                infowindow.close();
            };
        })(marker, places[i].place_name);

        fragment.appendChild(itemEl);
    }

    // 검색결과 항목들을 검색결과 목록 Elemnet에 추가합니다
    listEl.appendChild(fragment);
    menuEl.scrollTop = 0;

    // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
    map.setBounds(bounds);
}

// 검색결과 항목을 Element로 반환하는 함수입니다
function getListItem(index, places) {

    var el = document.createElement('li'),
    itemStr = '<span class="markerbg marker_' + (index+1) + '"></span>' +
                '<div class="info">' +
                '   <h5>' + places.place_name + '</h5>';

    if (places.road_address_name) {
        itemStr += '    <span>' + places.road_address_name + '</span>' +
                    '   <span class="jibun gray">' +  places.address_name  + '</span>';
    } else {
        itemStr += '    <span>' +  places.address_name  + '</span>'; 
    }
                 
      itemStr += '  <span class="tel">' + places.phone  + '</span>' +
                '</div>';           

    el.innerHTML = itemStr;
    el.className = 'item';

    return el;
}

// 마커를 생성하고 지도 위에 마커를 표시하는 함수입니다
function addMarker(position, idx, title) {
    var imageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_number_blue.png', // 마커 이미지 url, 스프라이트 이미지를 씁니다
        imageSize = new kakao.maps.Size(36, 37),  // 마커 이미지의 크기
        imgOptions =  {
            spriteSize : new kakao.maps.Size(36, 691), // 스프라이트 이미지의 크기
            spriteOrigin : new kakao.maps.Point(0, (idx*46)+10), // 스프라이트 이미지 중 사용할 영역의 좌상단 좌표
            offset: new kakao.maps.Point(13, 37) // 마커 좌표에 일치시킬 이미지 내에서의 좌표
        },
        markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imgOptions),
            marker = new kakao.maps.Marker({
            position: position, // 마커의 위치
            image: markerImage 
        });

    marker.setMap(map); // 지도 위에 마커를 표출합니다
    markers.push(marker);  // 배열에 생성된 마커를 추가합니다

    return marker;
}

// 지도 위에 표시되고 있는 마커를 모두 제거합니다
function removeMarker() {
    for ( var i = 0; i < markers.length; i++ ) {
        markers[i].setMap(null);
    }   
    markers = [];
}

// 검색결과 목록 하단에 페이지번호를 표시는 함수입니다
function displayPagination(pagination) {
    var paginationEl = document.getElementById('pagination'),
        fragment = document.createDocumentFragment(),
        i; 

    // 기존에 추가된 페이지번호를 삭제합니다
    while (paginationEl.hasChildNodes()) {
        paginationEl.removeChild (paginationEl.lastChild);
    }

    for (i=1; i<=pagination.last; i++) {
        var el = document.createElement('a');
        el.href = "#";
        el.innerHTML = i;

        if (i===pagination.current) {
            el.className = 'on';
        } else {
            el.onclick = (function(i) {
                return function() {
                    pagination.gotoPage(i);
                }
            })(i);
        }

        fragment.appendChild(el);
    }
    paginationEl.appendChild(fragment);
}

// 검색결과 목록 또는 마커를 클릭했을 때 호출되는 함수입니다
// 인포윈도우에 장소명을 표시합니다
function displayInfowindow(marker, title) {
    var content = '<div style="padding:5px;z-index:1;">' + title + '</div>';

    infowindow.setContent(content);
    infowindow.open(map, marker);
}

 // 검색결과 목록의 자식 Element를 제거하는 함수입니다
function removeAllChildNods(el) {   
    while (el.hasChildNodes()) {
        el.removeChild (el.lastChild);
    }
}
</script>
<?php include "footer.php" ?>
</div>
</body>
</html>