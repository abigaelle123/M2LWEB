<?php

class helper
{        
    public static function menu ($link, $name)
    {
        $nav = '<li><a href="' . BASE_URL . '/'.$link.'"></i><span>'.$name.'</span></a></li>';

        return $nav;
    }
    
    //credit et nombre de jours
    public static function dropdown ($icon, $label, $data, $name)
    {
        $notification = '<li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="'.$icon.'"></i>
                            <span class="label label-'.$label.'">'.$data.'</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Vous disposez de '.$data.' '.$name.'</li>
                        </ul>
                    </li>';

        return $notification;
    }
}