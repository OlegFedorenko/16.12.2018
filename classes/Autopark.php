<?php

require_once __DIR__ .'/Car.php';

class Autopark
{
    private $cars = array();


    public function setCar($value)
    {
        $this->cars[] = $value;
    }

    public function getAvailableCars()
    {
        $number = 0;
        foreach ($this->cars as $arr)
        {
            if (!$arr->getIsBisy())
            {
                $number++;
            }
        }
        return $number;
    }

    public function getBisyCars()
    {
        $number = 0;
        foreach ($this->cars as $arr)
        {
            if ($arr->getIsBisy())
            {
                $number++;
            }
        }
        return $number;
    }

    public function getProfit()
    {
        $profit = 0;
        foreach ($this->cars as $arr)
        {
            if ($arr->getIsBisy())
            {
                $profit+=$arr->getPrice();
            }
        }
        return $profit;
    }
}