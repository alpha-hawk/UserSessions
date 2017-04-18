<?php
namespace App\Services\UserSessions;

use App\Services\UserSessions\Repositories\UserSessionRepositoryInterface;

/**
 * Description of Sessions
 *
 * @author Parantap Parashar <parantap.parashar@arkasoftwares.com>
 */
class Sessions {
    
    protected $sessionsRepo;
    
    public function __construct(UserSessionRepositoryInterface $sessions_repo) {
        $this->sessionsRepo = $sessions_repo;
    }
    
    public function get($key, $default = null) {
        return $this->sessionsRepo->get($key, $default);
    }

    public function put($key, $value = null) {
        return $this->sessionsRepo->put($key, $value);
    }

    public function pull($key, $default = null) {
        return $this->sessionsRepo->pull($key, $default);
    }
    
    public function push($key, $value){
        return $this->sessionsRepo->push($key, $value);
    }
    
    public function all(){
        return $this->sessionsRepo->all();
    }
    
    public function flush(){
        $this->sessionsRepo->flush();
    }
    
}
