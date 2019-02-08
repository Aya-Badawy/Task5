<!DOCTYPE html>
<html>
<head>
<title>delete</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
   a{
     text-decoration: none;
     color: yellow;
   }
   body{
     background-color:blue;
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
  <a  href="../ad_dashboard"><button class="w3-btn w3-block w3-yellow">back To Dashboard</button>
</a>
    </div>
</body>
</html>
