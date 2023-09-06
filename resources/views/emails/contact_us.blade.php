<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{ config('app.name') }}
<ul>
    <li>Name:{{ $contact['name'] }}</li>
    <li>Subject:{{ $contact['name'] }}</li>
    <li>Email:{{ $contact['email'] }}</li>
    <li>Number:{{ $contact['number'] }}</li>
    <li>Message:{{ $contact['message'] }}</li>
</ul>
</body>
</html>
