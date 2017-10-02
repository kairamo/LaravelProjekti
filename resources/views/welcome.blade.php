<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            p {
                color: #636b6f;
                /*padding: 0 25px;*/
                font-size: 20px;
                font-weight: bold;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 100px;
                margin-top: 300px;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Ravintolat
                </div>

                <form>
                    <div class="form-group" style="margin-bottom: 50px">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Esim. Helsinki">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </form>

                    @foreach ( $ravintolat as $ravintola )
                        
                        <div class="links">
                            <p> {{ $ravintola -> ravintola }} </p>
                            <p> {{ $ravintola -> kaupunki }} </p>
                            
                            <p>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                
                                {{ number_format($ravintola -> tahdetlkm / $ravintola -> tahdet, 1) }} / 5 
                                
                            </p>

                            <a  href=" {{ $ravintola -> url }} "> {{ $ravintola -> url }} </a>
                        </div>
                        <hr>

                    @endforeach
            </div>
        </div>
    </body>
</html>
