<?php
    $user["surname"] = "Лаврецкая";
    $user["name"] = "Елизавета";
    $user["patronymic"] = "Викторовна";
    $user["login"] = "elizaveta";
    $user["password"] = "12345";
    $user["email"] = "lovel@mail.ru";

    echo "<h1>Вы успешно зарегистрированы на сайте</h1>";
    echo "<b>{$user['surname']} {$user['name']} {$user['patronymic']}</b><br>";
    echo "Логин: {$user['login']}<br>";
    echo "E-mail: {$user['email']}<br>";
    echo "Пароль: {$user['password']}<br>";

?>