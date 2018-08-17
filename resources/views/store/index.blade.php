@extends('layouts.app')
@section('content')
<link href="{{ asset('css/store.css') }}" rel="stylesheet">

<div id="slide" style="width: 100%; height: 300pt;"/></div>

<div class="fixed-width" style="height: 2000pt;"></div>

<script type="text/javascript">
var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 800;	// Time Between Switch
	 
// Image List
images[0] = "{{asset('images/slider/africa-arid.jpg')}}";
images[1] = "{{asset('images/slider/blue-sky.jpg')}}";
images[2] = "{{asset('images/slider/cold-daylight.jpg')}}";
images[3] = "{{asset('images/slider/countryside.jpg')}}";
images[4] = "{{asset('images/slider/daylight-lake.jpg')}}";
images[5] = "{{asset('images/slider/daylight-landscape.jpg')}}";

// Change Image
function changeImg(){
	document.getElementById('slide').style.backgroundImage = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
	console.log("rest");
}

// Run function when page loads
window.onload=changeImg;
</script>

@include('partials.footer')
@endsection
