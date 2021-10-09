<?php

require_once('db/dbhelper.php');
require_once('utils/utilities.php');

$list_product = executeResult('select * from products');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all,follow">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-
    B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
    DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
    <title>Document</title>
    <script>
        /* $.post('api/cookie.php', {
                'action': 'add',
                'id': id,
                'num': 1
            }, function(data) {
                header("Location: sign_in.php");
            })  */

        function nav() {
            var sideNav = document.getElementById("nav");
            var menu = document.getElementById("menu");
            if (sideNav.style.left == "-250px") {
                sideNav.style.left = "0";
                menu.src = "image/close.png";
            } else {
                sideNav.style.left = "-250px";
                menu.src = "image/menu.png";
            }
        }

        function addToCart(id) {
            //var data_test = 'This is first demo';
            $.ajax({
                url: 'api/cookie.php',
                type: 'POST',
                data: {
                    'action': 'add',
                    'id': id,
                    'num': 1
                },
                success: function(data) {
                    location.reload();
                },
                error: function(e) {
                    console.log(e.message);
                }
            });
        }
    </script>
</head>

<body onload="nav()">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-4 div_1">
                    <img src="image/LU/Logo Bánh Lu.png" alt="">
                </div>
                <div class="col-lg-7 col-md-5 col-sm-9 col-8 div_2">
                    <div>
                        <div class="div_2_2">
                            <nav>
                                <a href="cart.php"><img src="image/icons8-cart-64.png" alt=""></a>
                                <a href="#">Đăng nhập</a>
                                <a href="#">Đăng ký</a>
                            </nav>
                        </div>
                        <div class="middle">
                            <input type="text" placeholder="Điền loại bánh cần tìm">
                            <div>
                                <select id="multiSelect">
                                    <option value="">All</option>
                                    <option value="">Bánh quế Lu Wafer 97.5g</option>
                                    <option value="">Bánh quế Lu Wafer 234g</option>
                                    <option value="">Cookies bơ Pháp LU 180g</option>
                                    <option value="">Cookies bơ Pháp LU 310g</option>
                                    <option value="">Cookies bơ Pháp LU 540g</option>
                                    <option value="">Cookies bơ Pháp LU 708g</option>
                                    <option value="">Cookies bơ Pháp LU 894g</option>
                                    <option value="">Lu veritable petit beurre 600g</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 div_3">
                    <nav>
                        <div><a href="cart.php"><img src="image/icons8-cart-64.png" alt=""></a></div>
                        <div class="login"><a href="#">Đăng nhập</a></div>
                        <div class="login"><a href="#">Đăng ký</a></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
    $count = 0;
    $cart = [];
    if (isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    foreach ($cart as $item) {
        $count += $item['num'];
    }
    ?>
    <div id="nav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">TRANG CHỦ</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">BẢNG GIÁ 2022</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">BÁNH QUẾ LU WAFER</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">BÁNH COOKIES BƠ PHÁP LU</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">LU VERITABLE PETIT BEURRE</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">LIÊN HỆ</a>
            </li>
            <div class="dropdown-divider"></div>
        </ul>
    </div>
    <div class="lien_he">
        <div>
            <a href="#">
                <img src="image/fb.png" alt="">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/youtube.png" alt="">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/zalo.png" alt="">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/twitter.png" alt="">
            </a>
        </div>
    </div>
    <div id="menuBtn" onclick="nav()"><img src="image/menu.png" id="menu"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active img">
                <img class="d-block w-100" src="image/background.png" alt="First slide">
            </div>
            <div class="carousel-item img">
                <img class="d-block w-100" src="image/kinh_do1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item img">
                <img class="d-block w-100" src="image/kinh_do2.jpeg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="trangVang">
        <div class="header">
            BÁNH LU 2022
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($list_product as $item) {
                        echo '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 item" style="padding: 15px; height: fit-content;">
                                    <div class="img">
                                        <img class="card-img-top" src="' . $item['thumbnail'] . '" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div>' . $item['title'] . '</div>
                                        <div style="font-size: 16px; color: red;">' . number_format($item['price'], 0, ',', '.') . '</div>
                                        <div>
                                            <button onclick="addToCart(' . $item['id'] . ')">ĐẶT HÀNG</button>
                                        </div>
                                    </div>
                                </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="news">
        <div class="header">
            Tin Tức Sự Kiện
        </div>
        <div class="content container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/bí mật ẩn sau chiếc bánh quy Lu trứ danh của nước Pháp.jpg" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="https://tiengphapthuvi.fr/bi-mat-sau-chiec-banh-quy-lu-tru-danh-cua-nuoc-phap/" target="_blank">
                                        BÍ MẬT ẨN SAU CHIẾC BÁNH QUY LU TRỨ DANH CỦA NƯỚC PHÁP
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">02/12/2021</p>
                            </div>
                            <hr>
                            <div>
                                <p>Suốt chiều dài lịch sử 170 năm, có mặt trên hơn 100 quốc gia,
                                    bánh quy LU vẫn giữ được danh tiếng nhờ hương vị tinh tế bất chấp thời gian.
                                    Và ẩn sau mỗi chiếc bánh ấy là những câu chuyện thú vị về nền văn hóa Pháp –
                                    cái nôi của văn hóa châu Âu.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/Tết là gì trong suy nghĩ của cánh mày râu.jpg" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="https://afamily.vn/tet-la-gi-trong-suy-nghi-cua-canh-may-rau-20190118162957808.chn" target="_blank">
                                        TẾT LÀ GÌ TRONG SUY NGHĨ CỦA CÁNH MÀY RÂU?
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">16/12/2021</p>
                            </div>
                            <hr>
                            <div>
                                <p>Mỗi độ Tết về, mạng xã hội lại dậy sóng những luồng ý kiến trái chiều
                                    về vai trò và sự bận rộn của người phụ nữ trong ngày Tết.
                                    Số đông thấu hiểu sự vất vả với người phụ nữ, số khác lên tiếng chê trách
                                    cánh đàn ông thiếu sự hỗ trợ và chia sẻ. Vậy những người đàn ông, họ nghĩ gì khi Tết đến?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/Xu hướng chọn hộp quà bánh ngày Tết.jpg" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cac-hop-banh-quy-dep-ngon-thich-hop-lam-qua-tang-ngay-tet-1228863" target="_blank">
                                        XU HƯỚNG CHỌN HỘP QUÀ BÁNH NGÀY TẾT CỦA NGƯỜI VIỆT
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">01/01/2021</p>
                            </div>
                            <hr>
                            <div>
                                <p>Các hộp bánh quy đẹp, ngon thích hợp tặng Tết luôn là chủ đề tìm kiếm
                                    mỗi khi Tết đến xuân về. Bởi lựa chọn quà biếu Tết tặng gia đình,
                                    bạn bè, đồng nghiệp, đối tác,... vừa mang ý nghĩa gửi đi may mắn, bình an,
                                    vừa chứa đựng tình cảm người gửi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/cách làm bánh quy bơ.jfif" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="http://www.savourydays.com/cach-lam-banh-quy-bo-tet/" target="_blank">
                                        CÁCH LÀM BÁNH QUY BẰNG NỒI CHIÊN KHÔNG DẦU
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">22/01/2022</p>
                            </div>
                            <hr>
                            <div>
                                <p>Trong thời điểm Tết đến Xuân về, các công thức món ăn,
                                    cách làm bánh quy bằng nồi chiên không dầu đã trở thành một trào lưu
                                    rất được Hội yêu bếp nghiện làm bánh ưa chuộng. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="contact">
            <div class="chi_nhanh">
                <div>
                    <div class="header">
                        ĐIỂM BÁN BÁNH LU 2022
                    </div>
                    <h4>CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN SXTM HOÀNG GIA</h4>
                    <div>
                        <p>
                            <span>Showroom: 5 Bùi Tá Hán, An Phú, Quận 2, Hồ Chí Minh</span><br>
                            Địa chỉ thuế:4/3 Lương Đình Của, Phường Bình An, quận 2, Tphcm <br>
                            Mã số thuế: 0313396342 (12/08/2015) <br>
                            Hotline: 0901.69.8910- 09.0203.8910 <br>
                            Ngày hoạt động: 12/08/2015,GPKD: 0313396342 <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="script">
                Tất cả các sản phẩm bánh trung thu kinh đô 2021 được Hoàng Gia nhập trực tiếp từ tổng công ty
                Kinh Đô Mondelez và bán theo chính sách giá của công ty với đầy đủ các thông tin về sản phẩm
                hình ảnh được chụp ảnh trực tiếp khi nhập về để bán lại cho quý khách hàng và đầy đủ hoát đơn VAT.
                Vì vậy mọi quyền lợi về hình ảnh được bảo lưu với lí do thương mại đại lý sỉ và Hoàng Gia tự chụp ảnh
                và sử dụng ảnh sản phẩm sau khi đã mua hàng về chụp trực tiếp.
            </div>
        </div>
        <div class="bottom"></div>
    </div>
    <div id="demo-ajax"></div>
</body>

</html>