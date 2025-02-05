<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>THE TSF BANK</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background:#c5d7bd">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" >
                  <h3>Welcome to</h3>
                  <h1 style="color : red">THE TSF BANK</h1>
				  <h3 style="font-size:15px"> Made by - Pranay Yadav <h3>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center"">
                <img src="img/bank.png" class="img-fluid pt-2" >
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user3.png" class="img-fluid" style="height:40%" >
					<h2 style="font-size:20px"> Create a New User for Transaction <h2>
                    
                    <a href="createuser.php"><button >Create a New User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer2.jpg" class="img-fluid" style="height:40%">
                    <h2 style="font-size:18px "> Make Transaction with an Existing User <h2>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction history.png" class="img-fluid" style="height:40%">
                    <h2 style="font-size:20px"> View the Transaction History <h2>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>PRANAY YADAV</b>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>