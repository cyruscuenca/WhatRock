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
			<div style="padding: 12pt 16pt; height: 500pt;">
				<p style=" margin-left: -1pt; padding: 6pt 0; font-size: 26pt; color: #37474F; font-family: 'Roboto'; font-weight: bold;">Cleavage</p>
				<p class="text"><b>Cleavage</b> is a type of breakage that happens when a mineral has a concentration of strong or weak bonds in one direction. When the mineral breaks, the fracture happens along the zones of weak bonds. This results in the mineral having flat and smooth fracutures. Some minerals have a one zone of weak minerals, but many have more. If the mineral has more than one zone of weakness, it may be fractured in multiple planes.</p>
				<div style="float: right; width: 26%; margin-left: 14pt;">
				<img style="width: 100%; border-radius: 1.25pt;" src="{{asset('images/halite.jpg')}}">
				<p class="text" style="margin-left: .2pt; margin-top: 2.5pt; font-weight: bold; font-size: 10.5pt;">Halite</p>
				</div>
				<p class="text">When a mineral has zones of weakness that go in multiple directions, the mineral will cleave in multiple directions. The degrees between those directions are often measured, because cleavage will be the same across multiple samples. For example: Halite has three cleavages at perfect right angles, making a cube. If you suspect your sample could be Halite, you could examine the cleavage of the sample. If the sample does not have cleavages at right angles, it is not Halite.</p>
			</div>
		</div>
	</div>
</div>
@endsection