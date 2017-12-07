<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello, Laravens!</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background: #333;
        }

        div {
            margin-top: 80px;
        }

        p {
            text-align: center;
            color: #eee;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 30px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
    </style>
</head>
<body>
    <div>
        <p>
            Hello Laravens, from PHP <?php echo $_ENV['PHP_VERSION'] ?>.
        </p>
    </div>
</body>
</html>
