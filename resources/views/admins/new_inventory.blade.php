<div id="newinv">
<form  action="" method="post">
         @csrf
  <div class="form-group">
    <input type="text" name='serial_code'class="form-control" placeholder="Enter inventory serial number">
  </div>

    <div class="form-group">
    <input type="text" name='storage' class="form-control" placeholder="Enter inventory storage ">
  </div>

    <div class="form-group">
    <input type="text"  name='country' class="form-control" placeholder="Enter phone">
  </div>
  <h4><strong>inventory address </strong></h4>

    <div class="form-group">
    <input type="text" name='city' class="form-control" placeholder="Enter Country">
  </div>
     <div class="form-group">
    <input type="text" name='street' class="form-control" placeholder="Enter city">
  </div>
     <div class="form-group">
    <input type="text" name='rep_password' class="form-control" placeholder="Enter street">
  </div>

<button  id='invbtn' type="submit" class="w3-button w3-pink">New Inventory</button></form>
</div>
