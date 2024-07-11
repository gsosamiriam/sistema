$(document).ready(function () {
    
    $('#sidebarCollapse').on('click', function () {
        console.log('clci');
        $('#sidebar').toggleClass('active');
        $('#divMenu').toggleClass('active');
    });
});