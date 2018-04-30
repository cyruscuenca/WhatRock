@extends('layouts.app')
@section('content')
<style type="text/css">
.fadeInUp{
	animation-duration: .4s;
}
</style>
@extends('layouts.pages.sidebar')
<style type="text/css">
  li{
		padding-top: 3pt;
		padding-bottom: 3pt;
	}
	.learn-directory{
		padding-top: 1pt;
		margin-left: -18pt;
	}
	.learn-directory > li{
		margin-top: 4pt;
	}
	ul{
		margin-bottom: 0pt;
		margin-top: -4pt;
		padding-left: -4pt;
		list-style-type: square;
	}
	#sidebar-item-6{
		background: #546E7A;
	}
</style>

<div class="body-wrapper">
	<div class="body" style="overflow-y: hidden; margin-top: calc(40px + 50px); ">
		<div class="animated fadeInUp" style="max-width: 575pt; width: 55%; margin-right: auto; margin-left: auto; background: #fff; height: 500pt">
			<div style="padding: 12pt 16pt;">
				<p style=" margin-left: -1pt; padding: 6pt 0; font-size: 26pt; color: #37474F; font-family: 'Roboto'; font-weight: bold;">Learn</p>

				<p class="text">In addition to tools and a rock database, <a href="https://whatrock.org">whatrock.org</a> provides free geology lessons. All lessons are free to distribute for educational purposes.</p>
				<ul class="learn-directory">
					<li>
						<p><a class="text" href="{{route('/learn/properties')}}">Properties</a></p>
							<ul>
								<li><a class="text" href="{{route('/learn/properties/hardness')}}">Hardness<a></li>
								<li><a class="text" href="{{route('/learn/properties/breakage')}}">Breakage<a></li>
								<li><a class="text" href="{{route('/learn/properties/cleavage')}}">Cleavage<a></li>
							</ul>
					</li>
					<li>
						<p class="text">Earthquakes</p>
							<ul>
								<li><a class="text" href="{{route('/learn/properties/breakage')}}">Plate tectonics<a></li>
								<li><a class="text" href="{{route('/learn/properties/breakage')}}">Richter magnitude scale<a></li>
							</ul>
					</li>
					<li>
						<p class="text">Water</p>
							<ul>
								<li><a class="text" href="{{route('/learn/properties/breakage')}}">Groundwater<a></li>
								<li><a class="text" href="{{route('/learn/properties/breakage')}}">Streams<a></li>
								<li><a class="text" href="{{route('/learn/properties/breakage')}}">Glaciers<a></li>
							</ul>
					</li>
					<li><p class="text">Landscapes</p></li>
				</ul>
		</div>
		</div>
	</div>
</div>
@endsection
