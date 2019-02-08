<table class="w3-table-all">
    <thead>
      <tr class="w3-green">
        <th>Id</th>
        <th>Name</th>
        <th>Role</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

  <?php

  $users=$count['users'];
    for($i=0; $i <count($users) ; $i++){
  ?>
    <tr>
      <td id="{{'id' . $i}}">{{$users[$i]->id}}</td>
      <td id="{{'name'.$i}}">{{$users[$i]->name}}</td>
      <td id="{{'role' . $i}}">{{ $users[$i]->role_id == "10" ? "admin" :"manger"}}</td>
      <td id="{{'view' . $i}}"><a href="view/{{$users[$i]->id}}" target="_blank"><button class="w3-button w3-blue w3-tiny">View</button></a></td>
      <td id="{{'edit' . $i}}"><a href="edit/{{$users[$i]->id}}" target="_blank"><button class="w3-button  w3-orange w3-tiny">Edit</button></a></td>
      <td id="{{'delete' . $i}}"><a href="delete/{{$users[$i]->id}}" target="_blank"><button class="w3-button  w3-red w3-tiny">Delete</button></a></td>

    </tr>
     @php
   }
     @endphp
  </table>
  <br>
 <div class="page">
  <a class="btn btn-success" href="#" role="button">previous</a>
  <a class="btn btn-success" href="#" role="button">next</a>
 </div>
