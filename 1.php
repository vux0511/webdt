<?php

    // Kết nối với cơ sở dữ liệu
    // Thường thì phần kết nối này code ở 1 file config xong include vào mấy file khác để dùng
    // Start
    $conn = new mysqli('localhost', 'root', '', 'BTTH01_CSE485');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // End
?>