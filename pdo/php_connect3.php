<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/25
 * Time: 下午7:26
 */
try{
    $dsn='imooc';
    $username='root';
    $passwd='root';
    $pdo=new PDO($dsn,$username,$passwd);
}catch (PDOException $e){
    $e->getMessage();
}