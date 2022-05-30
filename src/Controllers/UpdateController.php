<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Entity\Users;
use App\Core\AbstractController;
/*
   User: Fran
   - Controller para actualizar los datos del perfil del usuario.
*/
class UpdateController extends AbstractController
{
   public function update()
   {
      $usuario = (new EntityManager())->get();;

      if (count($_POST)) {
         if (!$usuario->getRepository(Users::class)->updateProfile($_POST,$_GET['idUser']));
      };
   }
}
