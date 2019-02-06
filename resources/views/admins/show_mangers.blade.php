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

     @for($i=0;$i<5;$i++)

    <tr>
      <td id="{{'id' . $i}}">1</td>
      <td id="{{'name'.$i}}">mohamed ahmed</td>
      <td id="{{'role' . $i}}">admin</td>
      <td id="{{'view' . $i}}"><a href="#" target="_blank"><button class="w3-button w3-blue w3-tiny">View</button></a></td>
      <td id="{{'edit' . $i}}"><a href="#" target="_blank"><button class="w3-button  w3-orange w3-tiny">Edit</button></a></td>
      <td id="{{'delete' . $i}}"><a href="#" target="_blank"><button class="w3-button  w3-red w3-tiny">Delete</button></a></td>

    </tr>
  @endfor
  </table>
  <br>
 <div class="page">
  <a class="btn btn-success" href="#" role="button">previous</a>
  <a class="btn btn-success" href="#" role="button">next</a>
 </div>
