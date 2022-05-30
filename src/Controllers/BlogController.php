<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Datta;
use App\Core\EntityManager;
/*
   User: Fran
   - Controller para visualizar el template indexTemplate.html.twig
*/
class BlogController extends AbstractController
{
   public function blog()
   {
      $usuario = (new EntityManager())->get();
      
      $this->render("blogTemplate.html.twig", [
         "resultado" => $usuario->getRepository(Datta::class)->findAll()
      ]);
   }

}
