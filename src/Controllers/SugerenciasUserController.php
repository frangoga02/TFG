<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;
/*
   User: Fran
   - Controller para visualizar el template sugerenciasUserTemplate.html.twig con los datos del usuario que ha iniciado sesión.
*/
class SugerenciasUserController extends AbstractController
{
   public function userSugerencias()
   {
      $usuario = (new EntityManager())->get();
      $this->render("sugerenciasUserTemplate.html.twig",["resultado" => $usuario->getRepository(Users::class)->find($_SESSION["loggedIn"])]);
   }
}
