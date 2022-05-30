<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Entity\Users;
use App\Core\AbstractController;
/*
   User: Fran
   - Controller para visualizar el template addTemplate.html.twig e introducir usuarios en BBDD.
*/
class AddUserController extends AbstractController
{
   public function addUser()
   {
   
      $agent = (new EntityManager())->get();;
      if (count($_POST)) {
         if (!$agent->getRepository(Users::class)->doRegistrer($_POST));
      }
      $this->render("addTemplate.html.twig",[]);
   } 

}
