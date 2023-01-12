<?php
    include ("view/public/navbar.php");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <h2 style="margin-top: 30px; margin-bottom: 30px;">Thêm Danh Mục</h2>
    <form method="POST">
        <div class="form-group">
            <label for="text">Tên Danh Mục</label>
            <input type="text" class="form-control" id="text" aria-describedby="text" name="name_category">
        </div>
        <a href="?controller=back"><button type="button" class="btn btn-warning" style="margin-bottom: 25px;"
                name="back">Quay
                lại</button></a>
        <button type="submit" class="btn btn-success" name="add_category" style="margin-bottom: 25px;">Thêm</button>

    </form>
    <?php
        if (isset($thongbao)) {
            echo $thongbao;
        }
        if (isset($error)) {
            echo $error;
        }
    ?>

    <?php
    include ("view/public/footer.php");
?>