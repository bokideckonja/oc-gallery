<?php namespace Stefan\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Image extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'stefan.gallery.images' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Stefan.Gallery', 'stefan-gallery-galleries', 'stefan-gallery-images-menu');
    }
}