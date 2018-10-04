<?php 
namespace App\SRP;
/**
* Book class 
*/
class Book
{
	private $author ;
	private $pages;
	private $currentPage;

	function __construct($author , $pages = [] )
	{
		$this->author = $author;
		$this->pages = $pages;
		$this->currentPage = 0;
	}
	function getAuthor()
	{
		return $author;
	}
	function getCurrentPage()
	{
		return $this->pages[$this->currentPage];
	}
	function nextPage()
	{
		if($this->currentPage == count($this->pages) - 1 )
		{
			return null;
		}

		$this->currentPage = $this->currentPage + 1;
		return $this->pages[$this->currentPage];
	}
	function previousPage()
	{
		if ($this->currentPage = 0)
		{
			return null;
		}
		$this->currentPage = $this->currentPage - 1;
		return $this->pages[$this->currentPage];
	}
}
