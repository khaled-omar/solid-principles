<?php 
namespace App;

use App\SRP\Book;
use App\SRP\Printer;
use App\OCP\Rectangle;
use App\OCP\Circle;
use App\OCP\AreaCalculator;

require "bootstrap/autoload.php";

// Single class should has single responsibilty.
$book = new Book('khaled',['page 1','page 2' , 'page 3']);
$printer = new Printer();

// $printer->printHTML($book);

// $printer->printJSON($book);

// Class should be open for extension but closed for modification.
$shapes[] = new Rectangle(10,5);
$shapes[] = new Circle(5.5);

$areaCalculator = new AreaCalculator();
print $areaCalculator->area($shapes);

