<div class="container">
    <h1 class="heading">login</h1>
<form action="./server/requests.php" method="post">
  
  <div class="col-6 offset-sm-3">
    <label for="email" class="form-label" > User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="enter User Email" >
  </div>
  <div class="col-6 offset-sm-3">
    <label for="password" class="form-label" >User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter User Password" >
  </div>
 
  <div class="col-6 offset-sm-3">
  <button type="submit" name="login" class="btn btn-primary">login</button>
  </div>
</form>



</div>