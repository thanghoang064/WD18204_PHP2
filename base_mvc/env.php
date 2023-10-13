<?php
// tất cả những giá trị chung cho toàn bộ dự án sẽ khởi tạo ở đây

const DBNAME = "wd18204";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
//
const BASE_URL = "http://localhost:8888/WD18204_PHP2/base_mvc/";

function route($url) {
    return BASE_URL.$url;
}
// key co the truyen success hoac errors
function flash($key,$msg,$route)  {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route.'?msg='.$key);die;
}