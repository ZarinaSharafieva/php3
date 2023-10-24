
<?php

    class Animal
    {
        public $name, $ves, $age, $color;
        function _construct($name)
        {
            $this->name= $name;
        }
        function displayInfo()
        {
            echo "<br>
            <div class='object'>
            <p>Name:<span class='otvet'> $this->name</span></p>
            <p>Ves:<span class='otvet'> $this->ves кг</span></p>
            <p>Age:<span class='otvet'> $this->age</span></p>
            <p>Color:<span class='otvet'> $this->color</span></p>
            <br>
            </div>";
        }
      
    }
    // print_r($animal);

    

    class Lion extends Animal{}
    $animal = new Animal();
        $lion = new Lion();
        $lion -> name = 'Азиатский лев';
        $lion -> ves = 100;
        $lion -> age = 10;
        $lion -> color = 'красный';
        $lion -> displayInfo();
  // Rabbit
    class Rabbit extends Animal{}
        $rabbit = new Rabbit();
        $rabbit -> name = 'Белобокий заяц';
        $rabbit -> ves = 20;
        $rabbit -> age = 5;
        $rabbit -> color = 'белый';
        $rabbit -> displayInfo();
    // Wolf
    class Wolf extends Animal{}
        $wolf = new Wolf();
        $wolf -> name = 'Степной волк';
        $wolf -> ves = 90;
        $wolf -> age = 8;
        $wolf -> color = 'серый';
        $wolf -> displayInfo();


        class Employee extends Animal
    {
        public $company;
        function __construct($name, $company)
        {
            $this->name = $name;
            $this->company = $company;
        }
        function displayInfo()
        {

            echo "<br>
            <div class='object'>
            <p><span class='otvet'> $this->name $this->company</span></p>
            <br>
            </div>";
        }
    }
    $company = new Employee("Азиатский лев", "рычит");
    $company->displayInfo();
  
    class Mix extends Animal
    {
        public $company;
        function __construct($name, $company)
        {
            $this->name = $name;
            $this->company = $company;
        }
        function displayInfo()
        {

            echo "<br>
            <div class='object'>
            <p><span class='otvet'> $this->name $this->company</span></p>
            <br>
            </div>";
        }
    }
    $company = new Mix("Белобокий заяц", "прыгает");
    $company->displayInfo();
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="container/style.css">
    <title>sm3</title>
</head>
<body>
    
</body>
</html>