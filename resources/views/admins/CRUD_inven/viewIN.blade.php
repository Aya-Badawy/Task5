<!DOCTYPE html>
<html>
<title>view</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
​
<div class="w3-container">
  <h2> Show Inventory : Inforamtion </h2>
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
      <td>{{$inv->id}}</td>

    </tr>
    <tr class="w3-hover-blue">
      <th>serial number/code</th>
      <td>{{$inv->serial_code}}</td>
    <tr class="w3-hover-black">
      <th>storage/unites</th>
      <td>{{$inv->storage}}</td>
    </tr>
    <tr class="w3-hover-orange">
      <th>country</th>
      <td>{{$inv->country}}</td>
    </tr>

    <tr class="w3-hover-pink">
      <th>city</th>
      <td>{{$inv->city}}</td>

      <tr class="w3-hover-yellow">
        <th>street</th>
        <td>{{$inv->street}}</td>
      </tr>

      <tr class="w3-hover-yellow">
        <th> inventory Manger Id</th>
        <td>{{$inv->user_id}}</td>
      </tr>



  </table>
</div>
​
</body>
</html>
​
