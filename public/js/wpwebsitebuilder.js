$(document).ready(function(){
	wpwb.pageLoad();
	wpwb.events();
	$.ajaxSetup({
		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
});
//GLOBAL VARIABLES
window.GVar = {
	'h_object':"",
	'h_or_text':"",
	'h_nw_text':"",
	'p_object':"",
	'p_or_text':"",
	'p_nw_text':"",
	'a_object':"",
	'a_or_text':"",
	'a_nw_text':"",
	'a_or_href':"",
	'a_nw_href':"",
	'new_image_url':"",
	'img_object':"",

}
wpwb = {
	pageLoad: function() {
		InjectCog();
		AddListeners();
		InjectCogForImgs();
	},
	events: function() {
		$(document).on('click','a',function(e){
			e.preventDefault();
		});
		//HEADER MODAL
		$(document).on('click','#editheader',function(e){
			GVar.h_nw_text = $('#headermodaltext').val();
			$('#headermodal').modal('hide');
			GVar.h_object.text(GVar.h_nw_text);
			InjectCog();
		});

		//ATAG MODAL
		$(document).on('click','#editatag',function(e){
			$('#atagmodal').modal('hide');
			GVar.p_nw_text = $('#atagtext').val();
			GVar.a_nw_href = $('#ataghref').val();
			GVar.a_object.text(GVar.a_nw_text);
			GVar.a_object.attr('href',GVar.a_nw_href);
			InjectCog();
		});

		//P MODAL
		$(document).on('click','#editp',function(e){
			GVar.p_nw_text = $('#ptext').val();
			$('#pmodal').modal('hide');
			GVar.p_object.html(GVar.p_nw_text);
			InjectCog();
		});

		//img MODAL
		$(document).on('click','.imgcog',function(e){
			GVar.img_object = $(this).parent('.new').find('img');
			$('#immodal').modal('show');
		});
		//img MODAL
		$(document).on('click','#editim',function(e){
			$('#immodal').modal('hide');
			GVar.img_object.attr('src',GVar.new_image_url);
		});


		
	}
}
function InjectCog(){
	var CogHtml = '&nbsp;<i class="_1ed _1edc fa fa-cog icon-cog" aria-hidden="true"></i>';
	$("._1ed").remove();
	$("#mycontainer").find("p, a, button, h1, h2, h3, h4, h5, h6").append(CogHtml);
}
function InjectCogForImgs(){
	var CogHtml = '<i class="_1edc imgcog fa fa-cog" aria-hidden="true"></i>';
	$(".imgcog").remove();
	$("#mycontainer").find("img").wrap( "<div class='new'></div>").after(CogHtml);
}
function AddListeners(){
	$(document).on('click','.icon-cog',function(e){
		var inputhtml = '<div style="color: black;width: 100px;" class="input-group _eipt"><input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-times" aria-hidden="true"></i></span><span class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></span></div>';
		switch($(this).parent().prop('nodeName')){
			case "H1":
			case "H2":
			case "H3":
			case "H4":
			case "H5":
			case "H6":
				GVar.h_object = $(this).parent();
				GVar.h_or_text = $(this).parent().text();
				$('#headermodaltext').val(GVar.h_or_text);
				$('#headermodal').modal('show');
				break;
			case "A":
				GVar.a_object = $(this).parent();
				GVar.a_or_text = $(this).parent().text();
				GVar.a_or_href = $(this).parent().attr('href');
				$('#atagtext').val(GVar.a_or_text);
				$('#ataghref').val(GVar.a_or_href);
				$('#atagmodal').modal('show');
				break;
			case "P":
				GVar.p_object = $(this).parent();
				GVar.p_or_text = $(this).parent().text();
				$('#ptext').val(GVar.p_or_text);
				$('#pmodal').modal('show');
				break;
			case "BUTTON":
				alert('is BTN 1');
				break;
		}
	});
	$(document).on('click','.imgcog',function(e){
		var inputhtml = '<div style="color: black;width: 100px;" class="input-group _eipt"><input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-times" aria-hidden="true"></i></span><span class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></span></div>';

	});


}
