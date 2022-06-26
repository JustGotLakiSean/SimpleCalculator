<?php
namespace SimpleCalculator;
use \SimpleCalculator\MathOperation;

include("MathOperation.php");

// Addition operation
if(isset($_POST['add_numbers']))
{
  $first_input = 0;
  $second_input = 0;

  if(isset($_POST['first_input']) && isset($_POST['second_input']))
  {
    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];
    $mathObject = new MathOperation($first_input, $second_input);
    echo $mathObject->AddNumbers();
    // $addNumbers = $mathObject->AddNumbers($first_input, $second_input);
    // echo $addNumbers;
    echo "<br>";
    echo "<button onclick=window.location.href='Calculator.php'>Go back</button>";
  } else {
    echo "Err";
  }

} else if(isset($_POST['subtract_numbers']))
{
  $first_input = 0;
  $second_input = 0;

  if(isset($_POST['first_input']) && isset($_POST['second_input']))
  {
    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];
    $mathObject = new MathOperation($first_input, $second_input);
    echo $mathObject->SubtractNumbers();
    echo "<br>";
    echo "<button onclick=window.location.href='Calculator.php'>Go back</button>";
  } else {
    echo "Err";
  }

} else if(isset($_POST['multiply_numbers']))
{
  $first_input = 0;
  $second_input = 0;

  if(isset($_POST['first_number']) && isset($_POST['second_input']))
  {
    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];
    $mathObject = new MathOperation($first_input, $second_input);
    echo $mathObject->MutiplyNumbers();
    echo "<br>";
    echo "<button onclick=window.location.href='Calculator.php'>Go back</button>";
  } else {
    echo "Err";
  }

} else if(isset($_POST['divide_numbers']))
{
  $first_input = 0;
  $second_input = 0;


  if(isset($_POST['first_input']) && isset($_POST['second_input']))
  {
    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];
    $mathObject = new MathOperation($first_input, $second_input);
    echo $mathObject->DivideNumbers();
    echo "<br>";
    echo "<button onclick=window.location.href='Calculator.php'>Go back</button>";
  }

}
?>