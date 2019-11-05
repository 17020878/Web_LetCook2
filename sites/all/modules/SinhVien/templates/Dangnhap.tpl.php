<!--<form  method="POST">-->
<!---->
<!--<form action="register.php" method="post">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td colspan="2">Đăng nhập</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Email :</td>-->
<!--            <td><input type="text" id="username" name="email"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Password :</td>-->
<!--            <td><input type="password" id="pass" name="pass"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td colspan="2" align="center"><input type="submit" name="btn_submit" action="--><?php //echo base_path().'home_home/'.$data->Id ?><!--" value="Đăng nhập"></td>-->
<!--        </tr>-->
<!---->
<!--    </table>-->
<!---->
<!--</form>-->
<!--    <a-->
<!--            href="--><?php //echo base_path() . drupal_get_path_alias('dangki/') ?><!--"-->
<!--            tabindex="0">Đăng kí nếu bạn chưa có tài khoản<i></i></a>-->
<!--    <input type="hidden" name="ID" value = "--><?php //echo $data->Id?><!--" >-->
<!---->
<!---->



<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_path().'sites/all/themes/blankM'?>/css/test.css">
</head>
<body style="background-image: url('<?php echo base_path().'sites/all/themes/blankM'?>/images/4.jpg')">
<div class="container"  >
    <div class="row">
        <div class="col-sm-12  col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" method="post">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                            <a href="#" style="float:right">Quên mật khẩu</a>

                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="btn_submit" style="margin-top:80px" type="submit" href="<?php echo base_path().'home_home/'.$data->Id ?>">Sign in</button>

                        <a href="<?php echo base_path().'dangki' ?>" style="margin:20px auto; text-align:center; display:block; width:120px;font-size:12px" class="button large hpbottom">Sign up</a>

                </div>

                </form>
            </div>
        </div>

    </div>
</div>
</div>
</body>

