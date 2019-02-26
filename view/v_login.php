<html>
<head>
</head>
<body>
<h2><?= $msg ?></h2>
<form action="" method="POST">
    <p>
        <label>Username</label>
        <input type="text" id="username" value="" name="username" required/>
        <br>
    </p>
    <p>
        <label>Password</label>
        <input type="password" id="password" value="" name="password" required/>
        <br>
    </p>
    <p>
        <button type="submit">Login</button>
        <button type="reset">Cancel</button>
    </p>
</form>
</body>
</html>