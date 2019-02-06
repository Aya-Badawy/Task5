<div id="newuser">
<form  action="" method="post">
         @csrf
  <div class="form-group">
    <input type="text" name='name'class="form-control" placeholder="Enter Name">
  </div>

    <div class="form-group">
    <input type="email" name='email' class="form-control" placeholder="Enter Email">
  </div>

    <div class="form-group">
    <input type="text"  name='phone' class="form-control" placeholder="Enter phone">
  </div>
    <div class="form-group">
    <input type="address" name='address' class="form-control" placeholder="Enter address">
  </div>
     <div class="form-group">
    <input type="password" name='password' class="form-control" placeholder="Enter password">
  </div>
     <div class="form-group">
    <input type="password" name='rep_password' class="form-control" placeholder="confirm password">
  </div>

  <h4><strong>role</strong></h4>
 <p>
 <input class="w3-radio" type="radio" name="role" value="0" checked>
 <label>Inventory Manger</label></p>
 <p>
 <input class="w3-radio" type="radio" name="role" value="female">
 <label>Admin</label></p>



<button  id='userbtn' type="submit" class="w3-button w3-orange">New User</button></form>
</div>
