<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $Tittle=trim($_POST["Tittle"]);
            $content=trim($_POST["content"]);
            if (empty($Tittle) || empty($content)) {
                echo   "All fields are required.";
                exit();
            }else{
                        $date = date("d M Y - h:i A");
                        $file = fopen("notes.txt", "a");
                        fwrite($file, $Tittle . "|" . $content . "|" . $date . "\n");
                        fclose($file);
                        header("Location: index.php");
        exit();
            }
    
}
?>