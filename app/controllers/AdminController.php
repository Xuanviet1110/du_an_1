<?php 
session_start();
include '../../models/pdo.php';
include '../../models/taikhoan.php';
include '../../models/banner.php';
include '../../models/sanpham.php';
include '../../models/baiviet.php';
include '../../models/danhmuc.php';
include '../../models/binhluan.php';
include '../../models/khachhang.php';
include '../../models/quyen.php';
include '../../models/donhang.php';
function listbl(){
    $load_binhluan =  load_binhluan();
    include 'listbl.php';
}
function deletebl(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_binhluan($id);
    }
    $load_binhluan = load_binhluan();
    include 'listbl.php';
}
function adddm(){
    if (isset($_POST['submit'])) {
        $error = [];
        if (empty($_POST['addm'])) {
            $error['addm'] = "Vui lòng nhập";
        } else {
            $them = $_POST['addm'];
        }
        if (empty($error)) {
            insert_danhmuc($them);
        }
    }
    include 'QTDM/add.php';
}

function qtdm(){
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}
function suadm()  {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadd = loadone_danhmuc($id);
    }
    include 'QTDM/update.php';
}
function updatedm(){
   
    if (isset($_POST['submit'])) {
        $update = $_POST['tendm'];
        $id = $_POST['iddm'];
        fix_danhmuc($id, $update);
    }
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}
function deletedm(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_danhmuc($id);
    }
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}
function qtkh(){
    $loadkh = loadall_taikhoan();
    include 'QTKH/list.php';
}
function deletekh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_taikhoan($id);
    }
    $loadkh = loadall_taikhoan();
    include 'QTKH/list.php';
}
function addkh(){
    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $ten_dn = $_POST['ten_dn'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        insert_taikhoan($user, $pass, $ten_dn, $email, $sdt , $diachi);
    }
    include 'QTKH/add.php';
}
function qtdh(){
    $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
function adddh(){
    if (isset($_POST['adddh'])) {
        $ngay_dat = $_POST['ngay_dat'];
        $tong_gia = $_POST['tong_gia'];
        $trang_thai = $_POST['trang_thai'];
        $id_kh = $_POST['id_kh'];

        add_donhang($ngay_dat, $tong_gia, $trang_thai, $id_kh);
    }
    $loaddh = loadall_donhang();
    include 'QTDH/add.php';
}
function suadh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadd1 = loadone_donhang($id);
    }
    include 'QTDH/update.php';
}
function updatedh(){
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $ngay_dat = $_POST['ngay_dat'];
        $tong_gia = $_POST['tong_gia'];
        $trang_thai = $_POST['trang_thai'];
        $id_kh = $_POST['id_kh'];
        fix_donhang($id, $ngay_dat, $tong_gia, $trang_thai, $id_kh);
    }
    $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
function deletedh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_don_hang($id);
    }
    $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
function qtsp(){
    $loadsanpham = loadall_sanpham();
    include 'QTSP/list.php';
}
function addsp(){
    if (isset($_POST['addsp'])) {
        $ten = $_POST['ten'];
        $mo_ta = $_POST['mo_ta'];
        $gia = $_POST['gia'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $id_danh_muc = $_POST['id_danh_muc'];

        $target_dir = 'img/';

        $img_dai_dien = $_FILES['img_dai_dien']['name'];
        $target_file = $target_dir . basename($img_dai_dien);
        move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

        $img_1 = $_FILES['img_1']['name'];
        $target_file1 = $target_dir . basename($img_1);
        move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

        $img_2 = $_FILES['img_2']['name'];
        $target_file2 = $target_dir . basename($img_2);
        move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

        $img_3 = $_FILES['img_3']['name'];
        $target_file3 = $target_dir . basename($img_3);
        move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

        if ($ten != '' && $mo_ta != '' && $gia > 0 && $img_dai_dien != '' && $ngay_nhap != '' && $img_1 != '' && $img_2 != '' && $img_3 != '') {
            add_sanpham($ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $img_1, $img_2, $img_3);
            //    header('location: ?act=qtsp');
        } else {
            $thongbao = 'Thất bại';
        }
    }
    $loaddm = loadall_danhmuc();
    include 'QTSP/add.php';
}
function suasp(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadsp = loadone_sanpham($id);
        $loaddm = loadall_danhmuc();
    }
    include 'QTSP/update.php';
}
function updatesp(){
    if (isset($_POST['submit']) && ($_POST['submit'])) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $mo_ta = $_POST['mo_ta'];
        $gia = $_POST['gia'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $id_danh_muc = $_POST['id_danh_muc'];

        $target_dir = 'img/';
        $img_dai_dien = $_FILES['img_dai_dien']['name'];
        $target_file = $target_dir . basename($img_dai_dien);
        move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

        $img_1 = $_FILES['img_1']['name'];
        $target_file1 = $target_dir . basename($img_1);
        move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

        $img_2 = $_FILES['img_2']['name'];
        $target_file2 = $target_dir . basename($img_2);
        move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

        $img_3 = $_FILES['img_3']['name'];
        $target_file3 = $target_dir . basename($img_3);
        move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

        update_sanpham($id, $ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $img_1, $img_2, $img_3);
        // header("location: index.php?act=suasp&&id=$id");
        // $loadsp = loadone_sanpham($id);
        $loaddm = loadall_danhmuc();
        // $loadsanpham = loadall_sanpham();
        // header("location: " . $_SERVER['HTTP_REFERER']);
        // } else {
        //     $thongbao = 'sua san pham that bai';
        // }
    }
    $loadsp = loadone_sanpham($_GET['id']);
    // $loadsanpham = loadall_sanpham();
    include 'QTSP/update.php';
}
function deletesp(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_sanpham($id);
    }
    $loadsanpham = loadall_sanpham();
    include 'QTSP/list.php';
}

function qtbanner(){
    $loadbanner = loadall_banner();
    include 'QTBANER/list.php';
}
function addbanner(){
    if (isset($_POST['addbanner'])) {
        $ten = $_POST['ten'];
        $link = $_POST['link'];

        $target_dir = '../../views/Admin/img/';

        $img = $_FILES['img']['name'];
        $target_file = $target_dir . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($ten != '' && $link != '' && $img != '') {
            add_banner($img, $ten, $link);
            $thongbao = 'Thêm banner thành công';
        } else {
            $thongbao = 'Thất bại';
        }
    }
    include 'QTBANER/add.php';
}
function suabn(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $banner = loadone_banner($id);
    }
    include 'QTBANER/update.php';
}
function updatebn(){
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $link = $_POST['link'];
        $img = $_FILES['img']['name'];
        $target_dir = '../../view/Admin/img/';
        $target_file = $target_dir . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($ten != "") {
            update_banner($id, $img, $ten, $link);
            $loadbn = loadone_banner($id);
            $thongbao = 'update banner thành công';
        } else {
            $banner = loadone_banner($id);
            $thongbao = 'update thất bại';
        }
    }
    $loadbanner = loadall_banner();
    include 'QTBANER/list.php';
}
function deletebn(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_banner($id);
    }
    $loadbanner = loadall_banner();
    include 'QTBANER/list.php';
}
function qtbv(){
    $loadbaiviet = loadall_baiviet();
    include 'QTBV/list.php';
}
function addbaiviet(){
    if (isset($_POST['addbaiviet'])) {
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $ngay_dang = $_POST['ngay_dang'];
        $target_dir1 = '../../views/Admin/img/';

        $anh = $_FILES['anh']['name'];
        $target_file1 = $target_dir1 . basename($anh);
        move_uploaded_file($_FILES['anh']['tmp_name'], $target_file1);
        if ($tieu_de != '' && $noi_dung != '' && $ngay_dang != '') {
            add_baiviet($tieu_de, $anh, $noi_dung, $ngay_dang);
            $thongbao = 'Thêm banner thành công';
        } else {
            $thongbao = 'Thất bại';
        }
    }

    include 'QTBV/add.php';
}
function suabv(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $baiviet = loadone_baiviet($id);
    }
    include 'QTBV/update.php';
}
function updatebv(){
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $ngay_dang = $_POST['ngay_dang'];
        
        $target_dir1 = '../../views/Admin/img/';

        $anh = $_FILES['anh']['name'];
        $target_file1 = $target_dir1 . basename($anh);
        move_uploaded_file($_FILES['anh']['tmp_name'], $target_file1);
        if ($tieu_de != "") {
            update_baiviet($id, $tieu_de, $anh, $noi_dung, $ngay_dang);
            $baiviet = loadone_baiviet($id);
            $thongbao = 'update bv thành công'; 
        } else {
            $baiviet = loadone_baiviet($id);
            $thongbao = 'update thất bại';
        }     
    }
    $loadbaiviet = loadall_baiviet();            
    include 'QTBV/list.php';
}
function deletebv(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_baiviet($id);
    }
    $loadbaiviet = loadall_baiviet();
    echo '<script>alert("vui long quay ve trang chu");</script>';
    include 'QTBV/list.php';
}
function quyen(){
    $loadquyen = loadall_quyen();
    include 'quyen/list.php';
}
function suaq(){
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        if (isset($_POST['btn'])) {
            $quyen = $_POST['quyen'];
             fix_quyen($_GET['id'], $quyen);                    
             header("Location: ?act=quyen");
        }
    }
    $loada = loada_quyen();
    $loadquyen = loadall_quyen();
    include 'quyen/update.php';
}
function deleteq(){

}


?>