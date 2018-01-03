<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Shop;
use App\Like;
use Illuminate\Http\Request;

class NBshopsController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }



  //this function returns the list of nearby shops and prefred shops
    public function getShops(){
        
      //liked shops returns a table of liked shops ids
        $likedShops = $this->LikedShops();

      //getNBshops returns   nearby Shops
        $Nshops = $this->getNBshops($likedShops);

      //getPshops returns prefred shops 
        $Pshops = $this->getPshops($likedShops);

      //convert stdclass objects to arrays
        $Nshops = json_decode(json_encode($Nshops), true);
        $Pshops = json_decode(json_encode($Pshops), true);
       
        
        $data = array(
                'Nshops' => $this->sortByDistance($Nshops),
                'Pshops' => $this->sortByDistance($Pshops),
             );
        
        //return to arrays Nshops and Pshops (Nearby and Prefred)
          return view('NBshops')->with($data);
     
       }

    
      
    public function getNBshops($array){
       return  DB::table('shops')->whereNotIn('id', $array)->get()->toArray();
       }

    public function getPshops($array){
       return  DB::table('shops')->whereIn('id', $array)->get()->toArray();
       }


  //this functions return an array of liked shops by authentificated user
    public function LikedShops(){
        
        $userId = Auth::user();

        return  Like::where('user_id', '=',$userId->id )
             ->pluck('shop_id')->toArray();

          }
    
    
   //this function removes shop from likes table when remove button is clicked
    public function removeShop($shopId,$userId)
        {   
         DB::table('likes')
                     ->where('user_id','=', $userId)
                      ->where('shop_id','=', $shopId)
                      ->delete();
         }
          
          
 //this function adds shop to likes table when like button is clicked
    public function likeShop($shopId,$userId)
        {   
          $exists = DB::table('likes')->where('shop_id','=', $shopId)->first();
          if($exists === Null){
            DB::table('likes')->insert(
              ['user_id' => $userId, 'shop_id' => $shopId]
          );
         }
          
        }


   //this function returns an array of shops sorted by distance     
       public function sortByDistance($shops){
    
            $distances = array();
    
            foreach($shops as $key => $shop){
            
              //calcul distance return distance between shops and current user location using longitude and latitude.
            $dis = $this->calculDistance($shop['long'],$shop['lat']) ;
            $shop['distance'] = $dis;
            $shops[$key] = $shop;
            $distances[$key] = $shop['distance'];
              
            }
    
            array_multisort($distances, SORT_ASC, $shops);
    
            return $shops;
    
       }
       
    
       public function calculDistance( $lat2, $lng2) {
    
        /* the default longitude and latitude is Hidden Founders location, 
        in real application every user will have his
        own location calculated using this two parameters */
    
        $lat1=33.996122; //longitude of hidden founders
        $lng1=-6.846305; //latitude of hidden founders
    
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
