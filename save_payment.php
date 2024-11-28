<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "liftly";

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$transaction_id = $_POST['transaction_id'];


$stmt = $conn->prepare("INSERT INTO payment (FullName, Email, Amount, TransactionID) VALUES (?, ?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("ssss", $full_name, $email, $amount, $transaction_id);


    if ($stmt->execute()) {
        echo "<script>
            alert('Details saved successfully!');
            window.location.href='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: " . $stmt->error . "');
            window.history.back();
        </script>";
    }

    $stmt->close();
} else {
    echo "<script>
        alert('Error preparing the statement: " . $conn->error . "');
        window.history.back();
    </script>";
}

$conn->close();
?>