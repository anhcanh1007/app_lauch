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
            <p>Applauch </p>
        </div>
        <hr>
        <div>
            <p>To verify your email address, please use the following On Time Password (OTP):</p>
            <p class="number">{{ $number }}</p>
            <p>Do not share this OTP with anyone. App lauch takes your account security very seriously. App lauch
                Customer
                Service will never ask you to disclose or verify your App lauch password, OTP, credit card, or banking
                account number. If you receive a suspicious email with a link to update your account information, do not
                click on the link—instead, report the email to App lauch for investigation</p>
            <p>Thank you!</p>
        </div>
    </div>
</body>

</html>
