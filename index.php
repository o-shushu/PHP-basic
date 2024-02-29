<?php
abstract class Action{
    abstract public function eat();
    abstract protected function sleep($hours);
    public function drink(){
        echo "hahaha";
    }
}

class Human extends Action {
    public function eat()
    {
        echo 'human must eat.';
    }

    public function sleep($hours)
    {
        echo "human must sleep.$hours";
    }

    public function drink()
    {
        echo 'human must drink.';
    }
}
$human = new Human();
echo $human->eat();
echo $human->sleep(8);
echo $human->drink();





