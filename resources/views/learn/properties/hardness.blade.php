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
				<p style=" margin-left: -1pt; padding: 6pt 0; font-size: 26pt; color: #37474F; font-family: 'Roboto'; font-weight: bold;">Hardness</p>

				<p class="text">Hardness is a measure of how easily a mineral or rock can scratch or be scratched. In the 19th century, mineralogist, Fredrich Mohs created a mineral hardness scale, which is now knows as <i>Mohs hardness scale</i>. The scale rates minerals from 1-10 based on hardness. 10 being the hardest mineral, and 1 being the softest.</p>
				<table class="table table-striped text" style="border: 1pt solid #DCDCDC; width: 42%; float: right; margin-left: 14pt;">
					<tr>
						<th>Hardness Number</th>
						<th>Mineral</th>
					</tr>
					<tr>
						<td>10</td>
						<td>Diamond</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Corundom</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Topaz</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Quartz</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Orthoclase</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Apitite</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Fluorite</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Calcite</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Gypsum</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Talc</td>
					</tr>
				</table>
				<p class="text"><i>Mohs hardness scale</i> is a <i>relative</i> scale, which means that minerals classified with the scale can only scratch minerals that are lower on the scale. For example, Flourite can scratch minerals like Talc and Gypsum, but cannot scratch minerals like Quartz and Diamond.</p>
				<p class="text">To determine the hardness of a mineral, use the scale and see which minerals it can scratch or be scratched by. Alternitively, you could always look up your mineral and see what hardness it has been rated at.</p>


			</div>
		</div>
	</div>
</div>
@endsection
