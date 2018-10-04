<?php 
namespace App;

use App\SRP\Book;
use App\SRP\Printer;

require "bootstrap/autoload.php";
// require './SRP/Book.php';

$book = new Book('khaled',['page 1','page 2' , 'page 3']);
$printer = new Printer();

$printer->printHTML($book);

// $printer->printJSON($book);