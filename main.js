$(function(){
    var username = $('#username').html();
    if(username !== 'Login/Register'){
        var now = $('#link').html();
        now = now+'<div id="logout">logout</div>';
        $('#link').html(now);
            
    }
    $('#username').click(function(){
        if(username === 'Login/Register'){
            window.location.href = 'http://localhost:8888/database_project_php/html/login.php';
        }else{
            window.location.href = 'http://localhost:8888/database_project_php/html/personalPage.php';
            var now = $('#link').html();
            now = now+'<div id="logout">logout</div>';
            $('#link').html(now);
        }
    });
    $('#logout').click(function(){
        $.post("http://localhost:8888/database_project_php/php/logout.php",function(){
            alert('log out success!');
            $('#link').html('<div id="username" class="username">Login/Register</div>');
            $('#username').click(function(){
                if($(this).html() === 'Login/Register'){
                    window.location.href = 'http://localhost:8888/database_project_php/html/login.php';
                }else{
                    window.location.href = 'http://localhost:8888/database_project_php/html/personalPage.php';
                    var now = $('#link').html();
                    now = now+'<div id="logout">logout</div>';
                    $('#link').html(now);
                }
            });

        });
    });
});


