<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email & Phone Validation (POST)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="" method="post">
        <h1>Welcome</h1>
        <div>
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" autofocus placeholder="Enter email address">
            <span style="color:red"><?php echo $emailErr; ?></span><br><br>
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Enter phone number">
            <span style="color:red"><?php echo $phoneErr; ?></span><br><br>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <span style="color:red"><?php echo $passwordErr; ?></span><br><br>
        </div>
        <div>
            <input type="submit" value="Login" name="submit">
        </div>
    </form>
</body>
</html>
