
//$(window).load(function() {
	$(document).on("#editor", function (ev) {
		alert("Привет");
		alert($(ev.target).val());
	});
	$( "#preview" ).click(function() {
		alert( "Handler for .click() called." );
	});
//});
$('#text').bind('input', function(){
	$.ajax({
		url: '/index.php',
		method: 'post',
		dataType: 'html',
		data: {text: $('#text').val()},
		success: function(data){
			$('#result').html(data);
		}
	});
});