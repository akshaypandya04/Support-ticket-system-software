<?php

/**
 * Textlocal API2 Wrapper Class
 *
 * This class is used to interface with the Textlocal API2 to send messages, manage contacts, retrieve messages from
 * inboxes, track message delivery statuses, access history reports
 *
 * @package    Textlocal
 * @subpackage API
 * @author     Andy Dixon <andy.dixon@tetxlocal.com>
 * @version    1.4-UK
 * @const      REQUEST_URL       URL to make the request to
 * @const      REQUEST_TIMEOUT   Timeout in seconds for the HTTP request
 * @const      REQUEST_HANDLER   Handler to use when making the HTTP request (for future use)
 */
class Textlocal
{

}

;

class Contact
{
    var $number;
    var $first_name;
    var $last_name;
    var $custom1;
    var $custom2;
    var $custom3;

    var $groupID;

    /**
     * Structure of a contact object
     * @param        $number
     * @param string $firstname
     * @param string $lastname
     * @param string $custom1
     * @param string $custom2
     * @param string $custom3
     */
    function __construct($number, $firstname = '', $lastname = '', $custom1 = '', $custom2 = '', $custom3 = '')
    {
        $this->number = $number;
        $this->first_name = $firstname;
        $this->last_name = $lastname;
        $this->custom1 = $custom1;
        $this->custom2 = $custom2;
        $this->custom3 = $custom3;
    }
}

;
