<html>
  <head>
    <meta charset="utf-8">
    <title>Question A</title>
  </head>
  <body>
    <script src="verify_ajax.js"></script>
    <form name="form" action="info.php" onsubmit="required()">
      <label for="username">User Name: </label>
      <input type="text" id="username" name="username"><br>
      <input type="submit" value="Submit" style="color:white; background-color: green;">
      <p id="message" style="color: green;"></p>
    </form>
  </body>
</html>
