<?php
$size = $_POST['size'];

$color = $_POST['color'];
$soluong = $_POST['cart_qty'];
$pro_id = $_POST['pro_id'];
$check_pro =   query_pro_soluong($pro_id, $color, $size);


if ($size == 'null' || $color == null || $soluong == null && isset($_GET['pro_id'])) {
?>
       
    <?php
    $tb = '&thongbao=';
    $space = '  ';
    $thongbao = "Please fill in all data fields$space";
    header("location:index.php?act=productinformation&pro_id=" . $_GET['pro_id'] . $tb . $thongbao);
  } else {

    

    if (is_array($check_pro)) {
      if ($check_pro['soluong'] <= 0) {
        $tb = '&thongbao=';
        $space = '  ';
        $thongbao = "Sorry The product you selected is currently out of stock.$space";
        header("location:index.php?act=productinformation&pro_id=" . $_GET['pro_id'] . $tb . $thongbao);
    }
    else{
      if (isset($_GET['kh_id']) && $_GET['pro_id']) {

        $pro_cart = queryonepro($_GET['pro_id']);
        $cart_kh = querycart_kh($_GET['kh_id']);
        $check_cart = check_cart($size, $_GET['pro_id'], $color, $cart_kh['cart_id']);

        if (is_array($check_cart)) {
          update_soluong_cart($soluong, $pro_cart['pro_price'], $check_cart['cart_chitiet_id'], $check_cart['soluong']);
        } else {
          add_cartchitiet($cart_kh['cart_id'], $pro_cart['pro_id'], $color, $size, $pro_cart['pro_price'], $soluong);
        }


        header("Location:index.php?act=mycart&kh_id=" . $_GET['kh_id']);
      }
    }
  }else {
      $tb = '&thongbao=';
      $space = '  ';
      $thongbao = "Products come in sizes and colors according to your requirements.$space" ;

      header("location:index.php?act=productinformation&pro_id=" . $_GET['pro_id'] . $tb . $thongbao);
    }
  }


    ?>