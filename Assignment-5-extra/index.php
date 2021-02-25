<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <img src="circle.png" class="circle" alt="Circle with lines showing its diameter and radius">
    <h1>Circumference and Area Calculator</h1>
    <h2>Enter the diameter of a circle below to find its circumference and area.</h2>
    <form action="" method="post">
      <input name="d">
      <button type="submit">Calculate</button>
    </form>
    <h2>Result:</h2>
    <h4 id="result">
      <?php
      if(isset($_POST['d'])) {
        include 'calc.php';
      }
      ?>
    </h4>
  </body>
</html>