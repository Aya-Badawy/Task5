<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
​
<div class="w3-container">
  <h2> Show User : {{$user->name}} Inforamtion </h2>
​
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th> # </th>
        <th>Values</th>

      </tr>
    </thead>
    <tr class="w3-hover-green">
      <th>id</th>
      <td>{{$user->id}}</td>

    </tr>
    <tr class="w3-hover-blue">
      <th>Name</th>
      <td>{{$user->name}}</td>
    <tr class="w3-hover-black">
      <th>Email</th>
      <td>{{$user->email}}</td>
    </tr>
    <tr class="w3-hover-orange">
      <th>Phone</th>
      <td>{{$user->phone}}</td>
    </tr>

    <tr class="w3-hover-pink">
      <th>Address</th>
      <td>{{$user->address}}</td>

      <tr class="w3-hover-yellow">
        <th>Role</th>
        <td>{{ $user->role_id == "10" ? "admin" :"manger"}}</td>
      </tr>



  </table>
</div>
​
</body>
</html>
​
