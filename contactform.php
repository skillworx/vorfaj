<?php
    if(isset($_POST['submit'])){
                
    
        $name = $_POST['name'];
        $subject = "Nieuw bericht via contactformulier";
        $mailFrom = $_POST['email'];
        $selectOption = $_POST['selector'];
        $message = $_POST['message'];
        $phone = $_POST['phone'];

        $mailTo = "hello@proventus.be";
        $txt = "Bericht van \n\nNaam: ".$name." \nE-mail: ".$mailFrom." \nTelefoonnummer: ".$phone."Informatie over: ".$selectOption."\n\nBericht: ".$message;

        mail($mailTo, $subject, $txt);
        echo '<script>
                alert("Bedankt voor je bericht!");
                window.location.href="index.php";
                </script>';

        
        
}

?>