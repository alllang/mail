<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка данных после отправки формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Вывод обработанных данных
    echo "Имя: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Сообщение: " . $message;
}
?>
