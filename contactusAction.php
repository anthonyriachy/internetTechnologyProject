
<?php
if (isset($_GET["fname"], $_GET["email"], $_GET["messg"])) {

    $name = $_GET["fname"];
    $email = $_GET["email"];
    $message = $_GET["messg"];

    $thankYouMessage = "Thank you, your message has been submitted!";

    $submittedInfo = "<p>Name: $name</p><p>Email: $email</p><p>Message: $message</p>";

    $htmlResponse = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Thank You</title>
        </head>
        <body>
            <h1>$thankYouMessage</h1>
            $submittedInfo
        </body>
        </html>
    ";

    echo $htmlResponse;
} else {

    echo "missing data  ";
}
?>

