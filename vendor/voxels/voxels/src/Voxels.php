<?php
/**
 * Created by PhpStorm.
 * User: All_Geek
 * Date: 6/6/2017
 * Time: 6:53 AM
 */

namespace Voxels\Voxels;


class Voxels {

    protected $template;
    protected $cssLinks =
        [
            "http://admin.voxels.io/css/right.dark.css",
            "http://admin.voxels.io/css/right.dark.custom.css"
        ];
    protected $jsCode =
        [
            "document.domain = 'voxels.io';"
        ];
    protected $jsLinks =
        [

        ];

    public function __construct($template){
        $this->template = $template;
    }

    public function injectCSSFile(){

        view()->composer('ticketit::' . $this->template, function ($view) {
            $cssLinks = $this->cssLinks;
            $view->with(compact("cssLinks"));
        });
    }
    public function injectJSFile(){
        view()->composer('ticketit::' . $this->template, function ($view) {
            $jsLinks = $this->jsLinks;
            $view->with(compact("jsLinks"));
        });
    }

    public function injectJSCode(){
        view()->composer('ticketit::' . $this->template, function ($view) {
            $jsCode = $this->jsCode;
            $view->with(compact("jsCode"));
        });
    }
}