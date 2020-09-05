<?php 
	if(!function_exists('route_active')){
		function route_active($route){
			return Route::is($route) ? 'active':'';
		}
	}
	if(!function_exists('page_title')){
		function page_title($title){
			$title_base="Laracarte list of artisans";
			if($title===''){
				return $title_base;
			}
			else{
				return $title.'|'.$title_base;
			}
			
		}
	}


 ?>