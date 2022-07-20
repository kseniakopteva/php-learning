<?php require 'partials/header.php' ?>
<main>
    <header>
        <h1>Names</h1>
    </header>

    <form action="/users" method="POST" style="padding: 20px; font-size:large;">
        <label for="name">Submit your name</label>
        <br>
        <input type="text" name="name">
        <br>
        <button type="submit" style="border: none; margin-top: 20px">Submit</button>
    </form>

    <br>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php require 'partials/footer.php' ?>