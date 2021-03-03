<?php
include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Top Barbie Songs </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.css"/><!-- datatable.net-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><!-- boostrap -->
        <link rel= "stylesheet" href= "Bar.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
   
  <style>
    <?php include 'Bar.css'; ?>
    </style>

    </head>
    <body>
<div class="sons">
    <div class="topnav">

        <a href="javascript:void(0)" class="icon" onclick="myfunction()">
       
            <i class="fa fa-bars"></i>
        </a>
    
    <div id="mylinks">
        
      
        <a href="index.html" class="homeved">
        <i class="fas fa-home"> Home</i>
        </a>
        <a href="login.php" class="homeved">
            <i class="fas fa-pen-square"> UPDATE</i>
            </a>
        <a href="#" class="barb">
        <i class="fas fa-music">  BARBIE TOP SONGS</i>
       
        </a>
         
    </div>
    </div>
</div>
<div class="animations" id="Tables">
    
    <span>BARBIE</span>
    <span>TOP</span>
    <span>SONGS</span>
</div>
<br>
<div class="rad2"></div>
<hr>
<br>


<table class="table table-stripped" id="example" style="width:100%">>
    <thead>
   
        <th>TOP#</th>
        <th>Image</th>
        <th>Song Title</th>
        <th>Audio</th>
        <th>From the Movie...</th>
        
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM barbie_songs";
        $stmt = $con->prepare ($sql);
        $stmt->execute ();
        $result = $stmt->get_result(); 
        while ($row =$result->fetch_assoc()){?> 
        <tr>
           
             
                <td><?php echo $row ['b_place'] ?> </td>
                <td><img src="files/<?php echo $row ['b_image'] ?>" alt =" not available" width="300px" height="200px" /> </td>
                <td><?php echo $row ['title'] ?> </td>
                
                <td><audio controls class="audios"  >
                <source src="files/<?php echo $row ['b_audio'] ?>" type="audio/mp3" align-items="center" justify-content= "center" margin-top="20px"/>  </td>
                </audio>
                <td><?php echo $row ['b_from'] ?> </td>

                 




                 
            

    </tr>
    <?php } ?>
    </tbody>
    </table>

    </div>
    <br>
    <hr>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>

 

 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"> // css style bootstrap </script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
 <script type= "text/javascript" class="buttons">
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
 });
 </script>
<div class="rad2"></div>
<script>
    function myfunction(){
        var x= document.getElementById("mylinks");
        if (x.style.display ==="block"){
            x.style.display= "none";
        } else {
            x.style.display ="block";
        }
    }

    </body>
</html>