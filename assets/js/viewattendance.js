$(function () {

    getStudents();
});

function getStudents() {
    var baseurl = document.getElementById('baseurl').value;
//    $("#tblItemSearch > tbody").html("");
    $.ajax({
        type: 'POST',
        url: baseurl + 'viewAttendents/get_attend',
        success: function (data) {
            console.log(data);

            setStudents(data);
            $('#tblStudent').DataTable();

        }

    });
}
function setStudents(data) {
    // if ($.fn.DataTable.isDataTable('#tblStudent')) {
    //     $('#tblStudent').DataTable().destroy();
    // }
    $('#tblStudent tbody').empty();
    var textToInsert = '';
    for (var item in data) {
        textToInsert += addRowToSearchStudent(data[item]);
    }
    $('#tblStudent > tbody:last-child').append(textToInsert);
    $('#tblStudent').dataTable({
        order: [[0, "asc"]],
        select: true

    });
}
function Adsearch() {

    var baseurl = document.getElementById('baseurl').value;
    var data = $('#faculty').val();
    var batch = $('#srhbatch').val();
    var date = $('#srhdate').val();
    console.log(data);
    $.ajax({
        type: 'POST',
        url: baseurl + 'Attendents/ad_get_attends',
        data: {data: data, batch:batch,date:date},
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
        + '<td>' + item.date + '</td>'
        + '<td>' + item.Time + '</td>'

        + '</tr>';
    return row;
}
function tConvert (time) {
    // Check correct time format and split into components
    time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

    if (time.length > 1) { // If time format correct
        time = time.slice (1);  // Remove full string match value
        time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
        time[0] = +time[0] % 12 || 12; // Adjust hours
    }
    return time.join (''); // return adjusted time or original string
}