<?php

error_reporting(E_ALL);

/**
 * This class provides methods to set, get, and destroy session values.
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AE1-includes begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AE1-includes end

/* user defined constants */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AE1-constants begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AE1-constants end

/**
 * This class provides methods to set, get, and destroy session values.
 *
 * @access public
 * @author Michael Giammattei, <mail@website-company.com>
 */
class Sessions
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * The visitors token
     *
     * @access public
     * @var String
     */
    public $token = null;

    /**
     * Short description of attribute sessionValue
     *
     * @access public
     * @var String
     */
    public static $sessionValue = null;

    // --- OPERATIONS ---

    /**
     * Return session value provided the session name is given.
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @param  sessionName
     * @return mixed
     */
    public static function getSession($sessionName)
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AEA begin
        if(isset($_SESSION[$sessionName])){
            self::$sessionValue = $_SESSION[$sessionName];
        } else{
            self::$sessionValue = null;
        }
        return self::$sessionValue;
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AEA end
    }

    /**
     * Create session variable.
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @param  SessionName
     * @param  value
     * @return mixed
     */
    public static function setSession($SessionName, $value)
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AF5 begin
        $_SESSION[$SessionName] = $value;
        return null;
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AF5 end
    }

    /**
     * Short description of method destroySession
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @param  sessionName
     * @return mixed
     */
    public static function destroySession($sessionName)
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B16 begin
        unset($_SESSION[$sessionName]);
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B16 end
    }

} /* end of class Sessions */

?>