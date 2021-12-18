<?php
/**
 * @author      Amit Roy <amit@softflies.com>
 * @copyright   Copyright (c), 2021 Amit Roy
 * @license     MIT public license
 */
namespace Inculcate\Foundation;

use Inculcate\Routing\Response;
use Inculcate\Foundation\Env;

/**
 * Class Services.
 */
class Services extends Response
{   
	use Env;
    /**
    * Start all the services off the application
    * @param null
    * @method start
    * @return Inculcate\Foundation\Services\start
    */
	public function start(){
         
         // invoke the application (.env) file
         $this->invokeAppEnv();
         // invoke the application providers
         $this->invokeAppProviders();
         // invoke the application Responsive
         $this->invokoAppResponsive();
         
	}

	/**
	* Invoke all the listed providers 
	* @param string , $method, the method to be called of the providers
	* @method invokeAppProviders
	* @return Inculcate\Foundation\Services\invokeAppProviders
	*/
	private function invokeAppProviders($method="in"){
	
        foreach (config("app.providers") ?? [] as  $provider) {
      
        	call_user_func([new $provider,$method]);
	
        }
	}

	/**
	* @param null
	* @method invokoAppResponsive
	* @return Inculcate\Foundation\Services\invokoAppResponsive
	*/
	private function invokoAppResponsive(){
        
        $this->makeResponse();
    
	}
	
} 