<div class="container">
    <h1 class="heading">signup</h1>
<form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom: 15px">
    <label for="username" class="form-label" >UserName</label>
    <input type="text" name="username"class="form-control" id="username" placeholder="enter UserName" >
  </div>
  <div class="col-6 offset-sm-3">
    <label for="email" class="form-label" > User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="enter User Email" >
  </div>
  <div class="col-6 offset-sm-3">
    <label for="password" class="form-label" >User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter User Password" >
  </div>
  <div class="col-6 offset-sm-3">
    <label for="address" class="form-label" >User address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="enter User address" >
  </div >
  <div class="col-6 offset-sm-3">
  <button type="submit" name="signup" class="btn btn-primary">Signup</button>
  </div>
</form>



</div>