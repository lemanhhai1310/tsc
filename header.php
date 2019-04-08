<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
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
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid-small uk-child-width-auto" uk-grid>
            <div>
                <div class="uk-grid-small" uk-grid>
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

            </div>
        </div>
    </div>
</div>