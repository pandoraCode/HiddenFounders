   
     
  //get shops ids by class             
    var shops = document.getElementsByClassName("shops");
        
    //hide disliked shops and set a cookie to expire after the current time plus two ours
        function hideDislikedShop(id) {
            var date = new Date();
            date.setTime(date.getTime() + (60 * 60 * 2 *  1000));// current time plus two ours
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

        $( "a" ).click(function( event ) {
            event.preventDefault();
        });

    //navigate between nearby shops and preferd shops

     new Vue({
        el: '#app1',
        data: {
            Nlist: true,
            Plist: false
        },

        methods: {
         
            // when like button is clicked append liked shop to prefered list and send a .get request to add its id to likes table
            like: function(userId,shopId) {
                $.get('/likedShop/'+shopId+'/'+userId, function(){ 
                    console.log('response'); 
                }); 
               $("#imgNb"+ shopId).after("<a href='#'' class='btn btn-danger btn-sm' v-on:click='remove({{$userId}},{{$shop['id']}})'' role='button'>Remove</a>");
               $( "#List" ).append( $( "#shop"+ shopId) );
               $(  ".nr-btn"+ shopId).remove();
            },
            //when remove button is clicked remove shop from prefred list and send request to delete it from likes table
            remove: function(userId,shopId){ 
                $.get('/removeShop/'+shopId+'/'+userId, function(){ 
              }); 
                $("#p"+ shopId).remove();
             }
        }

    });
        
 