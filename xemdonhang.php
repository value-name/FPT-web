
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
.donhang{
    margin-top:10px;
    background-color: #ffffff;
    padding:10px;
}
.bt{
    display: grid;
    grid-template-columns: auto auto;
}
    </style>
    <title>giohang</title>
</head>
<body>
    <?php if(isset($dsdh)&&($dsdh)!=""){
        foreach ($dsdh as $dh ) {
        echo'<div class="donhang">
        <p style="margin-left:30px;margin-top:10px">Tên: '.$dh['nameuser'].' | Địa chỉ: '.$dh['diachi'].' | Số điện thoại: '.$dh['sdtuser'].'</p>
        ';
        $spct =getallspdh($dh['id']);
        foreach ($spct as $spdh){
            $case=getonecasesp($spdh['idsp']);
            $sp=getonesp($case[0]['idsp']);
        echo'<div class="item">  
            
            <img style="height:80px" src="./upload/'.$case[0]['img'].'" alt="">
            <div class="item-info">
                <span>'.$sp[0]['tensp'].' |</span>  
                <span>'.$case[0]['dungluong1'].'  RAM |</span> 
                <span>'.$case[0]['dungluong'].'  ROM</span>
            </div>  
            <div class="item-price">  
                <span style="padding-right:10px" class="current-price">'.$spdh['gia'].'₫ </span>  
                <span style="padding-right:10px" class="original-price">'.$case[0]['giacu'].'₫</span>  
                <div class="quantity">  

                    <span style="padding-right:10px">'.$spdh['soluong'].'</span>  
                </div>  
            </div>  
        </div>  ';
    }
        echo '<div class="bt"><p style="margin-top:15px;margin-left:30px">Tổng tiền: '.$dh['thanhtien'].' | Trạng thái: '.$dh['trangthai'].'</p>
        
        <p style="text-align:right;margin-top:10px;margin-right:30px">';
        if ($dh['trangthai']=='Chờ xác nhận đơn hàng'){
            echo'
        <button style="background-color: red;border:none; padding:5px" >
            <a style="text-decoration:none; color: #ffffff" href="controller.php?act=huydonhang&id='.$dh['id'].'">Hủy đơn hàng</a></button> '; }
        if($dh['trangthai']=='Đang giao hàng')echo'
            <button  style="background-color: red;border:none; padding:5px" >
            <a style="text-decoration:none; color: #ffffff" href="controller.php?act=nhandonhang&id='.$dh['id'].'"> Đã nhận được hàng</a></button>';
        echo'    </p></div>
        </div>';
    }
     
}
else{?>
    <div class="empty-cart">
        <div class="empty-cart-content">
            <h2>Chưa có lịch sử mua hàng</h2>
            <p>Hãy chọn sản phẩm cần thanh toán</p>
            <a href="controller.php?act=giohang"><button class="buy-now">Mua hàng</button></a>
        </div>
        <div class="empty-cart-image">
            <img src="anh/giohang.png" alt="Empty Cart">
        </div>
    </div> 
    <?php
        }?>
</body>
</html>