var evdate={};
$(function () {

    getStudent();


    // datepicker

});

function getStudent() {
    var baseurl = document.getElementById('baseurl').value;
    var id = $('#sid').val();
    $.ajax({
        type: 'POST',
        url: baseurl + 'Myattendents/get_attend',
        data:{data:id},
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
        var date = new Date(data[item].date);
        var newday = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
        console.log(newday);
        evdate[new Date(newday)]=new Date(newday).toString();
    }
    $('#tblStudent > tbody:last-child').append(textToInsert);
    $('#tblStudent').dataTable({
        order: [[0, "asc"]],
        select: true

    });
    callender();
}
function addRowToSearchStudent(item) {
    var baseurl = document.getElementById('baseurl').value;
//    console.log(item.ItemCode);
    var row =
        '<tr id="' + item.id + '" class="openPane">'
        + '<td>' + item.date + '</td>'
        + '<td>' + item.Time + '</td>'

        + '</tr>';
    return row;
}
function callender() {
    console.log(evdate)
    jQuery('#calendar').datepicker({
        beforeShowDay: function (date) {
            var highlight = evdate[date];
            if (highlight) {
                return [true, "event", highlight];
            } else {
                return [true, '', ''];
            }
        }
    });
}