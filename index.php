<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Note </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="text">Note </div>
        <form action="act.php" class="form" method="post">
            <input type="text" name="Tittle" id="Tittle" placeholder="Enter The Tittle" >
            <textarea name="content" id="content" placeholder="Enter The Content" ></textarea>
            <input type="submit" value="submit">
        </form>
    </div>
    <br>
    <h3>Saved Notes</h3>
    <?php
    
        if(file_exists("notes.txt")){
            $file=fopen("notes.txt","r");
            while(($line=fgets($file))!==false){
                $parts = explode("|", trim($line));
                echo "<h3>" . htmlspecialchars($parts[0]) . "</h3>";
                echo "<p>" . htmlspecialchars($parts[1]) . "</p>";
                echo "<hr>";


            }
            fclose($file);;
        }

    ?>
    <style>
        body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #667eea, #764ba2);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 40%;
    gap: 40px;
    background-color: white;
    padding: 80px 60px;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    transition: 0.3s ease;
}

.container:hover{
    transform: translateY(-5px);
}

form{
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

form input, form textarea{
    padding: 18px;
    border-radius: 12px;
    border: 2px solid #ddd;
    font-size: 16px;
    transition: 0.3s ease;
    resize: none;
}
form textarea{
    height: 150px;
}

form input:focus , form textarea:focus{
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 10px rgba(102,126,234,0.4);
}

button{
    padding: 18px;
    border-radius: 12px;
    border: none;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s ease;
    
}

button:hover{
    opacity: 0.9;
    transform: scale(1.03);
}
    </style>
</body>
</html>