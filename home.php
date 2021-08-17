<?php
$year=date('Y');
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF_8">
        <meta name ="viewport " content="width=device-width , initial-scale=1.0">
        <title> BASIC BANKING SYSTEM </title>
        <!-- bootstrap css -->
        <link rel ="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel="styelsheet "  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>

        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
        <link rel="stylesheet" type=" text/css" href="style">

        <!--font-->
        <link href="http://fonts.googleapis.com/css?family=Cookie " rel="stylesheet" type="text/css">

<style>
    body{
        margin: 0;
        padding:0;
                

    }
.container-fluid{
width: 100vw;
height:100vh;
    background-attachment: fixed;
    background-image:url('banker.jpg');
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    
}
.navbar-nav{
    position: absolute;
    right:0;
}
button{
    color:black;

}

h3{
    font-size: 5vw;
    color:black;
    margin-top:30vh;
    padding-left:17vw;
    font-family:'Cookie', cursive;
}



}
.row>p{
    color:black;
    padding-left:19vw;
    position:absolute;
    top: 0;bottom:0;right:0;left:0;
    padding-top:52vh;
    font-family:'Cookie' ;
    font-size:2.5vw;
    
}

.btn{
    color:white !important;
    background-color:black;
    font-size:1vw;
    margin-left:18vw;
    
}
.btn:hover{
    color:black;
    
}

#footer{
    color:white;
    margin-top:20vh;
    font-size:2vw;
    font-weight:500;
        
}
.button{
    color: white;
    background-color: black;
    margin-left: 40px;
    border: 2px black;
    padding:10px 10px;
}
.nav-link{
    
    color:white;
    background-color:black;
    margin-left:40px;
    border:10px white;
    padding:10px 10px; 
   
}

nav{
    background:grey;
    height:100px;
    width:100%;


}
.navbar a:hover{
    text-decoration:none;
    color:red;
    
}
.thead{
    border-radius: 10px;
    background-color:black;
    color:white;
}
.tb{
    background-color: rgb(255,255,255);

}
.close{

    color:white;
    font-size:30px;
}
.modal-header{
    background-color: rbg(255,0,0);
    color:#FFF;
    
}
.modal-body{
    background-color:rgb(127, 204, 218);

}
.name{
    text-decoration:none;
    color:darked;
    text-transform:uppercase;
    
}
    </style>
</head>

<body>
    <div class=" container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcontent" aria_controls="navbarcontent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>

            </button>
            
            <div class="collapse navbar-collapse" id="navbarcontent">
                <ul class="navbar-nav mt-5 pr-5">
                    <li class="nav-item active">
                        <a href=" ./index.php" class="nav-link"> <span class="fa fa-home fa-lg"></span> HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a href=" ./users.php" class="nav-link"><span class="fa fa-address-card fa-lg"> </span>USERS</a>
                    </li>
                    <li class="nav-item ">
                        <a href=" ./history.php" class="nav-link"> <span class="fa fa-info fa-lg"> </span>TRANSACTION</a>
                    </li>
                </ul>
            </div>  
        </nav> 

        <div class="row">
            <div class="col-12">
                
                    <div class="row">
                    <p>Task 1</p>
                </div>
                <button id="trans" class="btn px-4 py-2 mt-4" > TRANSFER MONEY </button>
            </div>
        </div>

    <div id="transModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal=md" role="content">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">TRANSFER MONEY </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> 
                <div class="modal-body">
                    <div class="panel panel-default" style="padding:10px;">
                        <h2 class="text-center"> CHOOSE AN ACCOUNT</h2>
                            <hr>
                            <?php
                                $stmt=$pdo->query("SELECT * FROM users");
                                $rows=$stmt->fetchALL(PDO::FETCH_ASSOC);
                                if(count($rows)>0){
                                    foreach($rows as $row){ ?>

                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row" style="padding-left:10px;">
                                                <?php echo('<a class="name" href="profile.php?user_id='.$row['user_id'].'">'.htmlentities($row['user_name']).'</a> ');
                                                 ?>
                                            </div> 
                                            <p><strong>EMAIL ID:</strong> <?php echo htmlentities($row['email']); ?> <br>
                                            <strong>BALANCE: </strong> Rs. <?php echo htmlentities($row['user_credits']);?></p>
                                        </div>
                                    </div>  

                                <?php } 
                                    }   
                                    
                                ?>

                                </div> 
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"> </script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"> </script>

        <script>
            $(document).ready(function(){
                $('#trans').click(function({

                }));
            });

        </script>

    </body>
    </html>
    