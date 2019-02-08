<!DOCTYPE html>
<html>
<title>edit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue">
  <h2>Edit Inventory</h2>
</div>

<form class="w3-container" method='post' action="../update_in/{{$inv->id}}">
   @csrf
  <label>serial Number/code</label>
  <input class="w3-input" name="serial_code" type="text" value="{{$inv->serial_code}}"></p>
  <p>
  <label>storage /unites</label>
  <input class="w3-input" name="storage" type="text" value="{{$inv->storage}}"></p>

  <p>
  <label>country</label>
  <input class="w3-input" name="country" type="text" value="{{$inv->country}}"></p>

  <p>
    <p>
    <label>city</label>
    <input class="w3-input" name="city" type="text" value="{{$inv->city}}"></p>
    <p>
      <p>
      <label>street</label>
      <input class="w3-input" name="street" type="text" value="{{$inv->street}}"></p>
      <p>

  <button   type="submit" class="w3-button w3-blue">Edit Inventory</button></form>

</form>

</body>
</html>
