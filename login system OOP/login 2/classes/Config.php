<?php 
class Config {
    
    private static $id;

// Config::get('mysql/username');
// mysql/host, mysql/pass, 
    public static function get($path = null){
            if($path){
                $config = $GLOBALS['config'];
                $path = explode('/', $path);
                //path == ['mysql','username']
                foreach ($path as $bit) {
                    if (isset($config[$bit])) {
                        $config = $config[$bit];
                    }
           }
                return $config;
            }
        return false;
    }

}





// $myconfobj = new Config(
