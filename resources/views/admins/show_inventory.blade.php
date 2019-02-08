<table class="w3-table-all">
    <thead>
      <tr class="w3-yellow">
        <th>Id</th>
        <th>serial number/code</th>
        <th>storage(mes:unites)</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <?php

      $invens=$count['inven'];
      for($i=0; $i <count($invens) ; $i++){
    ?>

    <tr>
      <td id="{{'id' . $i}}">{{$invens[$i]->id}}</td>
      <td id="{{'code'.$i}}">{{$invens[$i]->serial_code}}</td>
      <td id="{{'stor' . $i}}">{{$invens[$i]->storage}}</td>
      <td id="{{'view' . $i}}"><a href="view_in/{{$invens[$i]->id}}" target="_blank"><button class="w3-button w3-black w3-tiny">View</button></a></td>
      <td id="{{'edit' . $i}}"><a href="edit_in/{{$invens[$i]->id}}" target="_blank"><button class="w3-button  w3-pink w3-tiny">Edit</button></a></td>
      <td id="{{'delete' . $i}}"><a href="delete_in/{{$invens[$i]->id}}" target="_blank"><button class="w3-button  w3-red w3-tiny">Delete</button></a></td>

    </tr>
    @php
      }
    @endphp
  </table>
  <br>
 <div class="page">
  <a class="btn btn-warning" href="#" role="button">previous</a>
  <a class="btn btn-warning" href="#" role="button">next</a>
 </div>
