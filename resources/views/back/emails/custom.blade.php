<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <!-- Message Content -->
        <div>
            {!! $email->message !!}
        </div>

        <!-- Footer -->
        <footer style="margin-top: 30px; text-align: center; font-size: 12px; color: #999;">
            <p>&copy; {{ date('Y') }} Digital Media Factory. All rights reserved.</p>
        </footer>
    </div>

</body>

</html>
