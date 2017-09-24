<?php

error_reporting(E_ALL);

/**
 * pizzaWebsite - class.Processing.php
 *
 * $Id$
 *
 * This file is part of pizzaWebsite.
 *
 * Automatically generated on 24.09.2017, 01:30:20 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Model
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */
require_once('class.Model.php');

/**
 * Views takes in the value of the URL and serves a view file according to what
 * value is.
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */
require_once('class.Views.php');

/* user defined includes */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B24-includes begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B24-includes end

/* user defined constants */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B24-constants begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B24-constants end

/**
 * Short description of class Processing
 *
 * @access public
 * @author Michael Giammattei, <mail@website-company.com>
 */
class Processing
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : Model    // generateAssociationEnd : 

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
     * @param  urlValue
     * @return mixed
     */
    public function __construct($urlValue)
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B3C begin
        $this->urlValue = $urlValue;
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B3C end
    }

    /**
     * Short description of method main
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @return mixed
     */
    public function main()
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B3E begin

        switch (Sessions::getSession('login')):
            case true :
                $Model = new Model();
                return $Model;

                break;
            default :
                $Views = new Views();
                return $Views;
        endswitch;

        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B3E end
    }

} /* end of class Processing */

?>