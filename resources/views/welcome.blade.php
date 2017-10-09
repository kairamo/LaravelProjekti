

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
                /*height: 100vh;*/
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
                margin-bottom: 20%;
                margin-top: 10%;

            }

            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 3px;
                font-weight: bold;
                /*font-family: 'Raleway', sans-serif;*/

            }
            .button5 {background-color: #555555;} /* Black */

        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">


            <div class="content">

                <div class="title m-b-md">
                    Ravintolat
                </div>

            <form method="POST" action="/posts" 
                style="margin-top: 10px; padding: 20px; border: solid #D3D3D3 1px; border-radius: 5px; box-shadow: 5px 5px 5px #d1d1d1;">
              
              {{ csrf_field() }}

              <div class="form-group">
                <label for="formGroupExampleInput" style="">Ravintola</label>
                <input type="text" class="form-control" id="ravintola" name="ravintola">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Kaupunki</label>
                <input type="text" class="form-control" id="kaupunki" name="kaupunki">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Katuosoite</label>
                <input type="text" class="form-control" id="osoite" name="osoite">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Kotisivut</label>
                <input type="text" class="form-control" id="url" name="url">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Arvostele (1-5)</label>
                <input type="text" class="form-control" id="tahdet" name="tahdet">
              </div>
                <button class="button button5">Lähetä</button>
            </form>
                <script>

                </script>

            <hr>
                <form method="GET" action="/haku">

                    <div class="form-group" style=""  >
                        <input type="text" class="form-control" id="kaupunki" name="kaupunki" placeholder="Esim. Helsinki">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <button class="button button5" >Hae</button>

                    </div>
                </form>
            </hr>


                <div id="results">
                    @yield ('content')




                </div>




            </div>
        </div>
    </body>

<script>

</script>
</html>
