<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Entity\Users;
use App\Core\AbstractController;
/*
   User: Fran
   - Controller utilizado para el inicio de sesión de los usuarios.
*/
class LoginUserController extends AbstractController
{
   public function login()
   {

      $usuario = (new EntityManager())->get();
      if (count($_POST)) {
         $usuario->getRepository(Users::class)->doLogin($_POST);
      };
      $this->render("logTemplate.html.twig",[]);
   }

}
