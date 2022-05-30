<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Entity\Users;
use App\Core\AbstractController;
/*
   User: Fran
   - Controller para visualizar el template addCommentTemplate.html.twig e introducir comentarios en BBDD.
*/
class AddCommentController extends AbstractController
{
   public function comment()
   {

      $usuario = (new EntityManager())->get();;
      
      if (count($_POST)) {
         if (!$usuario->getRepository(Users::class)->addComment($_POST,$_SESSION["loggedIn"]));
         
      };
      
      $this->render("addCommentTemplate.html.twig",[
         "nombre" => $usuario->getRepository(Users::class)->find($_SESSION["loggedIn"])
      ]);
      
      
   }

}
