<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --accent: #222222ff;
            --muted-bg: #f7f6f5;
        }

        body {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            background: var(--muted-bg);
            color: #1f1f1f;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: fit-content;
            padding: 32px;
            border: solid black;
            border-radius: 24px;
        }

        .sign-up-form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('partials/header') ?>
    <main>
        <div class="container">
            <h2>Sign Up</h2>
            <br>

            <?= form_open('register', 'class="sign-up-form"') ?>

            <h6>Username</h6>
            <input type="text" name="username" value="<?= set_value('username') ?>" />
            <br>

            <h6>Email</h6>
            <input type="text" name="email" value="<?= set_value('email') ?>" />
            <br>

            <h6>Password</h6>
            <input type="password" name="password" />
            <br>

            <h6>Confirm Password</h6>
            <input type="password" name="passconf" />

            <br>
            <button type="submit" class="btn btn-dark">Sign Up</button>

            <?= form_close() ?>

            <br>
            <p>Already have an account? <a href="<?= site_url('login') ?>">Login here</a></p>
        </div>
        <br>
        <?php if (isset($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </main>
    <?= $this->include('partials/footer') ?>
</body>

</html>