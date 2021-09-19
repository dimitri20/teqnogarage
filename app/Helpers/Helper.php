<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class Helper
{


    public static function renderLocaleLinkHtml($locale){
        $url = url()->full();
        $url = explode('/', $url);
        $url[3] = $locale;
        $url = implode('/', $url);

        switch($locale){

            case 'en':
                echo 
                "<a href='$url'><i class='sl-flag flag-en'><div id='english'></div></i> <span class='active'>".__("ინგ")."</span></a>";
                break;
            case 'ka':
                echo 
                "<a href='$url'><i class='sl-flag flag-ka'><div id='georgian'></div></i> <span class='active'>".__("ქარ")."</span></a>";
                break;
            case 'ru':
                echo 
                "<a href='$url'><i class='sl-flag flag-ru'><div id='russian'></div></i> <span class='active'>".__("რუს")."</span></a>";
                break;
            
        }

    }

    public static function getLocaleLink($locale){
        $url = url()->full();
        $url = explode('/', $url);
        $url[3] = $locale;
        $url = implode('/', $url);
        
        return $url;
    }


    public static function getTitle(){
        $title = __("ტექნოგარაჟი");
        $space = " - ";

        switch(Route::currentRouteName()){
            case "index":
                $title = $title.$space.__("მთავარი");
                break;
            case "contact":
                $title = $title.$space.__("კონტაქტი");
                break;
            case "index.products":
                $title = $title.$space.__("პროდუქცია");
                break;
            case "index.product":
                $title = $title.$space.__("პროდუქტი");
                break;
            case "about":
                $title = $title.$space.__("ჩვენ შესახებ");
                break;
            default:
                break;
        }

        return $title;
    }


    
}