<html>
    <head>
        <title>Hotel Booking</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
       

        <div class="row justify-content-center">
            <img src="beer.jpg" style="width:1460px; height:700px; ">
       
        <form action="process.php" method="post"  style="margin-top:-40%; margin-left:56%;">
             
            <div class="form-group">
            <label style="color:white;">Username:</label>
                <input type="text" name="username" class="form-control" required><br/></div>
         
            <div class="form-group">
            <label  style="color:white;">Password:</label>
            <input type="password" class="form-control" name="password" required>
           </div>
           <div class="form-group" >
             <center> <button type="submit"  class="btn btn-primary" name="submit">Submit</button></center>
                
                
          
        
            </div>
            </form>
        </div>
           
        
    </body>
</html>