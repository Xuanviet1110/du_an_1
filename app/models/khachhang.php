<?php
// load khach hang
  
    // function delete_khachhang($id){
    //     $sql = "delete from khachhang where id = '$id'";
    //     pdo_execute($sql);
    // }
 
// load khach hang de sua
    function loadone_khachhang($id){
        $sql = "select * from khachhang where id = '$id'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
// sua khach hang
    function update_khachhang($id ,$user, $pass, $email, $address, $tel, $role){
        $sql = "update khachhang set user='$user', pass='$pass', email='$email', address='$address', tel='$tel', role='$role' where id='$id'";
        pdo_execute($sql);
    } 
    function is_error($form_err){
        global $error;
        if(!empty($error[$form_err])){
            return $error[$form_err];
        }
    }
?>