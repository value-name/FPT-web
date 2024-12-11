 <?php
    session_start();
    ob_start();
    include"admin/connectdb.php";
    include"admin/user.php";
    function validateEmail($email) {
        // Sanitize the email address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
        // Validate the sanitized email address
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    $bool=true;
    function validatePassword($pass) {
        $errorp = '';
    
        if (strlen($pass) <= 8) {
            $errorp .= 'Mật khẩu phải dài hơn 8 ký tự.<br>';
            $bool=false;
        }
        if (!preg_match('/[A-Z]/', $pass)) {
            $errorp .= 'Mật khẩu phải chứa ít nhất 1 chữ hoa.<br>';
            $bool=false;
        }
        if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $pass)) {
            $errorp .= 'Mật khẩu phải chứa ít nhất 1 ký tự đặc biệt.<br>';
            $bool=false;
        }
    
        return $errorp;
    }
    if (isset($_POST['dangky']) && $_POST['dangky']) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $rolename = checkusername($user);
        if ($rolename == 1 || $rolename == 0) {
                    $txt_errorn = "Tên đăng nhập đã tồn tại<br>";
                    $bool=false;
                }
        if (!validateEmail($email)) {
            $txt_errore = "Email không hợp lệ<br>";
            $bool=false;
        } else {
            
            $role = checkemail($email);
    
            
        if ($role == 1 || $role == 0) {
                $txt_errore = "Email đã tồn tại<br>";
                $bool=false;
            }
        }
        $txt_errorp = validatePassword($pass);
        if($bool==true){
            adduser($user,$email,$pass);
            $txt_fn="Bạn đã đăng ký thành công hãy tới trang đăng nhập";
        }
    }

?>  
<!DOCTYPE html>  
<html>  
<head>  
    <title>Đăng ký</title>  
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

        .login-link {  
            text-align: center;  
            margin-top: 10px;  
        }  

        .login-link a {  
            color: #4CAF50;  
            text-decoration: none;  
        }  

        .login-link a:hover {  
            color: #45a049;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h2>Đăng ký</h2>  
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="registrationForm">  
            <label for="user">Nhập tên đăg nhập:</label>  
            <input type="text" id="user" name="user" placeholder="Nhập tên đăg nhập" required>  

            <label for="email">Nhập Email:</label>  
            <input type="text" id="email" name="email" placeholder="Nhập Email" required>  

            <label for="pass">Mật khẩu:</label>  
            <input type="password" id="pass" name="pass" placeholder="Nhập mật khẩu" required>  
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
            
            if(isset($txt_fn)&&($txt_fn)!=""){
                echo "<font color='green' style='padding: 10px 0;'>".$txt_fn."</font>";
            }else echo "";
            ?>
            <button type="submit" name="dangky" value="đăng ký">Đăng ký</button>  
        </form>  
        <div class="login-link">  
            <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>  
        </div>  
    </div>  
</body>  
</html>
