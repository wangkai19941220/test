<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/25
 * Time: 下午7:13
 */
//通过参数形式连接数据库
try{
    $dsn='mysql:host=localhost;dbname=imooc';
    $username='root';
    $passwd='root';
    $pdo=new PDO($dsn,$username,$passwd);
}catch(PDOException $e){
    echo $e->getMessage();
}