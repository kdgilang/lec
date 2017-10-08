
// fungsi untuk sidebar
$(document).ready(function(){
	//saat class treeview di click
	$(".treeview").click(function(e){		
		$( this ).find("ul").slideToggle();
		$( this).toggleClass("active");
		$( this ).find(".fa-angle-left").toggleClass("fa-angle-down");
	});
});
