<?php
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title> BASIC BANKING SYSTEM </title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF_8">
    <meta name ="viewport " content="width=device-width , initial-scale=1.0">
    <meta http-equiv="x-ua-compatible " content ="ie=edge">

    <!--bootstrap-->
    <link rel="stylesheet "  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/ootstrap.min.css " integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" >
    <link rel="stylesheet "  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet "  href="bootstrap-social.css">
    <link rel="stylesheet "  href=" style.css">

    <link rel ="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="styelsheet "  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">


<style>
    body{
        backdrop-filter: blur(5px);

    }
    
    body{
        margin: 0;
        padding:0;
                

    }
.container-fluid{
    width:100vw;
 height:100vh;


    background-attachment: fixed;
    background-image:url('users_bg.jpg');
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
.nav-link{
    font-family:'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    font-size:18px;
    color:white;
    cursor: pointer;
     
}
.row>p{
    color:honeydew;
    padding-left:19vw;
    position:absolute;
    top: 0;bottom:0;right:0;left:0;
    padding-top:52vh;
    font-family:'Cookie' ;
    font-size:2.5vw;
    
}

.btn{
    color:white !important;
    background-color:red;
    font-size:1vw;
    margin-left:18vw;
    
}
.btn:hover{
    color:black;
    
}

.selection{
    margin-top: 10px;
    border: 2px solid red;
    background-color: rgb(253, 125, 125);
    font-weight:600;
    box-shadow:  0 5px 5px rgba(0, 0, 0, 0.5);
    padding: 10px;
    border-radius: 5px;
    text-align:center;
}
#footer p{
    color:white;
    margin-top:20vh;
    font-size:2vw;
    font-weight:500;
        
}
.button{
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
    background-color:rgb(0,0,0);

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
                        <a href=" ./index.php" class="button"> HOME  </a>
                    </li>
                    <li class="nav-item ">
                        <a href=" ./users.php" class="button"> USERS </a>
                    </li>
                    <li class="nav-item ">
                        <a href=" ./history.php" class="button"> TRANSACTION </a>
                    </li>
                </ul>
            </div>  
        </nav> 

    <!-- navbar ends--> 


    <!-- transaction history table starts-->
<div class=" row row-content ">
    <div class="col-12 offset-sm-1 col-sm-10" >
        <h2 style="padding-top: 120px ;text-align: center; padding-bottom: 5px; color: black;"><b>TRANSACTION HISTORY</b></h2> "
        <div class=" table-responsive tb">
            <table class=" table table-striped">
                <thead class="thead">
                    <?php
                        $stmt=$pdo->query("SELECT * FROM history");
                        $rows=$stmt->fetchALL(PDO::FETCH_ASSOC);
                    ?>
                    <?php  if(count($rows)>0):?> 

                <tr>
                 <th>SENDER</th>
                 <th>RECEIVER</th>
                 <th>CREDITS TRANSFERED</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach( $rows as $row): ?>
                           <td><?php echo htmlentities($row['sender']); ?></td>
                           <td><?php echo htmlentities($row['receiver']); ?></td>       
                           <td><?php echo htmlentities($row['trans_amount']); ?></td>  
                    </tr>

                    <?php endforeach;?>
                </tbody>
            </table>
        </div> 

        <?php else:?>
            <p class=" selection"> NO TRANSACTION MADE ! </p>
            <?php endif;?>
        </div>
    </div>
<!-- TRANSACTION HISTORY TABLE END-->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body>
</html>
