
<?php
include_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      />
</head>
<body>
<form method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="container pt-5">
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="fname"/>
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="lname"/>
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>


  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" name="email" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" name="phone" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

 

  <!-- Submit button -->
  <input type="submit" name="submit">
</form>
</div>
<script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
         crossorigin="anonymous"
      ></script>
</body>
</html>




<?php

    if(isset($_POST['submit'])){

        
         $fname = $_REQUEST['fname'];
      $lname = $_REQUEST['lname'];
          $email = $_REQUEST['email'];
           $phone = $_REQUEST['phone'];

        $arr = array($fname,$lname,$email,$phone);
        $serialize = serialize($arr);
        $json = json_encode($arr);
     
        $ins = "INSERT INTO `serial`(`userid`, `serial_data`, `json_data`) VALUES ('10','$serialize','$json')";
        $res = $conn->query($ins);
        if ($res === true){
            echo "Success";
        }
        else{
            echo "fail";
        }
    }

?>
