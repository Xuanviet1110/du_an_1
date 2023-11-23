<?php
// thong ke
function loadall_sanpham_thongke(){
    $sql = "SELECT dm.id, dm.name, count(*) soluong, min(price) gia_min, max(price) gia_max, avg(price) gia_avg 
    from danhmuc as dm 
    join sanpham as sp on dm.id=sp.iddm 
    group by dm.id, dm.name 
    order by 'soluong' desc;";
    return pdo_query($sql);
}

?>