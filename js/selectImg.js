$(document).ready(function() {
	$('img').toggle(
	function() {
		$(this).css({'border':'7px solid red', 'width':'86px','height':'86px'});
		var img = $(this).attr("src");
		var cap = $(this).attr("title");
		var imgSelect = $('<input id="input" type="hidden" value="' + img + '" name="img[]">');
		var capSelect = $('<input id="input" type="hidden" value="' + cap + '" name="cap[]">');
		$("#selected").append(capSelect);
		$("#selected").append(imgSelect);
	},
	function() {
		$(this).css({'border':'none','width':'100px','height':'100px'});
		$('#input').remove();
		$('#selected').children("input").remove();
	}
	);
});
