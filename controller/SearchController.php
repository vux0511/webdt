<?php

    if (isset($_GET["act"])) {
        $act = $_GET["act"];
    } else {
        $act = '';
    }

    $thongbao = '';
    $error = '';

    if (isset($_POST['search'])) {
        $key = $_POST['key'];
        if ($key == "") {
            $errorSearch = "Vui lòng không để trống!";
        }
        $sql = "SELECT * FROM product WHERE name_product LIKE '%$key%'";
        $sqlCount = "SELECT COUNT(*) FROM product WHERE name_product LIKE '%$key%'";
        $searchProduct = selectAll($sql);
        $rowProductSearch = selectRow($sqlCount);
        if ($rowProductSearch == 0) {
            $alert = "Không tìm thấy kết quả nào!";
            $alert2 = "Hãy thử sử dụng các từ khóa chung chung hơn";
        }
        $product_category = loadCategory();
        require_once ('view/public/layout/header.php');
        require_once ('view/public/layout/search.php');
        require_once ('view/public/layout/footer.php');
    } else {
        echo "Lỗi";
    }
?>
