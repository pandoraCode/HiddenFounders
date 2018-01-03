@extends('layouts.app')

@section('content')
<?php

//get id of  authentificated user
if (Auth::check())
{
   $userId = Auth::user()->id;
  
}

?>  


<div  class="container">
<div  class="row">
  <div id="app1" class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading"><a href="#" v-on:click="Nlist = true , Plist = false">Nearby Shops</a> 
        <a    v-on:click="Plist = true, Nlist = false " class="pull-right">Prefered shops</a></div>
      <div class="panel-body">

          <!--show list of nearby shops-->
      <div  v-show="Nlist">
        <div  class="row center nrlist">
          @foreach ($Nshops as $key => $shop)
          <div id="shop{{$shop['id']}}"  class="col-md-3 col-sm-3 col-xs-8 column shops">
            <div class="shoptitle">{{$shop['name']}}</div>
            <img id="imgNb{{$shop['id']}}" width="130" height="173"   src="http://placehold.it/150x150"  class="img-responsive" />
            <div id="button1" >
              <a  href="#" class="btn btn-danger btn-sm nr-btn{{$shop['id']}} " role="button"  onclick="hideDislikedShop('#shop'+{{$shop['id']}})">Dislike</a>
              <a href="#" class="btn btn-success btn-sm nr-btn{{$shop['id']}}" role="button" v-on:click="like({{$userId}},{{$shop['id']}})">like</a>
              <div class="c_name">{{$shop['city']}}</div>
              <div class="">{{$shop['distance']}} Km</div>
              <hr>
            </div>
          </div>
          @endforeach
        </div>
    </div>

    <!--show list of prefered shops-->
    <div v-show="Plist">
            <div id="List" class="row center">
         @foreach ($Pshops as $key => $shop)
              <div id = "p{{$shop['id']}}" class="col-md-3 col-sm-3 col-xs-8 column shopbox">
                <div class="shoptitle">{{$shop['name']}}</div>
                <img  width="130" height="173"   src="http://placehold.it/150x150"  class="img-responsive" />
                <div class="button1" >
                  <a  href="#" class="btn btn-danger btn-sm " v-on:click="remove({{$userId}},{{$shop['id']}})" role="button">Remove</a>
                  <div class="c_name">{{$shop['city']}}</div>
                  <div class="">{{$shop['distance']}} Km</div>
                  <hr>
                </div>
              </div>
        @endforeach
            </div>
        </div>
       
      </div>
    </div>
  </div>
</div>

</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script type="text/javascript" src="{!! asset('js/myapp.js') !!}"></script>





@endsection






