






<div id="app">
<a href="#" v-on:click="Nlist = true , Plist = false">
    Nearby shops
</a>
<a href="#" v-on:click="Plist = true, Nlist = false ">
Prefered list
</a>

 <span v-show="Plist">prefered list</span>


<span v-show="Nlist">nearby shops</span>
</div>



<script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
<script >

new Vue({
	el: '#app',
  data: {
		Nlist: true,
        Plist: false
  }
});

</script>


