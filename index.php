<?php include('header.php'); ?>
<div class="uk-container">
    <div class="box1 uk-margin uk-flex uk-flex-between uk-flex-middle">
        <div class="uk-flex uk-flex-middle">
            <h3 class="uk-text-uppercase txt_tieudiem uk-flex uk-flex-middle">
                <img src="imgs/ico_hot.png" alt="">
                tiêu điểm
            </h3>
        </div>
        <form class="uk-search uk-search-default search_h">
            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
            <input class="uk-search-input" type="search" placeholder="Từ khóa tìm kiếm">
        </form>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-expand@m">
            <div class="uk-card card1 uk-grid-collapse uk-margin-small" uk-grid>
                <div class="uk-width-expand@s uk-card-media-left">
                    <div class="uk-cover-container">
                        <img src="https://znews-photo.zadn.vn/w660/Uploaded/lce_cjvcc/2019_04_08/121.jpg" alt="" uk-cover>
                        <canvas width="557" height="371"></canvas>
                    </div>
                    <div class="uk-padding-small box2">
                        <h3 class="uk-card-title"><a href="#">Ông Đặng Lê Nguyên Vũ sắm Porsche GT2 RS hơn 20 tỷ sau khi ly hôn</a></h3>
                        <p>Một chiếc Porsche 911 GT2 RS trị giá hơn 20 tỷ đồng vừa thuộc sở hữu của ông Đặng Lê Nguyên Vũ. Đây là chiếc siêu xe đầu tiên ông Vũ mua về sau khi ly hôn.</p>
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-card-body uk-padding-small uk-background-cover uk-overflow-auto" style="background-image: url(imgs/bg_card1.png)">
                        <ul class="uk-list uk-list-divider list1">
                            <li><a href="#">Ông Đặng Lê Nguyên Vũ sắm Porsche GT2 RS hơn 20 tỷ sau khi ly hôn</a></li>
                            <li><a href="#">Các đội bắt chó thả rông giờ ra sao?</a></li>
                            <li><a href="#">Hôm nay TP.HCM bầu Chủ tịch HĐND mới thay bà Nguyễn Thị Quyết Tâm</a></li>
                            <li><a href="#">Công ty liên quan ông Trịnh Văn Quyết bị cưỡng chế thuế hơn trăm tỷ</a></li>
                            <li><a href="#">Facebook khóa tài khoản của bà Phạm Thị Yến</a></li>
                            <li><a href="#">Xét nghiệm HIV gã đàn ông đâm hàng loạt người dân Sài Gòn</a></li>
                            <li><a href="#">Đoàn xe vượt đèn đỏ ở Đà Nẵng của Tập đoàn Trung Nguyên</a></li>
                            <li><a href="#">Quan chức New Zealand: Facebook giả dối bệnh hoạn, suy đồi đạo đức</a></li>
                            <li><a href="#">Bộ Y tế lý giải việc Nhật Bản cấm axit benzoic trong tương ớt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner5.png" alt=""></a>
            </div>
            <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
                <div>
                    <div class="top_1 uk-flex uk-flex-middle uk-flex-between">
                        <h3 class="title1 uk-text-uppercase">tin tức</h3>
                    </div>
                    <ul class="uk-list uk-list-divider list2">
                        <?php
                        $cars = array
                        (
                            'Nhà tuyển dụng cần gì ở sinh viên tốt nghiệp?',
                            'Facebook khóa tài khoản của bà Phạm Thị Yến',
                            'Hội thảo xây dựng báo cáo giữa kỳ dự án hợp tác Việt Nam - Liên minh Châu Âu về việc làm cho sinh viên',
                            'Xét nghiệm HIV gã đàn ông đâm hàng loạt người dân Sài Gòn',
                            'Đoàn xe vượt đèn đỏ ở Đà Nẵng của Tập đoàn Trung Nguyên',
                        );

                        foreach ($cars as $key => $value) { ?>
                            <li>
                                <a href="#"><?php echo $value; ?></a>
                                <div>20/10/2017 - 2.399 lượt xem</div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div>
                    <div class="top_1 uk-flex uk-flex-middle uk-flex-between">
                        <h3 class="title1 uk-text-uppercase">Đào tạo và bồi dưỡng</h3>
                    </div>
                    <ul class="uk-list uk-list-divider list2">
                        <?php
                        $cars = array
                        (
                            'Nhà tuyển dụng cần gì ở sinh viên tốt nghiệp?',
                            'Facebook khóa tài khoản của bà Phạm Thị Yến',
                            'Hội thảo xây dựng báo cáo giữa kỳ dự án hợp tác Việt Nam - Liên minh Châu Âu về việc làm cho sinh viên',
                            'Xét nghiệm HIV gã đàn ông đâm hàng loạt người dân Sài Gòn',
                            'Đoàn xe vượt đèn đỏ ở Đà Nẵng của Tập đoàn Trung Nguyên',
                        );

                        foreach ($cars as $key => $value) { ?>
                            <li>
                                <a href="#"><?php echo $value; ?></a>
                                <div>20/10/2017 - 2.399 lượt xem</div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner6.png" alt=""></a>
            </div>
            <div class="top_1 uk-flex uk-flex-middle uk-flex-between uk-margin-small">
                <h3 class="title1 uk-text-uppercase">tin tức - sự kiện</h3>
                <a class="uk-margin-small-right" href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
            <div id="slider_news" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small" uk-grid>
                    <?php for ($i=1; $i<=8; $i++) { ?>
                    <li>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w660/Uploaded/lce_cjvcc/2019_04_08/121.jpg" alt="" uk-cover>
                            <canvas width="195" height="132"></canvas>
                        </div>
                        <h3 class="title2"><a href="#">Tập huấn công tác hướng nghiệp, phân luồng và tư vấn học đường tại huyện Đồng Văn, tỉnh Hà Giang</a></h3>
                    </li>
                    <?php } ?>
                </ul>

                <a class="uk-position-center-left uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="imgs/ico_prev.png" alt=""></a>
                <a class="uk-position-center-right uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"><img src="imgs/ico_next.png" alt=""></a>

            </div>
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner7.png" alt=""></a>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner1.png" alt=""></a>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner2.png" alt=""></a>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner3.png" alt=""></a>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img class="uk-width-1-1" src="imgs/banner4.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>