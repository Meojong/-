<?php
session_start();
error_reporting(E_ALL);

ini_set("display_errors", 1);
?>
<body>
<div id="wrap">
    <header>
       

        <div id="topMenu">
            <div>
            <h1><a href="index.php" class="logo">MOBLIE PROJECT</a></h1>
            <div class="menu-container">
            <ul id="menu" class="gnb-menu">
                <li class="topMenuLi">
                    
                    <a class="menuLink first-child" href="sub-test1.php">메뉴소개</a>
                    <ul class="submenu">
                        <li><a href="sub-test1.php" class="submenuLink longLink">스페셜</a></li>
                        <li><a href="sub-test2.php" class="submenuLink longLink">프리미엄</a></li>
                        <li><a href="sub-test3.php" class="submenuLink longLink">사이드</a></li>
                    </ul>
                </li>
                
                <li class="topMenuLi">
                    <a class="menuLink" href="sub-map.php">매장소개</a>
                    <ul class="submenu">
                        <li><a href="sub-map.php" class="submenuLink longLink">매장찾기</a></li>
                    </ul>
                </li>
                
                <li class="topMenuLi">
                    <a class="menuLink" href="event1.php">이벤트</a>
                    <ul class="submenu">
                        <li><a href="event1.php" class="submenuLink longLink">이벤트</a></li>
                    </ul>
                </li>
                
                <li class="topMenuLi">
                    <a class="menuLink" href="sub-story1.php">브랜드스토리</a>
                    <ul class="submenu">
                        <li><a href="sub-story1.php" class="submenuLink longLink">맥도리아스토리</a></li>
                        <!-- <li><a href="#" class="submenuLink longLink">WHY 맥도리아</a></li>
                        <li><a href="#" class="submenuLink longLink">맥도리아 NEWS</a></li> -->
                    </ul>
                </li>
                
                <!-- <li class="topMenuLi">
                    <a class="menuLink" href="sub-story1.php">로그인</a>
                    <ul class="submenu">
                        <li><a href="sub-story1.php" class="submenuLink longLink">맥도리아스토리</a></li> -->
                        

                        <?php if (isset($_SESSION['id'])){
						if ($_SESSION['id']=='admin') {
							echo '
                            <li class="topMenuLi">
                            <a class="menuLink del" href="order.php"><img class="del-img" src="img/del.png" alt=""></a>
                            <ul class="submenu">
                                <li><a href="order.php" class="submenuLink longLink">주문하기</a></li>
                                <li><a href="order_admin.php" class="submenuLink longLink">주문조회</a></li>
                                <li><a href="logout.php" class="submenuLink longLink">로그아웃</a></li>

                            </ul>
                        </li>';
						}else {
							echo '
                            <li class="topMenuLi">
                            <a class="menuLink del" href="order.php"><img class="del-img" src="img/del.png" alt=""></a>
                                <ul class="submenu">
                                    <li><a href="order.php" class="submenuLink longLink">주문하기</a></li>
                                    <li><a href="logout.php" class="submenuLink longLink">로그아웃</a></li>

                                </ul>
                            </li> ';
						}

					}else {echo '
					    <li class="topMenuLi">
                            <a class="menuLink" href="login.html">로그인</a>
                            
                        </li>';
					}?>


<!-- 
                    </ul>
                </li> -->



                <!-- <li class="topMenuLi">
                    <a class="menuLink del" href="order.php"><img class="del-img" src="img/del.png" alt=""></a>
                </li> -->







                <!-- <li class="topMenuLi">
                    <button onclick="javascript:btn()"><a class="menuLink del" href="#"><img class="del-img" src="img/del.png" alt=""></a></button>
                </li> -->
            </ul>
            </div>
        </div>    
    </header>
    <!-- <script> function btn(){ alert('주문이 완료되었습니다.'); } </script> -->