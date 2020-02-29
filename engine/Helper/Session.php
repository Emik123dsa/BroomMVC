<?php 

namespace Engine\Helper; 

class Session 
{
    use Singleton; 

    const activeSession = true; 

    const lazySession   = false; 

    private $sessionState = self::lazySession;
    /**
     * Session execute
     *
     * @return void
     */
    public function startSession() 
    {
        if ($this->sessionState == self::lazySession) 
        {
            $this->sessionState = session_start();
        }

        return $this->sessionState;
    }
    /**
     * Set for Session
     *
     * @param [type] $name
     * @param [type] $value
     */
    public function __set($name, $value) 
    {
        $_SESSION[$name] = $value;
    }
    /**
     * Unset for session
     *
     * @param [type] $name
     */
    public function __unset($name) 
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        } else 
        {
            return null;
        }

    }
    /**
     * Get for session
     *
     * @param [type] $name
     * @return void
     */
    public function __get($name) 
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : [];
    }
    /**
     * Isset for session
     *
     * @param [type] $name
     * @return boolean
     */
    public function __isset($name) 
    {
        return isset($_SESSION[$name]);
    }
    /**
     * Eliminate session
     *
     * @return void
     */
    public function eliminate() 
    {
        if($this->sessionState = self::activeSession) 
        {
            $this->sessionState = !session_destroy();

            return !$this->sessionState;
        }

        return false;
    }

}
?>