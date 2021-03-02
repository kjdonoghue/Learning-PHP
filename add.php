<?php

$email = $title = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if(isset($_POST['submit'])){

    if(empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />'; 
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'not a valid email'; 
        }
    }

    if(empty($_POST['title'])) {
        $errors['title'] =  'A title is required <br />'; 
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'not a valid title'; 
        }
    }

    if(empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'An ingredient is required <br />'; 
    } else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'needs ingredient'; 
        }
    }

}



?>



<!DOCTYPE html>
<html>
   
    <?php include('./templates/header.php') ?>

    <section class="container grey-text">
    <h4 class="center"> Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label>Pizza Title </label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Ingredients (separated) </label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
    </section>

        
    <?php include('./templates/footer.php') ?>
    </body>
</html>

