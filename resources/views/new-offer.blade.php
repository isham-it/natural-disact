<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE AN OFFER </title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title"><br>

        <input type="submit" value="Create an offer">
    </form>
</body>

</html>




