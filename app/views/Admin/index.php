<?php
ob_start();
include '../../controllers/AdminController.php';
include 'header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangxuat':
            session_unset();
            header("Location: ../../../index.php");
            break;
            // quản trị bình luận
        case 'listbl':
            listbl();
            break;
        case 'deletebl':
            deletebl();
            break;
            //  danh mục
        case 'qtdm':
            qtdm();
            break;
        case 'adddm':
            adddm();
            break;
        case 'suadm':
            suadm();
            break;
        case 'updatedm':
            updatedm();
            break;
        case 'deletedm':
            deletedm();
            break;
        case 'qtkh':
            qtkh();
            break;
        case 'deletekh':
            deletekh();
            break;
        case 'updatekh':
            include 'QTKH/list.php';
            break;
        case 'addkh':
            addkh();
            break;
            // đơn hàng
        case 'qtdh':
            qtdh();
            break;
        case 'adddh':
            adddh();
            break;

        case 'suadh':
            suadh();
            break;
        case 'updatedh':
            updatedh();
            break;
        case 'deletedh':
            deletedh();
            break;

        case 'qtsp':
            qtsp();
            break;
            //thêm sản phẩm
        case 'addsp':
            addsp();
            break;

            //sửa
        case 'suasp':
            suasp();
            break;
        case 'updatesp':
            updatesp();
            break;
            //xóa
        case 'deletesp':
            deletesp();
            break;
            // banner
        case 'qtbanner':
            qtbanner();
            break;
        case 'addbanner':
            addbanner();
            break;
        case 'suabn':
            suabn();
            break;

        case 'updatebn':
            updatebn();
            break;
            //xóa
        case 'deletebn':
            deletebn();
            // bài viết
        case 'qtbv':
            qtbv();
            break;
            //thêm
        case 'addbaiviet':
            addbaiviet();
            break;
            //sửa
        case 'suabv':
            suabv();
            break;

        case 'updatebv':
            updatebv();
            break;
            //xóa
        case 'deletebv':
            deletebv();
            break;

        case 'quyen':
            quyen();
            break;

            //thêm

            //sửa
        case 'suaq':
            suaq();
            break;
        case 'bienthedâs':
            $loadd = chitietdh();
            include 'QTBT/list.php';
            break;
        case 'addbt':
            include 'QTBT/add.php';
            break;
        case 'updatebt':
            include 'QTBT/update.php';
            break;


        default:
            include '404.php';
    }
} else {
    include 'home.php';
}

include 'footer.php';
ob_end_flush();
