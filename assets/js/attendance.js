$(function () {
    $('#ac0').hide();
    $('#ac1').hide();
    $('#ac2').hide();


    $('#StudentId').keypress(function (e) {
        if (e.which == 13) {

            var id =$('#StudentId').val();
            console.log(id);
            submitattendance(id);
            $('#StudentId').val('');
            return false;    //<---- Add this line
        }
    });});


function submitattendance(id) {
    var baseurl = document.getElementById('baseurl').value;

    var date = getdate();
    var time = getTime();
    var data ={};
    data.student_id = id;
    data.date = date;
    data.Time = time;

    $.ajax({
        type: "POST",
        url: baseurl + "attendents/submit_attend",
        data: {data: data},
        dataType: "json",
        success: function (data) {
            console.log(data.name);
            $('#sname').append(data.name);
            $('#sname1').append(data.name);
            console.log(data.attend);
            if(data.attend=='already'){
                console.log('1');
                $('#ac1').show();


            }
            else if(data.id=='not'){
                $('#ac2').show();

            }
            else if(data.attend==true){
                $('#ac0').show();

            }else {
                alertify.error('Insert Failed....! Try Again')
                console.log('4');
            }
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });


}

function getdate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    // today = mm + '/' + dd + '/' + yyyy;
    today = yyyy + '-' + mm + '-' + dd;
    return today;
}

function getTime() {

    var d       = new Date();
    var hour    = d.getHours();  /* Returns the hour (from 0-23) */
    var minutes     = d.getMinutes();  /* Returns the minutes (from 0-59) */
    var result  = hour;
    var ext     = '';

        if(hour > 12){
            ext = 'PM';
            hour = (hour - 12);

            if(hour < 10){
                result = "0" + hour;
            }else if(hour == 12){
                hour = "00";
                ext = 'AM';
            }
        }
        else if(hour < 12){
            result = ((hour < 10) ? "0" + hour : hour);
            ext = 'AM';
        }else if(hour == 12){
            ext = 'PM';
        }

    if(minutes < 10){
        minutes = "0" + minutes;
    }

    result = hour + ":" + minutes + ' ' + ext;

    return result;
}
