<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            max-width: 450px;
            padding: 24px;
            border: solid black;
            border-radius: 24px;
        }

        .edit-form {
            display: flex;
            flex-direction: column;
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

            <h2>Edit User</h2>

            <?= form_open('user/edit/' . $user['id'], 'class="edit-form"') ?>
            <br>
            <h5>Username:</h5>
            <input type="text" name="username" value="<?= set_value('username', $user['username']) ?>" />

            <br>
            <h5>Email:</h5>
            <input type="email" name="email" value="<?= set_value('email', $user['email']) ?>" />

            <br>
            <h5>New Password (leave blank to keep current):</h5>
            <input type="password" name="password" value="" />

            <br>
            <h5>Role (leave blank to keep current):</h5>
            <select name="role">
                <option value="">-- Keep current (<?= esc($user['role']) ?>) --</option>
                <option value="customer" <?= set_select('role', 'customer', $user['role'] === 'customer') ?>>Customer</option>
                <option value="admin" <?= set_select('role', 'admin', $user['role'] === 'admin') ?>>Admin</option>
            </select>

            <br>
            <button type="submit" class="btn btn-dark">Save Changes</button>

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