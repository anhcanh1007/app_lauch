<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url({{ asset('images/backlogin.jpg') }});
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <div>
            <form action="">
                <div>
                    <div>
                        <label for="">Your email or username</label>

                    </div>
                    <div>
                        <input type="text" placeholder="Username">

                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Your Password</label>

                    </div>
                    <div>
                        <input type="text" placeholder="Password">

                    </div>
                </div>
                <div>
                    <div>
                        <input type="checkbox" name="" id="" placeholder="Remember me?"><span>Remember
                            me?</span>
                    </div>
                    <div>
                        <p>Forgot Password?</p>
                    </div>
                </div>
                <div>
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
