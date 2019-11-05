<?php
//print_r($data);
?>
<div ng-app="searchApp" class="container1 full-container ng-scope" xmlns:font-weight="http://www.w3.org/1999/xhtml">
    <div class="result-box">
        <div class="result-box-inner" style="position: relative;">
            <div class="result-list recipe-list">
                <div class="result-headline">
                    <div>
                        <div class="result-container">
                            <h1>
                    <span ng-if="true" class="ng-scope">
                      <strong class="text-highlight ng-binding">10000</strong> Món ăn ngon mỗi ngày
                    </span>
                            </h1>
                            <div style="float: left;width: 100%;">
                                <div class="random-link" style="float: left;">
                                    <ul>
                                        <li style="font-size: 11px"; font-weight:bold;>Gợi ý: </li>
                                        <li>
                                            <a href="#" target="_blank">cha muc</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">banh kep</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">canh rau ngot</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">xiu mai</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">my y</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">bo bit tet</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">pho bo</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">sa te</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">mi tom hao hao</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">lau ca lang song da</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="result-list recipe-list row10">

                        <?php foreach ($data as $value):?>
                            <div ng-repeat="recipe in recipes" class="result-recipe-item ng-scope">
                                <div class="item-inner">
                                    <div class="item-photo">
                                        <a class="photo" rel="alternative" media="only screen and (max-width: 640px)" href="<?php echo base_path().'displaycook/'.$value->Id ?>" target="_blank">
                                            <img class="photo img-responsive" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$value->IMGmonan?>">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-header">
                                            <div class="title">
                                                <h2>
                                                    <a rel="alternative" media="only screen and (max-width: 640px)" class="ng-binding"><?php echo $value->TenCongThuc ?></a>
                                                </h2>
                                            </div>
                                            <div class="ingredients" style="font-size: 12px">
                                                <span ng-repeat="ing in recipe.MainIngredients" class="ng-binding ng-scope"><?php echo trim(strip_tags($value->NoiDungMoTa)) ?></span>
                                                <span ng-repeat="ing in recipe.MainIngredients" class="ng-binding ng-scope">lòng đỏ trứng muối</span>
                                            </div>
                                        </div>
                                        <div class="item-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="recipe-more" style="margin:30px 15px;">
                        <div class="recipe-more-inner" ng-show="hasMoreItems">
                            <a href="javascript:void(0)" ng-click="loadMore()" target="_self">
                                <span ng-show="!isLoading">Xem thêm</span>
                                <i ng-show="isLoading" class="fa fa-spinner fa-pulse text text-primary ng-hide"></i>
                                (
                                <span class="text-red ng-binding">12</span>
                                <span class="text-gray ng-binding">/10000</span>
                                )
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>contact us</h2>
            </div>
            <div class="col-12 social padding">
                <div class="icon1">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <h5>address</h5>
                <hr class="light">
                <p>0982720515</p>
                <p>email@gmail.com</p>
                <p>Dao nguyen an thuong hoai duc ha noi</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Working hours</h5>
                <hr class="light">
                <p>Monday-friday: 8a.m - 5p.m </p>
                <p>Weekend: 8a.m - 12a.m</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Services</h5>
                <hr class="light">
                <p>outsourcing</p>
                <p>Web development</p>
                <p>Mobile development</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; TrongVu</h5>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-inner">
        <div class="wide-box" style="background-color: #e9ebee">
            <div class="container">
                <div class="random-link">
                    <ul>
                        <li>
                            <a href="#" target="_blank">gà chiên nước mắm</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">sữa chua nếp cẩm</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">chè trôi nước</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">khoai lang kén</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">khoai tây chiên</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">phá lẩu bò</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">cháo ếch</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">kho quẹt</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">thịt kho tiêu</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">sườn sào chua ngọt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>