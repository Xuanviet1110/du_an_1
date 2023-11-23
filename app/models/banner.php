<?php
//tat ca banner
function loadall_banner(){
    $sql = "SELECT * FROM banner
    ORDER BY id asc;";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
// them banner

function add_banner($img,$ten,$link){
    $sql = "INSERT INTO `banner`(`img`,`ten`,`link`) VALUES ('$img','$ten','$link')";
    pdo_execute($sql);
}
//load 1 banner de sua
function loadone_banner($id){
    $sql = "select * from banner where id = '$id'";
    $banner = pdo_query_one($sql);
    return $banner;
}
// xoa banner
function delete_banner($id){
    $sql = "delete from banner where id = '$id'";
    pdo_execute($sql);
}
// sua banner
function update_banner($id, $img, $ten, $link)
{
    $sql = "UPDATE `banner`
    SET
      `ten`='$ten',
      `link`='$link'
    WHERE
      `id`='$id' AND (`img`='$img' OR '$img' = '');";
    pdo_execute($sql);
}
