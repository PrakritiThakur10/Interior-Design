
<?php

$conn = mysqli_connect("localhost", "root", "", "interior");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];
$decor = $_POST['decor'];
$color = $_POST['color'];

$sql = "INSERT INTO customer_details
        (name, number, email, age, address, decor, color)
        VALUES
        ('$name', '$number', '$email', '$age', '$address', '$decor', '$color')";

if (mysqli_query($conn, $sql)) {
    echo "
    <html>
    <head>
        <title>Success</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #f4f4f4;
                margin-top: 100px;
            }

            h2 {
                color: green;
            }

            .btn {
                display: inline-block;
                margin-top: 20px;
                padding: 12px 25px;
                background-color: #0b9fef;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 16px;
            }

            .btn:hover {
                background-color: #087dc0;
            }
        </style>
    </head>
    <body>
        <h2>Data Saved Successfully!</h2>

        <a href='home.html' class='btn'>
            Back to Main Page
        </a>
    </body>
    </html>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

