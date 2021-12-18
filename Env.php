<?php
/**
 * @author      Amit Roy <amit@softflies.com>
 * @copyright   Copyright (c), 2021 Amit Roy
 * @license     MIT public license
 */
namespace Inculcate\Foundation;

/**
 * trait Env.
 */
trait Env
{   
	/**
	* @param null
	* @method invokeAppEnv
	* @return Inculcate\Foundation\Env\invokeAppEnv
	*/
	protected function invokeAppEnv(){
        
        if (file_exists(base_path(".env"))) {
            
            foreach (file(base_path(".env"), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $record) {
            	
            	list($name, $value) = explode('=', $record, 2);
            	$name = trim($name);
            	$value = trim($value);
            	if (!array_key_exists($name, $_ENV) && !array_key_exists($name, $_SERVER)) {
                     $_ENV[$name] = $value;
                     $_SERVER[$name] = $value;
            	}
            
            }
        
        }
    
	}
	
} 