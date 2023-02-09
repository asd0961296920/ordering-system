<?php namespace Dps\Order\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class History extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dps.Order', 'main-menu-item', 'side-menu-item2');
    }
}
