<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["UserName"];
    $password = $_POST["Password"];

    $con = mysqli_connect("localhost", "root", "", "reg");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = mysqli_query($con, "SELECT * FROM registration WHERE UserName = '$username'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // WARNING: This is not secure, only for demonstration purposes.
        if ($password == $row["Password"]) {
            $response = [
                "success" => true,
                "message" => "Login successful",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Wrong password",
            ];
        }
    } else {
        $response = [
            "success" => false,
            "message" => "User not found",
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle non-POST requests if needed
}
?>
