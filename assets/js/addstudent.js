/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	getStudents();
	var addUserForm = $("#addUser");
	
	var validator = addUserForm.validate({
		
		rules:{
			fname :{ required : true },
			email : { required : true, email : true, remote : { url : baseURL + "checkEmailExists", type :"post"} },
			password : { required : true },
			cpassword : {required : true, equalTo: "#password"},
			mobile : { required : true, digits : true },
			role : { required : true, selected : true}
		},
		messages:{
			fname :{ required : "This field is required" },
			email : { required : "This field is required", email : "Please enter valid email address", remote : "Email already taken" },
			password : { required : "This field is required" },
			cpassword : {required : "This field is required", equalTo: "Please enter same password" },
			mobile : { required : "This field is required", digits : "Please enter numbers only" },
			role : { required : "This field is required", selected : "Please select atleast one option" }			
		}
	});
});
function getFormData() {
	var studentid = $('#StudentId').val();
	var action = $('#action').val();


	var student = {};
	if ($("#status").is(":checked")){
		student.status=1;
		console.log('ac');

	} else {
		student.status=0;
		console.log('dc');
	}
	student.id = $('#StudentId').val();
	student.name = $('#StudentName').val();
	student.nic = $('#StudentNIC').val();
	student.address = $('#address1').val();
	student.address1 = $('#address2').val();
	student.address2 = $('#address3').val();
	student.faculty = $('#faculty').val();
	student.batch = $('#batch').val();
	student.tel = $('#telephone').val();
	student.email = $('#email').val();
	var data = {};
	data.id =studentid;
	data.student = student;
	data.action =action;

	data = JSON.stringify(data);
	return data;
}



function submitStudent() {

	$("#btnSave").prop("disabled", true);
	var baseurl = document.getElementById('baseurl').value;
	console.log(baseurl);
	var data = getFormData();

	$.ajax({
		type: "POST",
		url: baseurl + "newstudent/set_student",
		data: {data: data},
		success: function (data) {
			console.log(data);
			console.log(data.student);
			console.log(data.action);
			if (data.student) {
				if (data.action === 'insert') {
				alertify.success('New Student ' + data.id + ' Inserted!');
				} else if (data.action === 'update') {
					alertify.success('New Student ' + data.id +  ' Updated');
				}
				resetform();
				$("#action").val('insert');
			} else {
				if (data.action === 'insert') {
				alertify.error('Insert Failed! Please Check Student ID is Correct');
				} else if (data.action === 'update') {
					alertify.error('No Changes to Update');
				}
			}
			$("#btnSave").prop("disabled", false);
		}
	});
	// }

}
	function getStudents() {
			var baseurl = $('#baseurl').val();
			var url = $(location).attr('href');
			var parts = url.split("/");
			var id = parts[parts.length-1];
			if(id!='newstudent') {
				console.log(id);
				var userId = $('#editUserId').val();

				$.ajax({
					type: "POST",
					url: baseurl + "newstudent/get_student",
					data: {id: id},
					success: function (data) {
						console.log(data);
						setStudents(data);
					}
				});
			}

	}
	function setStudents(user) {

		if(user.status==1){
			$('#status').attr('checked', 'checked');
			console.log('ok');

		}else{
			$('#status').removeAttr('checked');
			console.log('fuck');
		}
		$('#StudentId').prop('readonly', true);
		$('#StudentId').val(user.id);
		$('#StudentName').val(user.name);
		$('#StudentNIC').val(user.nic);
		$('#address1').val(user.address);
		$('#address2').val(user.address1);
		$('#address3').val(user.address2);
		$('#faculty').val(user.faculty);
		$('#batch').val(user.batch);
		$('#telephone').val(user.tel);
		$('#email').val(user.email);
		$('#action').val('update');



	}
	function resetform() {
	console.log('okk');
		$('#formStudent').trigger('reset');
	}