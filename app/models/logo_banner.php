<?php

function select_logo(){
    $sql = "select * from logo where 1";
    return pdo_query($sql);
}
function select_logo_id($id){
    $sql = "select * from logo where id = '$id'";
    return pdo_query_one($sql);
}
function update_logo($id, $img){
    $sql = "update logo set img='$img' where id='$id'";
    pdo_execute($sql);
}

?>