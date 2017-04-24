$(document).ready(function(){
	wpwb.pageLoad();
	wpwb.events();

});
//GLOBAL VARIABLES
window.GVar = {
	'h_object':"",
	'h_or_text':"",
	'h_nw_text':""
}
wpwb = {
	pageLoad: function() {
		InjectCog();
		AddListeners();
	},
	events: function() {
		$(document).on('click','a',function(e){
			e.preventDefault();
		});
		$(document).on('click','#editheader',function(e){
			var newtext = $('#headermodaltext').val();
			GVar.h_nw_text = $('#headermodaltext').val();
			$('#headermodal').modal('hide');
			GVar.h_object.text(GVar.h_nw_text);
			InjectCog();
		});
	}
}
function InjectCog(){
	var CogHtml = '&nbsp;<i class="_1ed fa fa-cog icon-cog" aria-hidden="true"></i>';
	$("._1ed").remove();
	$("#mycontainer").find("p, a, button, h1, h2, h3, h4, h5, h6").append(CogHtml);
}
function AddListeners(){
	$(document).on('click','.icon-cog',function(e){
		var inputhtml = '<div style="color: black;width: 100px;" class="input-group _eipt"><input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-times" aria-hidden="true"></i></span><span class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></span></div>';
		GVar.h_object = $(this).parent();
		GVar.h_or_text = $(this).parent().text();
		switch($(this).parent().prop('nodeName')){
			case "H1":
			case "H2":
			case "H3":
			case "H4":
			case "H5":
			case "H6":
				$('#headermodaltext').val(GVar.h_or_text);
				$('#headermodal').modal('show');
				break;
			case "A":
				$(this).parent().html(inputhtml);
				break;
			case "P":
				$(this).parent().html(inputhtml);
				break;
			case "BUTTON":
				alert('is BTN 1');
				break;
		}
	});
}
