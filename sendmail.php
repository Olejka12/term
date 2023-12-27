<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $product_id = $_POST["product_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Формування тіла повідомлення
    $message = "Нове замовлення:\n\n";
    $message .= "Ім'я: $name\n";
    $message .= "Email: $email\n";
    $message .= "Телефон: $phone\n";

    // Встановлення заголовків для відправлення HTML-повідомлення
    $headers = "From: vladyslavzaharskykh@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Відправлення електронної пошти
    $to = "artistnniga@gmail.com";
    $subject = "Нове замовлення";

    if (mail($to, $subject, $message, $headers)) {
        echo "Замовлення відправлено успішно.";
    } else {
        echo "Помилка при відправленні замовлення.";
    }
}
?>
