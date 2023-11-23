<?php

function select_new(){
    $sql = 'select *, taikhoan.user as name, danhmuc.name as namedm, danhmuc.id as iddm from news JOIN taikhoan on news.iduser = taikhoan.id join danhmuc on news.iddm=danhmuc.id order by news.id desc limit 0,3';
    $list = pdo_query($sql);
    return $list;
}
// select danhmuc.name, taikhoan.user, news.title, news.text, news.img from news JOIN taikhoan on news.iduser = taikhoan.id join danhmuc on news.iddm=danhmuc.id where news.id =
// select * from news JOIN taikhoan on news.iduser = taikhoan.id join danhmuc on news.iddm=danhmuc.id AND news.id = '$id'
function chitietnew($id){
    $sql = "select *, taikhoan.user as name, news.id as idn, danhmuc.name as namedm, danhmuc.id as iddm from news JOIN taikhoan on news.iduser = taikhoan.id join danhmuc on news.iddm=danhmuc.id where news.id = '$id'";
    $news = pdo_query_one($sql);
    return $news;
}

?>