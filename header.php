<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<div class="uk-section-xsmall top_header uk-background-contain" style="background-image: url(imgs/bg-header.png)">
    <div class="uk-container">
        <div class="uk-grid-small uk-child-width-auto uk-flex-between" uk-grid>
            <div>
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <figure><a href="#"><img src="imgs/logo.png" alt=""></a></figure>
                    </div>
                    <div class="uk-width-expand">
                        <h2 class="uk-text-uppercase title_logo1">Bộ giáo dục và đào tạo</h2>
                        <h3 class="uk-text-uppercase title_logo2">Trung tâm hỗ trợ đào tạo và cung ứng nhân lực</h3>
                    </div>
                </div>
            </div>
            <div>
                <a href="#"><img src="imgs/flag-vi.png" alt=""></a>
                <a href="#"><img src="imgs/flag-en.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<header id="header" uk-sticky>
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">trang chủ</a></li>
                    <li>
                        <a href="#">Giới thiệu <span uk-icon="chevron-down"></span></a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Tổng quan</a></li>
                                <li><a href="#">Chính sách chất lượng</a></li>
                                <li><a href="#">Quá trình hình thành phát triển</a></li>
                                <li><a href="#">Ban điều hành</a></li>
                                <li><a href="#">Sơ đồ tổ chức</a></li>
                                <li><a href="#">Đơn vị thành viên</a></li>
                                <li>
                                    <a href="#">Công bố thông tin</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Thông cáo báo chí</a></li>
                                        <li><a href="#">Công bố thông tin EVN SPC</a></li>
                                        <li><a href="#">Đề án tái cơ cấu doanh nghiệp</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Văn hóa doanh nghiệp</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Tin mới</a></li>
                                        <li><a href="#">Câu chuyện văn hóa</a></li>
                                        <li><a href="#">Văn hóa EVNSPC với Khách hàng</a></li>
                                        <li><a href="#">Gương điển hình</a></li>
                                        <li><a href="#">Sự kiện văn hóa</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">tin tức</a></li>
                    <li><a href="#">văn bản</a></li>
                    <li><a href="#">thống kê</a></li>
                    <li><a href="#">liên hệ</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>