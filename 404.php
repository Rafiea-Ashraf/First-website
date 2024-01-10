<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #3494E6 0%, #EC6EAD 100%);
            color: #fff;
            text-align: center;
            padding: 50px;
            overflow: hidden;
        }

        h1 {
            font-size: 120px;
            color: #ff5757;
            margin-bottom: 10px;
        }

        p {
            font-size: 20px;
            margin-top: 5px;
        }

        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Animation styles */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .character {
            animation: float 3s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="character">404</h1>
        <p>Oops! Something went wrong.</p>
        <p>The page you are looking for might be in another dimension.</p>
        <p>Let's get you back <a href="<?php echo home_url(); ?>">home</a>.</p>
    </div>
</body>
</html>
