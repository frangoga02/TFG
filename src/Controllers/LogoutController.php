<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;
/*
   User: Fran
   - Controller utilizado para el cierre de sesión de los usuarios.
*/
class LogoutController extends AbstractController
{
   public function logout()
   {
      $usuario = (new EntityManager())->get();
      $usuario->getRepository(Users::class)->exitSesion();
      header("location:/");
   }
}
