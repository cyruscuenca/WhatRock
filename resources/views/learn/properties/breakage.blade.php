@extends('layouts.app')
@section('content')
<style type="text/css">
ul{
	list-style:none;
	padding-left:0;
}

.fadeInUp{
	animation-duration: .4s;
}
#sidebar-item-6{
	background: #4c606b;
}
</style>
@extends('layouts.pages.sidebar')
<div class="body-wrapper">
	<div class="body" style="overflow-y: hidden; margin-top: calc(40px + 50px); ">
		<div class="animated fadeInUp" style="max-width: 575pt; width: 55%; margin-right: auto; margin-left: auto; background: #fff;">
			<div style="padding: 12pt 16pt; height: 552pt;">
				<p style=" margin-left: -1pt; padding: 6pt 0; font-size: 26pt; color: #37474F; font-family: 'Roboto'; font-weight: bold;">Breakage</p>

				<p class="text">The way a mineral breaks, is called it's <i>breakage</i>. Some minerals break along flat planes, while others have irregular breakage. The way a mineral breaks, is determined by whether the mineral has strong, or weak bonds in a concentrated area. If your specimen has breakage, it can be used to help identify your rock.</p>
				<div style="width: 28%; float: left; margin-right: 14pt;">
				<div style="">
				<img style="width: 100%; margin-bottom: 14pt; border-radius: 1.25pt;" src="{{asset('images/conchoidal.jpg')}}">
				<p class="text" style="margin-left: .4pt; font-weight: bold; font-size: 10.5pt; margin-top: -10.2pt;">A conchoidal fracture</p>
				</div>
				<div>
				<img style="width: 100%; border-radius: 1.25pt;" src="{{asset('images/irregular.jpg')}}">
				<p class="text" style="margin-left: .4pt; margin-top: 2.5pt; font-weight: bold; font-size: 10.5pt;">An irregular fracture</p>
				</div>
				</div>
				<p class="text">There are two important types of breakage: <i>cleavage and fracture</i>.</p>
				<p class="text"><b>Fracture</b> is a type of breakage that occurs when a mineral does not have a strong concentration of strong or weak bonds. As a result, when the mineral breaks in either a <i>irregular fracture</i>, or a <i>conchiodal fracture</i>.</p>
				<p class="text"><b>Cleavage</b> is a type of breakage that happens when a mineral has a concentration of strong or weak bonds in one direction. When the mineral breaks, the fracture happens along the zones of weak bonds. This results in the mineral having flat and smooth fracutures. Some minerals have a one zone of weak minerals, but many have more. If the mineral has more than one zone of weakness, it may be fractured in multiple planes.</p>
			</div>
		</div>
	</div>
</div>
@endsection