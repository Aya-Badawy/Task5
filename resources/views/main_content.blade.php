<section class="content   container-fluid">
  @include('admins.rates')

<h4 id='showManger'><strong>  # Show Mangers</strong></h4>
  <div>
  @include('admins.show_Mangers')
</div>
<hr class="line">

<!--  show inventories -->
<h4 id='showInventory'>  <strong># Show Inventories</strong></h4>
<div>
@include('admins.show_inventory')
   </div>
   <hr class="line">
  <!--  add new admin or manger -->
    <h4 id='newuser1'>  <strong># New User\Admin</strong></h4>
  <div>
@include('admins.newuser')
</div>
<hr class="line">
<!-- add new inventory -->
<h4 id='newinvt1'>  <strong># New Inventory</strong></h4>
<div>
  @include('admins.new_inventory')
</div>
<hr class="line">
<!-- assigen manger to inventory -->
<h4 id='assigen'>  <strong># Assigen Manger </strong></h4>
<div >
@include('admins.assigen_Manger')
</div>

</section>
<!-- /.content -->
