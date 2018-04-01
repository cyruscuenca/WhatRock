@extends('layouts.app')
@section('content')
<style type="text/css">
.fadeInUp{
	animation-duration: .4s;
}
</style>
@extends('layouts.pages.sidebar')
<style type="text/css">
	ul li{
		margin-top: 4pt;
	}
	.learn-directory{
		padding-top: 10pt;
	}
	ul{
		padding-top: 4pt;
	}
	#sidebar-item-6{
		background: #455A64;
	}
</style>

<div class="body-wrapper">
	<div class="body" style="overflow-y: hidden; margin-top: calc(40px + 50px); ">
		<div class="animated fadeInUp" style="max-width: 575pt; width: 55%; margin-right: auto; margin-left: auto; background: #fff; height: 500pt">
			<div style="padding: 12pt 16pt;">
				<p style=" margin-left: -1pt; padding: 6pt 0; font-size: 26pt; color: #37474F; font-family: 'Roboto'; font-weight: bold;">Learn</p>

				<p class="text">In addition to tools and a rock database, <a href="https://whatrock.org">whatrock.org</a> provides free lessons on concepts in the field of geology. All lessons are free to distribute for educational purposes.</p>
				<ul class="learn-directory">
					<li>
						<p><a href="{{route('/learn/properties')}}">Properties</a></p>
							<ul>
								<li><a href="{{route('/learn/properties/hardness')}}">Hardness<a></li>
								<li><a href="{{route('/learn/properties/breakage')}}">Breakage<a></li>
							</ul>
					</li>
					<li>Plate Tectonics</li>
					<li><p>Earthquakes</p>

							<ul>
								<li><a href="{{route('/learn/properties/breakage')}}">Richter magnitude scale<a></li>
							</ul>
					</li>
					<li>
						<p>Water</p>
							<ul>
								<li><a href="{{route('/learn/properties/breakage')}}">Groundwater<a></li>
								<li><a href="{{route('/learn/properties/breakage')}}">Streams<a></li>
								<li><a href="{{route('/learn/properties/breakage')}}">Glaciers<a></li>
							</ul>
					</li>
					<li>Landscapes</li>
				</ul>
		</div>
		</div>
	</div>
</div>
@endsection