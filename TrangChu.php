<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width,inititak-scale=1.0">
<script src="https://fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="CSS.style">
<link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.min.css">
<link rel="stylesheet" type="text/css" href="CSS.css"/>
<title>NTD SHOP</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href=""><img src="HinhAnh/logo.png" style="width: 80px"> </a>
        </div>
        <div class="menu">
            <li><a href="">TRANG CHỦ</a>
            <li><a href="SanPham.html">ÁO NAM</a>
                <ul class="submenu">
                <?php
                                
                                $connection= mysqli_connect("localhost", "root", "", "webbanquanao"); 
                                $sql1="sELECT * FROM `loaisanpham` WHERE TenLoaiSP LIKE 'A%'";
                                mysqli_query($connection,"set names 'utf8'");
                                $query1=mysqli_query($connection,$sql1);
                                while($data1= mysqli_fetch_array($query1))
                                {    
                                    $link="?thamso=xuat_loai_san_pham&id=".$data1['MaLoaiSP'];
                                    ?>
                                <a   href="SanPham.php<?php echo $link; ?>" class="TenDSSP"><?php echo $data1['TenLoaiSP']; ?></a></li>
                    <br />
                   <?php } ?>
                </ul>
            </li>
            <li><a href="">QUẦN NAM</a>
                <ul class="submenu">
                <?php
                                
                                $connection= mysqli_connect("localhost", "root", "", "webbanquanao"); 
                                $sql1="sELECT * FROM `loaisanpham` WHERE TenLoaiSP LIKE 'Q%'";
                                mysqli_query($connection,"set names 'utf8'");
                                $query1=mysqli_query($connection,$sql1);
                                while($data1= mysqli_fetch_array($query1))
                                {    
                                    $link="?thamso=xuat_loai_san_pham&id=".$data1['MaLoaiSP'];
                                    ?>
                                <a   href="SanPham.php<?php echo $link; ?>" class="TenDSSP"><?php echo $data1['TenLoaiSP']; ?></a></li>
                    <br />
                   <?php } ?>
                </ul>
            </li>
            <li><a href="">GIỚI THIỆU</a></li>
            <li><a href="">TIN TỨC</a></li>
            <li><a href="">THÔNG TIN</a></li>
        </div>
        <div class="other">
            <li><input placeholder="Tim kiem" type="text"><i class="fas fa-search" href=""></i></li>
            <li><a class="fas fa-user" href=""></a></li>
            <li><a class="fas fa-shopping-cart" href=""></a></li>
        </div>
    </header>
<section id="slider">
    <div class="aspect-ratio-169">
        <img src="HinhAnh/slide/slide1.jpg" >
        <img src="HinhAnh/slide/slide2.jpg" >
        <img src="HinhAnh/slide/slide3.jpg" >
    </div>
    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>
<section class="app-container">
    <p>Tải ứng dụng NTD SHOP</p>
    <div class="app-google">
        <img src="HinhAnh/app.png">
        <img src="HinhAnh/android.jpg">
        <p><br><br> Nhập bản tin NTD SHOP</p>
        <li><input type="text" placeholder="Nhập email của bạn...."><a class="fas fa-arrow-right" href=""></a></li>
    </div>
   
    
</section>
<div class="footer-top">
    <li><a href=""><img src="HinhAnh/logo.png" alt=""></a></li>
    <li><a href=""></a>Liên hệ</li>
    <li><a href=""></a>Tuyển dụng</li>
    <li><a href=""></a>Giới thiệu</li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
    <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650 <br>
        Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam - 0243 205 2222 <br>
        Đặt hàng online : <b>0246 662 3434</b> .
    </p>
</div>
<div class="footer-bottom">
    ©Ivymoda All rights reserved
</div>
</body>
<script>
    const header=document.querySelector("header")
    window.addEventListener("scroll",function(){
        x=window.pageYOffset
        if(x>0){
            header.classList.add("sticky")
        }
        else{
            header.classList.remove("sticky")
        }
    })

    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer=document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index=0
    //console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left=index*100 + "%"
        dotItem[index].addEventListener("click",function(){
        slider(index)
        })
    })
    function imgSlide(){
        index++;
        if(index>=imgNuber){index=0}
        slider(index)
    }
    function slider(index){
        imgContainer.style.left="-"+index*100+"%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,3000)

</script>
</html>
