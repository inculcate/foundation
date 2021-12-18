<?php
use Inculcate\Routing\Request;
use Inculcate\Routing\Foundation;

// To get the base path of the application
// if passed the any param that has to be added/combined 
if (! function_exists('base_path')) {
    /**
     * @param  string|null  $path
     * @return base path of the application
     */
    function base_path($path = null)
    {   
        $app_root_path = $_SERVER['APP_ROOT_PATH'] ?? " ";
        if($path!==null){
           $app_root_path =  $app_root_path."\\".$path;
        }
        return $app_root_path;
    }
}

// To load the config file
// To get config file array value
// To set config file default value accordingly 
// check the config file exixts or not ,
// if every thing goes well , we then return the value accordingly 
if (! function_exists('config')) {
    /**
     * @param  string|null  $path,
     * @param  string|null $default_value
     * @return config file key values
     */
    function config($file_name_key = null, $default_value=null)
    {     
         
         if ($file_name_key!==null) {
         	
             $file_name_key = explode('.', $file_name_key);
	         $file_path = base_path("/config/".strtolower($file_name_key[0] ?? "").".php") ?? "";
	    	
             if (file_exists($file_path)) {
				$my_values = (function() use ($file_path){
                   return require $file_path;
                })();
                $default_value= $my_values[$file_name_key[1] ?? ""] ?? $default_value;
	    	 }

         }

         return $default_value;  

    }
}

// To include the files.
// It also help you to get the files value ,
// when you return the value from the file
if (! function_exists('file_load')) {
    /**
     * @param  string|null  $file_path,
     * @return files values
     */
    function file_load($file_path = null)
    {     
         
         $my_values = "";
         if ($file_path!==null) {             
            
             if (file_exists($file_path)) {
                $my_values = (function() use ($file_path){
                   return require $file_path;
                })();
             }

         }

         return $my_values;  

    }
}

// To get the env values
if (! function_exists('env')) {
    /**
     * @param  string|null  $param_name
     * @param  string|null  $value
     * @return  param's value from the (.env) file
     */
    function env( string $param_name = null, string $value=null)
    {     
         
         if ($param_name!==null) {
             $value = $_ENV[$param_name] ?? $value; 
         }

         return $value;  

    }
}