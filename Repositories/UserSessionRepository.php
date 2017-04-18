<?php

namespace App\Services\UserSessions\Repositories;

use Illuminate\Session\Store as SessionStore;

/**
 * Repository to manage user specific session
 *
 * @author Parantap Parashar <parantap.parashar@arkasoftwares.com>
 */
class UserSessionRepository implements UserSessionRepositoryInterface {

    protected $key = 'priavate_user_session';
    protected $session;

    public function __construct(SessionStore $session) {
        $this->session = $session;
    }

    public function setKey($key) {
        $this->key = $key;
    }

    public function get($key, $default = null) {
        return $this->session->get($this->makeKey($key), $default);
    }

    public function put($key, $value = null) {
        if (!is_array($key)) {
            $key = [$key => $value];
        }

        foreach ($key as $arrayKey => $arrayValue) {
            $this->session->set($this->makeKey($arrayKey), $arrayValue);
        }
    }

    public function pull($key, $default = null) {
        return $this->session->pull($this->makeKey($key), $default);
    }
    
    public function push($key, $value){
        return $this->session->push($this->makeKey($key), $value);
    }
    
    public function all(){
        return $this->session->get($this->key);
    }

    protected function makeKey($name) {
        return $this->key . '.' . $name;
    }
    
    public function flush() {
        $this->session->pull($this->key);
    }

}
