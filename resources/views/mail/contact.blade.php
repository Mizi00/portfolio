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
            list-style: none;
            text-align: center;
            padding: 0;
        }

        ul li {
            margin-bottom: 20px;
        }

        .text {
            margin-top: 50px;
            max-width: 400px;
        } 

        .text li {
            text-align: left;
        }

        b {
            text-decoration: underline;
        }
    </style>
    <div class="mail">
        <h1>Mail de {{ $data['nom'] }}</h1>
        <ul>
            <li><b>Mail:</b> {{ $data['mail'] }}</li>
            <li><b>Tél:</b> {{ $data['tel'] }}</li>
            <li><b>Objet:</b> {{ $data['objet'] }}</li>
            <div class="text">
                <li><b>Message:</b> {{ $data['message'] }}</li>
            </div>
        </ul>
    </div>


</body>

</html>