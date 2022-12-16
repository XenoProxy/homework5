<?php require_once './header.php'; 

function validData($name, $phone, $email, $message) {
    if (
        (preg_match('/^[A-zА-я]{2,10}$/i', $name))
        && preg_match('/^[+][\d]{3}[( -][\d]{2}[- )][\d]{3}-[\d]{2}-[\d]{2}$/', $phone)
        && (preg_match('/^[a-z]([a-z0-9])+@[a-z]+[\-\.]?[a-z]+\.([a-z]{2,11})$/i', $email))
        && (preg_match('/^[\s\S]{5,250}$/i', strip_tags($message)))
    ):
?>

<div>
    <h1>Your message has been sent successfully!<br>You will be redirected to the Home page automatically</h1>
</div>

<?php header('Refresh: 10; url="./home.php"');
else: ?>

<div>
    <h1>You entered the information in the wrong format.<br>Try filling out the form again.</h1>
</div>

<?php header('Refresh: 10; url="./page.php?page=contact"');
endif;
}

validData($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);	
?>