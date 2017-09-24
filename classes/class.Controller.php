<?php

error_reporting(E_ALL);

/**
 * Main function controls what is served to the user.
 *
 * @author Michael Giammattei
 * @version 1
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Processing
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */
require_once('class.Processing.php');

/**
 * This class provides methods to set, get, and destroy session values.
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */
require_once('class.Sessions.php');

/**
 * include URL
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */
require_once('class.URL.php');

/**
 * Views takes in the value of the URL and serves a view file according to what
 * value is.
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */
require_once('class.Views.php');

/* user defined includes */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AB4-includes begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AB4-includes end

/* user defined constants */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AB4-constants begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000AB4-constants end

/**
 * Main function controls what is served to the user.
 *
 * @access public
 * @author Michael Giammattei
 * @version 1
 */
class Controller
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : Views    // generateAssociationEnd : Sessions    // generateAssociationEnd : URL    // generateAssociationEnd : Processing

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute urlValue
     *
     * @access public
     * @var String
     */
    public $urlValue = null;

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @return mixed
     */
    public function __construct()
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000ACC begin
        if(isset($_GET['url'])){
            $this->urlValue = $_GET['url'];
        } else{
            $this->urlValue = 'home';
        }

        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000ACC end
    }

    /**
     * Short description of method controller
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @return mixed
     */
    public function controller()
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000ADB begin
        $Processing = new Processing($this->urlValue);

        return $Processing->main();

        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000ADB end
    }

} /* end of class Controller */

?>