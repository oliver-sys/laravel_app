<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <h1>Input</h1>

    <form action="{{ route('about.store') }}" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone"><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
