<!DOCTYPE html>
<html>
<head>
    <title>Пример формы ввода и обработки данных</title>
</head>
<body>

<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обрабатываем данные после отправки формы

    // Получаем данные из формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Выводим обработанные данные на экран
    echo "Имя: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Сообщение: " . $message;
} else {
    // Если форма еще не отправлена, показываем форму для ввода данных
    ?>

    <h2>Форма ввода данных</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="message">Сообщение:</label><br>
        <textarea name="message" id="message" rows="5" required></textarea><br><br>

        <input type="submit" value="Отправить">
    </form>

    <?php
}
?>

</body>
</html>
