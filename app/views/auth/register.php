<?php require(VIEWS . 'layout/header.php'); ?>

<section>
    <h1>Register Page | MVC Project</h1>
    <form action="add" method="POST">
        <div>
            <input type="text" placeholder="name" name="name">
        </div>
        <div>
            <input type="text" placeholder="email" name="email">
        </div>
        <div>
            <input type="text" placeholder="password" name="password">
        </div>
        <input type="submit" value="submit">
    </form>
</section>


<?php require(VIEWS . 'layout/footer.php'); ?>