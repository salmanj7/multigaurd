<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to our website!</h1>

    <p>Choose an option:</p>
    <ul>
        <li><a href="{{ route('admin.register') }}">Admin Register</a></li>
        <li><a href="{{ route('admin.login') }}">Admin Login</a></li>
        <li><a href="{{ route('customer.register') }}">Customer Register</a></li>
        <li><a href="{{ route('customer.login') }}">Customer Login</a></li>
    </ul>
</body>
</html>
