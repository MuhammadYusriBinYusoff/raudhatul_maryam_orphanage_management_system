<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/logins.css">
</head>

<body>

    <?php
    foreach ($data as $rows):
    ?>
        <form method="post" action="<?= BASEURL; ?>/authentication/updateUserStatus/<?= $rows['id']; ?>">

            <input type="submit" value= "email: <?= $rows['email']; ?>   category: <?= $rows['category'] ?>">
        </form>

    <?php endforeach; ?>

    <a href="<?= BASEURL; ?>/home" class="button">
        <div class="box">
            <span>Back to Main Page</span>
            <i class="fas fa-arrow-left"></i>


</body>

</html>