<?php include('include/header.php'); ?>
    
    <body>
        <section>
        
        </section>
        
        <div class="part">
        <div class = "form_part">
            
            <form action = "Preocess.php" method = "POST">
                <label for = "number"> The price of the Car:<br></label>
                 <input type = "number" name = "number1" id = "number1"  required><br>
                 
                <label for = "number">Input Down Payment: <br></label>
                 <input type = "number" name = "number2" id = "number2"  required><br>
                 
                <label for = "operation">Please Choose Your Credit Score<br></label>
                      <input type="radio" name="operation" value="bad" checked> Bad (4.9 - 7.9)<br>
                      <input type="radio" name="operation" value="fair">fair(1.9 - 4.9)<br>
                      <input type="radio" name="operation" value="good">good (0.9 - 1.9) <br>
                      
                <button>Submit</button>
                
            </form>
            
        </div>
        
        
        
        
     
        
    </body>
    
    <footer>
        
        
    </footer>
    
    
    
</html>