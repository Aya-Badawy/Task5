<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>messages</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Styles -->
        <style>
          body{
            background-image: url('img/not.jpg');

          }
          a{
          text-decoration:none;
          }
        </style>

    </head>
    <body>
      @if(isset($err))
        <div class="w3-container">
        <div class="w3-panel w3-red w3-leftbar w3-border-black">
        @for ($i=0; $i < count($err); $i++)
          {{  $err[$i]}}
          <br>
        @endfor
    </div> </div>

      @endif
      @if(isset($msg))
        <div class="w3-panel w3-red">

      <div class="w3-container>
     <div class="w3-panel w3-green w3-leftbar w3-border-blue">
      {{ $msg}}
  </div>
 </div>
      @endif
      <a  href="ad_dashboard"><button class="w3-btn w3-block w3-orange">back To Dashboard</button>
</a>
        </div>
    </body>
</html>
