<?php

namespace App\Controllers;

use App\Core\AbstractController;
/*
   User: Fran
   - Controller para visualizar el template sugerenciasTemplate.html.twig
*/
class SugerenciasController extends AbstractController
{
   public function sugerencias()
   {
      $this->render("sugerenciasTemplate.html.twig", []);
   }
}
