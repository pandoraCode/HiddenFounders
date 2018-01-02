


<button class="deleteShop" onclick="likeShop(3,7)"  >Delete Task</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
function likeShop(shopId,userId){
   
    
    $.ajax({

        type:'PUT',

        url:window.location.href+'/shop/like/'+shopId+"/"+userId,

      

     });

}

    </script>