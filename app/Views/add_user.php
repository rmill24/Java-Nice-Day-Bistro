<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap');

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
            max-width: 450px;
            padding: 24px;
            border: solid black;
            border-radius: 24px;
        }

        .add-user-form {
            display: flex;
            flex-direction: column;
            width: 350px;
        }

        i {
            color: black;
            transition: color 0.3s ease;
            font-size: 24px;
        }

        i:hover {
            color: #000000a8;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('partials/header') ?>
    <main>
        <div class="container">
            <h2>Add User</h2>
            <br>

            <?= form_open('user/add', 'class="add-user-form"') ?>

            <h5>Username:</h5>
            <input type="text" name="username" value="<?= set_value('username') ?>" />

            <br>
            <h5>Email:</h5>
            <input type="text" name="email" value="<?= set_value('email') ?>" />

            <br>
            <h5>Password:</h5>
            <input type="password" name="password" />

            <br>
            <h5>Confirm Password:</h5>
            <input type="password" name="passconf" />

            <br>
            <h5>Role:</h5>
            <select name="role">
                <option value="">Customer (default)</option>
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            </select>

            <br><br>
            <button type="submit" class="btn btn-dark">Create User</button>

            <?php if (isset($errors)) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li style="color: red;"><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>

            <?= form_close() ?>

            <br>
            <a href="<?= site_url('admin') ?>"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
    </main>
    <?= $this->include('partials/footer') ?>
</body>

</html>