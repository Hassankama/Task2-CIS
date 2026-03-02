<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $Tittle=htmlspecialchars($_POST["Tittle"]);
            $content=htmlspecialchars($_POST["content"]);
            if (empty($Tittle) || empty($content)) {
                echo   "All fields are required.";
                exit();
            }else{
                        $date = date("d M Y - h:i A");
                        $file = fopen("notes.txt", "a");
                         fwrite($file, $Tittle . "|" . $content . "|" . $date . "\n");
                         fclose($file);
                             header("Location: notes.txt");
        exit();
            }
    
}
?>