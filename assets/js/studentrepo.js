function generateReport() {
    var baseurl = document.getElementById('baseurl').value;
    var url = '';
    var faculty = $('#faculty').val();
    var batch = $('#batch').val();

    console.log(faculty);
    url = baseurl + 'report/studentreport?fac=' + faculty + '&batch=' + batch;
    window.open(url, '_blank');


}