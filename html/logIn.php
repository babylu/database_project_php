
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LOG IN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/logIn.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<!--        <div class="navbar-top navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sales System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"></a></li>
                </div>
            </div>
        </div>-->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div id="login_block" class="col-sm-4 col-sm-offset-4"  style="background-color: #ffffff;opacity:0.9;">  
                        <h3 align="center" style='margin-bottom: 20px; padding-bottom: 5px;border-bottom: dotted 1px gray;'>LogIn/Register</h3>
                        <form action = "http://localhost:8888/database_project_php/php/check2.php" method ="post" class="form-horizontal"  role="form">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group" style='margin-left: 10px;'>
                                <label class="col-sm-4 col-sm-offset-2 radio-inline" >
                                    <input type="radio" value="Customer" name="type" id="customer"> Customer
                                </label>
                                
                                <label class="col-sm-4 radio-inline">
                                    <input type="radio" value="Admin" name="type" id="admin"> Admin
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-primary btn-block" type="button" onclick="window.location.href='register.html'">Register</button>
                                </div>
                                

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
