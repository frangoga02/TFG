<?php

namespace App\Repository;

use App\Entity\Users;
use App\Entity\Datta;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;


class UsersRepository extends EntityRepository
{
    public function doLogin($values){
       // var_dump($values);
    
        $user = $this->findOneBy(['user'=>$values["nombre"]]);
        if($user){
            if (password_verify($values["password"], $user->getPassword())) {
                $_SESSION["loggedIn"] = $user->getId_user();
            }else {
                $_SESSION["loggedIn"] = false;
            };
            if ($_SESSION["loggedIn"]){
                header("Location:/uPage/");
            } else {
                echo "Contraseña Incorrecta";
            }
        }else{
            echo "El nombre no es correcto";
        }
    }
    
    public function exitSesion(){
        return session_destroy();
    }
   
   
     
    public function doRegistrer($values){
        
        if($this->findOneBy(['user'=>$values["nombre"]])){
            echo "El usuario ya existe";
            $id=NULL;
        }else{
            $newUser = new Users;
            $newUser->setUser($values["nombre"]);
            $newUser->setMail($values["mail"]);
            $newUser->setPassword(password_hash($values["password"],PASSWORD_DEFAULT));
            
            $this->getEntityManager()->persist($newUser);
            $this->getEntityManager()->flush();
            $id=$newUser->getId_user();
            header("location:/login");
        }
        return $id;
    }

    public function addComment($values,$id){
        
        $newDatta = new Datta;
        $newDatta->setId_user($this->find($id));
        $newDatta->setCommentary($values["commentary"]); 
        $this->getEntityManager()->persist($newDatta);
        $this->getEntityManager()->flush();
        
        header("location:/uBlog/");
        return $id;
    }

    public function updateProfile($values,$id){
        $user=$this->find($id);

        if(($values["nombre"]) !=""){
            $user->setUser($values["nombre"]);
        };
        if(($values["mail"]) !=""){
            $user->setMail($values["mail"]);
        };
        if(($values["password"]) !=""){
            $user->setPassword(password_hash($values["password"],PASSWORD_DEFAULT));
        };
            
          
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
        header("location:/profile/");
        return $id;
    }
    
    public function deleteProfile($id){
        
        $entityManager = (new EntityManager())->get();
        $upDatta = $entityManager->getRepository(Datta::class)->find($id);;
        
        $entityManager->remove($upDatta); 
        $entityManager->flush();
        
        header("location:/profile/");
        return $id;
    }
}


