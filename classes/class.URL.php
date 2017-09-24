<?php

error_reporting(E_ALL);

/**
 * pizzaWebsite - class.URL.php
 *
 * $Id$
 *
 * This file is part of pizzaWebsite.
 *
 * Automatically generated on 24.09.2017, 01:15:14 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Michael Giammattei, <mail@website-company.com>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B30-includes begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B30-includes end

/* user defined constants */
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B30-constants begin
// section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B30-constants end

/**
 * Short description of class URL
 *
 * @access public
 * @author Michael Giammattei, <mail@website-company.com>
 */
class URL
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute fullURL
     *
     * @access public
     * @var String
     */
    public $fullURL = null;

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
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B34 begin
        $this->fullURL = $_GET['url'];
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B34 end
    }

    /**
     * Short description of method getFullURL
     *
     * @access public
     * @author Michael Giammattei, <mail@website-company.com>
     * @return mixed
     */
    public function getFullURL()
    {
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B37 begin
        return $this->fullURL;
        // section -64--88-0-2-4e9e5e2b:15eb15249a9:-8000:0000000000000B37 end
    }

} /* end of class URL */

?>