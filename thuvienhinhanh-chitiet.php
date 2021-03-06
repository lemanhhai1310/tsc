<?php include('header.php'); ?>
<div class="uk-container uk-margin-bottom">
    <div class="box1 uk-margin">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <ul class="uk-breadcrumb uk-margin-small-left">
                    <li><a href="#">Trang chủ</a></li>
                    <li><span>Tin tức</span></li>
                </ul>
            </div>
            <div class="uk-width-auto">
                <form class="uk-search uk-search-default search_h uk-visible@m">
                    <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                    <input class="uk-search-input" type="search" placeholder="Từ khóa tìm kiếm">
                </form>
            </div>
        </div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-expand@m box4">
            <h3 class="title_thuvien1">72.000 cử nhân thất nghiệp do chưa có dự báo nguồn nhân lực</h3>
            <ul class="uk-grid-small uk-grid" uk-grid="">
                <li class="uk-first-column"><i class="fa fa-clock-o" aria-hidden="true"></i> 11/7/2016</li>
                <li><i class="fa fa-eye" aria-hidden="true"></i> 2.658 người xem</li>
            </ul>
            <div class="uk-grid-small uk-child-width-1-3@m" uk-grid>
                <?php for ($i=1;$i<=12;$i++){ ?>
                <div>
                    <div class="uk-cover-container uk-transition-toggle">
                        <img src="https://znews-photo.zadn.vn/w480/Uploaded/ofh_cgmzstgk/2019_04_08/f42eff6b75c0979eced1_thumb.jpg" alt="" uk-cover>
                        <canvas width="270" height="180"></canvas>
                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
                        <div class="uk-position-center">
                            <a style="color: #ffffff;" href="https://znews-photo.zadn.vn/w480/Uploaded/ofh_cgmzstgk/2019_04_08/f42eff6b75c0979eced1_thumb.jpg" data-fancybox="gallery"><span class="uk-transition-fade" uk-icon="icon: plus-circle"></span></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <script>
                $('[data-fancybox="gallery"]').fancybox({
                    thumbs : {
                        autoStart : true
                    }
                });
            </script>
            <h3 class="title_c uk-text-uppercase uk-margin">các hình ảnh khác</h3>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-small" uk-grid>
                    <?php for ($i=1;$i<=12;$i++){ ?>
                        <li>
                            <div class="uk-cover-container">
                                <img src="https://znews-photo.zadn.vn/w480/Uploaded/ofh_cgmzstgk/2019_04_08/f42eff6b75c0979eced1_thumb.jpg" alt="" uk-cover>
                                <canvas width="270" height="180"></canvas>
                                <i style="color: #ffffff; bottom: 10px; left: 10px; font-size: 20px; z-index: 100" class="fa fa-picture-o uk-position-bottom-left" aria-hidden="true"></i>
                                <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
                            </div>
                            <h3 class="title_thuvien"><a href="thuvienhinhanh-chitiet.php">Bộ trưởng Phùng Xuân Nhạ báo cáo Chính phủ về kỳ thi THPT quốc gia</a></h3>
                        </li>
                    <?php } ?>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

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
            <div class="uk-margin card2 uk-card uk-card-default uk-card-body uk-padding-small">
                <div class="top_1 uk-flex uk-flex-bottom uk-flex-between uk-margin-small">
                    <h3 class="title1 uk-text-uppercase">thư viện video</h3>
                    <a class="uk-margin-small-right" href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="uk-margin-small">
                    <div class="uk-cover-container">
                        <img src="https://znews-photo.zadn.vn/w480/Uploaded/ofh_cgmzstgk/2019_04_08/f42eff6b75c0979eced1_thumb.jpg" alt="" uk-cover>
                        <canvas width="259" height="146"></canvas>
                        <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
                        <div class="uk-position-center">
                            <a href="#"><img src="imgs/btn-play1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="uk-padding-small box3">
                        <h3 class="title5"><a href="#">Lễ công bố và trao Quyết định điều động và bổ nhiệm Phó Giám đốc</a></h3>
                        <time>20/10/2016 - 1.600 lượt xem</time>
                    </div>
                </div>
                <div class="uk-grid-small grid-video uk-child-width-1-3" uk-grid>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_fsxrff/2019_04_08/vfs1379936251.jpg" alt="" uk-cover>
                            <canvas width="82" height="50"></canvas>
                            <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
                            <div class="uk-position-center">
                                <a href="#"><img src="imgs/btn-play2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/kbd_ivdb/2019_04_08/20190408_195029.jpg" alt="" uk-cover>
                            <canvas width="82" height="50"></canvas>
                            <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
                            <div class="uk-position-center">
                                <a href="#"><img src="imgs/btn-play2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/neg_glyrtla/2019_04_08/to_trinh.jpg" alt="" uk-cover>
                            <canvas width="82" height="50"></canvas>
                            <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
                            <div class="uk-position-center">
                                <a href="#"><img src="imgs/btn-play2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin card2 uk-card uk-card-default uk-card-body uk-padding-small">
                <div class="top_1 uk-flex uk-flex-bottom uk-flex-between uk-margin-small">
                    <h3 class="title1 uk-text-uppercase">hình ảnh hoạt động</h3>
                    <a class="uk-margin-small-right" href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="uk-grid-small grid-video uk-child-width-1-2" uk-grid>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_fsxrff/2019_04_08/vfs1379936251.jpg" alt="" uk-cover>
                            <canvas width="129" height="71"></canvas>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/kbd_ivdb/2019_04_08/20190408_194534_thumb.jpg" alt="" uk-cover>
                            <canvas width="129" height="71"></canvas>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_fsxrff/2019_04_08/84_cho_vay.jpg" alt="" uk-cover>
                            <canvas width="129" height="71"></canvas>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/qhj_jwrscslhfo/2019_04_08/Image2_1.jpg" alt="" uk-cover>
                            <canvas width="129" height="71"></canvas>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-gif.zadn.vn/Uploaded/pgi_ubnvgunau/2019_04_08/ezgifcomoptimize8.gif" alt="" uk-cover>
                            <canvas width="129" height="71"></canvas>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/kbd_bcvi/2019_04_07/dua_hau.jpg" alt="" uk-cover>
                            <canvas width="129" height="71"></canvas>
                        </div>
                    </div>
                </div>
                <h3 class="title6"><a href="#">Chất lượng đào tạo là thước đo trường đại học</a></h3>
            </div>
            <div class="uk-margin card3 uk-card uk-card-default">
                <div class="uk-card-header uk-padding-small">
                    <h3 class="title uk-text-uppercase">xem nhiều</h3>
                </div>
                <div class="uk-card-body uk-padding-small">
                    <div class="item1">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto"><i>1.</i></div>
                            <div class="uk-width-expand">
                                <h3 class="title4"><a href="#">Ban hành danh sách các đơn vị sự nghiệp công lập trực thuộc Bộ Giáo dục và đào tạo hôn đặc biệt khó khăn</a></h3>
                                <time class="time1">11.07.2016 | duynguyen@gmail.com</time>
                                <p>Chính phủ vừa ban hành Nghị định 116/2016/NĐ-CP116/2016..<a href="#">Chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto"><i>2.</i></div>
                            <div class="uk-width-expand">
                                <h3 class="title4"><a href="#">Ban hành danh sách các đơn vị sự nghiệp công lập trực thuộc Bộ Giáo dục và đào tạo hôn đặc biệt khó khăn</a></h3>
                                <time class="time1">11.07.2016 | duynguyen@gmail.com</time>
                                <p>Chính phủ vừa ban hành Nghị định 116/2016/NĐ-CP116/2016..<a href="#">Chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto"><i>3.</i></div>
                            <div class="uk-width-expand">
                                <h3 class="title4"><a href="#">Ban hành danh sách các đơn vị sự nghiệp công lập trực thuộc Bộ Giáo dục và đào tạo hôn đặc biệt khó khăn</a></h3>
                                <time class="time1">11.07.2016 | duynguyen@gmail.com</time>
                                <p>Chính phủ vừa ban hành Nghị định 116/2016/NĐ-CP116/2016..<a href="#">Chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card-footer uk-padding-small">
                    <a href="#" class="uk-button uk-button-default uk-width-1-1 uk-padding-small uk-padding-remove-top uk-padding-remove-bottom btn-send1"><img class="uk-margin-small-right" src="imgs/icon2.png" alt=""> gửi câu hỏi cho tòa soạn</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>