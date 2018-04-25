<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/25
 * Time: 下午7:18
 */
//通过uri的形式连接数据库
try{
    $dsn='uri:file://G:\phpdev\apache\htdocs\imooc\pdo\dsn.txt';
    $username='root';
    $passwd='root';
    $pdo=new PDO($dsn,$username,$passwd);
    var_dump($pdo);
}catch(PDOException $e){

}