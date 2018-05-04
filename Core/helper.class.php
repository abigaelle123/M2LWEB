<?php

class helper
{        
    public static function menu ($icon, $link, $name)
    {
		$navigation = '<li class="nav-item">
            <a href="' . BASE_URL . '/'.$link.'" class="nav-link">
              <i class="nav-icon fa fa-'.$icon.'"></i>
              <p>
                '.$name.'
              </p>
            </a>
          </li>'; 
		
		return $navigation; 
		//                <span class="badge badge-info right"></span>

    }
    
    //credit et nombre de jours
   public static function dropdown ($icon, $data, $comp)
    {
        $alert = '<a href="#" class="dropdown-item">
            				<i class="fa fa-'.$icon.'"></i> Vous disposez de '.$data.' '.$comp.'
            				<span class="float-right text-muted text-sm"></span>
          				 </a>
						 <div class="dropdown-divider"></div>';

        return $alert;
    }
}