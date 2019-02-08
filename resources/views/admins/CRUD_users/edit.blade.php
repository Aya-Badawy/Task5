<!DOCTYPE html>
<html>
<title>edit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue">
  <h2>Edit User : {{$user->name}}</h2>
</div>

<form class="w3-container" method='post' action="../update/{{$user->id}}">
   @csrf
  <label>Name</label>
  <input class="w3-input" name="name" type="text" value="{{$user->name}}"></p>
  <p>
  <label>Email</label>
  <input class="w3-input" name="email" type="email" value="{{$user->email}}"></p>

  <p>
  <label>Phone</label>
  <input class="w3-input" name="phone" type="text" value="{{$user->phone}}"></p>

  <p>
  <label>Address</label>
  <input class="w3-input" name="address" type="text" value="{{$user->address}}"></p>
  <strong>note:if you not want to change the role Just select it again </strong>
  <h4><strong>role :(current : {{$user->role_id == "10" ? "admin" :"manger"}})</strong></h4>
  <p>
  <input class="w3-radio" type="radio" name="role" value="20" >
  <label>Inventory Manger</label></p>
  <p>
  <input class="w3-radio" type="radio" name="role" value="10">
  <label>Admin</label></p>
  <button   type="submit" class="w3-button w3-blue">Edit User</button></form>

</form>

</body>
</html>
