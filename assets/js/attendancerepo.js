function generateReport() {
    var baseurl = document.getElementById('baseurl').value;
    var url = '';
    var faculty = $('#faculty').val();
    var batch = $('#batch').val();
    var start =$('#stdate').val();
    var end = $('#enddate').val();

    console.log(faculty);
    url = baseurl + 'report/attendencereport?fac=' + faculty + '&batch=' + batch+ '&start=' + start+ '&end=' + end;
    window.open(url, '_blank');


}