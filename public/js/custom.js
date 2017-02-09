$(document).ready(function() {
	var base_url = 'http://localhost/crud_app/';
	// Validaion on student id
	$("#add_student_form").submit(function(e) {
		e.preventDefault();
		var self = this; 
		var url = base_url + 'studentController/check_student_form';
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

	// Removing single student ajax call
	$('.del').on('click', function() { 
		$(this).parent().parent().remove();
		var student_id = $(this).attr('id');
		$.post(base_url + 'studentController/delete_single_student', {'student_id': student_id}, function(o) {
		}, 'json');
		return false;
	});

	// Validaion on teacher id
	$("#add_teacher_form").submit(function(e) {
		e.preventDefault();
		var self = this; 
		var url = base_url + 'teacherController/check_teacher_form';
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
				$("#span_teacher_id").text("Teacher ID already exist");
			}
		}).fail(function() {
		alert('error');
		});
	});

	// Removing single teacher ajax call
	$('.del').on('click', function() { 
		$(this).parent().parent().remove();
		var student_id = $(this).attr('id');
		$.post(base_url + 'teacherController/delete_single_teacher', {'teacher_id': student_id}, function(o) {
		}, 'json');
		return false;
	});

	// Validaion on course id
	$("#add_course_form").submit(function(e) {
		e.preventDefault();
		var self = this; 
		var url = base_url + 'courseController/check_course_form';
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
				$("#span_course_id").text("Course ID already exist");
			}
		}).fail(function() {
		alert('error');
		});
	});

	// Removing single course ajax call
	$('.del').on('click', function() { 
		$(this).parent().parent().remove();
		var student_id = $(this).attr('id');
		$.post(base_url + 'courseController/delete_single_course', {'course_id': student_id}, function(o) {
		}, 'json');
		return false;
	});

});



