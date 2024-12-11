
    <main>
        <section class="banner">
            <img src="anh/poster.png" alt="iPhone 16 Pro">
            <div class="banner-content">
                <h1>Vô Cùng Mạnh Mẽ - iPhone 16 Pro</h1>
                <p>Ưu đãi đến 3 triệu đồng - Trả góp 0% trong 24 tháng.</p>
                <a href="chitietsanpham.html"><button>Mua Ngay</button></a>
            </div>
        </section>
        <section class="product-categories">
            <div class="category">
                <h3>Laptop</h3>
                <a href="danhsachsp.html#lap"><img src="anh/lap.png" alt="Laptop"></a>
            </div>
            <div class="category">
                <h3>Điện thoại</h3>
                <a href="danhsachsp.html#dienthoai"><img src="anh/dienthoai.png" alt="Điện thoại"></a>
            </div>
            <div class="category">
                <h3>Đồng hồ thông minh</h3>
                <a href="danhsachsp.html#phukien"><img src="anh/dongho.png" alt="Đồng hồ thông minh"></a>
            </div>
            <div class="category">
                <h3>Tivi</h3>
                <a href="danhsachsp.html#dogiadung"><img src="anh/tivi.png" alt="Tivi"></a>
            </div>
            <div class="category">
                <h3>Máy giặt</h3>
                <a href="danhsachsp.html#dogiadung"><img src="anh/maygiat.png" alt="Máy giặt"></a>
            </div>
            <div class="category">
                <h3>Máy tính bảng</h3>
                <a href="danhsachsp.html#lap"><img src="anh/maytinhbang.png" alt="Máy tính bảng"></a>
            </div>
            <div class="category">
                <h3>Phụ kiện</h3>
                <a href="danhsachsp.html#phukien"><img src="anh/phukien.png" alt="Phụ kiện"></a>
            </div>
            <div class="category">
                <h3>Robot hút bụi</h3>
                <a href="danhsachsp.html#dogiadung"><img src="anh/hutbui.png" alt="Robot hút bụi"></a>
            </div>
        </section>
        <section class="tieude1">
            <h1>Xu hướng</h1>
        </section>
        <?php
        echo'<section class="motachitiet">';
        foreach ($hot as $casehot) {
            
            $sp=getonesp($casehot['idsp']);
        echo '
        <a href="controller.php?act=chitietsanpham&id='.$casehot['id'].'" class="mota-link">
        <form action ="controller.php?act=muangay" method ="post">
            <div class="mota">
                <img src="./upload/'.$casehot['img'].'" >
                <h3>'.$sp[0]['tensp'].' | BỘ nhớ'.$casehot['dungluong'].' | '.$casehot['dungluong1'].' Ram</h3>
                <p class="price">'.$casehot['gia'].'<span class="old-price">'.$casehot['giacu'].'₫</span></p>
                <p class="discount">Giảm giá</p>
                <input type="hidden" name="id" value="'.$casehot['id'].'">
                <button><input style="color:white; border:none" type="submit" name="muangay" value="Mua ngay"></button>
            </div>
        </form>
        </a>';
        
} echo '</section>';
?>
        </section>
        <section class="services">
            <div class="service">
                <a href=""><img src="anh/thegame.svg" alt="Thẻ game"></a>
                <p>Thẻ game</p>
            </div>
            <div class="service">
                <a href=""><img src="anh/phiinternet.svg" alt="Đóng phí Internet"></a>
                <p>Đóng phí Internet</p>
            </div>
            <div class="service">
                <a href=""><img src="anh/thanhtoan.svg" alt="Thanh toán trả góp"></a>
                <p>Thanh toán trả góp</p>
            </div>
            <div class="service">
                <a href=""><img src="anh/tiendien.svg" alt="Tiền nước"></a>
                <p>Tiền nước</p>
            </div>
            <div class="service">
                <a href=""><img src="anh/tiendien.svg" alt="Tiền điện"></a>
                <p>Tiền điện</p>
            </div>
            <div class="service">
                <a href=""><img src="anh/dichvukhac.svg" alt="Dịch vụ khác"></a>
                <p>Dịch vụ khác</p>
            </div>
        </section>
    </main>
