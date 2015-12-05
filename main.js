$(function(){
    $('#username').click(function(){
        var username = $(this).html();
        if(username === "Login/Register"){
            window.location.href = "http://localhost:8888/database_project_php/html/login.html";
        }else{
            window.location.href = "http://localhost:8888/database_project_php/html/personalPage.html";
        }
    });
});


