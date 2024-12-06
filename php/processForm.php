<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cedar-Knob-Soap-Company</title>
        <link rel="icon" href="images/logo.png">
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <!--processForm.php
       Author: Matthew Williams
        Date: 12/06/2024
        Last revised: 12/06/2024
        Description: php response form
    -->

    <body><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $comments = htmlspecialchars($_POST['comments']);

    // Confirm receipt and display information
    echo "<h2>Thank you for contacting us!</h2>";
    echo "<p>We have received the following information:</p>";
    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Last Name:</strong> $lastname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Questions:</strong> $comments</p>";
} else {
    echo "<p>Error: Form was not submitted correctly.</p>";
}
?>

    </body>
</html>