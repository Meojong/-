<?php include "sub-head.php" ?>
<?php include "header.php" ?>
<style>
      body {
        text-align: center;
        font-family: Consolas, monospace;
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
<body>
<table>
    <thead>
        <tr>
            <th>고객이름</th>
            <th>전화번호 1</th>
            <th>주소</th>
            <th>전화번호 2</th>
            <th>요청사항</th>
            <th>주문번호</th>
            <th>주문완료</th>
        </tr>
   </thead>
   <tbody>
<?php
 



  $conn = mysqli_connect( 'localhost', 'root', 'multi1004', 'php_exam' );
  $sql = "SELECT * FROM orders LIMIT 50;";
  $result = mysqli_query( $conn, $sql );
    while( $row = mysqli_fetch_array( $result ) ) {
        $delete = '
              <form action="order_admin_process.php" method="POST">
                <input type="hidden" name="delete_order_num" value="' . $row[ 'order_num' ] . '">
                <input type="submit" value="주문완료(삭제)">
              </form>
            ';
    echo '
    <tr><td>' . $row[ 'name' ] . '</td>
    <td>'. $row[ 'tel1' ] . '</td>
    <td>' . $row[ 'address' ] . '</td>
    <td>' . $row[ 'tel2' ] . '</td>
    <td>' . $row[ 'memo' ] . '</td>
    <td>' . $row[ 'order_num' ] . '</td>
    <td>' . $delete . '</td></tr>';
    }


?>

    </tbody>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include "footer.php" ?>
</div>
</body>
</html>