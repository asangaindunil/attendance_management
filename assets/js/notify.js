
var socket = io('localhost:4000');
var total =0;
$(document).ready(function(){
    loginMe();

});


function loginMe() {
    var person =2;
    socket.emit('connect',{});
}

socket.on('broadcast', function(data){
   console.log(data);
    alertify.success('Attendance Marked Successfully');

});

