<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #header {
            width: 100%;
        }

        .wrapper {
            width: 100%;
            background-color: rgb(170, 29, 4);
            height: 120px;
        }

        .wrapper .on {
            width: 100%;
            height: 120px;
            display: flex;
            flex-direction: row;

        }

        .wrapper .on>div {
            float: left;
        }

        .div_1 {
            height: 120px;
            line-height: 120px;
            width: 29%;
            text-align: right;
            font-size: 19px;
            color: rgb(192, 194, 63);
        }

        .div_2 {
            width: 42%;
            height: 120px;
            color: white;
            padding: 15px 25px 30px 25px;
        }

        .div_3 {
            height: 120px;
            width: 29%;
        }

        .div_2 .top {
            width: 100%;
            height: 25px;
            display: flex;
        }

        .div_2 .top>div {
            height: 25px;
            line-height: 25px;
            padding-left: 20px;
        }

        .div_2 .middle {
            width: 100%;
            height: 35px;
        }

        .div_2 .middle>div {
            height: 100%;
            line-height: 30px;
            float: left;
        }

        .middle select {
            border-radius: 3px;
            height: 100%;
            width: 50px;
        }

        .middle input {
            width: calc(100% - 50px);
            height: 100%;
            padding-left: 8px;
        }

        .div_2 .bottom {
            width: 100%;
            height: 40px;
            line-height: 40px;
        }

        .div_3>div {
            color: white;
            width: 114px;
            margin: auto;
            margin-top: 42.5px;
            padding: 0 7px;
            border: thin solid white;
            border-radius: 5px;
            height: 35px;
            font-size: 14px;
            line-height: 35px;
        }

        .div_3 .img {
            width: 23px;
            height: 30px;
            margin-top: 2.5px;
            float: right;
        }

        .div_3 .img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        #under {
            background-color: rgb(170, 29, 4);
            width: 100%;
            height: 50px;
            transition: top 1s;
        }

        #under>div {
            color: #ddd;
            height: 50px;
            line-height: 50px;
            font-size: 14.5px;
            width: 85%;
            margin: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        #under>div>div {
            background-color: rgb(170, 29, 4);
            padding: 0 7px;
            transition: 0.3s;
        }

        #under>div>div:hover {
            cursor: pointer;
            background-color: rgb(175, 112, 93);
            border-radius: 3px;
        }

        #main {
            width: 100%;
            height: fit-content;
        }

        #main .img {
            background-image: linear-gradient(to top, rgb(218, 195, 121) 20%, rgb(235, 184, 46) 80%);
            width: 100%;
            margin: auto;
        }

        #main .img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        #trangVang {
            background-color: rgb(241, 241, 241);
            width: 100%;
            padding-bottom: 30px;
        }

        #trangVang .header {
            width: 100%;
            text-align: center;
            height: 100px;
            color: rgb(31, 197, 31);
            line-height: 100px;
        }

        .content {
            width: 100%;
        }

        .content>div {
            text-align: center;
            padding: 10px 0;
        }

        .trangVang {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            width: 84%;
            grid-gap: 8px;
            margin: auto;
        }

        .trangVang>div {
            padding: 15px 5px;
            background-color: white;
            transition: 0.4s;
        }

        .trangVang>div:hover {
            cursor: pointer;
            margin-top: -4px;
            margin-bottom: 4px;
        }

        .trangVang .img {
            width: 100%;
            height: 160px;
        }

        .trangVang img {
            width: 100%;
            height: 100%;
        }

        .trangVang .script {
            text-align: center;
            font-size: 20px;
        }

        .trangVang .script>div {
            padding: 5px 0;
        }

        .trangVang button {
            width: 100px;
            height: 30px;
            background-color: red;
            color: white;
        }

        .trangVang button:hover {
            cursor: pointer;
            background-color: brown;
        }

        #news {
            padding: 30px 0 170px 0;
        }

        #news .header {
            width: 100%;
            color: rgb(158, 19, 19);
            text-align: center;
            height: 80px;
            line-height: 80px;
        }

        #news .content {
            display: grid;
            grid-gap: 25px;
            grid-template-columns: auto auto auto auto;
            width: 84%;
            margin: auto;
        }

        #news .content>div {
            text-align: left;
        }

        #news .content>div>div {
            position: relative;
        }

        #news .content .img {
            opacity: 0.6;
            transition: 0.6s;
            width: 100%;
            height: 300px;
        }

        #news .content .script {
            opacity: 0;
            position: absolute;
            top: 80%;
            transition: 0.9s;
        }

        #news .content>div:hover .img {
            cursor: pointer;
            opacity: 1;
        }

        #news .content>div:hover .script {
            top: 100%;
            opacity: 1;
        }

        #news .content .script>div {
            padding: 4px 0;
        }

        #news .content .script hr {
            width: 30px;
        }

        #news .content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #news span {
            color: rgb(158, 19, 19);
        }

        #contact {
            width: 100%;
            background-color: rgb(170, 29, 4);
            padding-top: 30px;
            color: rgb(224, 224, 224);
        }

        #contact .contact {
            box-shadow: 0px 3px 5px rgb(114, 18, 1);
        }

        #contact .contact .chi_nhanh {
            width: 84%;
            margin: auto;
            display: grid;
            grid-template-columns: calc(100% / 3) calc(100% / 3) calc(100% / 3);
            grid-gap: 25px;
        }

        #contact .contact .chi_nhanh>div .header {
            width: 100%;
            height: 45px;
            line-height: 45px;
            padding-left: 10px;
            font-size: 18px;
            font-weight: bold;
            background-color: rgb(114, 29, 3);
        }

        #contact hr {
            width: 25px;
            margin: 15px 0;
        }

        #contact h4 {
            font-size: 13.8px;
            margin: 15px 0;
        }

        #contact p {
            line-height: 28px;
        }

        #contact .script {
            padding: 50px 150px 15px 150px;
            text-align: center;
            color: rgb(180, 179, 179);
            font-size: 16.5px;
            line-height: 22px;
        }
        #contact .bottom {
            margin-top: 5px;
            z-index: -1;
            width: 100%;
            height: 65px;
            background-color: rgb(170, 29, 4);
        }
    </style>
    <script>
        function successful_login(){
            alert('Chào mừng quý khách hàng đã đến với cửa hàng Bánh Trung Thu Kinh Đô của chúng tôi')
        }
        var under = document.getElementById('under');
        window.addEventListener("scroll", function () {
            var y = pageYOffset;
            if (y >= 170) {
                under.style.position = 'fixed';
                under.style.top = y + '50';
            }
            else {
                under.style.position = 'static';
                under.style.top = 'unset';
            }
        })
    </script>
</head>

<body onload="successful_login()">
    <div id="header">
        <div class="wrapper">
            <div class="on">
                <div class="div_1">
                    <p>TẾT TRUNG THU, TẾT CỦA TÌNH THÂN</p>
                </div>
                <div class="div_2">
                    <div class="top">
                        <div>
                            <p>Sale.kinhdomiennam@gmail.com</p>
                        </div>
                        <div>
                            <p>0901.69.8910</p>
                        </div>
                        <div style="font-size: 12px;">
                            Địa chỉ: 5 Bùi Tá Hán, An Phú, Quận 2, HCM
                        </div>
                    </div>
                    <div class="middle">
                        <div>
                            <select>
                                <option value="">All</option>
                                <option value="">Bánh AFC & Kẹo Choco</option>
                                <option value="">Bánh Ăn Chay - Ăn Kiêng</option>
                                <option value="">Bánh Bông Lan Solite</option>
                                <option value="">Bánh Dẻo</option>
                                <option value="">Bánh Nướng</option>
                                <option value="">Bánh Oreo</option>
                                <option value="">Bánh Quy Cosy</option>
                                <option value="">Bánh Quy LU</option>
                                <option value="">Bánh Trung Thu Oreo</option>
                                <option value="">Hộp 2 Bánh</option>
                                <option value="">Hộp 4 Bánh</option>
                                <option value="">Lava Bánh Trung Thu</option>
                                <option value="">Sản Phẩm Mới 2021</option>
                                <option value="">Thiếu Nhi</option>
                                <option value="">Trăng Vàng</option>
                                <option value="">Trăng Vàng Black&Gold</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Điền loại bánh cần tìm">
                    </div>
                    <div class="bottom">
                        <p style="font-size: 14px;">Gợi Ý: Giá Bánh Trung Thu Kinh Đô 2021, Bánh Trăng Vàng Black & Gold
                            2021, Bánh Trăng Vàng
                        </p>
                    </div>
                </div>
                <div class="div_3">
                    <div>
                        GIỎ HÀNG
                        <div class="img">
                            <img src="backend_php/small project/kinh_do/image/icons8-cart-24.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="under">
            <div>
                <div>
                    <p>TRANG CHỦ</p>
                </div>
                <div>
                    <p>BẢNG GIÁ 2021</p>
                </div>
                <div>
                    <p>BLACK & GOLD</p>
                </div>
                <div>
                    <p>TRĂNG VÀNG</p>
                </div>
                <div>
                    <p>MẪU 2021</p>
                </div>
                <div>
                    <p>OREO</p>
                </div>
                <div>
                    <p>LAVA TRỨNG CHẢY</p>
                </div>
                <div>
                    <p>HỘP 2 BÁNH</p>
                </div>
                <div>
                    <p>HỘP 4 BÁNH</p>
                </div>
                <div>
                    <p>BÁNH THƯỜNG</p>
                </div>
                <div>
                    <p>THIẾU NHI</p>
                </div>
                <div>
                    <p>LIÊN HỆ</p>
                </div>
            </div>
        </div>
        <div id="main">
            <div class="img">
                <img src="/small project/kinh_do/image/background.png" alt="">
            </div>
            <div></div>
        </div>
    </div>
    <div id="trangVang">
        <div class="header">
            <h2>Bánh Trung Thu Trăng Vàng Thượng Hạng Black & Gold</h2>
        </div>
        <div class="content">
            <div style="color: rgb(31, 197, 31);">
                <h2>Bánh Trung Thu Trăng Vàng 2021</h2>
            </div>
            <div class="trangVang">
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h1.jpg" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hoàng Kim Vinh Hoa (Vàng)</div>
                        <div style="font-size: 16px; color: red;">1.300.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h2.jpg" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hoàng Kim Vinh Hiển (Đỏ)</div>
                        <div style="font-size: 16px; color: red;">1.300.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h3.png" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hồng Ngọc An Phú (Vàng)</div>
                        <div style="font-size: 16px; color: red;">750.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h4.png" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hồng Ngọc An Thịnh (Đỏ)</div>
                        <div style="font-size: 16px; color: red;">750.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h5.png" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hồng Ngọc An Nhiên (Xanh Dương)</div>
                        <div style="font-size: 16px; color: red;">600.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h6.png" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hồng Ngọc An Lành (Xanh)</div>
                        <div style="font-size: 16px; color: red;">600.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h7.png" alt="">
                    </div>
                    <div class="script">
                        <div>Trăng Vàng Hồng Ngọc An Bình</div>
                        <div style="font-size: 16px; color: red;">550.000 vnđ</div>
                        <div>
                            <button>ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="news">
        <div class="header">
            <h2>Tin Tức Sự Kiện</h2>
        </div>
        <div class="content">
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h8.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>BẢNG GIÁ HỘP QUÀ BÁNH KẸO TẾT KINH ĐÔ 2020</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>Bảng Báo Giá Hộp Quà Bánh Kẹo Tết Kinh Đô 2022 chiết khấu cao chính thức</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h9.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>Phân Phối Bánh Chuối Nướng Cốt Dừa Giá Sỉ Chất Lượng Cao</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>Bánh chuối nướng là loại bánh khá phổ biến dường như ai cùng đã từng thưởng thức</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h10.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>Cung Cấp Bánh Khoai Mì Nướng Số Lượng Lớn Giá Ưu Đãi</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>Bánh khoai mì nướng là một loại thực phẩm được rất nhiều khách hàng yêu
                                thích</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h11.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>Cung Cấp Rau Củ Quả Đà Lạt Đúng Chuẩn Số Lượng Lớn Giá Sỉ</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>Rau củ quả Đà Lạt luôn là những thực phẩm xanh, sạch được nhiều người tin dùng</p>
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
                        ĐIỂM BÁN BÁNH TRUNG THU MIỀN NAM
                    </div>
                    <hr>
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
                <div>
                    <div class="header">
                        ĐIỂM BÁN BÁNH TRUNG THU MIỀN NAM
                    </div>
                    <hr>
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
                <div>
                    <div class="header">
                        THÔNG TIN VỀ BÁNH TRUNG THU 2021
                    </div>
                    <hr>
                    <div>
                        <p class="p_3">
                            CHÍNH SÁCH VẬN CHUYỂN <br>
                            HƯỚNG DẪN MUA HÀNG <br>
                            CHÍNH SÁCH BẢO HÀNH/ĐỔI TRẢ <br> 
                            GIÁ BÁNH TRUNG THU KINH ĐÔ 2021 <br>
                            CHÍNH SÁCH BẢO MẬT THÔNG TIN <br>
                            Panel EPS <br>
                            Máy in Uv <br>
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
</body>

</html>