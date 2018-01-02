@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                    

        <div class="row center">
<div class="col-md-3 column shopbox">
        <div class="shoptitle">shop 2</div>
        <img width="130" height="173"   src="http://placehold.it/150x150"  class="img-responsive"id="IMG_4" alt='' />
        
        <div class="button1" ><a href="#" class="btn btn-danger btn-sm" role="button">Dislike</a>
            <a href="#" class="btn btn-success btn-sm" role="button">like</a>
        <div class="pricetext">RABAT</div>
    
        <div class="">33 KM</div>
    </div>
        
    </div>

    
    
                                
</div>
    
    



<style>    
       /*
Code snippet by maridlcrmn for Bootsnipp.com
Follow me on Twitter @maridlcrmn
Image credits: unsplash.com, uifaces.com/authorized
Image placeholders: placemi.com
*/

.col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 2%;
    max-width: -webkit-fill-available;
}
.shopbox {
    background-color:#ffffff;
	padding:10px;
	margin-bottom:10px;
	-webkit-box-shadow: 0 8px 6px -6px  #999;
	   -moz-box-shadow: 0 8px 6px -6px  #999;
	        box-shadow: 0 8px 6px -6px #999;
}

.shoptitle {
    font-weight:bold;
	padding:5px 0 5px 0;
}

.button1 {
	border-top:1px solid #dadada;
	padding-top:5px;
}

.pricetext {
	font-weight:bold;
	font-size:1.4em;
}
.container {
    display: flex;
    justify-content: center;
  }
  .center {
    width: 800px;
  }
    </style>        













            </div>
        </div>
    </div>
</div>
@endsection
