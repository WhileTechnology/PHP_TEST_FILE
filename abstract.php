<?php
abstract class Animal
{
    public $name;
    public $age;
    protected $test = 'raju';
    
    public function Describe()
    {
        return $this->name . ", " . $this->age . " years old";    
    }
    
    abstract public function Greet();
    
    public function Get(){
		return $this->test . ", ". " - > ";
	}
}


class Dog extends Animal
{
    public function Greet()
    {
        return "Woof!";    
    }
    
    public function Describe()
    {
        return parent::Describe() . ", and I'm a dog!";    
    }
    
    public function Get(){
		return parent::Get(). "My non abstract method";
	}
    
}


$animal = new Dog();
$animal->name = "Bob";
$animal->age = 8;
echo $animal->Describe();
echo $animal->Greet();
echo "++++++++++++++++++++++++";
echo $animal->Get();

?>

