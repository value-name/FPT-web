<?php
    session_start();
    ob_start();
    include "admin/connectdb.php";
    include "admin/user.php"; 
    
    $kq=getall_dm();
    
    switch ($_GET['act']) {
        case 'about':
            include "indexheader.php";
            $hot=getall_casehot();
            include "index.php";
            break;
        case 'thoat':
                
            unset($_SESSION['role']);
            unset($_SESSION['id']);
            include "indexheader.php";    
            include "index.php";    
            break;                
        case 'timkiem':
            include "indexheader.php";
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }
            $dssp=getall_spyc(0,$kyw);
            include "danhsachsp.php";
            break;
        case'product':
            include "indexheader.php";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                $dssp=getall_spyc($id,"");
            include "danhsachsp.php";
            break;
        case 'taikhoan':
            include "indexheader.php";
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
            $usertt=checkuserid($_SESSION['id']);
            if((isset($_POST['capnhat']))&&($_POST['capnhat'])){
                $user=$_POST['user'];
                $passcu=$_POST['passcu'];
                $passmoi=$_POST['passmoi'];
                $name=$_POST['name'];
                $sdt=$_POST['sdt'];
                $address=$_POST['address'];
                $email=$_POST['email'];
                $id=$_POST['id'];
                $sua=checkusercn($id,$passcu);
                $bool=true;
                if($sua!=0){
                    
                    $txt_sai="Mật khẩu của bạn không chính xác!<br>";
                }
                // else {
                //     $txt_error="Mật khẩu không chính xác!";
                // }
                $rolename = checkusername2($user,$id);
                if ($rolename == 1 || $rolename == 0) {
                    $txt_errorn = "Tên đăng nhập đã tồn tại<br>";
                    $bool=false;
                }
                $rolename2 = checksdt($sdt,$id);
                if ($rolename2 == 1 || $rolename2 == 0) {
                    $txt_errors = "Số điện thoại đã tồn tại<br>";
                    $bool=false;
                }
                
                if (checksdtdd($sdt)== false) {
                    $txt_errorsd = "Số điện thoại không đúng định dạng<br>";
                    $bool=false;
                }
        if (!validateEmail($email)) {
            $txt_errore = "Email không hợp lệ<br>";
            $bool=false;
        } else {
            
            $role = checkemail2($email,$id);
    
        if ($role == 1 || $role == 0) {
                $txt_errore = "Email đã tồn tại<br>";
                $bool=false;
            }
        }
        $txt_errorp = validatePassword($passmoi);
        if($bool==true){
            suauser($id,$email,$address,$name,$passmoi,$user,$sdt);
            $txt_fn="Bạn đã cập nhật thông tin thành công!";
        }
            }
            include "taikhoan.php";
            break;
            case 'chitietsanpham':
                include "indexheader.php";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                 $casect=getonecasesp($id);
                include "chitietsanpham.php";
                break;
                case 'tru':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id=$_GET['id'];
                        if(isset($_GET['idsp'])){
                        $idsp=$_GET['idsp'];
                        }
                        $soluong=getgiohangid($id);
                        if($soluong[0]['soluong']>1){
                            $sl=$soluong[0]['soluong']-1;
                            updategh($id,$sl);
                        }
                    }if(isset($idsp)){
                        header('location:controller.php?act=muangay&idsp='.$idsp.'');
                    }
                    else header('location:controller.php?act=giohang');
                    break; 
                case 'cong':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id=$_GET['id'];
                        if(isset($_GET['idsp'])){
                            $idsp=$_GET['idsp'];
                            }
                        $soluong=getgiohangid($id);
                        $sl=$soluong[0]['soluong']+1;
                        updategh($id,$sl);
                    }
                    if(isset($idsp)){
                        header('location:controller.php?act=muangay&idsp='.$idsp.'');
                    }
                    else header('location:controller.php?act=giohang');
                    break; 
        case 'giohang':
            include "indexheader.php";

            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $trung=checkspgh($_SESSION['id'],$id);
                if(count($trung)== 0){
                    $casect=getonecasesp($id);
                addgh($_SESSION['id'],$id,1);
                }
                else {
                    $sptrung=checkslsp($_SESSION['id'],$id);
                    $sl=$sptrung[0]['soluong']+ 1;
                    updategh($sptrung[0]['id'],$sl);}
            }
            $gio=getgiohangnd($_SESSION['id']);
            include "giohang.php";
            break;
        case 'xoagiohang':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                delgiohang($id);
            }
            $gio=getgiohangnd($_SESSION['id']);
            header('location:controller.php?act=giohang');
            break;
            case 'donhang':
                include "indexheader.php";
                
                
                if(isset($_POST['xacnhan'])&&($_POST['xacnhan'])){
                    $id=[];$dem=0;
                    $cuoi=$_POST['cuoi'];
                    
                    for( $i=0; $i<=$cuoi ;$i++){
                    if(isset($_POST['check'.$i.''])){
                        $id[$dem]=$i;
                        $dem++;
                    }
                    
                }
                }
                if(isset($_POST['xacnhan2'])&&($_POST['xacnhan2'])){
                    $id=[];
                    $sdt=$_POST['sdt'];
                    $sum=$_POST['sum'];
                    if(isset($_POST['item'])){
                        $id[] = $_POST['item']; 
                    }
                    $address=$_POST['address'];
                    $name=$_POST['name'];
                    $bool=true;
                    if (checksdtdd($sdt)== false) {
                        $txt_errorsd = "Số điện thoại không đúng định dạng<br>";
                        $bool=false;
                    }
                    if($bool==true){
                    $iddh=adddh($_SESSION['id'],$sum,$sdt,$address,$name);
                    foreach($id as $idmoi){
                        foreach($idmoi as $idmoihon){
                        $ctdh = getgiohangid($idmoihon);
                        addspdh($ctdh[0]['idsp'],$iddh,$ctdh[0]['soluong'],getonecasesp($ctdh[0]['idsp'])[0]['gia']);
                        delgiohang( $idmoihon);
                   } }

                    $txt_fn="Bạn đã đặt hàng thành công!";
                }    
                
                    }
                include "donhang.php";
                break; 
            case 'xemdonhang':
                include "indexheader.php";
                $dsdh= getalldh($_SESSION['id']);
                include "xemdonhang.php";
                break;  
            case 'muangay':
                include "indexheader.php";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    if(!checkslsp($_SESSION['id'],$id)){
                    $gh=addmuangay($_SESSION['id'],$id,1);}
                    else $gh=checkslsp($_SESSION['id'],$id)[0]['id'];
                    $ghmn=getgiohangid($gh);
                    $muangay=getonecasesp($id);
                }

                else if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $ghmn=checkslsp($_SESSION['id'],$id);
                    $gh=$ghmn[0]['id'];
                    $muangay=getonecasesp($id);
                }
                else if(isset($_POST['muangay'])&&($_POST['muangay']>0)){
                    $id=$_POST['id'];
                    if(!checkslsp($_SESSION['id'],$id)){
                    $gh=addmuangay($_SESSION['id'],$id,1);}
                    else $gh=checkslsp($_SESSION['id'],$id)[0]['id'];
                    $ghmn=getgiohangid($gh);
                    $muangay=getonecasesp($id);
                }
                include "donhang.php";
                break;
            case 'huydonhang':
                include "indexheader.php";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    huydonhang($id);
                }

                header('location:controller.php?act=xemdonhang');
                break;
            case 'nhandonhang':
                include "indexheader.php";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    nhanhang($id);
                }
                header('location:controller.php?act=xemdonhang');
                break;
        default:
        include "indexheader.php";
            include "index.php";
            break;
        }
    include "indexfooter.php";
?>