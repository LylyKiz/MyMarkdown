<h1>Упрощенный Markdown-редактор</h1>
<div>
	Вся строка, которая начинается с символа #  является заголовком.<br>
	Текст помещенный между ** становится жирным.<br>
	Текст помещенный между * становится курсивным.<br>
</div>
<div id="content">
	<!--<div id="editor" contenteditable="true">hfhf</div>-->
	<div id="editordiv"><textarea id="editor" placeholder="Поле для ввода текста"></textarea></div>
	<div id="preview"></div>
</div>
<?php
$js=<<<JS
//$(document).on("input keypress paste change", '#editor', function (ev) {
$(document).on("input", '#editor', function (ev) {
    $.ajax({
        url: 'index.php?r=post/index', 
        method: 'post',
        dataType: 'html',
        data: {text: $('#editor').val()},
        success: function(data){
            $('#preview').html(data);
        },
        error: function () {
          alert('ERROR!')
        }
    });
});
/*$(document).on("input keypress paste change", '#editor', function (ev) {
	//alert($('#editor').text());
		//alert($(ev.target).val());
		console.log($(ev.target).text());
	});
$( "#preview" ).click(function() {
		//alert( "Handler for .click() called." );
		 $.ajax({
        url: 'index.php?r=post/index', 
        method: 'GET',
        dataType: 'html',
        data: {text: $('#editor').val()},
        success: function(data){
            $('#preview').html(data);
        },
        error: function () {
          alert('ERROR!')
        }
    });
	});*/

/*$("#editor").keydown(function(e) {
    if(e.which == 13) {
       $(this).find("div").prepend('<br />').contents().unwrap();
      }
});*/
JS;

$this->registerJs($js);