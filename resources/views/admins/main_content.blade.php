<section class="content   container-fluid">

    @include('rates')

<h4 id='showManger'><strong>  # Show Mangers</strong></h4>
  <div>
  @include('show_Mangers')
</div>
<hr class="line">

<!--  show inventories -->
<h4 id='showInventory'>  <strong># Show Inventories</strong></h4>
<div>
@include('show_inventory')
   </div>
   <hr class="line">
  <!--  add new admin or manger -->
    <h4 id='newuser1'>  <strong># New User\Admin</strong></h4>
  <div>
@include('newuser')
</div>
<hr class="line">
<!-- add new inventory -->
<h4 id='newinvt1'>  <strong># New Inventory</strong></h4>
<div>
  @include('new_inventory')
</div>
<hr class="line">
<!-- assigen manger to inventory -->
<h4 id='assigen'>  <strong># Assigen Manger </strong></h4>
<div >
@include('assigen_Manger')
</div>

</section>
<!-- /.content -->
