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