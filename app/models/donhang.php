<?php
//load đơn hàng
function load_donhang($id){
    $sql = "SELECT donhang.id AS id_donhang, donhang.ngay_dat, donhang.tong_gia, donhang.trang_thai,
    khachang.ten AS ten_khachhang, khachang.dia_chi, khachang.so_dien_thoai, khachang.id AS id_khachhang
    FROM `donhang` 
    JOIN khachang ON donhang.id_kh = khachang.id ";
    $donhang = pdo_query($sql);
    return $donhang;
}
//load tổng số đơn hàng

function fix_donhang($id, $ngay_dat, $tong_gia, $trang_thai, $id_kh)
{
    // Assuming you have a PDO object named $pdo
    $sql = "UPDATE `donhang` SET 
                `ngay_dat` = '$ngay_dat', 
                `tong_gia` = '$tong_gia', 
                `trang_thai` = '$trang_thai', 
                `id_kh` = '$id_kh' 
            WHERE `id` = $id";
    pdo_execute($sql);
}
// 
function add_donhang($ngay_dat,$tong_gia,$trang_thai,$id_kh)
{
    $sql = "INSERT INTO `donhang` (`ngay_dat`, `tong_gia`, `trang_thai`, `id_kh`)
                VALUES ('$ngay_dat', '$tong_gia', '$trang_thai', '$id_kh')";
    pdo_execute($sql);
}
function loadone_donhang($id){
    $sql = "select * from donhang where id = '$id'";
    $dh = pdo_query_one($sql);
    return $dh;
}
function loadall_donhang(){
    $sql = "select * from donhang where 1";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
// load so đơn hàng chưa hoàn thành
function load_sdh_chua_ht(){
    $sql = "SELECT COUNT(*) AS tong_so_don_hang
    FROM donhang
    WHERE trang_thai = '1';";
    $donhang = pdo_query($sql);
    return $donhang;
}
//load so don hang hoan thanh

function load_sdh_ht(){
    $sql = "SELECT COUNT(*) AS tong_so_don_hang
    FROM donhang
    WHERE trang_thai = '2';";
    $donhang = pdo_query($sql);
    return $donhang;
}
// xoa don hang
function delete_don_hang($id){
    $sql = "DELETE from donhang where id = '$id';";
    pdo_execute($sql);
}
function chitietdh(){
    $sql = "SELECT donhang.id as iddh, sanpham.id as idsp,sanpham.ten,ctdh.so_luong,ctdh.thanh_tien, ctdh.ghi_chu, donhang.trang_thai  FROM 
    donhang JOIN ctdh on donhang.id = ctdh.id_dh JOIN sanpham on ctdh.id_sp = sanpham.id";
    $donhang = pdo_query($sql);
    return $donhang;
}