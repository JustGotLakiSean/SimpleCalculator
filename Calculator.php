<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple(2x) Calculator</title>
</head>
<body>
  <form action="Calculate.php" method="POST">
    <input type="number" name="first_input" id="first_input" />
    <input type="number" name="second_input" id="second_input" />
    <input type="submit" name="add_numbers" value="+" />
    <input type="submit" name="subtract_numbers" value="-" />
    <input type="submit" name="multiply_numbers" value="*"/>
    <input type="submit" name="divide_numbers" value="/" />
  </form>
</body>
</html>