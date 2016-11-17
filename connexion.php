<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
?>
<form>
  <div class="form-group col-md-7">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group col-md-7">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default col-md-2">Submit</button>
</form>