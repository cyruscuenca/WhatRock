<div class="sidebar">
	<div class="title-bar-thin">
		<p>Categories</p>
	</div>

	@foreach ($categories as $category)
			<a href="{{ route('categories.show', $category->slug) }}" style="display: block; margin-left: 7.5%; width: 85%; height: auto; border: 1px solid #ccc; margin-top: 20px;">
			<div style="width: 100%; height: 135px; background: #e3e3e3;">
			</div>
			{{ $category->name }}
			</a>
	@endforeach

</div>