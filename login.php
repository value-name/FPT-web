<?php
    session_start();
    ob_start();
    include"admin/connectdb.php";
    include"admin/user.php";
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role=checkuser($user,$pass);
        $ttuser=checkusertt($user,$pass);
        $_SESSION['id']=$ttuser;
        $_SESSION['role']=$role;
        if($role==1) header('location:admin/admin.php');
        else if($role==0) header('location:controller.php?act=about');
        else {
            $txt_error="Tên đăng nhập hoặc Mật khẩu không chính xác";
        }
    }
?> 
<!DOCTYPE html>  
<html>  
<head>  
    <title>Đăng nhập</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f2f2f2;  
        }  

        .container {  
            background-color: white;  
            padding: 20px;  
            border-radius: 5px;  
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
            max-width: 400px;  
            margin: 50px auto;  
        }  

        input[type=text], input[type=password] {  
            width: 100%;  
            padding: 12px 20px;  
            margin: 8px 0;  
            display: inline-block;  
            border: 1px solid #ccc;  
            border-radius: 4px;  
            box-sizing: border-box;  
        }  

        button {  
            background-color: #4CAF50;  
            color: white;  
            padding: 14px 20px;  
            margin: 8px 0;  
            border: none;  
            border-radius: 4px;  
            cursor: pointer;  
            width: 100%;  
        }  

        button:hover {  
            background-color: #45a049;  
        }  

        .register-link {  
            text-align: center;  
            margin-top: 10px;  
        }  

        .register-link a {  
            color: #4CAF50;  
            text-decoration: none;  
        }  

        .register-link a:hover {  
            color: #45a049;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h2>Đăng nhập</h2>  
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">  
            <label for="username">Nhập tên đăng nhập:</label>  
            <input type="text" id="user" name="user" placeholder="Nhập tên đăng nhập" required>  

            <label for="password">Mật khẩu:</label>  
            <input type="password" id="pass" name="pass" placeholder="Nhập mật khẩu" required>  
            <?php
            if(isset($txt_error)&&($txt_error)!=""){
                echo "<font color='red'>".$txt_error."</font>";
            }?>
            <button type="submit" name="dangnhap" value="đăng nhập">Đăng nhập</button>  
        </form>  
        <div class="register-link">  
            <p>Chưa có tài khoản? <a href="signin.php">Đăng ký</a></p>  
        </div>  
    </div>  
</body>  
</html>