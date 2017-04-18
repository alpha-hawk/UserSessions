<?php
namespace App\Services\UserSessions\Facade;

use Illuminate\Support\Facades\Facade;
/**
 * Description of Sessions
 *
 * @author Parantap Parashar <parantap.parashar@arkasoftwares.com>
 */
class Sessions extends Facade{
    
    public static function getFacadeAccessor() {
        return 'user.sessions';
    }
    
}
