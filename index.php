<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Testing QA Web UI</title>
</head>
<body>
<center><h1> Testing Qa Automation Form </h1></center>
<br><br><br><br>
  <?php
    $email= $_POST['email'];
    $name= $_POST['user'];
    $password = $_POST['password'];  
    $uploadedFile = $_FILES['uploadedFile']['error'];
    if(isset($_POST['submit'])) {
      // Check if name has been entered
      if(empty($_POST['user'])) {
        $errName= 'Please enter your user name';
      }
      if(empty($_FILES['uploadedFile']['error'])) {
        $errName= 'Upload File dulu gan';
      }
          // Check if email has been entered and is valid
      else if(empty($_POST['email'])) {
        $errEmail = 'Please enter a valid email address';
      }
      // check if a password has been entered and if it is a valid password
      else if(empty($_POST['password']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
        $errPass = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
      } else {
        echo "The form has been submitted";
      }
    }
  ?>
  <div class="container">
    <form role="form" method="post" action="upload.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          <?php echo $errEmail; ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
          <?php echo $errName; ?>
        </div>
      </div>
      
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
          <?php echo $errPass; ?>
        </div>
      </div>
 
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Check Check</label>
<div class="form-check" class="col-sm-10">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Default checkbox
  </label>
</div>

<div class="form-check" class="col-sm-10">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div>
</div>

<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  </div>


  <div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Radio Button</label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div>
  </div>


    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Upload File</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="uploadedFile" >
          <?php echo $errName; ?>
        </div>
      </div>


      <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


          <button type="submit"  class="btn btn-sm btn-primary" name="uploadBtn" value="Upload"class="btn btn-primary" >
          Gaskuen
</button>
        </div>
      </div>
    </form>

    <?php
session_start(); 
?>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>

</div>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
