
<?php
    
?> 
<head>  
    <title>Đăng nhập</title>  
    <link rel="stylesheet" href="taikhoan.css">
</head>  
<body>  
    <div class="container">  
        <h2>Sửa thông tin </h2>  
        <form action="controller.php?act=taikhoan" method="post">  
            <label for="username">Nhập tên đăng nhập mới:</label>  
            <input  value="<?=$usertt[0]['user']?>" type="text" name="user" placeholder="Tên đăng nhập" id=""required>
            <label for="name">Nhập tên mới:</label>   
            <input  value="<?=$usertt[0]['name']?>"placeholder="Họ và Tên" type="text" name="name"id="" required>
            <label for="name">Nhập số điện thoại mới:</label>   
            <input  value="<?=$usertt[0]['sdt']?>"placeholder="Số điện thoại" type="text" name="sdt"id="" required>
            <label for="address">Nhập địa chỉ mới:</label>  
            <input  value="<?=$usertt[0]['address']?>"  type="text" name="address" placeholder="Địa chỉ" id=""required>  
            <label for="email">Nhập email mới:</label>  
            <input  value="<?=$usertt[0]['email']?>"  type="text" name="email" placeholder="Email đăng nhập" id=""required>
            <label for="passcu">Nhập mật khẩu cũ:</label>
            <input  type="password" id="" name="passcu" placeholder="Nhập mật khẩu cũ" required>  
            <label for="passmoi">Nhập mật khẩu mới:</label>  
            <input  type="password" id="" name="passmoi" placeholder="Nhập mật khẩu mới" required>  
            <?php
            if(isset($txt_errorn)&&($txt_errorn)!=""){
                echo "<font color='red' style='padding: 10px 0;'>".$txt_errorn."</font>";
            }
            else echo "";
            if(isset($txt_errorp)&&($txt_errorp)!=""){
                echo "<font color='red' style='padding: 10px 0;'>".$txt_errorp."</font>";
            }
            else echo "";
            if(isset($txt_errore)&&($txt_errore)!=""){
                echo "<font color='red' style='padding: 10px 0;'>".$txt_errore."</font>";
            }else echo "";
            if(isset($txt_sai)&&($txt_sai)!=""){
                echo "<font color='red' style='padding: 10px 0;'>".$txt_sai."</font>";
            }else echo "";
            if(isset($txt_errors)&&($txt_errors)!=""){
                echo "<font color='red' style='padding: 10px 0;'>".$txt_errors."</font>";
            }else echo "";
            if(isset($txt_errorsd)&&($txt_errorsd)!=""){
                echo "<font color='red' style='padding: 10px 0;'>".$txt_errorsd."</font>";
            }else echo "";
            if(isset($txt_fn)&&($txt_fn)!=""){
                echo "<font color='green' style='padding: 10px 0;'>".$txt_fn."</font>";
            }else echo "";?>
        <input type="hidden" name="id" value="<?=$usertt[0]['id']?>">
            <button type="submit" name="capnhat" value="cập nhật" >cập nhật</button>  
        </form>  
        <a href="controller.php?act=thoat">Đăng xuất</a>
    </div>  
</body>  