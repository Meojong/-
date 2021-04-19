<?php include "sub-head.php" ?>
<?php include "header.php" ?>
<style>
	.order{
		margin-top: 100px;
	}
</style>
<?php
// $pdo = new PDO('mysql:host=localhost;dbname=php_exam;
// charset=utf8', 'root', 'multi1004');

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $nRows = $pdo->query('select count(order_num) from orders')->fetchColumn()+1;

// 주문번호
$nRows = date("Ymd") . substr(time() . md5(microtime()), 0, 23);  // 30자
// echo $nRows;
?>

<html>

<body>


<div class="order_contain">
	<h1 class="order">상품 주문서</h1>
		<form action="order_process.php" method="GET">
			<fieldset>
				<legend>개인 정보</legend>
					<ul>
						<li><label for="uname" class="title">이름</label><input type="text" id="uname" name="name" placeholder="여백없이 입력" required> </li>
						<li> <label for="tel1" class="title">연락처</label> <input type="tel" id="tel1" name="tel1" placeholder="연락가능한 번호"> </li> 
					</ul>
			</fieldset>
			<fieldset>
				<legend>배송지 정보</legend>
					<ul> 
						<li> <label for="addr" class="title">주소</label><input type="text" size="40" id="addr" name="address" required></li>
						<li> <label for="tel2" class="title">전화번호</label> <input type="tel" id="tel2" name="tel2" required></li>
						<li> <label for="comment" class="title">메 모</label> <textarea cols="40" rows="3" id="comment" name="memo"></textarea> </li>
					</ul>
			</fieldset> 
			<!-- <fieldset>
				<legend>주문 정보</legend>
					<ul> 
						<li><label><input type="checkbox">과테말라 안티구아 (100g)</label><label><input type="number" value="0" min="0" max="5">개 </label> </li>
						<li> <label><input type="checkbox">인도네시아 만델링 (100g) </label> <label><input type="number" value="0" min="0" max="5">개 </label> </li>
						<li><label><input type="checkbox">탐라는도다(블렌딩) (100g)</label><label><input type="number" value="0" min="0" max="5">개 </label> </li> 
					</ul> 
			</fieldset>  -->
			<div class="centered">
				<input type="submit" value="주문하기">
				<input type="hidden" value="<?=$nRows?>" name="order_num">
				<input type="reset" value="다시 작성"> 
			</div> 
		</form> 
</div>

<br><br><br><br><br><br><br><br><br><br>



<?php include "footer.php" ?>
</div>
</body>
</html>