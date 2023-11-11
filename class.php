<?php

//  решил немного по-другому сделать, ибо заданное уже сделал на занятии

class City{
    private string $name;
    private int $age;
    private int $population;
    private int $size;
    private int $wealth;
    private int $rate;
    public function __construct($name, $age, $population, $size, $wealth, $rate){
        if($age < 0){
            $age = 0;
        } 
        if($population < 0){
            $population = 0;
        } 
        if($size < 0){
            $size = 0;
        } 
        if($wealth < 0){
            $wealth = 0;
        } 
        if($rate < 0){
            $rate = 0;
        }
        
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
        $this->size = $size;
        $this->wealth = $wealth;
        $this->rate = $rate;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getPopulation(){
        return $this->population;
    }

    public function getSize(){
        return $this->size;
    }

    public function getWealth(){
        return $this->wealth;
    }

    public function getRate(){
        return $this->rate;
    }
}; 

$asylum = new City('New Zakan-Yurt', 55, 670954, 983, 10, 7);

$asylumName = $asylum->getName();
$asylumAge = $asylum->getAge();
$asylumPopulation = $asylum->getPopulation();
$asylumSize = $asylum->getSize();
$asylumWealth = $asylum->getWealth();
$asylumRate = $asylum->getRate();

$asylumInfo = $asylumName. ' '. 'is a '. $asylumAge. ' '. 'years old city with the population of '. $asylumPopulation. ' '. 'people.'. '</br>'. 
'It`s size is aproximately '. $asylumSize. ' '. 'square kilometres and it`s GDP is considered to be around '. $asylumWealth. ' '. 'billion dollars.'. '</br>'.
'It`s rated '. $asylumRate. ' '. 'stars.';

echo $asylumInfo;