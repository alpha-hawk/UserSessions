<?php

namespace App\Services\UserSessions\Repositories;

/**
 * Repository to manage user specific session
 * 
 * @author Parantap Parashar <parantap.parashar@arkasoftwares.com>
 */
interface UserSessionRepositoryInterface {
    
    //function to set user sessions key
    public function setKey($key);
    
    //get value from sessions
    public function get($key, $default = null);
    
    //put a value to sessions
    public function put($key, $value = null) ;
    
    //pull a value from session
    public function pull($key, $default = null);
    
    //push a value to a session key
    public function push($key, $value);
    
    //get all user sessions
    public function all();
    
    //flush all user sessions
    public function flush();
     
}
