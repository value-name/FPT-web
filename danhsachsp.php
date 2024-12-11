<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Danhsachsp.css">
    <title>Danh sách sản phẩm</title>
</head>
<body>
<?php

foreach ($dssp as $sp) {
   echo'<h2>'.$sp['tensp'].'</h2>';
   $dscase=getall_casespyc($sp['id']);

   $dem=count($dscase);
   echo '<section class="motachitiet" id="lap" style="">';
   foreach ($dscase as $case) {
    
        echo '
        <a href="controller.php?act=chitietsanpham&id='.$case['id'].'" class="mota-link">
            <div class="mota">
                <img src="./upload/'.$case['img'].'" width="100px">
                <h3>'.$sp['tensp'].' | BỘ nhớ'.$case['dungluong'].' | '.$case['dungluong1'].' Ram</h3>
                <p class="price">'.$case['gia'].'<span class="old-price">'.$case['giacu'].'₫</span></p>
                <p class="discount">Giảm giá</p>
                <button>Mua ngay</button>
            </div>
        </a>';
        
   } 
        echo '</section>';
   }
?>
    </section>
</body>
</html>