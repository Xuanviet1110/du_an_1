<?php
//load tất cả bài viêt
function loadall_baiviet(){
    $sql = 'SELECT * FROM `bai_viet` WHERE 1';
    $list = pdo_query($sql);
    return $list;
}
//load 1 tin tuc để sửa
function loadone_baiviet($id)
{
    $sql = "SELECT * FROM bai_viet WHERE id = '$id';";
    $baiviet = pdo_query_one($sql);
    return $baiviet;
}
//sửa bài viết
// function update_baiviet($id, $tieu_de, $anh, $noi_dung, $ngay_dang)
// {
//     $sql = "UPDATE `bai_viet`
//      SET 
//     `tieu_de` = '$tieu_de',
//     `noi_dung` = '$noi_dung',
//     `ngay_dang` = '$ngay_dang'
//     WHERE
//       `id`='$id' AND (`anh`='$anh' OR '$anh' = '');";
//     pdo_execute($sql);
// }
function update_baiviet($id, $tieu_de, $img, $noi_dung, $ngay_dang)
{
    if ($img != '') {
        $sql = "update bai_viet set tieu_de='$tieu_de', anh='$img', noi_dung='$noi_dung', ngay_dang='$ngay_dang' where id='$id';";
    } else {
        $sql = "update bai_viet set tieu_de='$tieu_de', noi_dung='$noi_dung', ngay_dang='$ngay_dang' where id='$id';";
    }
    pdo_execute($sql);
}
function add_baiviet( $tieu_de, $img, $noi_dung, $ngay_dang)
{
    $sql = "INSERT INTO `bai_viet`(`tieu_de`, `anh`, `noi_dung`, `ngay_dang`) VALUES ('$tieu_de','$img','$noi_dung','$ngay_dang');";
    pdo_execute($sql);
}
//xóa
function delete_baiviet($id)
{
    $sql = "DELETE FROM `bai_viet` WHERE id='$id';";
    pdo_execute($sql);
}
?>