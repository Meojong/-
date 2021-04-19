<?php
$conn = mysqli_connect( 'localhost', 'root', 'multi1004', 'php_exam' );
$delete_order_num = $_POST[ 'delete_order_num' ];
    
    if ( isset( $delete_order_num ) ) {
      $sql_delete = "DELETE FROM orders WHERE order_num = '$delete_order_num';";
      mysqli_query( $conn, $sql_delete );
      echo '<p style="color: red;">주문 ' . $delete_order_num . ' 완료.</p>';
    }


?>
<script type="text/javascript">
  alert("고객님 주문이 완료되었습니다.");
  history.back();
</script>