<?php

namespace App\Controllers;

use App\Core\AbstractController;
/*
   User: Fran
   - Controller para visualizar el template indexTemplate.html.twig
*/
class IndexController extends AbstractController
{
   public function index()
   {
      $this->render("indexTemplate.html.twig", []);
   }

}
