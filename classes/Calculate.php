<?php

class Calculate
{
    private $num1;
    private $num2;
    private $operator;

    public function __construct($num1, $num2, $operator)
    {
        $this->setValues($num1, $num2, $operator);
    }

    private function setValues($num1, $num2, $operator)
    {
        $this->num1     = $num1;
        $this->num2     = $num2;
        $this->operator = $operator;
    }


    public function calculate()
    {
        return $this->performCalculation();
    }


    protected function performCalculation()
    {
        switch ($this->operator) {
            case 'add':
                return $this->num1 + $this->num2;
                break;

            case 'subtract':
                return $this->num1 - $this->num2;
                break;

            case 'multiple':
                return $this->num1 * $this->num2;
                break;

            case 'divide':
                return ($this->num2 != 0) ? $this->num1 / $this->num2 : 'Division By Zero';
                break;

            case 'modulus':
                return ($this->num2 != 0) ? $this->num1 % $this->num2 : 'Modulus By Zero';
                break;

            default:
                return "Invalid Operator!";
        }
    }
}
