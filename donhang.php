
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}
.container .header{
    margin-bottom: 10px;
}
.empty-cart {
    width: 95%;
    max-width: 1600px; 
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    
    background-color: #eee9e9;
    border-radius: 15px;
}

.empty-cart-content {
    text-align: left;
    padding-right: 20px;
}

.empty-cart-content h2 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.empty-cart-content p {
    font-size: 16px;
    color: #777;
    margin-bottom: 20px;
}

.buy-now {
    background-color: #e02020;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.buy-now:hover {
    background-color: #c81b1b;
}

.empty-cart-image img {
    width: 300px;
    height: auto;
}

.social-icons {
    display: flex;
    justify-content: space-around;
    width: 60%;
}

.social-icons img {
    width: 30px;
    height: 30px;
}
body {  
    font-family: Arial, sans-serif;  
    background-color: #f5f5f5;  
    margin: 0;  
    padding: 20px;  
}  

.cart {  
    background-color: #ffffff;  
    border-radius: 8px;  
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
    padding: 20px;  
}  

.cart-header h2 {  
    line-height: 50px;  
}  

.item {  
    display: flex;  
    margin-left: 50px;
    justify-content: space-between;  
    align-items: center;  
    padding: 15px 0;  
    border-bottom: 1px solid #e0e0e0;  
}  

.item-info {  
    flex: 1;  
}  

.item-price {  
    text-align: left;  
    display: flex;
    margin-right: 80px;
}  

.current-price {  
    font-size: 24px;  
    line-height: 80px;
    color: #e53935;  
}  

.original-price {  
    text-decoration: line-through;  
    color: #999;  
    line-height: 80px;
}  

.quantity {  
    display: flex;  
    margin-right: 20px;
    align-items: center;  
    justify-content: flex-end;  
}  

.quantity button {  
    margin: 0 5px;  
    width: 15px;
}  

.remove {  
    margin-left: 10px;
    background: none;  
    border: none;  
    color: #e53935;  
    cursor: pointer;  
}  

.cart-summary {  
    margin-top: 40px;  
    margin-left: 50px;
}  

.cart-summary h3 {  
    margin: 0;  
}  

.cart-summary div {  
    margin: 10px 0;  
}  

.confirm {  
    background-color: #e53935;  
    color: #ffffff;  
    border: none;  
    padding: 10px 20px;  
    border-radius: 5px;  
    cursor: pointer;  
}
.dathang{
    background-image: url(anh/giohang.png);
    height:400px;
}
    </style>
    <title>giohang</title>
</head>
<body>
    <div class="dathang">
        
    <?php if(isset($txt_fn)&&($txt_fn)!=""){?>
    <p style="text-align:center;padding-top:100px; font-size:30px; margin-top:50px" >
    <?php
            echo "<font color='green' style='padding: 10px 0'>".$txt_fn."</font>";
            echo'<p style="text-align:center">Tiếp tục mua hàng</p>
            <p style="text-align:center"><a href="controller.php?act=about" ><button class="buy-now">Trang chủ</button></a></p></P></div>';
        }
        else if(isset($txt_errorsd)&&($txt_errorsd)!=""){
            echo "<font color='red' style='padding: 10px 0;'>".$txt_errorsd."</font>";
            echo'<p>Quay trở lại giỏ hàng</p>
            <a href="controller.php?act=giohang" style="text-align:center"><button class="buy-now">Trở lại</button></a></P></div> ';
        }else{?>
<br>
    <div class="container">
        <div class="header">
          <a href="controller.php?act=about"><b>Trang chủ</b></a> / <span>Đơn hàng</span>
        </div>
    
    <form action="controller.php?act=donhang" method="post" >

    <div class="cart">   
    <label for="name">Số điện thoại:</label>   
    <input  value="<?=checkuserid($_SESSION['id'])[0]['sdt']?>"placeholder="Số điện thoại" type="text" name="sdt"id="" required>
    <label for="address">Địa chỉ:</label>  
    <input  value="<?=checkuserid($_SESSION['id'])[0]['address']?>"  type="text" name="address" placeholder="Địa chỉ" id=""required>      
    <label for="name">Tên:</label>   
    <input  value="<?=checkuserid($_SESSION['id'])[0]['name']?>"placeholder="Họ và Tên" type="text" name="name"id="" required> 
       
        <?php
        if(isset($muangay)){
            $sum=0;
            $sp=getonesp($muangay[0]['idsp']);
            $sum+=$muangay[0]['gia']*$ghmn[0]['soluong'];
            echo'<div class="item">  
                
                <img style="height:80px" src="./upload/'.$muangay[0]['img'].'" alt="">
                <div class="item-info">
                
                    <span>'.$sp[0]['tensp'].' |</span>  
                    <span>'.$muangay[0]['dungluong1'].'  RAM |</span> 
                    <span>'.$muangay[0]['dungluong'].'  ROM</span>
                </div>  
                <div class="item-price">  
                    <span style="padding-right:10px" class="current-price">'.$muangay[0]['gia'].'₫ </span>  
                    <span style="padding-right:10px" class="original-price">'.$muangay[0]['giacu'].' ₫</span>  
                    <div class="quantity">
                    <input type="hidden" name="muangay" value="muangay">
                    <input type="hidden" name="idsp" value="'.$muangay[0]['idsp'].'">  
                        <button><a style="text-decoration:none" href="controller.php?act=tru&id='.$ghmn[0]['id'].'&idsp='.$muangay[0]['id'].'">-</a></button>  
                        <p id="quantity">'.$ghmn[0]['soluong'].'</p>  
                        <button><a style="text-decoration:none" href="controller.php?act=cong&id='.$ghmn[0]['id'].'&idsp='.$muangay[0]['id'].'">+</a></button> 
                        
                    </div>    
                </div>  
            </div>  ';
        }
        
        else{
        if(isset($id)&& sizeof($id)>0){    
        $sum=0;
        $dsspdh=array();
        $dem=0;
        foreach ($id as $i ) {
        $hang=getgiohangid($i);
        $case=getonecasesp($hang[0]['idsp']);
        $sp=getonesp($case[0]['idsp']);
        $sum+=$case[0]['gia']*$hang[0]['soluong'];
        $dsspdh[$dem]=$case[0]['id'];
        $dem++;
        echo'<div class="item">  
            
            <img style="height:80px" src="./upload/'.$case[0]['img'].'" alt="">
            <div class="item-info">
            <input type="hidden" name="id" value="'.$case[0]['id'].'"/>
                <span>'.$sp[0]['tensp'].' |</span>  
                <span>'.$case[0]['dungluong1'].'  RAM |</span> 
                <span>'.$case[0]['dungluong'].'  ROM</span>
            </div>  
            <div class="item-price">  
                <span style="padding-right:10px" class="current-price">'.$case[0]['gia'].'₫ </span>  
                <span style="padding-right:10px" class="original-price">'.$case[0]['giacu'].'₫</span>  
                <div class="quantity">  

                    <span style="padding-right:10px">'.$hang[0]['soluong'].'</span>  
                    <input type="hidden" name="soluong" value="'.$hang[0]['soluong'].'"/>
                <input type="hidden" name="item[]" value="'.$hang[0]['id'].'"/>
                </div>  
            </div>  
        </div>  ';
    }
}
}
?>  
        <input  value="<?= $sum?>" type="hidden" name="sum"id="" required>   
        <?php if(!isset($sum)){  ?>    
     <div class="empty-cart">
        <div class="empty-cart-content">
            <h2>Chưa chọn sản phẩm để thanh toán</h2>
            <p>Hãy chọn sản phẩm cần thanh toán</p>
            <a href="controller.php?act=giohang"><button class="buy-now">Mua hàng</button></a>
        </div>
        <div class="empty-cart-image">
            <img src="anh/giohang.png" alt="Empty Cart">
        </div>
    </div> 
    <?php }else {?><div class="cart-summary">  
            <h3>Tổng số tiền</h3>  
            <div>Tổng tiền: <span id="totalAmount"><?php echo $sum;?> đ</span></div>
            <?php
            
        ;?>
            <button onclick="check()" class="confirm"><input style="border:none; background-color: #e53935; color:#ffffff" type="submit" name="xacnhan2" value="Đặt hàng"/></button>  
        </div>  
        <?php }?>
    </div>  
</form>
      <script src="script.js"></script>
      <br><br>
<?php }?>
</body>
</html>