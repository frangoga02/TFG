<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;
/*
   User: Fran
   - Controller para visualizar userIndexTemplate.html.twig con los datos del usaurio que ha iniciado sesión.
*/
class userIndexController extends AbstractController
{
   public function userIndex()
   {
      $usuario = (new EntityManager())->get();
      $this->render("userIndexTemplate.html.twig",["resultado" => $usuario->getRepository(Users::class)->find($_SESSION["loggedIn"])]);
   }
}
