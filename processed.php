<?php 

if(isset($_POST['send']))
{
    $UserName = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Msg = $_POST['message'];

    if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
    {
        header('location:mailsent.php?error');
    }
    else
    {
        $mailTo = "farhanhamzah91@gmail.com";
        $headers = "From: ".$Email;
        $txt = "You have received an e-mail from ".$UserName.".\n\n".$Msg;

        mail($mailTo, $Subject, $txt, $headers);
        header("location:mailsent.php?success");
    }
}
?>