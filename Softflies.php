<?php
/**
 * @author      Amit Roy <amit@softflies.com>
 * @copyright   Copyright (c), 2021 Amit Roy
 * @license     MIT public license
 */
namespace Inculcate\Foundation;

/**
 * Class Softflies.
 */
class Softflies
{   
    /**
     * The Softflies framework version.
     *
     * @var string
     * @return Inculcate\Foundation\VERSION
     */
    const VERSION = '1.0.0';

    /**
    * return the locale of the application
    * @param null
    * @method getLocale
    * @return \Inculcate\Foundation\Softflies\getLocale
    */
    public function getLocale(){
        return config("app.locale");
    }

} 