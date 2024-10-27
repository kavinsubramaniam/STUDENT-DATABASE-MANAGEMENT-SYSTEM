<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <form action="/123" method="POST">
        @csrf
        <label for="email">Email </label>
        <input type="email" id="email" name="email" required>
        <p style="font-size:20px"><span>An email with an OTP will be sent to </span></p>
        <p style="font-size:20px;margin-top:-10px;"><span>the provided email address</span></p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>