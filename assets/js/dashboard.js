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
	getDetails();

});



function getDetails() {
	var baseurl = $('#baseurl').val();

	$.ajax({
		type: "POST",
		url: baseurl + "dashboard/get_details",
		success: function (data) {
			console.log(data);
			console.log(data.totstudents.totstd);
			$('#totatdcount').html(data.totattends.totAttend);
			$('#totstd').html(data.totstudents.totstd);
			$('#totusers').html(data.totusers.totusers)
			var hi = parseFloat(data.totattends.totAttend)/parseFloat(data.totstudents.totstd)*100;
			console.log(hi);
			$('#totatd').html(hi+'%');
			// setStudents(data);
		}
	});


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