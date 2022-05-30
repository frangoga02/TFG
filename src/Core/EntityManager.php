<?php

namespace App\Core;

use Doctrine\ORM\Tools\Setup;

class EntityManager
{
    private $em;
    private $dbConfig;

    public function __construct()
    {
        $this->dbConfig= json_decode(file_get_contents(__DIR__ . "/../../config/dbConfig.json"), true);


        $paths = array(__DIR__.'/../Entity');
        $isDevMode = true;
        //Estos son los parámetros de configuración de bbdd, en este caso los pasamos medieante un json
        $dbParams = array(
            'host' => $this->dbConfig["server"],
            'driver' => $this->dbConfig["driver"],
            'user' => $this->dbConfig["user"],
            'password' => $this->dbConfig["password"],
            'dbname' => $this->dbConfig["dbname"],
        );
        //Creamos la configuración Doctrine ORM por defecto
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
        //De esta forma obtendrémos el EntityManager
        $this->em = \Doctrine\ORM\EntityManager::create($dbParams, $config);
    }

    public function get()
    {
        return $this->em;
    }
}
