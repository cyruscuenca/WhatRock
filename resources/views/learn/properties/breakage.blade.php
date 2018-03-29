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
</style>
@extends('layouts.pages.sidebar')
<div class="body-wrapper">
	<div class="body" style="overflow-y: hidden; margin-top: calc(40px + 50px); ">
		<div class="animated fadeInUp" style="max-width: 550pt; width: 50%; margin-right: auto; margin-left: auto; background: #fff;">
			<div style="padding: 12pt 16pt; height: 552pt;">
				<p style="font-size: 25pt; color: #37474F; font-family: 'Roboto';">Breakage</p>

				<p>The way a mineral breaks, is called it's <i>breakage</i>. Some minerals break along flat planes, while others have irregular breakage. The way a mineral breaks, is determined by whether the mineral has strong, or weak bonds in a concentrated area. If your specimen has breakage, it can be used to help identify your rock.</p>
				<p>There are two important types of breakage: <i>cleavage and fracture</i>.</p>
				<p><b>Fracture</b> is a type of breakage that occurs when a mineral does not have a strong concentration of strong or weak bonds. As a result, when the mineral breaks in either a <i>irregular fracture</i>, or a <i>conchiodal fracture</i>.</p>
				<div style="width: 34%; float: left; margin-right: 14pt;">
				<img style="width: 100%; margin-bottom: 14pt;" src="{{asset('images/conchoidal.jpg')}}">
				<img style="width: 100%;" src="{{asset('images/irregular.jpg')}}">
				</div>
				<p><b>Cleavage</b> is a type of breakage that happens when a mineral has a concentration of strong or weak bonds in one direction. When the mineral breaks, the fracture happens along the zones of weak bonds. This results in the mineral having flat and smooth fracutures. Some minerals have a one zone of weak minerals, but many have more. If the mineral has more than one zone of weakness, it may be fractured in multiple planes.</p>
				<div style="float: right; width: 27%; margin-left: 14pt;">
				<img style="width: 100%;" src="{{asset('images/halite.jpg')}}">
				</div>
				<p>When a mineral has zones of weakness that go in multiple directions, the mineral will cleave in multiple directions. The degrees between those directions are often measured, because cleavage will be the same across multiple samples. For example: Halite has three cleavages at perfect right angles, making a cube. If you suspect your sample could be Halite, you could examine the cleavage of the sample. If the sample does not have cleavages at right angles, it is not Halite.</p>


			</div>
		</div>
	</div>
</div>
@endsection