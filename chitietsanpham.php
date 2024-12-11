<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Chi tiết sản phẩm - OPPO Reno8 T</title>  
    <style>
    body {  
    font-family: 'Roboto', sans-serif;  
    width: 100%;
    margin: 0;  
    padding: 20px;  
    background-color: #f5f8fa;  
}  

header {  
    
    margin-bottom: 20px;  
}  

.page-title {  
    font-size: 2.5rem;  
    color: #333;  
}  

.product-container {  
    display: grid;
    grid-template-columns: auto auto;    

    background-color: #ffffff;  
    border-radius: 10px;  
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);  
}  

.product-image img {   
    width: 100%;
    border-radius: 10px 0 0 10px;  
}  

.product-details {  
    padding: 25px;  
    display: flex;  
    flex-direction: column;  
    flex: 1;  
}  

.product-details h2 {  
    margin: 0;  
    font-size: 1.8rem;  
    color: #444;  
}  

.price {  
    font-size: 1.5rem;  
    color: #e53935;  
    margin: 15px 0;  
}  

.description {  
    margin: 10px 0;  
    line-height: 1.6;  
}  

h2 {  
    font-size: 1.4rem;  
    color: #555;  
    margin-top: 20px;  
}  

.specs {  
    list-style-type: none;  
    padding: 0;  
}  

.specs li {  
    margin: 8px 0;  
    padding: 8px;  
    background-color: #f9f9f9;  
    border-left: 4px solid #e53935;  
}  

.button-group {  
    margin-top: 20px;  
    display: flex;  
    gap: 10px; /* khoảng cách giữa các nút */  
}  

.add-to-cart, .buy-now {  
    flex: 1; /* cho phép các nút chiếm không gian đều */  
    background-color: #e53935;  
    color: #ffffff;  
    margin: 10px;
    border: none;  
    padding: 12px;  
    border-radius: 5px;  
    cursor: pointer;  
    font-size: 1.1rem;  
    transition: background-color 0.3s, transform 0.2s;  
}  

.buttonbuy{
    display: grid;
    grid-template-columns: auto auto;
}
.add-to-cart:hover, .buy-now:hover {  
    background-color: #c62828;  
    transform: scale(1.05);  
}  

    </style>  
</head>  
<?php
$sp=getonesp($casect[0]['idsp']);
?>
<body>  
    <div class="product-container">  
        <div class="product-image">  
            <img src="<?php echo'./upload/'.$casect[0]['img'].''?>" alt="" />  
        </div>  
        <div class="product-details">  
            <h1>Điện thoại <?php echo($sp[0]['tensp']); ?></h1>  
            <p class="price">Giá: <span><?php echo' '.$casect[0]['gia'].'';?>₫</span>
            <p class="price">Giá ban đầu: <span style="text-decoration: line-through"><?php echo' '.$casect[0]['giacu'].'';?>₫</span></p>
            <p class="description">  
            <?php echo' '.$sp[0]['mota'].'';?></p>  
            <h2>Thông số kỹ thuật</h2>  
            <ul class="specs">  
                <li>Màn hình: <?php echo' '.$sp[0]['manhinh'].'';?></li>  
                <li>Camera: <?php echo' '.$sp[0]['camera'].'';?></li>  
                <li>Màu sắc: <?php echo' '.$casect[0]['mau'].'';?></li>  
                <li>Chipset:<?php echo' '.$sp[0]['chipset'].'';?></li>  
                <li>RAM: <?php echo' '.$casect[0]['dungluong1'].'';?></li>  
                <li>Bộ nhớ trong: <?php echo' '.$casect[0]['dungluong'].''?></li>  
                <li>Pin:<?php echo' '.$sp[0]['pin'].'';?>, Sạc:<?php echo' '.$sp[0]['sac'].'';?></li>  
                <li>Hệ điều hành: <?php echo' '.$sp[0]['operator'].'';?></li>  
            </ul>  

            <div class="buttonbuy">
            <button id="addToCart" class="add-to-cart">
            <a style="text-decoration:none; color: #ffffff" href="controller.php?act=giohang&id=<?php echo $casect[0]['id'];?>">Thêm vào giỏ hàng </a></button>  
            <button class="add-to-cart">
            <a style="text-decoration:none; color: #ffffff" href="controller.php?act=muangay&id=<?php echo $casect[0]['id'];?>">Mua ngay </a>
            </button>
    </div>    
</div>  
    </div>  

    <script src="script.js"></script>  
</body>  
</html>