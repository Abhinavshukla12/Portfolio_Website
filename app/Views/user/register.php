<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/user/register" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
