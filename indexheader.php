
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPT Shop</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #e60012;
    color: #fff;
    padding: 10px 10px;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    width: 200px;
    padding-left: 26px;
}

.menu-container {
    position: relative;
    display: inline-block;
}

.menu-button {
    background-color: #732323; /* Màu đỏ */
    color: white;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
    border-radius: 20px;
    font-size: 16px;
    display: flex;
    
}
.menu-button img{
    align-items: center;
    width: 15px;
   
}

.menu-button:hover {
    background-color: #d00000; /* Màu đỏ nhạt khi hover */
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    min-width: 300px;
    border-radius: 5px;
    align-items: center;
}

.dropdown-content>a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Hiển thị menu khi di chuột vào container */
.menu-container:hover .dropdown-content {
    display: block;
}
/* 
form {
    padding-right: 20px;
    display: flex;
    align-items: center;
    width: 50%;
}

form input {
    width: 100%;
    padding: 8px;
    border-radius: 20px;
    border: none;
    outline: none;
}

form  button {
    background-color: transparent;
    border: none;
    margin-left: -40px;
    cursor: pointer;
}

form button img {
    width: 20px;
} */

.icons img {
    width: 30px;
    margin-left: 20px;
    cursor: pointer;
}
.icons img:hover{
    background-color: #ebb2b7;
    border-radius: 5px;
}
/* Modal styling */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: rgb(165, 73, 73);
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    text-align: center;
}

.modal-content h2 {
    margin-bottom: 20px;
}

.modal-content input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.modal-content button {
    padding: 10px 20px;
    background-color: #e60012;
    color: rgb(47, 45, 45);
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.modal-content p {
    margin-top: 10px;
}

.close {
    float: right;
    font-size: 28px;
    cursor: pointer;
}



.banner {
    
    position: relative;
    text-align: center;
    color: #f4f4f4;
    background-color: #c27272;
}

.banner img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}
.banner img:hover {
    transform: scale(1.03); /* Phóng to 120% */
}
.banner-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.banner-content h1 {
    font-size: 40px;
}

.banner-content p {
    font-size: 18px;
    margin-top: 10px;
}

.banner-content button {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #41a0ff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.banner-content button:hover{
    background-color: #e92e3e;
}
.product-categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    background-color: #d1c7c7be;
}

.category {
    flex: 1 1 22%;
    margin: 10px;
    background-color: #f8f8f8;
    padding: 15px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.category img {
    width: 100px;
    height: auto;
    margin-bottom: 10px;
    transition: transform 0.3s ease;
}
.category img:hover {
    transform: scale(1.2); /* Phóng to 120% */
}
.category h3 {
    font-size: 16px;
    margin-bottom: 10px;
}


.tieude1 h1 {
    font-size: 50px;
    color: #333;
    font-weight: bold;
    padding-left: 50px;
}


.motachitiet {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    gap: 20px; /* Khoảng cách giữa các ô */
    padding: 20px;
    background-color: #f1eeee;
}

.mota-link {
    text-decoration: none;
    color: inherit;
    display: block;
}
.mota-link:hover .mota {
    background-color: #f9f9f9; /* Tùy chỉnh màu nền khi hover */
}

.mota {
    background-color: #fff;
    padding: 15px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    box-sizing: border-box; 
    min-height: 360px;
}

.mota img {
    width: 150px;
    height: auto;
    margin-bottom: 10px;
    transition: transform 0.3s ease;
}

.mota img:hover {
    transform: scale(1.2); /* Phóng to 120% */
}
.mota h3 {
    font-size: 16px;
    margin-bottom: 10px;
}

.price {
    color: #e60012;
    font-weight: bold;
    margin-bottom: 5px;
}

.old-price {
    text-decoration: line-through;
    color: #888;
}

.discount {
    color: green;
    margin-bottom: 10px;
}

.mota button {
    border: none;
    border-radius: 5px;
}

.mota button:hover,.mota button:hover input {
    background-color: #f04242;
}
.mota input{
    background-color: #41a0ff;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.services {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    background-color: #ffffff;
}

.service {
    text-align: center;
    flex: 1;
    padding: 10px;
}

.service img {
    width: 50px;
    height: auto;
    margin-bottom: 10px;
}

.service p {
    font-size: 14px;
    color: #333;
}


footer{
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    margin-top: 20px;
}
.foot1 {
    color: #fff;
    text-align: center;
    padding: 0px 0;
    margin-top: 20px;
}
.foot2 {
    color: #fff;
    padding: 10px 0;
    margin-top: 20px;
    padding-left: 40px;
}
.footer-top {
    display: flex;
    justify-content: space-between;
}

.footer-column {
    width: 22%;
}

.footer-column h3 {
    font-size: 18px;
    margin: 15px 0;
}

.footer-column p, .footer-column ul, .footer-column li {
    font-size: 14px;
    line-height: 1.8;
}

.footer-column ul {
    list-style-type: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 10px;
}

.footer-column ul li a {
    color: white;
    text-decoration: none;
}

.footer-column ul li a:hover {
    text-decoration: underline;
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
    </style>
</head>
<?php
    if((isset($_SESSION['role']))&&(isset($_SESSION['id']))){
?>
<body>
    <header>
        <div class="top-bar">
            <a href="controller.php?act=about"><img src="anh/fptlogo.png" alt="FPT Shop Logo" class="logo"></a>
            <div class="menu-container">
                <button class="menu-button"><img src="anh/danhmuclogo.png" alt=""> Danh mục</button>
                
                <div class="dropdown-content">
                    <?php
                    
                        foreach ($kq as $dm) {
                            echo'<a href="controller.php?act=product&id='.$dm['id'].'">'.$dm['tendm'].'</a>';
                        }
                    
                    ?> 
                </div>

            </div>
            
                <form action="controller.php?act=timkiem" method="post" style="padding-right: 20px;display: flex;align-items: center;width: 50%;">
                <input style="width: 100%;padding: 8px;border-radius: 20px;border: none;outline: none;" name="kyw" type="text" placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm" >
                <button style="background-color: transparent;border: none;margin-left: -40px;cursor: pointer;" type="submit" name="timkiem" value="" ><img style=" width: 20px;" src="anh/find.png" alt="Search"></button>
            </form>
            <div class="icons">
                <a href="controller.php?act=taikhoan"><img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User"  name="iconuser" id="userIcon" onclick="toggleLoginModal()"></a>
                <a href="controller.php?act=giohang"><img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="Cart"></a>
                <a href="controller.php?act=xemdonhang"><img src="anh\395508658_253889813940875_1308038672376621728_n.png" alt="Cart"></a>
            </div>
        </div>
        
    </header>
<?php
}
else {?>

<body>
    <header>
        <div class="top-bar">
            <a href="controller.php?act=about"><img src="anh/fptlogo.png" alt="FPT Shop Logo" class="logo"></a>
            <div class="menu-container">
                <button class="menu-button"><img src="anh/danhmuclogo.png" alt=""> Danh mục</button>
                
                <div class="dropdown-content">
                    <?php
                    
                        foreach ($kq as $dm) {
                            echo'<a href="controller.php?act=product&id='.$dm['id'].'">'.$dm['tendm'].'</a>';
                        }
                    
                    ?> 
                </div>

            </div>
            <form action="controller.php?act=timkiem" method="post" style="padding-right: 20px;display: flex;align-items: center;width: 50%;">
                <input name="kyw" style="width: 100%;padding: 8px;border-radius: 20px;border: none;outline: none;" type="text" placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm" >
                <button style="background-color: transparent;border: none;margin-left: -40px;cursor: pointer;" type="submit" name="timkiem" value="" ><img style=" width: 20px;" src="anh/find.png" alt="Search"></button>
            </form>
            <div class="icons">
                <a href="login.php"><img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User"  name="iconuser" id="userIcon" onclick="toggleLoginModal()"></a>
                <a href="login.php"><img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="Cart"></a>
            </div>
        </div>
        
    </header>
<?php
}?>