<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <div>
        <h1>User Login</h1>
        <form action="http" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter name">
            <br>
            <input type="password" name="password" placeholder="Enter password">
            <br>
            <button>Login</button>
        </form>
    </div>
</body>
</html>