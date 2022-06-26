<?php
namespace SimpleCalculator;
/* ***SIMPLE SIMPLE CALCULATOR*** */
class MathOperation 
{

  public function __construct(
    protected int $num1,
    protected int $num2
  ) {/* ... */}

  public function AddNumbers(/*int $num1, int $num2*/)
  {
    $sum = $this->num1 + $this->num2;
    echo "$this->num1 + $this->num2 = $sum";
  }

  public function SubtractNumbers(/*int $num1, int $num2*/)
  {
    $difference = $this->num1 - $this->num2;
    echo "$this->num1 - $this->num2 = $difference";
  }

  public function MutiplyNumbers(/*int $num1, int $num2*/)
  {
    $product = $this->num1 * $this->num2;
    echo "$this->num1 * $this->num2 = $product";
  }

  public function DivideNumbers(/*int $num1, int $num2*/)
  {
    $quotient = $this->num1 / $this->num2;
    echo "$this->num1 / $this->num2 = $quotient";
  }
}
?>