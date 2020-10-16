<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Success</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
    font-family: 'Varela Round', sans-serif;
  }
  .modal-confirm {    
    color: #636363;
    width: 560px;
    margin: 30px auto;
  }



  /*Header*/
  .modal-confirm h4 {    
    text-align: left;
    font-size: 26px;
    margin: 30px 0 -15px;
    position: relative;
    bottom: 45px;
"
  }

/*Buttons Hight*/
  .modal-confirm .form-control, .modal-confirm .btn {
    min-height: 40px;
    border-radius: 3px; 
  }


/*Hight from top*/
  .modal-confirm.modal-dialog {
    margin-top: 40px;
  }

  .modal-confirm .btn:hover, .modal-confirm .btn:focus {
    outline: none;
  }
  .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }

</style>

</head>

<body>
    <div class="text-center" style="position: relative; bottom: 40px;">
      <span>    
        <button type="button" class="btn btn-secondary" style="width: 150px; font-size: 18px; height: 40px; position: relative;left: -20px; " onclick="myFunction()" value="Reset form">Reset</button>

        <button type="button" class="btn btn-info trigger-btn" data-toggle="modal" data-target="#20" style="width: 150px; height: 40px; font-size: 18px;" > Submit</button>
      </span> 
    </div>

<!-- Modal HTML -->
<div id="20" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">        
        <h3 class="modal-title">Ranweli Hotel</h3 > 
      </div>

      <p style="position: relative; left: -107px; bottom: -15px;"><b>Reservation Confirmation</b></p>
      <h5 style="position: relative;left: -140px;bottom: 5px;">Reservation Details</h5>

      <div>
<br>

<img src="img/123.png"  width="365" height="350" alt="" style="position: relative; bottom: 14px; left: 10px;" >

<br>



      </div>
      <div class="modal-footer">
        <span style="position: relative; right: 24px;">
        <button  class="btn btn-secondary" onclick="location.href='./Reservation.php'" style="margin: 5px; width: 130px;">Cancel</button>
        <button class="btn btn-info" onclick="location.href='./ReservationResults.php'" style="margin: 4px; width: 130px;">Make Changes</button>
         <button class="btn btn-success" onclick="location.href='./Reservation.php',myFunction1()" style="width: 130px;">Confirm</button>
        </span>
      </div>
    </div>
  </div>
</div>     
</body>

<script>
  function myFunction1(){
    alert("Your form was successfully submitted. we'll contact you later.");
  }
</script>

<script type="text/javascript"> 
  function myFunction2(){
    if (confirm("Are you sure? Your Reservation will be cancelled.")){
      directory_root = "./Reservation.php";
    }
    else{
      directory_root = "./ReservationResults.php";
    }
  }
</script>

</html>                            



