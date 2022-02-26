<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="form.css">
  <title></title>
</head>
<body>
<div class="body-content">     
<form  method="POST" action="account.php">
  <div class="module"><h1>Create an account</h1>
    
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="Username" required />
      <input type="email" placeholder="Email" name="Email" required />
      <input type="text" placeholder="Religion" name="Religion" required />
      <input type="number" placeholder="Age" name="Age" required />
      <input type="text" placeholder="Education" name="Education" required />
      <input type="text" placeholder="Qualification" name="Qualification" required />
      <input type="text" placeholder="Family Member" name="Familymember" required />
      <input type="text" placeholder="Present Address" name="Presentaddress" required />
      <input type="text" placeholder="Permanent Address" name="Permanentaddress" required />
      <input type="password" placeholder="Password" name="Password" autocomplete="Newpassword" required />
      <input type="password" placeholder="Confirm Password" name="Confirmpassword" autocomplete="Newpassword" required/>
      <div class="image"><label>Select your image: </label><input type="file" name="Image" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      </div>
   </form>
</div>
</body>
</html>