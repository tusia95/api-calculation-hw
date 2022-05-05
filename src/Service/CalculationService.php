<?php

namespace App\Service;

use Symfony\Component\HttpKernel\Controller\ErrorController;

class CalculationService
{
    public function runCalculation($firstNumber, $secondNumber, $action)
    {
        // if ((gettype($firstNumber) == "integer" || gettype($firstNumber) == "double") && (gettype($secondNumber) == "integer" || gettype($secondNumber) == "double")) {
        try {
            switch ($action) {
                case "add":
                    $result = $firstNumber + $secondNumber;
                    break;
                case "multiply":
                    $result = $firstNumber * $secondNumber;
                    break;
                case "divide":
                    if ($secondNumber == 0) {
                        $result = 'you cant divide on zero';
                    } else
                        $result = $firstNumber / $secondNumber;
                    break;
                case "subtract":
                    $result = $firstNumber - $secondNumber;
                    break;
                default:
                    $result = 'Cant run action ' . $action;
            }

        } catch (\TypeError) {
            $result="as numbers you cant use this";
        }
        return $result;
        }//    else $result="Hey, I need number to calculate";

}

;
