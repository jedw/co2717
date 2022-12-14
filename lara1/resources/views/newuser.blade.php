<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
        $( document ).ready(function() {
            $("#username").keyup(function(){
                var username = $("#username").val();
                var dataString = 'uname=' + username;
                 $.ajax({ 
                    type: "GET", 
                    url: "../availabilitycheck", 
                    data: dataString, 
                    success: function(data) {
                        if (data.availability === false){
                            console.log("not available")
                            $("#message").html("username is unavailable, please choose another"); 
                            $("#username").prop("class","form-control is-invalid");
                            $("#submit").prop('disabled',true); 
                        }
                        else if (data.availability === true){
                            console.log("available")
                            $("#message").html("username is available, please proceed"); 
                            $("#username").prop("class","form-control is-valid");
                            $("#submit").prop('disabled',false); 
                        }
                    }, 
                    dataType: "json" 
                });
             })
        })
          
          
                
          
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Users
                    
                </div>

                <div class="links">
                <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/users">Users</a>
                    <a href="/users/new">New User</a>
                    <a href="/search">Searchbar</a>
                    <a href="/live">Livelist</a>
                </div>
                <div>
                    <br><br>
                    {!!Form::open(array('url'=>'users/addnew','method'=>'post'))!!}
                        <input id="username" type="text" name="username" placeholder="username"><br>
                        <span id="message"></span>
                        <input type="text" name="email" placeholder="email"><br>
                        <input type="text" name="password" placeholder="password"><br>
                        <input type="submit" value="register">
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </body>
</html>
