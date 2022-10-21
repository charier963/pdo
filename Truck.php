<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    
    private string $storageCapacity;
    private int $loading =0;
    private int $maxLoad;

    public function __construct(string $color, int $nbSeats, string $energy, string $storageCapacity, int $loading, int $maxLoad)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading ;
        $this->maxLoad = $maxLoad;
    }

    public function getStorageCapacity(): string
    {
        
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function getLoading(): int
    {
        return $this->loading;
    }
    public function setmaxLoad(int $maxLoad): void
    {
        $this->maxLoad = $maxLoad;
    }
    public function getmaxLoad(): int
    {
        return $this->maxLoad;
    }


    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
    public function isFilled(): string
    {
        if($this->loading < $this->maxLoad){
            return 'in filling'; 
        }else {
            return 'full';
        }
        
    } 
}

?>