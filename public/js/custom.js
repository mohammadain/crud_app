$(document).ready(function() {
	// Validaion on student id
	$("#add_student_form").submit(function(e) {
		e.preventDefault();
		var self = this; 
		var url = 'http://localhost/crud_app/studentController/check_student_form';
		var data = $(this).serialize();
		$.ajax({
			type: "POST",
			url: url,
			data: data,
			cache: false
		}).done(function(result) {
			if (result != 1) {
				self.submit();
			}
			else {
				$("#span_student_id").text("Student ID already exist");
			}
		}).fail(function() {
		alert('error');
		});
	});
});



