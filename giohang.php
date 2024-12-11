
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giohang.css">
    <title>giohang</title>
</head>
<body>
<br>
    <div class="container">
        <div class="header">
          <a href="index.html"><b>Trang chủ</b></a> / <span>Giỏ hàng</span>
        </div>
    <?php
    if(isset($gio)&& sizeof($gio)>0){

    ?>
    <form action="controller.php?act=donhang" method="post" >
    <div class="cart">  
        <div class="cart-header">  
            <input type="checkbox" id="selectAll" onclick="toggleSelectAll()">  
            <label for="selectAll">Chọn tất cả </label>  
        </div>  
        <?php
        $sum=0;
        $cuoi=0;
    foreach ($gio as $i ) {
        $case=getonecasesp($i['idsp']);
        $sp=getonesp($case[0]['idsp']);
        if($cuoi<$i['id']){
            $cuoi=$i['id'];
        }
        echo'<div class="item">  
            <input id="calculateTotalButton" name="check'.$i['id'].'" data-price="'.$case[0]['gia'].'" type="checkbox"  class="item-checkbox" onclick="checkSelectAll(),calculateTotal()">  
            <img style="height:80px" src="./upload/'.$case[0]['img'].'" alt="">
            <div class="item-info">
            
                <span>'.$sp[0]['tensp'].' |</span>  
                <span>'.$case[0]['dungluong1'].'  RAM |</span> 
                <span>'.$case[0]['dungluong'].'  ROM</span>
            </div>  
            <div class="item-price">  
                <span style="padding-right:10px" class="current-price">'.$case[0]['gia'].'₫ </span>  
                <span style="padding-right:10px" class="original-price">'.$case[0]['giacu'].'₫</span>  
                <div class="quantity">  
                    <button><a style="text-decoration:none" href="controller.php?act=tru&id='.$i['id'].'">-</a></button>  
                    <p id="quantity">'.$i['soluong'].'</p>  
                    <button><a style="text-decoration:none" href="controller.php?act=cong&id='.$i['id'].'">+</a></button>  
                </div>  
                <button class="remove"><a style="text-decoration:none; color:black" href="controller.php?act=xoagiohang&id='.$i['id'].'">Xóa</a></button>  
            </div>  
        </div>  ';
        
        
    }
?>  <input type="hidden" name="cuoi" value="<?php echo $cuoi; ?>" />

        <div class="cart-summary">  
            <h3>Thông tin đơn hàng</h3>  
            <div>Tổng tiền: <span id="totalAmount">0₫</span></div>  
            
            <button onclick="check()" class="confirm"><input style="border:none; background-color: #e53935; color:#ffffff" type="submit" name="xacnhan" value="Xác nhận đơn"/></button>  
        </div>  
    </div>  
</form>
    <?php
    }
    else {
        ?>
     <div class="empty-cart">
        <div class="empty-cart-content">
            <h2>Chưa có sản phẩm nào trong giỏ hàng</h2>
            <p>Cùng mua sắm hàng ngàn sản phẩm tại FPTShop nhé!</p>
            <a href="controller.php?act=about"><button class="buy-now">Mua hàng</button></a>
        </div>
        <div class="empty-cart-image">
            <img src="anh/giohang.png" alt="Empty Cart">
        </div>
    </div> 
    <?php }?>
      <script src="script.js"></script>
      <br><br>

</body>
</html>