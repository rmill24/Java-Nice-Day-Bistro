<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --accent: #222222ff;
            --muted-bg: #f7f6f5;
        }


        * {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            background: var(--muted-bg);
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

        .login-form {
            display: flex;
            flex-direction: column;
        }

        input[type=submit] {
            background-color: black;
            color: white;
            border-radius: 24px;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover {
            filter: brightness(1.2);
            background-color: #000000de;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('partials/header') ?>
    <main>
        <div class="container">
            <h2>Login</h2>
            <br>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?= esc(session()->getFlashdata('success')) ?>
                </div>
            <?php endif; ?>

            <br>
            <?= form_open('login', 'class="login-form"') ?>

            <h5>Email or Username:</h5>
            <input type="text" name="email" value="<?= set_value('email') ?>" />

            <br>
            <h5>Password:</h5>
            <input type="password" name="password" />

            <br>
            <input type="submit" value="Login" />

            <?= form_close() ?>

            <br>
            <p>Don't have an account? <a href="<?= site_url('register') ?>">Register here</a></p>
        </div>

        <br>

        <?php if (isset($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li style="color: red;"><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>

    </main>
    <?= $this->include('partials/footer') ?>
</body>

</html>