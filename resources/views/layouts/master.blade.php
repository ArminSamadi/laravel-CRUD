<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            text-align: center;
            font-family: "tahoma";
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
            direction: rtl;
        }

        #customers td,
        #customers th {
            text-align: center;
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr {
            background-color: #ddd;
        }

        #customers th {
            text-align: center;
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #04AA6D;
            color: white
        }

        a{
            text-decoration: none;
        }

        /* ----------------------------------------------------- */

        .form{
            background-color: #c7c7c7;
            width: 300px;
            text-align: center;
            margin: auto;
            margin-top: 30px;
            padding: 10px;
            border-radius: 10px;
        }

        .input{
            width: 250px;
            padding: 7px;
            margin: 3px;
        }

        .btn{
            width: 100px;
            height: 35px;
            margin-top: 7px;
            border-radius: 5px;
            border: 1px solid;
        }

        .show-post{
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            border: 1px solid;
            border-radius: 10px;
        }

    </style>

</head>
<body>

    <div class="container">
    
        @yield('content')
    
    </div>
    
</body>
</html>