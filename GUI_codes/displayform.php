<!DOCTYPE html>
<html>
<head>
    <title>UserPreferences</title>

<style type="text/css">
		    
	body {
        background-image: ;
    }

    #form {				
		padding: 10px;
        width: 30%;
        height: 600px;
		margin: 0 auto;
		border: 5px solid #191970;	
		background-color: #f1f1f1;
    }

	.preferences {
        font-size: 30px;
        font-family: sans-serif;
        border-bottom-style: ridge;
    }
			
	.text {
        height: 25px;
    }

    label {
        font-size: 20px;
    }
	
</style>
</head>
<body>
   
  <?php
    if(isset($_POST["name"]) && isset($_POST["email"])  && isset($_POST["Mobile"]) && isset($_POST["pname"]) && isset($_POST["reason"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $Mobile = $_POST["Mobile"];
		$pname = $_POST["pname"]; 
		$reason = $_POST["reason"];
    }

    else
    {
        $error = "One or more fields are not filled";
        echo "$error";
    }
    ?>

    <div id="form">
            <center><b class="preferences">User Preferences Details</b></center>
            <form>
				<br>
				<br>
                <label>User Name :</label>
                <label><?php echo $name; ?></label>
                
				<br>
			    <br>
		        <label>Email Address:</label>
				<label><?php echo $email; ?></label>
            
				<br>
				<br>
                <label>Contact Number :</label>
                <label><?php echo $Mobile; ?></label>
                
				<br>
				<br>
                <label>Most Prefered Property :</label>
                <label><?php echo $pname; ?></label>
				
				<br>
				<br>
                <label>Reasons for Preference :</label>
                <label><?php echo $reason; ?></label>
				
				<br>
				<br>
           
            </form>

	</div>

</body>
</html>



