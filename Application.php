<?php
/**
 * @author      Amit Roy <amit@softflies.com>
 * @copyright   Copyright (c), 2021 Amit Roy
 * @license     MIT public license
 */
namespace Inculcate\Foundation;

use Inculcate\Routing\Request;
use Inculcate\Foundation\Services;

/**
 * Class Application.
 */
class Application extends Services
{   
    /**
     * The OutGood framework version.
     *
     * @var string
     */
    const VERSION = '1.0.0';
    /**
     * To set base path of the application 
     * @var string
     */
    private  $appRootPath;
    /**
     * To set base path of the application 
     * @var string
     */
    private  $baseName;

    /**
     * Set the base path of the Application here.
     * @param $appRootPath | string
     * @method __construct
     * @return \Inculcate\Foundation\Application\__construct
     */
    public function __construct( $path=null ){
   	  
         $this->appRootPath = $path.$this->baseName();
         $_SERVER['APP_ROOT_PATH']= $this->appRootPath;

    }
    /**
     * get the base path of the Application here.
     * @param null
     * @method baseName
     * @return \Inculcate\Foundation\Application\baseName
     */
    private function baseName(){
        
        if ($this->baseName===null) {
            $this->baseName= implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        }
        return $this->baseName;

    }
    /**
     * It sets the base path of the application
     * @param string | null, $path
     * @method setAppBasePath
     * @return \Inculcate\Foundation\Application\setAppBasePath
     */
    public function setAppBasePath($path=null){

        $this->appRootPath = $path;
        $_SERVER['APP_ROOT_PATH']= $this->appRootPath;

    }

    /**
     * It gets the application started,
     * All the services of the application to be started,
     * And the database and (etc..) 
     * @param null
     * @method startEngine
     * @return \Inculcate\Foundation\Application\startEngine
     */
    private function startEngine(){
       $this->start();
    }

    /**
    * strting the engine
    * @param null
    * @method run
    * @return \Inculcate\Foundation\Application\run
    */
    public function run(){
       $this->startEngine();
    }

} 