<?php


$pdo = new PDO('mysql:host=localhost;dbname=php_exam;
charset=utf8', 'root', 'multi1004');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM orders;";

$stmt = $pdo->prepare($sql);
$stmt->execute();

				while($row = $stmt -> fetch()) {
				    echo '<tr class="table-row">
				    <td class="column-4 p-l-70">'.$row['order_num'].'</td>
				    </tr>';
				}
?>