<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <style>
        h1 {
            text-align: center;
        }

        ul {
            display: flex;
            gap: 3rem;
            list-style-type: none;
            color: black;
            border: 1px solid black;
            padding: 0.5rem;
            width: 20rem;
            justify-content: center;
            position: relative;
            top: -50px;
            left: 20px;

            a {
                color: black;
            }
        }
    </style>

</head>

<body>
    <h1> Home </h1>

    <nav>
        <ul>
            <li> <a href="{{ route('home') }}">HOME</a> </li>
            <li> <a href="{{ route('chi-siamo') }}">CHI-SIAMO</a> </li>
            <li> <a href="{{ route('contatti') }}">CONTATTI</a> </li>
        </ul>
    </nav>
</body>

</html>