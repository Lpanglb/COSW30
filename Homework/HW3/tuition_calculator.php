<!DOCTYPE HTML>
<html>
    <head>
    <title>Caluation Form</title>
    <style>
        h1, h3{
        text-align: center;
        }
        form{
            text-align: center;
            line-height: 30px;
        }
      
    </style>
    </head>
    
    <body>
        
        <h1>Long Beach City College</h1>
        <h3>Welcome to Long Beach City College Adminstraion and Registration</h3>
        
        <form action ="process_tuition.php" method="POST">
            <label>How unit are you taking this semsemter: </label>
            <input type="number" name="units" min="1" max="21" required><br>
            
            <label>Are you a resident or nonresident</label>
            <select name="residency">
                <option value="resident">Resident</option>
                <option value="non-Resident">Non-Resident</option>
            </select><br>
          
            <label>There is an mandatory Student Health Fee of <strong>$19 </strong> for all registered students  </label><br>
            
            <label><strong>Optional Fee:</strong></label><br>
            <label for="card">College Service Card: </label>
            <select id = "service" name = "service">
                 <option id = "service" value="no" name="no">No [$0]</option>
                 <option id = "service" value="yes" name= "yes">Yes [$20]</option>
            </select><br>
            
            <label>Parking Permit:</label>
            <select for "permit" name= "parking">
                 <option id = "permit" name = "no" value="no">No [$0]</option>
                 <option id = "permit" name = "yes" value="yes">Yes [$25]</option>
            </select><br>
            
            <button>Submit</button>
        </form>
    </body>
    
</html>