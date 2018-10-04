<?php 
namespace App\SRP;

/*
* Class Printer
*/
class Printer 
{
	public function printHTML(Book $book)
	{
		echo '<h2>' . $book->getCurrentPage() . '</h2>';
		while ($page = $book->nextPage()) {
			echo '<h2>' . $page . '</h2>';
		}
	}
	public function printJSON(Book $book)
	{
		$pages[] =  $book->getCurrentPage() ;
		while ($page = $book->nextPage()) {
			$pages[] = $page;
		}
		echo json_encode($pages);
	}
}
