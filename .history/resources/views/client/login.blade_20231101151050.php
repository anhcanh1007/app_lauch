<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-container">
        <h1>Đăng nhập</h1>
        <form>
            <div class="input-group">
                <label for="username">Tên người dùng:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên người dùng" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>

</html>
