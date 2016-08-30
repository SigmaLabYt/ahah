<?php

/**
 * Class Calendar
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Calendar extends Controller
{
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/calendar/calendar.php';
        require APP . 'view/_templates/footer.php';
    }
}
