<?php

function connectToMySQL(){
    //     註解：變數  用來設定連線資料 在命令列上可以打 mysql --user="homestead" --password="secret" 來登入
    $host = "localhost";  //請看 主機上的 /etc/hosts
    $user = "homestead";  //homestead 內建的帳號密碼
    $password = "secret";
    $database = "phpMySQL"; //還需要 use database

    //  執行連線到資料庫的動作，並將回傳的東西存放到  $dbLink  中
    $dbConnect = new mysqli($host, $user, $password, $database); //還需要 use database

    // 檢查是否連線錯誤
    if ($dbConnect->connect_error)
    {
//        die("連線錯誤". $dbLink->connect_error);  // 物件導向 「->」、「new」都是物件導向
        die("連線錯誤：".mysqli_connect_error()); // 程序導向
    }
    else
        echo "連線成功<br>~";

    return $dbConnect;
}