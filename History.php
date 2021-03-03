<?php
include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suggestion to Barbie Devs </title>
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
        <i class="fas fa-angle-double-right"> Suggestions to Barbie Developers

        </i>
       
        </a>
         
    </div>
    </div>
</div>
<div class="animations" id="Tables">
    <span>SUGGESTIONS</span>
    <span>TO</span>
    <span>BARBIE</span>
    <span>DEVELOPERS</span>
    
</div>
<br>
<div class="rad2"></div>
<BR>
<div class =" container" width="100%">

<form id ="addResident" method="POST"> 

<div class="input-group mb-3" > 
  <div class="input-group-prepend"> 
    <span class="input-group-text" id="basic-addon3">DESCRIPTION</span>
  </div>
  <input type="text" class="form-control" name="h_description" id="h_description" placeholder="description" aria-label="Username" aria-describedby="basic-addon3">
</div>
<div class="input-group mb-3" > 
  <div class="input-group-prepend"> 
    <span class="input-group-text" id="basic-addon3">FROM</span>
  </div>
  <input type="text" class="form-control" name="bar_from" id="bar_from" placeholder="# " aria-label="Username" aria-describedby="basic-addon3">
</div>

<!--add-->
<input type="hidden" name="addResidentHidden">

 <button  type="submit" class="btn btn-dark"> Submit </button>
 <button  type="button" onclick="clearInput(); "class="btn btn-dark"> Clear </button>
</form>

<script>
    function clearInput() {
        document.getElementById("h_description").value ="";
        document.getElementById("barb_from").value ="";
    }
</script>

<hr> 
      
        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
               
                <th>SUGGESTION</th>
                <th>NAME</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM barbie_history";
        $stmt = $con->prepare ($sql);
        $stmt->execute ();
        $result = $stmt->get_result();
        while ($row =$result->fetch_assoc()){?> 
       
            <tr>
                
                <td><?php echo $row ['h_description'] ?> </td>
               
                <td><?php echo $row ['bar_from'] ?> </td>
                
            </tr>
     
        <?php } ?>
            </tbody> 
    </table>
            
           
            <BR>
                <div class="rad2"></div>
        </body>
                
<script>
    function myfunction(){
        var x= document.getElementById("mylinks");
        if (x.style.display ==="block"){
            x.style.display= "none";
        } else {
            x.style.display ="block";
        }
    }
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>

 

 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"> // css style bootstrap </script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- sweet alert for confirmation-->

 
 <script type= "text/javascript">
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

    $("#addResident").submit(function(e){ 
        if(confirm('Are you sure that you want to submit the form?') ){ 
        e.preventDefault();
        $.ajax({
          type: 'GET',
          url: 'historycontroller.php',
          data: $(this).serialize(),
          dataType: 'json',
          success: function(data){
            if(data.status==1){
                swal("Success!", "You inserted data!", "success")
                .then(function(){
                    location.reload();
                }

                );
                    } else{
                    swal("Ooops!", "There seems to be an error", "error");
                }
          },
            error: function(error){
                swal("Ooops", "Error Data", "warning");
            }
     });
    }
    else{
        window.location = "historyindex.php";
    }

    });


});// END 


</script>

</html>