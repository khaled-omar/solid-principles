<?php 

/**
* Book class 
*/
class Book
{
	private $author ;
	private $pages;
	private $numOfPages;
	private $currentPage;

	function __construct($author , $pages = [], $numOfPages )
	{
		$this->author = $author;
		$this->pages = $pages;
		$this->numOfPages = $numOfPages;
		$this->currentPage = 1;

	}
	function getAuthor()
	{
		return $author;
	}
	function getCurrentPage()
	{
		return $pages[$this->currentPage];
	}
	function nextPage()
	{
		if($this->currentPage == $this->numOfPages)
		{
			return $this->pages[$this->currentPage];
		}

		$this->currentPage = $this->currentPage + 1;
		return $this->pages[$this->currentPage];
	}
	function previousPage()
	{
		if ($this>currentPage <= 1)
		{
			return $this->pages[$this->currentPage];
		}
		if($this>currentPage > 1 )
		{
			$this->currentPage = $this->currentPage - 1;
			return $this->pages[$this->currentPage];
		}
	}
}

/*
*
*
*
*/
class Printer 
{

}