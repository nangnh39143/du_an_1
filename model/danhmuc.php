<?php
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        // $iddm = $_GET['id'];
        $sql = "SELECT * FROM danhmuc WHERE id=".$id;
        $danhmuc = pdo_query_one($sql);
        return $danhmuc;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "UPDATE danhmuc SET name= '$tenloai' WHERE id=".$id;
         pdo_execute($sql);
    }
?>