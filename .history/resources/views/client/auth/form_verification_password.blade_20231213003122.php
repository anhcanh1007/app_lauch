<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link rel="stylesheet" href="{{ asset('asset/css/client/email.css') }}">
    <style>
        .container {
            width: 600px;

        }

        .top-email {
            display: flex;
            justify-content: space-around;
        }

        .img {
            text-align: center;
        }

        .img img {
            width: 100px;
            height: 100px;
        }

        .notifi {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .notifi p {
            font-size: 20px;
            font-weight: 700;
        }

        .number {
            font-size: 20px;
            font-weight: 800;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="notifi">
            <p>Applauch send new password for you</p>
        </div>
        <hr>
        <div>
            <p>This is confidential information. Please do not disclose it publicly</p>
            <p class="number">New Password is: {{ $number }}</p>
        </div>
    </div>
</body>

</html>
