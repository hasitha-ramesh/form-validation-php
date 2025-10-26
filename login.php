<?php
$alert = [];
$all_valid = true;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    //email validation
    if (empty($email)) {
        $alert[] = ["message" => "Email is required.", "type" => "error"];
        $all_valid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alert[] = ["message" => "Invalid email format.", "type" => "warning"];
        $all_valid = false;
    }


    //phone validation
    if (empty($phone)) {
        $alert[] = ["message" => "Phone number is required." , "type" => "error"];
        $all_valid = false;
    }elseif (!preg_match('/^\+?[0-9]{10,15}$/', $phone )) {
        $alert[] = ["message" => "Invalid phone number format." , "type" => "warning"];
        $all_valid = false;
    }

    if (empty($password)){
        $alert[] = ["message" => "Password os reqired." , "type" => "error"];
        $all_valid = false;
    }elseif (strlen(trim($password)) < 6){
        $alert[] = ["message" => "Password must be at least 6 characters." , "type" => "warning"];
        $all_valid = false;

    }

    if ($all_valid){
        $alert = [
            ["message" => "Registration Succesfull." , "type" => "success"]
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email & Phone Validation (POST)</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h2>Email & Phone Validation (POST)</h2>
        <p>This is a simple form to demonstrate email and phone number validation using PHP's POST method.</p>
        <form action="" method="post" class="form">
            <h1>Welcome</h1>

            <?php if (!empty($alert)): ?>
                <?php foreach ($alert as $alert): ?>
                <div class="alert <?= $alert['type'];?>">
                    <p><?= $alert['message']; ?> </p>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <div>
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" autofocus placeholder="Enter email address" required>
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div>
                <input type="submit" value="Login" name="submit">
            </div>
        </form>
    </div>
</body>

</html>
