<div class="sidebar">
	<div class="title-bar-thin">
		<p>Categories</p>
	</div>

	@foreach ($categories as $category)
			<a href="{{ route('categories.show', $category->slug) }}" style="display: block; margin-left: 7.5%; width: 85%; height: auto; border: 1px solid #ccc; margin-top: 7.5%; border-radius: 2px;">
			<div style="width: 100%; height: 140px; background: #e3e3e3;">
			</div>
				<p style="margin: 5px; padding-left: 8px;">
					{{ $category->name }}
				</p>
			</a>
	@endforeach

</div>