$(function () {

    getStudents();
});

function getStudents() {
    var baseurl = document.getElementById('baseurl').value;
//    $("#tblItemSearch > tbody").html("");
    $.ajax({
        type: 'POST',
        url: baseurl + 'searchstudent/get_students',
        success: function (data) {
            console.log(data);

            setStudents(data);
            $('#tblstd').DataTable();

        }

    });
}
function setStudents(students) {
    // if ($.fn.DataTable.isDataTable('#tblstd')) {
    //     $('#tblstd').DataTable().destroy();
    // }
    $('#tblstd tbody').empty();
    var textToInsert = '';
    for (var item in students) {
        textToInsert += addRowToSearchStudent(students[item]);
    }
    $('#tblstd > tbody:last-child').append(textToInsert);

}
function Adsearch() {

    var baseurl = document.getElementById('baseurl').value;
    var data = $('#faculty').val();
    var batch = $('#srhbatch').val();
    console.log(data);
    $.ajax({
        type: 'POST',
        url: baseurl + 'searchstudent/ad_get_students',
        data: {data: data, batch:batch},
        success: function (data) {
            console.log(data);

            setStudents(data);
            $('#tblstd').DataTable();

        }
    })
}
function addRowToSearchStudent(item) {
    var baseurl = document.getElementById('baseurl').value;
//    console.log(item.ItemCode);
    var row =
        '<tr id="' + item.id + '" class="openPane">'
        + '<td>' + item.id + '</td>'
        + '<td>' + item.name + '</td>'
        + '<td>' + item.faculty + '</td>'
        + '<td>' + item.batch + '</td>'
        + '<td>' + item.tel + '</td>'
        + '<td>' + item.nic + '</td>'
        + '<td><a href="' + baseurl + 'Newstudent/index/' + item.id + '"><button type="button" class="btn btn-info btn-xs">Edit</button></a></td>'
        + '</tr>';
    return row;
}