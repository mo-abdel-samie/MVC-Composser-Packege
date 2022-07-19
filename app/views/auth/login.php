<?php require(VIEWS . 'layout/header.php'); ?>

<section>
    <h1>Login Page | MVC Project</h1>
    <form action="vrefiy" method="POST">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="password" name="password">
        <input type="submit" value="submit">
    </form>
</section>


<?php require(VIEWS . 'layout/footer.php'); ?>