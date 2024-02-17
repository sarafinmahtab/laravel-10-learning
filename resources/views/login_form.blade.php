<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body>

    <h2>Demo Forms</h2>

    <form action="/result" method="POST">
      @csrf
      <label for="firstname">First name:</label><br>
      <input type="text" name="firstname" placeholder="Enter First Name"><br>
      <label for="lastname">Last name:</label><br>
      <input type="text" name="lastname" placeholder="Enter Last Name"><br><br>
      <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "entry".</p>

    </body>
</html>
