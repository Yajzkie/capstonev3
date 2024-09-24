<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'COTS Southern Leyte')</title>
    <style>
        /* Include your CSS here */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .header {
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            height: 100vh;
            position: relative;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 57px;
        }

        .header h1 {
            font-size: 2.5em;
            margin-top: 20px;
        }

        .header p {
            max-width: 20%;
            margin: auto 80px 20px auto;
            font-size: 1.3em;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 5px;
            text-align: left;
        }

        .nav {
            background-color: #333;
            padding: 10px 0;
            text-align: right;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 0.9em;
        }

        .content {
            padding: 20px;
            background-color: #e0f7fa;
            text-align: center;
            height: auto;
        }

        .content h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .content .species-images img {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin: 10px;
            border-radius: 5px;
        }

        .contact-info {
            padding: 20px;
            background-color: #b2ebf2;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-info .details {
            text-align: left;
        }

        .contact-info .details .img {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .contact-info .details img {
            width: 150px;
            height: auto;
        }

        .contact-info .details .info p {
            text-align: center;
            display: flex;
        }

        .map {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin: 20px auto;
            flex-wrap: wrap;
        }

        .map img {
            width: 100%;
            max-width: 48%;
            height: auto;
            margin-bottom: 20px;
        }

        .map p {
            max-width: 48%;
            font-size: 1.5em;
            padding: 10px;
            background-color: rgb(224, 247, 250);
            border-radius: 5px;
            text-align: left;
            margin-left: auto;
        }

        .footer {
            padding: 10px;
            background-color: #555;
            color: white;
            font-size: 0.9em;
            text-align: center;
            position: initial;
            bottom: 0;
            width: 100%;
        }


        .btn-login {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            display: inline-block;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }


        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }

            .header p {
                font-size: 1em;
            }

            .nav a {
                margin: 0 10px;
                font-size: 0.8em;
            }

            .content h2 {
                font-size: 1.5em;
            }

            .contact-info .details div {
                flex-direction: column;
            }

            .contact-info .details img {
                width: 40px;
            }

            .map p {
                font-size: 0.9em;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.5em;
            }

            .header p {
                font-size: 0.9em;
            }

            .nav a {
                margin: 0 5px;
                font-size: 0.7em;
            }

            .content h2 {
                font-size: 1.2em;
            }

            .contact-info .details img {
                width: 30px;
            }

            .map p {
                font-size: 0.8em;
            }
        }
    </style>

    
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">




</head>


<body>
    <div class="nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="#">COTS</a>
        <a href="#">Illegal Fishing</a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>

    </div>
    <div>
        @yield('content')

   </div>



    <div class="footer">
        <p>ALL RIGHTS RESERVED 2024</p>
    </div>


    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
