$(document).ready(function(){
	$("#submit").click(function(){

    var formData = {
        'name'              : $('input[name=name]').val(),
        'email'             : $('input[name=email]').val(),
        'content'             : $('textarea[name=content]').val(),
        'star'                : $('input[name=star]:checked').val()

    };

		$.ajax({
		type: "POST",
		url: "forum.php",
		data: formData,
		success: function(result){
			$("#forum_form").load("demo_test.txt");
	}
});
});
});
