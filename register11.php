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
            <img src="beer.jpg" style="width:1465px; height:700px; ">
       
        <form action="register.php" method="post"  style="margin-top:-40%; margin-left:60%;">
            <div class="form-group">
            <label style="color:white;">firstname:</label>
                <input type="text" name="firstname" class="form-control" required><br/></div>
          <div class="form-group">
            <label style="color:white;">lastname:</label>
                <input type="text" name="lastname" class="form-control" required><br/></div>
            <div class="form-group">
            <label  style="color:white;">email:</label>
            <input type="email" class="form-control" name="email" required>
           </div>
             <div class="form-group">
            <label  style="color:white;">password:</label>
            <input type="password" class="form-control" name="password" required>
           </div>
            <div class="form-group" >
                <center><button type="submit"  class="btn btn-primary" name="submit">Submit</button></center>
                
                
          
        
            </div>
            </form>
        </div>
           
        
    </body>
</html>