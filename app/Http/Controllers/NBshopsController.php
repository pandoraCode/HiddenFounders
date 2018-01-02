<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class NBshopsController extends Controller
{
    public function getShops(){

        //$dis =$this->get_distance_m( 45.767299, 4.834329);
        $shops = Shop::all()->toArray();
    
       return view('NBshops')->with('shops',$this->sortByDistance($shops));
       }
    
    
    
       public function sortByDistance($shops){
    
            $distances = array();
    
            foreach($shops as $key => $shop){
    
              //  $shops[$shop['distance']] = $this->calculDistance($shop['long'],$shop['lat']) ;
            $dis = $this->calculDistance($shop['long'],$shop['lat']) ;
            $shop['distance'] = $dis;
            $shops[$key] = $shop;
            $distances[$key] = $shop['distance'];
              
            }
    
            array_multisort($distances, SORT_ASC, $shops);
    
            return $shops;
    
       }
       
    
       public function calculDistance( $lat2, $lng2) {
    
        /* longitude and latitude of Hidden Founders location, 
        in real application every user will have his
        own location calculated using this two parameters */
    
        $lat1=33.996122; //longitude
        $lng1=-6.846305; //latitude
    
        $earth_radius = 6378137;   //earth raduis
        $rlo1 = deg2rad($lng1);
        $rla1 = deg2rad($lat1);
        $rlo2 = deg2rad($lng2);
        $rla2 = deg2rad($lat2);
        $dlo = ($rlo2 - $rlo1) / 2;
        $dla = ($rla2 - $rla1) / 2;
        $a = (sin($dla) * sin($dla)) + cos($rla1) * cos($rla2) * (sin($dlo) * sin($dlo
      ));
        $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return round(($earth_radius * $d)/1000,3); //returns distance on Km
      }
}
