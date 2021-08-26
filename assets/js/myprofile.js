$(function () {

    getStudents();
});

function getStudents() {
    var baseurl = document.getElementById('baseurl').value;
    var id = $('#sid').val();
    console.log(id);
//    $("#tblItemSearch > tbody").html("");
    $.ajax({
        type: 'POST',
        url: baseurl + 'viewprofile/get_profile',
        data:{data:id},
        success: function (data) {
            console.log(data);

            setStudent(data);
            // $('#tblstd').DataTable();

        }

    });
}
function setStudent(data) {
    $('#myid').html(data.student_id);
    $('#myname').html(data.name);
    $('#myfaculty').html(data.faculty);
    $('#mybatch').html(data.batch);
    $('#myrole').html('student');
    $('#myaddress').html(data.address+', '+data.address1+', '+data.address2+'. ');
    $('#mymobile').html(data.tel);
    $('#myemail').html(data.email);
    $('#mynic').html(data.nic);


}