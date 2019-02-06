<table class="w3-table-all">
    <thead>
      <tr class="w3-yellow">
        <th>Id</th>
        <th>serial_number/code</th>
        <th>storage</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

     @for($i=0;$i<5;$i++)

    <tr>
      <td id="{{'id' . $i}}">1</td>
      <td id="{{'code'.$i}}">12-34</td>
      <td id="{{'stor' . $i}}">1233 liter</td>
      <td id="{{'view' . $i}}"><a href="#" target="_blank"><button class="w3-button w3-black w3-tiny">View</button></a></td>
      <td id="{{'edit' . $i}}"><a href="#" target="_blank"><button class="w3-button  w3-pink w3-tiny">Edit</button></a></td>
      <td id="{{'delete' . $i}}"><a href="#" target="_blank"><button class="w3-button  w3-red w3-tiny">Delete</button></a></td>

    </tr>
  @endfor
  </table>
  <br>
 <div class="page">
  <a class="btn btn-warning" href="#" role="button">previous</a>
  <a class="btn btn-warning" href="#" role="button">next</a>
 </div>
