<?php
$name=$_POST['name'];
$tt=$_POST['tt'];
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'ten'
);
$dao=DAOPDO::getSingleton($configs);
$sql="insert into cahn(name,salary) values ('$name','$tt')";
$res=$dao->query($sql);
if($res){
    //自己拼接返回结果数组
    $arr=array(
        'code'=>1,
        'msg'=>'添加成功'
    );
    echo json_encode($arr)."<script>location.href='01.php';</script>";
}else{
    //自己拼接返回结果数组
    $arr=array(
        'code'=>0,
        'msg'=>'添加失败'
    );
    echo json_encode($arr);
}