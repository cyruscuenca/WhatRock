<div style="width: 275pt; height: 100%; position: fixed; background: #fff; margin-top: 60px; float: right; color: #fff; right: 0;">
	<style type="text/css">
		.pages-sidebar-menu li a { 
			color: #37474F;
			font-size: 14pt;
		}
		.dropdown-container {
		    display: none;
		    padding-left: 16pt;
		}
		.sidenav a, .dropdown-btn {
		    padding: 10pt 0 8pt 18pt;
		    text-decoration: none;
		    font-size: 15pt;
			color: #37474F;
		    display: block;
		    border: none;
		    background: none;
		    width: 100%;
		    text-align: left;
		    cursor: pointer;
		    outline: none;
		    font-family: 'Roboto';
		}
	</style>
	<div style="width: 100%; height: 60pt; border-bottom: 1pt solid #B0BEC5;">
		<p style="display: inline-block; padding-left: 20pt; padding-top: 1pt; font-size: 34pt; font-family: 'Roboto'; color: #37474F;">Directory</p>
	</div>
	<ul class="pages-sidebar-menu" style="font-family: 'Roboto'; margin-top: 14pt; margin-left: 5.5pt;">

		  <button class="dropdown-btn">Properties
		    <i class="fa fa-caret-down"></i>
		  </button>
		 	 <div class="dropdown-container">
		 	  <div>
			  <button class="dropdown-btn" style="font-weight: lighter;">Hardness
			    <i class="fa fa-caret-down"></i>
			  </button>
		   	  </div>
			  <div>
			  <button class="dropdown-btn" style="font-weight: lighter;">Luster
			    <i class="fa fa-caret-down"></i>
			  </button>
			  </div>
	   		 </div>
		<div>
		  <button class="dropdown-btn">Plate tectonics
		    <i class="fa fa-caret-down"></i>
		  </button>
	  </div>
	   		 <div>
		  <button class="dropdown-btn">Landscapes
		    <i class="fa fa-caret-down"></i>
		  </button>
		</div>
	   		 <div>
		  <button class="dropdown-btn">Geologic history
		    <i class="fa fa-caret-down"></i>
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