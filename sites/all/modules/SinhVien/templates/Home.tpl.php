<!-- 1111111 -->
<section class="fly-home">
    <div style="background-image: url(<?php echo base_path() . 'sites/all/modules/SinhVien/css/' ?>/images/bgr.png);"
         class="fly-home__banner">
        <div class="fly-home__search">
            <div class="container">
                <div class="home-search">
                    <div class="home-search__header">
                        <div class="home-search__title">
                            <h5>Ăn gì hôm nay? Nấu ngay món ngon</h5>
                        </div>
                    </div>
                    <div class="home-search__content no-multi">
                        <div class="home-search__group">
                            <div class="home-search__trip">
                                <div class="home-search__input home-search__go">
                                    <label>Search</label>
                                    <input type="hidden" name="inpSearch"  placeholder="Ví dụ: Kimchi bibigo, soup, sinh tố, mochi,...">
                                    <div class="search-default d-none">
                                        <div class="search-default__title">
                                            <h5>MÓN NGON</h5>
                                        </div>
                                        <ul class="search-default__content">
                                            <li><a class="ten1" >Món ngon với trứng bắc thảo</a></li>
                                            <li><a class="ten2">Hủ tiếu Hải sản</a></li>
                                            <li><a class="ten3">Gà hầm ngũ quả</a></li>
                                            <li><a class="ten4">Lagu gà</a></li>
                                            <li><a class="ten5">Lẩu gà ớt hiểm</a></li>
                                            <li><a class="ten6">Bún thang ngon</a></li>
                                            <li><a class="ten7">Chân gà trộn cóc xoài non</a></li>
                                            <li><a class="ten8">Canh khổ qua nấu thịt gà</a></li>
                                            <li><a class="ten9">Xôi phúc kiến</a></li>
                                            <li><a class="ten10">Gà chiên mắm tỏi</a></li>
                                            <li><a class="ten11">Gà không lối thoát</a></li>
                                            <li><a class="ten12">Sườn heo nấu đậu trắng</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div class="home-search__btn">-->
<!--                        <a href="fly-list.html" class="btn btn-orange">Search Now</a>-->
<!--                    </div>-->
                    <div class="home-search__btn">
                        <div class="aligncenter-sm ng-scope" id="cookySearchBox">
                            <div ng-controller="SearchSuggestionController" class="ng-scope">
                                <form id="searchform" action="<?php echo base_path().'search_monan' ?>" class="form-horizontal ng-pristine ng-valid" data-behavior="url" data-source="[data-behavior=search_field]" method="post" novalidate="novalidate">
                                    <div class="qsearch-box">
                                        <input type="text" id="searchinput" autocomplete="off" name="url" data-behavior="search-field" placeholder="tìm kiếm công thức"
                                               ng-focus="keywordPress(event)" ng-keyup="keywordPress(event)" ng-model="keyword" class="ng-pristine ng-untouched ng-valid ng-empty">
                                        <button type="submit" name="search" class="glyphicon glyphicon-search ico-search">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $news = get_node_by_type('news');
    ?>
    <!-- 2222222 -->
    <div class="fly-home__destination">
        <div class="container">

            <div class="destination">
                <div class="destination__title">
                    <p>Món ăn ngon</p><span>Công thức bởi Cameron Cook</span>
                </div>
                <div class="destination__body">
                    <?php if (count($news) > 0): ?>
                        <?php foreach ($news as $value):
                            $node = node_load($value->nid);
                            ?>
                            <div class="destination__col slick-slide slick-current slick-active" data-slick-index="0"
                                 aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00"
                                 style="width: 282px;">
                                <div class="destination-item">
                                    <div class="destination-item__photo"><img
                                                src="<?php echo base_path() . 'sites/all/modules/SinhVien/css/images/' . $node->field_anh['und'][0]['filename'] ?>"
                                                alt="">
                                        <div class="destination-item__btn"><a class="btn btn-orange btn-round"
                                                                              tabindex="0">Cameron Cook</a></div>
                                    </div>
                                    <div class="destination-item__content">
                                        <div class="destination-item__text">
                                            <p class="p1"><?php echo $node->title ?></p>
                                            <p class="p2"><?php echo trim(strip_tags($node->body['und'][0]['summary'])) ?></p>
                                        </div>
                                        <div class="destination-item__link"><a
                                                    href="<?php echo base_path() . drupal_get_path_alias('home_home/' . $node->nid) ?>"
                                                    tabindex="0">Xem thêm<i
                                                        class="fas fa-long-arrow-alt-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <div style="background-image: url(<?php echo base_path() . 'sites/all/modules/SinhVien/css/' ?>images/12.jpg);"
         class="fly-home__sale">
        <div class="fly-home__sale__backdrop"></div>
        <div class="container">
            <div class="fly-home__sale__content">
                <p class="p1">CAMERON COOK DISCOVERY AMAZING</p>
                <p class="p2">DELICIOUS!</p>
                <div class="fly-home__sale__text">
                    <p>Cameron cook giúp việc bếp núc có thêm nhiều niềm vui</p>
                    <p>Ứng dụng cung cấp thực đơn hàng ngày cho bạn với hình ảnh hướng dẫn từng bước</p>
                    <p>Những mẹo vặt nội trợ được chia sẻ bởi các thành viên sử dụng ứng dụng</p>
                </div>
                <div class="fly-home__sale__btn"><a href="" class="btn btn-outline">Xem ngay</a></div>
            </div>
        </div>
    </div>
    <?php
    $cheap_flight = get_node_by_type('cheap_flight');
    //print_r($cheap_flight);
    //die;
    ?>
    <div class="fly-home__offers">
        <div class="container">
            <div class="fly-offers">
                <div class="fly-offers__title">
                    <h5>CÔNG THỨC TỪ CỘNG ĐỒNG</h5>
                </div>
                <div class="fly-offers__slide">
                    <?php if (count($cheap_flight) > 0): ?>
                        <?php $i = 0; foreach ($data as $value):
                            $node = node_load($value->nid);
                            $from_tid = $node->field_from['und'][0]['tid'];
                            $from_term = taxonomy_term_load($from_tid);
                            $to_tid = $node->field_to['und'][0]['tid'];
                            $to_term = taxonomy_term_load($to_tid);
                            $price = $node->field_price['und'][0]['value'];
                            $type_tid = $node->field_type['und'][0]['value'];
                            if($i % 4 == 0) {
                                echo '<div class="fly-offers__row">';
                            }
                            ?>

                            <div class="fly-offers__col">
                                <div class="offers-item">
                                    <div class="offers-item__left">
                                        <div class="offers-item__img"><img src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$value->IMGmonan?>"></div>
                                    </div>
                                    <div class="offers-item__right">
                                        <div class="offers-item__text">
                                            <p class="p1"><?php echo $value->TenCongThuc ?></p>
                                            <p class="p2"><?php echo trim(strip_tags($value->NoiDungMoTa)) ?></p>
                                            <div class="offers-item__detail">
                                                <p class="date">Người đăng: </p><img src="">
                                                <p class="price">Price $ 199,00</p>
                                            </div>
                                        </div>
                                    </div><a href="<?php echo base_path().'displaycook/'.$value->Id ?>" class="offers-item__link"></a>
                                </div>
                            </div>


                            <?php
                            if($i % 4 == 3 ){
                                echo '</div>';
                            }
                            ?>
                            <?php $i++; endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>