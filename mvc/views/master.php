<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/adduser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MVC</title>
    <style>
        .margin {
            margin: 12px;
        }

        #messageUn {
            color: red;
        }

        #header,
        #footer {
            background-color: #4cbddb6e;
            display: block;
            height: 50px;
            color: #ff0000;
        }

        .div {
            margin-top: 30px;
        }

        .btn_href {
            border-radius: 5px;
            background-color: #db524c;
            border-color: #db524c;
            font-size: large;
            font-weight: bold;
            width: 180px;
            height: 50px;
            color: white;
            margin: 20px 0 0 10px;
            cursor: pointer;
            padding: 6px;
            text-decoration: none;
        }

        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="content">
        <?php require_once './mvc/views/pages/' . $data['page'] . '.php' ?>
    </div>
    <div style="display: block; text-align:center;font-weight: bold; margin-top:20px; height:60px; line-height:60px" id="footer">
        CODE BY SANHDANG
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>