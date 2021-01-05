<html>
    <head>
        <title>Form Login</title>
        <link rel="stylesheet" href="stylelogin.css" type="text/css">
    </head>
<body>
    <h2>LOGIN ADMIN</h2>
    <form action="utama.php" method="POST">
        <div class="imglogin">
            <img src="avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="ulogin">
            <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Masuk</button>
        </div>
    </form>
    
</body>