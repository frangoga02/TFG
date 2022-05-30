<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Entity\Users;
use App\Entity\Datta;
use App\Core\AbstractController;
/*
   User: Fran
   - Controller utilizado para mostrar template profileTemplate.html.twig con los datos del usuario.
*/
class ProfileController extends AbstractController
{
   public function profile()
   {
      $usuario = (new EntityManager())->get();

      $this->render("profileTemplate.html.twig",[
         "resultado" => $usuario->getRepository(Datta::class)->findBy(array('id_user'=>$_SESSION["loggedIn"])),
         "nombre" => $usuario->getRepository(Users::class)->find($_SESSION["loggedIn"])
      ]);
   }
}
