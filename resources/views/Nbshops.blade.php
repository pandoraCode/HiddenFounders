


@extends('layouts.app')

@section('content')


       


<div  class="container">
<div  class="row">
  <div id="app1" class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading"><a href="#" v-on:click="Nlist = true , Plist = false">Nearby Shops</a> 
        <a  class="pull-right" href="#" v-on:click="Plist = true, Nlist = false ">Prefered shops</a></div>
      <div class="panel-body">
     

      <div v-show="Plist">
            <div class="row center">
              
              <div class="col-md-3 col-sm-3 col-xs-8 column shopbox">
                <div class="shoptitle">Morocco Mall</div>
                <img width="130" height="173"   src="http://placehold.it/150x150"  class="img-responsive" />
                <div class="button1" >
                  <a href="#" class="btn btn-danger btn-sm" role="button">Remove</a>
                  <div class="pricetext">Casablanca</div>
                  <div class="">199 Km</div>
                  <hr>
                </div>
              </div>
              
            </div>
        </div>


      <div v-show="Nlist">
        <div class="row center">
          @foreach ($shops as $key => $shop)
          <div id="shop{{$shop['id']}}"  class="col-md-3 col-sm-3 col-xs-8 column shops">
            <div class="shoptitle">{{$shop['name']}}</div>
            <img width="130" height="173"   src="http://placehold.it/150x150"  class="img-responsive" />
            <div class="button1" >
              <a href="#" class="btn btn-danger btn-sm" role="button"  onclick="hideDislikedShop('#shop'+{{$shop['id']}})">Dislike</a>
              <a href="#" class="btn btn-success btn-sm" role="button" v-on:click="like">like</a>
              <div class="pricetext">{{$shop['city']}}</div>
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





<script >

     
              
    //get shops ids by class             
    var shops = document.getElementsByClassName("shops");
        
    //hide disliked shops and set a cookie to expire after the current time plus two ours
        function hideDislikedShop(id) {
            var date = new Date();
            date.setTime(date.getTime() + (60 * 60 * 2 *  1000));
            var expires = "; expires=" + date.toGMTString();
            document.cookie = id + "=" + true + expires + "; path=/";
            $(id).hide();
        
        }
        
    //check if shops are hidden or not after reload  
        $(window).on('load', function() {
            for (var i = 0; i < shops.length; i++) {
                if ($.cookie('#' + shops[i].id)) {
                    $("#" + shops[i].id).hide();
                }
            }
        
        });
    
    //check every 5 secondes the state of every cookie, if a cookie is expired then show the hidden shop.
        
    setInterval(function() {
          for (var i = 0; i < shops.length; i++) {
              if(typeof $.cookie('#' + shops[i].id) === 'undefined' && $('#' + shops[i].id).is(':hidden')){
                $("#" + shops[i].id).show();
              }
          
            }
        
        }, 5000);

    //navigate between nearby shops and preferd shops

     new Vue({
        el: '#app1',
        data: {
            Nlist: true,
            Plist: false
        },

        methods: {
         

            like: function() {
                alert('like')
            },
        }

    });

 
        
        </script>

@endsection






