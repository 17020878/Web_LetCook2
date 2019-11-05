<?php
    session_start();
?>
<!--<head>-->
<!--    <title>flygaruda</title>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="x-ua-compatible" content="ie=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">-->
<!--    <meta name="format-detection" content="telephone=no">-->
<!--    <link rel="shortcut icon" type="image/x-icon" href="">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_path().'sites/all/themes/blankM/'?><!--css/libs/flatpickr.min.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_path().'sites/all/themes/blankM/'?><!--css/libs/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_path().'sites/all/themes/blankM/'?><!--css/styles.css">-->
<!--  </head>-->
<!--  <body ontouchstart="">-->
<!--    <header class="fly-header fly-header_home">-->
<!--      <div class="container">-->
<!--        <nav class="navbar navbar-expand-md">-->
<!--          <button type="button" data-toggle="collapse" data-target="#collapsibleNavbar" class="navbar-toggler"><i class="fas fa-align-left"></i></button><a href="--><?php //echo base_path().'home_home' ?><!--" class="navbar-brand"><img src="--><?php //echo base_path().'sites/all/themes/blankM/' ?><!--images/logo11.png"></a>-->
<!--          <div id="collapsibleNavbar" class="collapse navbar-collapse">-->
<!--            <ul class="navbar-nav">-->
<!--              <li class="nav-item active"><a href="index.html" class="nav-link">Công thức</a></li>-->
<!--              <li class="nav-item"><a href="#" class="nav-link">Cộng đồng</a></li>-->
<!--              <li class="nav-item"><a href="#" class="nav-link">Top thành viên</a></li>-->
<!--              <li class="nav-item"><a href="--><?php //echo base_path().'addmonan/'.$id ?><!--" class="nav-link">Đăng công thức</a></li>-->
<!--            </ul>-->
<!--          </div>-->
<!--          <div class="fly-header__right">-->
<!--           <div class="fly-header__language"><img src="--><?php //echo base_path().'sites/all/themes/blankM/' ?><!--images/lag-eng.png"><i class="fas fa-caret-right"></i></div>-->
<!--            <div class="fly-header__search"><i class="fas fa-search"></i>-->
<!--           <input type="text"><i class="far fa-times-circle"></i>-->
<!--          </div>-->
<!--        </div>-->
<!--        </nav>-->
<!--      </div>-->
<!--    </header>-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập lớn</title>
    <link rel="stylesheet" href="--><?php echo base_path().'sites/all/themes/blankM'?><!--css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_path().'btlmanh/fontawesome-free-5.11.2-web/css/all.css'?>">
<!--    <script src="--><?php //echo base_path().'sites/all/themes/blankM/js/jquery-3.3.1.min.js'?><!--"></script>-->
    <script src="<?php echo base_path().'btlmanh/bootstrap-4.3.1-dist/js/bootstrap.min.js'?>"></script>
    <link rel="stylesheet" href="<?php echo base_path().'btlmanh/css/stylebtl.css'?>">

    <div class="root-nav">
        <div class="container">
            <div class="top-leaderboard"></div>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" target="_self">Công thức nấu ăn</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_self">
                        <span class="fas fa-map-marker-alt"></span> Địa điểm
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_self">
                        <span class="fa fa-shopping-basket"></span> Sản phẩm
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarResponsive" style="position: relative;">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" >Công thức</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_path().'listmonan' ?>" class="nav-link">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Top thành viên</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-calendar-alt"></i>Lớp học nấu ăn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cuộc thi ẩm thực</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cuộc thi ẩm thực</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="header-top clearfix">
        <div class="container" style="position:relative">
            <div class="logo header-top-1">
                <div class="navbar-brand">
                    <a href="<?php echo base_path().'home_home' ?>" style="color:#fff;" target="_self" id="logo1">
                        <img class="logo img-responsive" src="<?php echo base_path().'btlmanh/images/cooky.png'?>" alt="thử nghiệm sử dụng cooky">
                    </a>
                </div>
            </div>
            <div class="header-top-2">
                <div class="aligncenter-sm ng-scope" id="cookySearchBox">
                    <div ng-controller="SearchSuggestionController" class="ng-scope">
                        <form id="searchform" class="form-horizontal ng-pristine ng-valid" action="<?php echo base_path().'search_monan' ?>" data-behavior="url" data-source="[data-behavior=search_field]" method="post" novalidate="novalidate">
                            <div class="qsearch-box">
                                <input type="text" id="searchinput" autocomplete="off" name="url" data-behavior="search-field" placeholder="tìm kiếm công thức"
                                       ng-focus="keywordPress(event)" ng-keyup="keywordPress(event)" ng-model="keyword" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <button type="submit" class="glyphicon glyphicon-search ico-search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-top-3 float-right">
                <div class="navbar-right user-header">
                    <a class="btn btn-outline-success id1" href="<?php echo base_path().'addmonan' ?>">Đăng công thức</a>
                    <?php if(!isset($_SESSION['tenuser'])){ ?>
                    <a class="btn btn-outline-success id1 ml-2" href="<?php echo base_path().'dangnhap' ?>">Đăng nhập</a>
                    <?php } else{ ?>
                    <a class="btn btn-outline-success id1 ml-2" href=""><?php echo 'Hello '.$_SESSION['tenuser']; ?></a>
                        <a class="btn btn-outline-success id1 ml-2" href="<?php echo base_path().'dangxuat' ?>">Đăng xuất</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</head>

    <main class="wrapper">
      <?php print render($page['content']); ?>
         <!--  o ben trai cua web -->
    </main>
<!--    <footer class="fly-footer">-->
<!--        <div class="container">-->
<!--            <div class="fly-footer__group">-->
<!--                <div class="fly-footer__item">-->
<!--                    <div class="fly-footer__list">-->
<!--                        <h5>Welcome to Flygaruaindonesia</h5>-->
<!--                        <ul>-->
<!--                            <li><a href="#">About</a></li>-->
<!--                            <li><a href="#">Contact Us / Claims</a></li>-->
<!--                            <li><a href="#">Saga Club</a></li>-->
<!--                            <li><a href="#">Flight Schedule</a></li>-->
<!--                            <li><a href="#">Flight Status</a></li>-->
<!--                            <li><a href="#">Airpots</a></li>-->
<!--                            <li><a href="#">Blog</a></li>-->
<!--                            <li><a href="#">Site Map</a></li>-->
<!--                            <li><a href="#">Careers</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="fly-footer__item">-->
<!--                    <div class="fly-footer__mail">-->
<!--                        <div class="form-group">-->
<!--                            <label>NEWSLETTERS</label>-->
<!--                            <input type="text" placeholder="Email Address"><i class="fas fa-caret-right"></i>-->
<!--                        </div>-->
<!--                        <button type="button" class="btn btn-orange btn-round">Submit</button>-->
<!--                    </div>-->
<!--                    <div class="fly-footer__social">-->
<!--                        <div class="social-item">-->
<!--                            <p>Follow us</p><a href="#">-->
<!--                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 96.124 96.123" xml:space="preserve">-->
<!--                    <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803                                                               c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654                                                               c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246                                                               c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path>-->
<!--                  </svg></a><a href="#">-->
<!--                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" xml:space="preserve">-->
<!--                    <path d="M70.939,65.832H66l0.023-2.869c0-1.275,1.047-2.318,2.326-2.318h0.315c1.282,0,2.332,1.043,2.332,2.318                                                               L70.939,65.832z M52.413,59.684c-1.253,0-2.278,0.842-2.278,1.873V75.51c0,1.029,1.025,1.869,2.278,1.869                                                               c1.258,0,2.284-0.84,2.284-1.869V61.557C54.697,60.525,53.671,59.684,52.413,59.684z M82.5,51.879v26.544                                                               C82.5,84.79,76.979,90,70.23,90H19.771C13.02,90,7.5,84.79,7.5,78.423V51.879c0-6.367,5.52-11.578,12.271-11.578H70.23                                                               C76.979,40.301,82.5,45.512,82.5,51.879z M23.137,81.305l-0.004-27.961l6.255,0.002v-4.143l-16.674-0.025v4.073l5.205,0.015v28.039                                                               H23.137z M41.887,57.509h-5.215v14.931c0,2.16,0.131,3.24-0.008,3.621c-0.424,1.158-2.33,2.388-3.073,0.125                                                               c-0.126-0.396-0.015-1.591-0.017-3.643l-0.021-15.034h-5.186l0.016,14.798c0.004,2.268-0.051,3.959,0.018,4.729                                                               c0.127,1.357,0.082,2.939,1.341,3.843c2.346,1.69,6.843-0.252,7.968-2.668l-0.01,3.083l4.188,0.005L41.887,57.509L41.887,57.509z                                                               M58.57,74.607L58.559,62.18c-0.004-4.736-3.547-7.572-8.356-3.74l0.021-9.239l-5.209,0.008l-0.025,31.89l4.284-0.062l0.39-1.986                                                               C55.137,84.072,58.578,80.631,58.57,74.607z M74.891,72.96l-3.91,0.021c-0.002,0.155-0.008,0.334-0.01,0.529v2.182                                                               c0,1.168-0.965,2.119-2.137,2.119h-0.766c-1.174,0-2.139-0.951-2.139-2.119V75.45v-2.4v-3.097h8.954v-3.37                                                               c0-2.463-0.063-4.925-0.267-6.333c-0.641-4.454-6.893-5.161-10.051-2.881c-0.991,0.712-1.748,1.665-2.188,2.945                                                               c-0.444,1.281-0.665,3.031-0.665,5.254v7.41C61.714,85.296,76.676,83.555,74.891,72.96z M54.833,32.732                                                               c0.269,0.654,0.687,1.184,1.254,1.584c0.56,0.394,1.276,0.592,2.134,0.592c0.752,0,1.418-0.203,1.998-0.622                                                               c0.578-0.417,1.065-1.04,1.463-1.871l-0.099,2.046h5.813V9.74H62.82v19.24c0,1.042-0.858,1.895-1.907,1.895                                                               c-1.043,0-1.904-0.853-1.904-1.895V9.74h-4.776v16.674c0,2.124,0.039,3.54,0.102,4.258C54.4,31.385,54.564,32.069,54.833,32.732z                                                               M37.217,18.77c0-2.373,0.198-4.226,0.591-5.562c0.396-1.331,1.107-2.401,2.137-3.208c1.027-0.811,2.342-1.217,3.941-1.217                                                               c1.345,0,2.497,0.264,3.459,0.781c0.967,0.52,1.713,1.195,2.23,2.028c0.527,0.836,0.885,1.695,1.076,2.574                                                               c0.195,0.891,0.291,2.235,0.291,4.048v6.252c0,2.293-0.092,3.98-0.271,5.051c-0.177,1.074-0.557,2.07-1.146,3.004                                                               c-0.58,0.924-1.329,1.615-2.237,2.056c-0.918,0.445-1.968,0.663-3.154,0.663c-1.325,0-2.441-0.183-3.361-0.565                                                               c-0.923-0.38-1.636-0.953-2.144-1.714c-0.513-0.762-0.874-1.69-1.092-2.772c-0.219-1.081-0.323-2.707-0.323-4.874L37.217,18.77                                                               L37.217,18.77z M41.77,28.59c0,1.4,1.042,2.543,2.311,2.543c1.27,0,2.308-1.143,2.308-2.543V15.43c0-1.398-1.038-2.541-2.308-2.541                                                               c-1.269,0-2.311,1.143-2.311,2.541V28.59z M25.682,35.235h5.484l0.006-18.96l6.48-16.242h-5.998l-3.445,12.064L24.715,0h-5.936                                                               l6.894,16.284L25.682,35.235z"></path>-->
<!--                  </svg></a><a href="#">-->
<!--                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 475.092 475.092">-->
<!--                                    <path d="M273.372,302.498c-5.041-6.762-10.608-13.045-16.7-18.842c-6.091-5.804-12.183-11.088-18.271-15.845                                                                 c-6.092-4.757-11.659-9.329-16.702-13.709c-5.042-4.374-9.135-8.945-12.275-13.702c-3.14-4.757-4.711-9.61-4.711-14.558                                                                 c0-6.855,2.19-13.278,6.567-19.274c4.377-5.996,9.707-11.799,15.986-17.417c6.28-5.617,12.559-11.753,18.844-18.415                                                                 c6.276-6.665,11.604-15.465,15.985-26.412c4.373-10.944,6.563-23.458,6.563-37.542c0-16.75-3.713-32.835-11.136-48.25                                                                 c-7.423-15.418-17.89-27.412-31.405-35.976h38.54L303.2,0H178.441c-17.699,0-35.498,1.906-53.384,5.72                                                                 c-26.453,5.9-48.723,19.368-66.806,40.397C40.171,67.15,31.129,90.99,31.129,117.637c0,28.171,10.138,51.583,30.406,70.233                                                                 c20.269,18.649,44.585,27.978,72.945,27.978c5.71,0,12.371-0.478,19.985-1.427c-0.381,1.521-1.043,3.567-1.997,6.136                                                                 s-1.715,4.62-2.286,6.14c-0.57,1.521-1.047,3.375-1.425,5.566c-0.382,2.19-0.571,4.428-0.571,6.71                                                                 c0,12.563,6.086,26.744,18.271,42.541c-14.465,0.387-28.737,1.67-42.825,3.86c-14.084,2.19-28.833,5.616-44.252,10.28                                                                 c-15.417,4.661-29.217,11.42-41.396,20.27c-12.182,8.854-21.317,19.366-27.408,31.549C3.533,361.559,0.01,374.405,0.01,386.017                                                                 c0,12.751,2.857,24.314,8.565,34.69c5.708,10.369,13.035,18.842,21.982,25.406c8.945,6.57,19.273,12.083,30.978,16.562                                                                 c11.704,4.47,23.315,7.659,34.829,9.562c11.516,1.903,22.888,2.854,34.119,2.854c51.007,0,90.981-12.464,119.909-37.397                                                                 c26.648-23.223,39.971-50.062,39.971-80.517c0-10.855-1.57-20.984-4.712-30.409C282.51,317.337,278.42,309.254,273.372,302.498z                                                                 M163.311,198.722c-9.707,0-18.937-2.475-27.694-7.426c-8.757-4.95-16.18-11.374-22.27-19.273                                                                 c-6.088-7.898-11.418-16.796-15.987-26.695c-4.567-9.896-7.944-19.792-10.135-29.692c-2.19-9.895-3.284-19.318-3.284-28.265                                                                 c0-18.271,4.854-33.974,14.562-47.108c9.705-13.134,23.411-19.701,41.112-19.701c12.563,0,23.935,3.899,34.118,11.704                                                                 c10.183,7.804,18.177,17.701,23.984,29.692c5.802,11.991,10.277,24.407,13.417,37.257c3.14,12.847,4.711,24.983,4.711,36.403                                                                 c0,19.036-4.139,34.317-12.419,45.833C195.144,192.964,181.775,198.722,163.311,198.722z M242.251,413.123                                                                 c-5.23,8.949-12.319,15.94-21.267,20.981c-8.946,5.048-18.509,8.758-28.693,11.14c-10.183,2.385-20.889,3.572-32.12,3.572                                                                 c-12.182,0-24.27-1.431-36.258-4.284c-11.99-2.851-23.459-7.187-34.403-12.991c-10.944-5.8-19.795-13.798-26.551-23.982                                                                 c-6.757-10.184-10.135-21.744-10.135-34.69c0-11.419,2.568-21.601,7.708-30.55c5.142-8.945,11.709-16.084,19.702-21.408                                                                 c7.994-5.332,17.319-9.713,27.979-13.131c10.66-3.433,20.937-5.808,30.833-7.139c9.895-1.335,19.985-1.995,30.262-1.995                                                                 c6.283,0,11.043,0.191,14.277,0.567c1.143,0.767,4.043,2.759,8.708,5.996s7.804,5.428,9.423,6.57                                                                 c1.615,1.137,4.567,3.326,8.85,6.563c4.281,3.237,7.327,5.661,9.135,7.279c1.803,1.618,4.421,4.045,7.849,7.279                                                                 c3.424,3.237,5.948,6.043,7.566,8.422c1.615,2.378,3.616,5.28,5.996,8.702c2.38,3.433,4.043,6.715,4.998,9.855                                                                 c0.948,3.142,1.854,6.567,2.707,10.277c0.855,3.72,1.283,7.569,1.283,11.57C250.105,393.713,247.487,404.182,242.251,413.123z">-->
<!--                                        <polygon points="401.998,73.089 401.998,0 365.449,0 365.449,73.089 292.358,73.089 292.358,109.636 365.449,109.636                                                                  365.449,182.725 401.998,182.725 401.998,109.636 475.081,109.636 475.081,73.089 		"></polygon>-->
<!--                                    </path>-->
<!--                                </svg></a><a href="#">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="17" viewBox="0 0 20 17">-->
<!--                                    <g>-->
<!--                                        <g>-->
<!--                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAARCAYAAADdRIy+AAACFElEQVQ4T52TTWgTURSFz32TH39AqAiWIv60mYRMfha61RKSJqJUcONGN4K6EaUrF9KFXWgRXBZ0VXWlgogrKbUzdSGCKCimyUCToYuCG4VqC2qUZI5kJFHTNCF9qwfvnO/dcy9X0OPJDUXjVU1S4oobQODxjPP+cwNxYuDQNumFl9ajwwpqnOARQAjhw58V7crI8sLqy1D8NJX2wgNmQkYeSiatUvHRRh9kwtGToHra5r0CYBXEO6VVz0sqHN6l0e+VLZSLplO402o6FgoFf0lwDUCgQ6KyEJcll0xur/2ofQXg+yMWUylOzC0WXzXMuUjyQM2tLXVqDyFT8+XCmBd5JByfIHmtxfAGwKwr7mvN1fopnO4A/GSVi7u9co4axs5qFTFQ7gMY7GVITS25YDl20gMe3pvoCwbdFRF8IdG3KSD4zCrbox7QixyKTVFwaXOw+jB51XTsm01g/ZLWjdsCOQNgR69gqXGfuWQv/wfMDkZ1V8kTiCR6AhIzllM83vA0NyUdMdLiitUTDADFt2e+9OHjOqC3MXo8C/AWwDAgW7vBhXLOdAp3/9W13eWMHrsH4GxHoMi4VSpMtmoktd/o1/wqAdfVREEHZJRA+u/mrMN+F/CCWbYftPtQ6sOgT7tB8lSXiGsUTPt9vD5r2ysbaZuRs5HIgEvfMMiDhAwJGASkAnIRim+1Lf655/n8t259/Q2NXbjwV8fzUwAAAABJRU5ErkJggg=="></image>-->
<!--                                        </g>-->
<!--                                    </g>-->
<!--                                </svg></a><a href="#">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="19" viewBox="0 0 19 19">-->
<!--                                    <g>-->
<!--                                        <g>-->
<!--                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAADWElEQVQ4T5WUXWgcZRSG3/ebJCYRvVBbEWtFMzumM1u8MEXamyY7uwjiL5jijT/xwvaioGJKq4KgKJGKoqhQvag/lwakEUo13QnxorRQQWj2J93ZtIoBBStCJYltdr5XZtNtlwQkztXHd855vvPzziHavtALtkHcAeg2QD0QewF00YiyFIDLoBYhs0DgVwtMTtVLcy0EW4ewLxiiwZiA+9sf+M+zeMQxfGWyNjOb+jVhoes/AXJ8JZBFwFYgNgD9Q2OWW0BZdMmom8JlAAGAh5o2KYjqlQq3b9re09tzcRHAohrWnzpf/WW9meX6sjtodALAfBSX72DODR4m8S2IZ6Na+cv1gHKZoEqgP4rLDL3sq5DettYMMOf5eyl+RNAvxqVqOyyXyY4S2gNgM4ASxY+L9dLhfCaYEFRIOrGRywgMeArkk8y7/gGRYw7NllYj08aFGf80wPuuwNOJ9TU7So4Xa6Vdwxh2xjGe5Lzs45S+EfQc8xn/LYGvmcR6x89V4zQg72W/ljQMYH8Ulw+md83edl88BOJpgC9GcenDpq8bPCDiOxB7U9i7Akcluqlmwv7+m5E4FwBMR3F5aHUPw0zwO4Bbo7hs0jkWPD+0YhHUy2k5HwB8IXGSu6ZnZ38uuFt3WtppQSNTceWLtbDsIUC7Ey5vmK7VLlzz576rMMc4d0+ePXN+sM93HcO03M+iuLx7DcwNToMY6NKl7mP1+qVU7DCYAjWawg4C3JdYZabnKvWmiDNBqrXNjrVbJ+eqpRYw7/qPijwCYiKqlR9b8c0WAE2m1TH0gjcgvN4+zdD1fZDlFXXjE1BnRIQUd5H4a4mNO0+cPft3ah7ytjxoZI6SeD4V7X4S76ySBgr3ZAcSi88JZa+VqqNdum7kWP2nP1p3Q67/iCEnID7FXMYfIXjYyAwer8/8sKZH/f0erdnoOJr7vlr9bbU97wYviXgfsAXmvHtvpxrzEH6M6uVt6/md2n3CTPAngJt6F7qvX9kaV+QBaQaG7xmirkSLiRzjsNGZ+iTqWDYdam4Qyt5oZbKAfZPgBhLPFGvlr67us5wXjFE48H8zA7QniiufNh9pDx70vFs61LlT4CbK9oi0oBqytDRyaNHMEsQCYM4tLN0wdXL+5FKL8S8m6XE6GmMZtgAAAABJRU5ErkJggg=="></image>-->
<!--                                        </g>-->
<!--                                    </g>-->
<!--                                </svg></a>-->
<!--                        </div>-->
<!--                        <div class="social-item">-->
<!--                            <p>Payment</p><a href="#">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="22" viewBox="0 0 32 22">-->
<!--                                    <g>-->
<!--                                        <g>-->
<!--                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAWCAYAAAChWZ5EAAADqElEQVRIS5WWXWgcZRSGnzObNkGqaCoWBUXTzCbdCbmpUktbNNltokLpRSmkKtUbRbxQQSUXCopKEb1TwZ+rhkIrqAhiUcluDCXGXBiLyf5kd5JYa1RKRSNGQdOdVyZ/5m83mbkYGM77vuf9vu/M+Y6xiedgU9NNgdk2R5rpLRZ/Xo/S0dR6W7l8ZTeO7RAyAi4F4nz/RH68WgqrFGxv9A45xjHBfuDmZbiLggFkPcGVmXM1NdvulwWPg+2uoDUi7O0+P/vOevE1BtrcxB5H9hbG7ZvYnGng2gXcBUOfIyvJLICgAewgsGshXsCxrkwxO7Jcd4WBpJt4FOzdTSReCTEGM6XcvvV4ybh3B+JloHM+bh0ZP9u7iF0ykIp7xyV6IiYfwFQ02BqLqfuLQuGXSvyU2/Ks0Gth3CkH8d7Jgj9nJ3zd3dx8a6wc+z5i8k8zfu5QFE57o9dtxqvAjxk/d8uSgaSbGATbG0UM+BvjsqSr5oWsFhiZvqaufXh4eLbyTnhDgj0YD2dKuR7r2Lmrpew4oxGTF2QaRewwTHNcEchQYLNd/aXSr5X02hoTnmOWBSbAnrKUm3hd2DNRDCw/wyi8RWzS9S4BNyCdsKTrnQMORBSaFpo1LLaK52AMZUq5e6vpJeOJU8geBHpCAxNAQwQDf8l01pHVreYIHNBkxs8/WU0v5SZeEfacwSehgYurOl1VL2b8ni7l6iMYXgNNul74J3SDPg4NfAe0RhQMiyzsgPMF+P9jYIMZP3tX9R1oOSt0X9j0QgNngK6IBgpAHuSszO7UyvgqU8qeqFoDrvcPsFXY89buescMTkcxYKZT6VL+eBTOIjblekcEHwL9UvC0HeVo7Dc3PwOsKaoNEpzHuBFx3QIu/CNG67fozg/y+X8rcZOuFx7fdlOwNz1eGJprxam494jEe9FXpDfAfkKqw9iO2deZUu79isnj3meIe8LqT/u5wyFu6TJKxr0+RFsUE4LTfX7ugY04nYlEfXnWzgg6MH44UMo1vAjBCgPhR9JNfFNlsKiWZ0oKDveNF75dDmpvbNnpmMKh5qVwscKyTrl2f3py+I9F3JqBJOl6J4GHNlpVhfiUUNjYwsspbG5Lk5SwN/v87BOreeuOZKlGr1MW3g9KVTaiXhR7ISZNlS14DOMIWNMqvC/jI1ns5JfFkeJ6WhVnwrkjaWpptTL7ZEGz4Vwtgj9Nzhg1NpAeG11zg4ZzxRbVXB9IVnbKl/vHxi5stJP/AYs5Ws98+SFuAAAAAElFTkSuQmCC"></image>-->
<!--                                        </g>-->
<!--                                    </g>-->
<!--                                </svg></a><a href="#">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="22" viewBox="0 0 21 22">-->
<!--                                    <g>-->
<!--                                        <g>-->
<!--                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAWCAYAAAAvg9c4AAADrUlEQVRIS42TXWgcVRTH//87TdK0tWqtIkGLNDNJOjNL1ahN8CEhM6nGoihI/QgilvrgB760WvRBKlSUvhSjKFpSEIMPBkQoNdrsJFFBIbZUlp1NszORYK0PhlILTWwSZ47MbjcfbTbJfbr3fPzuued/LrH8Ylut3UwVp0DWQPAfhedFwylvNJspl8qlHO7WxhtFTR8A5XkANWWSMwCPeUH2g2v910Fd3d4tlG4AGxYEnxNgksULNi6EEAhjSudAPjdcsi+Cuob9ukAOX3X+KpBPYlnTPxRm/kxsHbpeNa0qt6uYzwnx6qIKGT/h5Ue+SWxzUEc3nwTZWzTKa+kg9+Fy7W6tNXWN+BpkqhSnFO/vH82eKkA7dH3jDKsuJfuY8a7B/Mi3Kwg4524zrBECDVcNl6H4YAHq6NZREHtBecvL595bCdiup1piRBNemMt16PfcOsOZv+f7yTeY9GmGVVdIXEzn/U0rAQtFGOYUwGqh7EgEcnV7j1A+BTAdK62Rrm49JMR3AA54gV8S6Tq2a5iHAFWTDrJ7XMP6UoBnCkHCvV6Y7XYaGuoQaaMCeYGObr4N8p1YxB4Mc/5SlTq62QmyB4I+L/QfceusF0XwGSAnAO6CFm32zp694BjWBIGf6Rr2sYSuVWsbTmYykyVoa13dZoWKfRR5Cko9jlh+AGSsUJywh8QRL/CZfJT076cLIjuG9SOAiCWRNlVIVW8uN3MQUAeB2DGsyxA5nLwClH1RzW1d2vmJfgCtInhMNC0/OJoZXfgy17BPFEayNPDrJteuP/7X6amiCPgI4NMQvK+g/JjxkCBuIVQXBZ+nQ//IUm1qM8whCPN0G1IpieIMBQ+nQ//7+X4BJHvT+exux7CyFHSXg5UucHQzQ6hDxTk1LAEw7AX+juTs6tuahOqXZJ/0bTVj5hrmswLu9wK/sZDg6vZLQvlYi7nl5Fj2XGJrr7fviyJsGwizX6wG6hjWGIVvpsPsV/N/37D+AHCzF/g3rAayMKbNsLsIbPeCbEtBqLkRuuvum7SK2YsAzniBf+9qwY5uvgvilWh26vah8fEri6DJYWetfWekJF8Exo96wUi6HNzdam6BxqMCmNFsRWpo/Ld/5v//ElmOYfcA0glgXMDjIAYh0QWNrIiBByhsEki9AAMDQe7laxFllW2vr6+JZM1+CtoA3ALILMB/BTIB8KcqqezqC89MLPWSZcel+Y7m6vVrL+2MFZsosg6iJqGi4cp4tq8vDKfLteZ/pOSDmSeJD0kAAAAASUVORK5CYII="></image>-->
<!--                                        </g>-->
<!--                                    </g>-->
<!--                                </svg></a><a href="#">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">-->
<!--                                    <g>-->
<!--                                        <g>-->
<!--                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAACoklEQVRIS52VT0gUYRjGn3dWDMroFJQeCnGGdWcNOlQIEauzSXiJAkUIlCiiIog6denUqYMdgkILSqlL4SEoEdNZVzpoUFHijO3OiiKpp4Qw9ZDNE7OOkrqOu36n+eZ9nt/38f6ZEQQso6KqWsRtJHAAwBTJxSC9iIQA+SnifpZaLXpOyCgEc3TFgRKyEulv06sAQ9ObQNwCcDwIui5GPJC4qg8TOLHeJF8gfBeSUMf71MiEF6vTqsIu2UqwfpsDJoVsl7gWfU2yIUDcBUXumanREU8T1/RmEs8BKFt48gb7fj40Hfumt4mFw4eVv6EeAcI54IWCs4hJF2wacOyP3sZQ9Q8ATm6A7wicZbhkdCBjW9nUbK7RjsFvTcc6C4BrnaPqXheV+vudgGXYdEar/TS0g+wzM3aXoVaVA+74CpgTQjzJpyt8PT6ZGevYCjQ6CPCU91xU5Jb2jo3NGlrkNiitHhiQtrzABAcTjh3zb+oVbm1YCHxPOFalH/sFcA8Ed7cFi/BFf9pu9gvVS6Buc4vxqunY7bWaflmIpwA6A8Ek7iQy1v3sbTT9EYjruYeCS6Zj7/Z1CYDTW4Fn4eKCOW4N+OIWEB1BoyyUS/2Z0WdxNXreBXdJrRZ5JZTGNZPw5eLivitDP4aWvHenyytVN6Skg6B+7KvpWEdjsVjR3vR8scTVaPfKh4XTEN4w02Nv/ocYqj4D4GAeYCjKcllfKuXpIYam95CYc8v2tySTyeV10Aq9E4Js4fJZBC8mHDubMolFIiVJ2/690VijVdYrVLrzAa5qBGzrd+xrWXAuY0MkUjz3R+YBFBcCBpA0HatmS7CXHhBnCoR68inTsQ7lBBuavm1rBRy4YDpWSU6w9w+E6x6BKAuF3FgBhOSCmbEee75/i0VPaIAirF4AAAAASUVORK5CYII="></image>-->
<!--                                        </g>-->
<!--                                    </g>-->
<!--                                </svg></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="fly-footer__reserved">-->
<!--            <div class="container">-->
<!--                <div class="fly-footer__reserved__text">-->
<!--                    <p class="p1">FlyGarudaIndonesia.vn © 2018. All rights reserved.</p>-->
<!--                    <p class="p2">Agency Debit / Credit Memo Policy / Destination Guide / Contact Us / Site Map</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->
