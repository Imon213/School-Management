<!DOCTYPE html>
<html>
<head>
    <title>email send success</title>
</head>
<body>
    <h1> Email from {{ $details['from'] }}</h1><br>
    <p> Subject:{{ $details['subject'] }}</p><br>
    <p>{{ $details['text'] }}</p>

    <p>Thank you</p>
</body>
</html>