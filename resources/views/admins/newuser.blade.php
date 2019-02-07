<div id="newuser">
<form  action="new" method="post">
         @csrf
  <div class="form-group">
    <input type="text" name='name'class="form-control" placeholder="Enter Name" required>
  </div>

    <div class="form-group">
    <input type="email" name='email' class="form-control" placeholder="Enter Email" required>
  </div>

    <div class="form-group">
    <input type="text"  name='phone' class="form-control" placeholder="Enter phone" required>
  </div>
    <div class="form-group">
    <input type="address" name='address' class="form-control" placeholder="Enter address" required>
  </div>
     <div class="form-group">
    <input type="password" name='password' class="form-control" placeholder="Enter password" required>
  </div>
     <div class="form-group">
    <input type="password" name='password1' class="form-control" placeholder="confirm password" required>
  </div>

  <h4><strong>role</strong></h4>
 <p>
 <input class="w3-radio" type="radio" name="role" value="20" >
 <label>Inventory Manger</label></p>
 <p>
 <input class="w3-radio" type="radio" name="role" value="10">
 <label>Admin</label></p>



<button  id='userbtn' type="submit" class="w3-button w3-orange">New User</button></form>
</div>
