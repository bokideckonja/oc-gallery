<?php namespace Stefan\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Stefan\Gallery\Models\Image;

class Gallery extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'stefan.gallery.galleries' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Stefan.Gallery', 'stefan-gallery-galleries');

        $this->addCss('/plugins/stefan/gallery/assets/css/formheight.css');
        $this->addCss('/plugins/stefan/gallery/assets/css/inetis-list-switch.css');
    }
}