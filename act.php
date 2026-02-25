<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $Tittle=htmlspecialchars($_POST["Tittle"]);
            $content=htmlspecialchars($_POST["content"]);
            if (empty($Tittle) || empty($content)) {
                echo   "All fields are required.";
                exit();
            }else{
                        $file = fopen("notes.txt", "a");
                        fwrite($file, $Tittle . "|" . $content . "\n");
                         fclose($file);
            }
    
}
?>