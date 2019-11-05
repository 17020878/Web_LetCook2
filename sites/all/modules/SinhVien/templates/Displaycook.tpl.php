<?php
    $nguyenlieu = $data[0]->NguyenLieu;
    $tpnguyenlieu = preg_split("/[,]+/", $nguyenlieu);
    $buoc1 = $data[0]->Buoc1;
    $buoc2 = $data[0]->Buoc2;
    $buoc3 = $data[0]->Buoc3;

?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_path().'sites/all/themes/blankM/css/libs/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_path().'sites/all/module/SinhVien/' ?>css/cook2css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title></title>
</head>
<body style="background-color:#e9ebee">
<div class="card" style="width: 750px; border-radius: 10px;margin-left: 380px;margin-top:20px" >
    <img class="card-img" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGmonan?>" alt="Card image cap" />
    <div class="card-body">
        <h5 class="card-title"><?php echo $data['0']->TenCongThuc ?></h5>
        <p class="card-text"><?php echo $data['0']->NoiDungMoTa ?></p>
    </div>
</div>

<div class="cachlam" >
    <h1>Nguyên liệu</h1>
    <div class="row">
        <?php  foreach ($tpnguyenlieu as $value): ?>
        <div class="col-sm-3">  <span style="cursor: pointer" class="fa fa-plus-circle text-blue">
             </span>
            <label for=""><?php echo $value?></label>
        </div>
        <?php endforeach;?>

    </div>

</div>
<div class="cacbuoc" style="margin-bottom:50px">
    <h2>Thực hiện</h2>
    <div class="row">
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 50px 0px 50px" >Bước</h4>
            <span style="margin-left:60px;color:crimson;font-weight: bold;">1</span>
        </div>

        <div class="col-sm-8" style="margin-top:10px">
            <p><?php echo $buoc1 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 10px;margin-left:65px;margin-bottom:15px">
            <img class="card-img" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc1?>" alt="Card image cap"
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 50px 0px 50px" >Bước</h4>
            <span style="margin-left:60px;color:crimson;font-weight: bold;">2</span>
        </div>

        <div class="col-sm-8" style="margin-top:10px">
            <p><?php echo $buoc2 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 10px;margin-left:65px;margin-bottom:15px">
            <img class="card-img" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc2?>" alt="Card image cap"
        </div>

    </div>

    <div class="row">
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 50px 0px 50px" >Bước</h4>
            <span style="margin-left:60px;color:crimson;font-weight: bold;">3</span>
        </div>

        <div class="col-sm-8" style="margin-top:10px">
            <p><?php echo $buoc3 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 10px;margin-left:65px;margin-bottom:15px">
            <img class="card-img" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc3?>" alt="Card image cap"
        </div>
    </div>
<!--    <div class="row">-->
<!--        <div class="col-sm-2">-->
<!--            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 50px 0px 50px" >Bước</h4>-->
<!--            <span style="margin-left:60px;color:crimson;font-weight: bold;">4</span>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-8" style="margin-top:10px">-->
<!--            <p>Cho bơ lạt vào chảo, đun chảy. Cho bánh mì đã ngấm sữa vào rán cho vàng mặt. khi mặt dưới đã vàng giòn (30 giây), bạn rắc một lớp đường mỏng lên lát cắt bánh mì và trở mặt rán tiếp thêm 30 giây - 1 phút cho đến khi đường tan và tạo thành 1 lớp caramel giòn tan vàng ruộm thì tắt bếp..</p>-->
<!--        </div>-->
<!--        <div class="card" style="width: 650px; border-radius: 10px;margin-left:65px;margin-bottom:15px">-->
<!--            <img class="card-img" src="--><?php //echo base_path().'sites/all/modules/SinhVien/css/images/abc.jpg'?><!--" alt="Card image cap"-->
<!--        </div>-->
<!--    </div>-->

</div>
</div>
</body>
</html>


<style>
    .cachlam,.cacbuoc{
        margin-top: 20px;
        border-radius: 10px;
        margin-left: 380px;
        background-color:#fff;
        width: 750px;
    }
    .fa-plus-circle{
        content: "\f055";
    }
    .text-blue{
        color: #428bca;
    }
</style>



