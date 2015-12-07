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
        $.ajax({
            cache: false,
            async: false,
            type: 'POST',
            data:{'require':'destorySession'},
            contentType: 'application/x-www-form-urlncoded; charset=utf-8',
            url: 'http://localhost:8888/database_project_php/php/logout.php',
            error:function(){
                alert('error!!!');
            },
            success:function(){
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
            }
        });
    });
});


