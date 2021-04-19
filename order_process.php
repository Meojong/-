<?php



$pdo = new PDO('mysql:host=localhost;dbname=php_exam;
charset=utf8', 'root', 'multi1004');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO orders(name,tel1,address,tel2,memo,order_num) value(:name,:tel1,:address,:tel2,:memo,:order_num)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $_GET['name']);
$stmt->bindValue(':tel1', $_GET['tel1']);
$stmt->bindValue(':address', $_GET['address']);
$stmt->bindValue(':tel2', $_GET['tel2']);
$stmt->bindValue(':memo', $_GET['memo']);
$stmt->bindValue(':order_num', $_GET['order_num']);
$stmt->execute();

?>

<script type="text/javascript">
  alert("<?php echo $_GET['name'].'님, 주문이 완료되었습니다.'  ?>");
  history.back();
</script>