<?php

class Autopark
{
    private $cars = array();

    public function setCar($value)
    {
        $this->cars[] = $value;
    }

    public function getAvailableCars()
    {
        $AvailableQty = 0;
        foreach ($this->cars as $car)
        {
            if (!$car->getIsBusy())
            {
                $AvailableQty++;
            }
        }
        return $AvailableQty;
    }

    public function getBusyCars()
    {
        $BusyQty = 0;
        foreach ($this->cars as $car)
        {
            if ($car->getIsBusy())
            {
                $BusyQty++;
            }
        }
        return $BusyQty;
    }

    public function getProfit()
    {
        $profit = 0;
        foreach ($this->cars as $car)
        {
            if ($car->getIsBusy())
            {
                $profit+=$car->getPrice();
            }
        }
        return $profit;
    }
}