<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Entity\Users;
use App\Entity\Datta;
use App\Core\AbstractController;
/*
   User: Fran
   - Controller para eliminar comentarios.
*/
class DeleteController extends AbstractController
{
   public function delete()
   {

      $usuario = (new EntityManager())->get();
      $usuario->getRepository(Users::class)->deleteProfile($_GET['id']);
      
   }

}
