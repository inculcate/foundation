<?php
/**
 * @author      Amit Roy <amit@softflies.com>
 * @copyright   Copyright (c), 2021 Amit Roy
 * @license     MIT public license
 */
namespace Inculcate\Foundation;

/**
 * Class Providers.
 */
abstract class Providers 
{   
	/**
	* it has to register/load the files
	* @param null
	* @method in
	* @return Inculcate\Foundation\Providers\in
	*/
	abstract public function in();

    /**
    * Helping routes be registered
    * @param callable, $callable
    * @method routes
    * @return Inculcate\Foundation\Providers\routes
    */
	public function routes($callable=null){
         
         if (is_callable($callable)) {
             call_user_func($callable);
         }
	}
} 