<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .content {
            max-width: 400px;
            margin: 0 auto
        }
        .mail {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 25px;
        }

        ul {
            padding-left: 0;
            list-style-type: none;
            text-align: center;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        ul li {
            margin-bottom: 20px;
        }

        .text {
            margin-top: 10px;
            max-width: 400px;
        }

        .text li {
            text-align: left;
        }

        b {
            text-decoration: underline;
        }
    </style>
    <div class="content">
        <div class="mail">
            <h1>Mail de {{ $data['nom'] }}</h1>
            <ul>
                <li><b>Ip:</b> {{ Request::ip() }}</li>
                <li><b>Mail:</b> {{ $data['mail'] }}</li>
                <li><b>Tél:</b> {{ $data['tel'] }}</li>
                <li><b>Objet:</b> {{ $data['objet'] }}</li>
                <li class="text"><b>Message:</b> <span>{{ $data['message'] }}</span></li>
            </ul>
        </div>

    </div>



</body>

</html>
