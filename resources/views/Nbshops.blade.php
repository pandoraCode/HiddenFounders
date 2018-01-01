
@foreach ($shops as $key => $shop)

<div id="DIV_1">
        <div id="DIV_2">
            <strong>{{$shop['name']}}</strong>
             <img width="130" height="173" src="http://placehold.it/150x150" id="IMG_4" alt='' /></a>
            <div align="center">
            <button class="btn btn-md btn-success">Like</button>
            <button class="btn btn-md btn-success">Dislike</button>
            </div>
    
        </div>
    
    </div>



@endforeach











<?php



print_r($shops);

?>



<style>
	#DIV_1 {
    color: rgb(187, 187, 187);
    cursor: default;
    height: 210px;
    text-align: left;
    text-decoration: none solid rgb(187, 187, 187);
    width: 130px;
    column-rule-color: rgb(187, 187, 187);
    perspective-origin: 71px 111px;
    transform-origin: 71px 111px;
    caret-color: rgb(187, 187, 187);
    background: rgb(255, 253, 253) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 1px solid rgb(58, 58, 58);
    font: normal normal 400 normal 11px / normal verdana, sans-serif;
    list-style: none outside none;
    margin: 0px 6.32813px;
    outline: rgb(187, 187, 187) none 0px;
    overflow: hidden;
    padding: 5px;
}/*#DIV_1*/

#DIV_2 {
    color: rgb(187, 187, 187);
    cursor: default;
    height: 173px;
    min-height: 173px;
    text-align: left;
    text-decoration: none solid rgb(187, 187, 187);
    width: 130px;
    column-rule-color: rgb(187, 187, 187);
    perspective-origin: 65px 86.5px;
    transform-origin: 65px 86.5px;
    caret-color: rgb(187, 187, 187);
    border: 0px none rgb(187, 187, 187);
    font: normal normal 400 normal 11px / normal verdana, sans-serif;
    list-style: none outside none;
    outline: rgb(187, 187, 187) none 0px;
}/*#DIV_2*/

#A_3 {
    color: rgb(89, 128, 169);
    display: block;
    height: 173px;
    text-align: left;
    text-decoration: none solid rgb(89, 128, 169);
    width: 130px;
    column-rule-color: rgb(89, 128, 169);
    perspective-origin: 65px 86.5px;
    transform-origin: 65px 86.5px;
    caret-color: rgb(89, 128, 169);
    border: 0px none rgb(89, 128, 169);
    font: normal normal 400 normal 11px / normal verdana, sans-serif;
    list-style: none outside none;
    outline: rgb(89, 128, 169) none 0px;
}/*#A_3*/

#IMG_4 {
    color: rgb(89, 128, 169);
    cursor: pointer;
    height: 173px;
    text-align: left;
    text-decoration: none solid rgb(89, 128, 169);
    width: 130px;
    column-rule-color: rgb(89, 128, 169);
    perspective-origin: 65px 86.5px;
    transform-origin: 65px 86.5px;
    caret-color: rgb(89, 128, 169);
    border: 0px none rgb(89, 128, 169);
    font: normal normal 400 normal 11px / normal verdana, sans-serif;
    list-style: none outside none;
    outline: rgb(89, 128, 169) none 0px;
}/*#IMG_4*/

#H3_5 {
    color: rgb(204, 204, 204);
    cursor: default;
    height: 30px;
    text-align: center;
    text-decoration: none solid rgb(204, 204, 204);
    text-shadow: rgb(0, 0, 0) 0px -1px 0px;
    width: 130px;
    column-rule-color: rgb(204, 204, 204);
    perspective-origin: 65px 16.5px;
    transform-origin: 65px 16.5px;
    caret-color: rgb(204, 204, 204);
    border: 0px none rgb(204, 204, 204);
    font: normal normal 700 normal 12.1px / normal arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 3px;
    outline: rgb(204, 204, 204) none 0px;
    overflow: hidden;
    padding: 3px 0px 0px;
}/*#H3_5*/

</style>