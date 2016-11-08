<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{
	/**
	* @Route("/products", name="products_index")
	*/
	public function indexAction()
	{
		
	}
}
