<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    
    $to = "usuhuu8668@gmail.com";  // энд өөрийн имэйл хаяг тавина
    $subject = "CV вэбсайтаас мессеж ирлээ";
    $body = "Нэр: $name\nИмэйл: $email\nЗурвас:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Таны мессеж амжилттай илгээгдлээ!";
    } else {
        echo "Алдаа гарлаа. Дахин оролдоно уу.";
    }
}
?>
