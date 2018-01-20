<div class="sidebar">
	<div class="title-bar-thin">
		<p>Categories</p>
	</div>

	@foreach ($categories as $category)
		<li href="{{ route('categories.show', $category->slug) }}" >{{ $category->name }}</a></li>
	@endforeach

</div>