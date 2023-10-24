<?php

$mysql = @mysqli_connect('127.0.0.1:8889', 'root', 'root', 'm');
if (!$mysql) die(mysqli_connect_error());
var_dump($mysql);
//mysqli_set_charset($mysql, 'utf-8') or die('Не правильная кодировка');

$email_post = filter_var($_POST['emailUser'], FILTER_SANITIZE_STRING);
$password_post = filter_var($_POST['passwordUser'], FILTER_SANITIZE_STRING);
$name_post = filter_var($_POST['nameUser'], FILTER_SANITIZE_STRING);

$query = mysqli_query($mysql, "INSERT INTO `users` (`email`, `password`, `name`) VALUES ('$email_post', '$password_post', '$name_post')");

if($query) echo 'Успешно добавили в базу';
else echo 'Ошибка';

//$mysql->query("INSERT INTO users(id,password,name) VALUES(NULL, '$password_post', '$name_post')");

$mysql->close();

//$sql = "INSERT INTO users(email,password,name) VALUES('$email_post', '$password_post', '$name_post')";

//$mysql->query($sql);


//if (mb_strlen($name_post) > 100) {
//    echo 'Недопустимая длина имени';
//    exit();
//} elseif (mb_strlen($email_post) > 100) {
//    echo 'Недопустимая длина почты';
//    exit();
//} elseif (mb_strlen($password_post) > 32) {
//    echo 'Недопустимая длина пароля';
//    exit();
//}

echo $email_post;
echo $password_post;
echo $name_post;

//mysqli_query($mysql, "INSERT INTO users (id, email, password, name) VALUES ('NULL', '$email_post', '$password_post', '$name_post')");
