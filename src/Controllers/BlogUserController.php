<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Entity\Datta;
use App\Core\EntityManager;
/*
   User: Fran
   - Controller para visualizar el template blogUserTemplate.html.twig con el usuario que ha iniciado sesión.
*/
class BlogUserController extends AbstractController
{
   public function userblog()
   {
      $usuario = (new EntityManager())->get();
      
      $this->render("blogUserTemplate.html.twig", [
         "resultado" => $usuario->getRepository(Datta::class)->findAll(),
         "nombre" => $usuario->getRepository(Users::class)->find($_SESSION["loggedIn"])
      ]);
      
   }

}
