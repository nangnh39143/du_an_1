<?php
    function insert_sanpham($tenloai,$giasp,$hinh,$mota,$iddm){
        $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) VALUES('$tenloai','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM sanpham WHERE 1 order by id desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_top10(){
        $sql = "SELECT * FROM sanpham WHERE 1 order by luotxem desc limit 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if ($kyw!="") {
            $sql.=" AND name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" AND iddm ='".$iddm."'";
        }
        $sql.=" ORDER BY id DESC";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "SELECT * FROM danhmuc WHERE id =".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }

    }
    function loadone_sanpham($id){
        $sql = "SELECT * FROM sanpham WHERE id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm){

        if ($hinh !='') {
            $sql = "UPDATE `sanpham` SET  `name`= '$tensp', `price`= '$giasp', `img`= '$hinh', `mota`= '$mota',`iddm` = '$iddm' WHERE `id`=".$id;           
        }else {
            $sql = "UPDATE `sanpham` SET  `name`= '$tensp', `price`= '$giasp', `mota`= '$mota', `iddm`= '$iddm' WHERE `id`=" .$id;           
        }
         pdo_execute($sql);
    }
?>