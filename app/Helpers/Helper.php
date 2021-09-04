<?php

namespace App\Helpers;

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
                "<a href='$url'><i class='sl-flag flag-en'><div id='english'></div></i> <span class='active'>EN</span></a>";
                break;
            case 'ka':
                echo 
                "<a href='$url'><i class='sl-flag flag-ka'><div id='georgian'></div></i> <span class='active'>KA</span></a>";
                break;
            case 'ru':
                echo 
                "<a href='$url'><i class='sl-flag flag-ru'><div id='russian'></div></i> <span class='active'>RU</span></a>";
        }

        

    }


    public static function getTitle(){
        
        return "Main";
    }


}