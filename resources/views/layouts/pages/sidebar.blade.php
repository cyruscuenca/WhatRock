	<style type="text/css">
	.pages-sidebar-menu li a { 
		color: #fff;
		font-size: 14pt;
	}
	.pages-sidebar-menu { 
		padding-top: 5pt;
		margin-left: 19pt;
	}
	.dropdown-container {
		display: none;
		padding-left: 28pt;
	}
	.sidenav a, .dropdown-btn {
		text-decoration: none;
		display: block;
		font-size: 12.5pt;
		color: #fff;
		background-color: #455A64;
		padding: 1% 3%;
		border-radius: 1pt;
		border: none;
		text-align: left;
		cursor: pointer;
		outline: none;
		font-family: 'Roboto';
		margin-top: 12pt;
		margin-left: 2pt;
	}
	.pages-sidebar-menu{
		list-style:none;
		padding-left: 0;
	}
</style>

<div style="width: 275pt; height: 100%; position: fixed; background: #546E7A; margin-top: 60px; float: right; color: #fff; right: 0;">
	<div style="width: 100%; height: 100pt; background: #546E7A;">
		<p style="display: inline-block; padding: 0 14pt; margin-left: 22pt; border-radius: 1pt; margin-top: 30pt; font-size: 25pt; font-family: 'Roboto'; color: #fff; font-weight: bold; background-color: #455A64;">Directory</p>
	</div>
	<ul class="pages-sidebar-menu" style="font-family: 'Roboto';">
		<button class="dropdown-btn">
			<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
			Properties
		</button>
		<div class="dropdown-container">
			<div>
				<button class="dropdown-btn" style="font-weight: lighter;">
					<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
					Hardness
				</button>
			</div>
			<div>
				<button class="dropdown-btn" style="font-weight: lighter;">
					<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
					Luster
				</button>
			</div>
			<div>
				<button class="dropdown-btn" style="font-weight: lighter;">
					<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
					Cleavage
				</button>
			</div>
		</div>
		<button class="dropdown-btn">
			<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
			Earthquakes
		</button>
		<div class="dropdown-container">
			<div>
				<button class="dropdown-btn" style="font-weight: lighter;">
					<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
					Plate tectonics
				</button>
			</div>
			<div>
				<button class="dropdown-btn" style="font-weight: lighter;">
					<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
					Richter magnitude scale
				</button>
			</div>
		</div>
		<div>
			<button class="dropdown-btn">
				<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
				Landscapes
			</button>
		</div>
		<div>
			<button class="dropdown-btn">
				<img style="margin-right: 4pt;" src="{{ asset('images/newtab.svg') }}">
				Geologic history
			</button>
		</div>
	</ul>
</div>
<script>
	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
			} else {
				dropdownContent.style.display = "block";
			}
		});
	}
</script>