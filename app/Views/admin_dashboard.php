<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --accent: #222222ff;
            --muted-bg: #f7f6f5;
            --light-brown: #615444ff
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            background: var(--muted-bg);
            color: #1f1f1f;
        }

        main {
            padding-top: 5.5rem;
            padding-bottom: 2.5rem;
        }

        .admin-wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 1rem;
        }

        .admin-card {
            background: #fff;
            border-radius: 12px;
            padding: 1.25rem;
            box-shadow: 0 8px 24px rgba(20, 20, 20, 0.06);
        }

        h2 {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .table-responsive {
            margin-top: 1rem;
        }

        .users-table th {
            background: #faf8f7;
            font-weight: 600;
        }

        .users-table td,
        .users-table th {
            vertical-align: middle;
        }

        .add-btn {
            text-decoration: none;
            color: white;
            padding: 12px;
            background-color: #1f1f1f;
            border-radius: 12px;
        }

        .actions a {
            color: #333;
            margin: 0 6px;
            text-decoration: none;
        }

        .actions a .fa-trash {
            color: #dc3545;
        }

        .actions i:hover,
        .add-btn:hover {
            transform: translateY(-2px);
        }

        i,
        .add-btn {
            transition: transform .15s ease, opacity .15s ease;
        }

        .pagination {
            margin: 0;
            padding: 0;
            gap: 8px;
        }

        .pagination a {
            display: inline-block;
            padding: 6px 10px;
            color: #fff;
            background: #222;
            border-radius: 12px;
            text-decoration: none;
            border: 1px solid rgba(0, 0, 0, .06);
            transition: background .12s ease, transform .08s ease;
        }
        .pagination a:hover,
        .pagination a:focus {
            background: #333;
            transform: translateY(-2px);
        }
        .pagination li.active a {
            background: var(--light-brown);
            color: #fff;
        }
        .pagination li.disabled a {
            background: #e9ecef;
            color: #6c757d;
            pointer-events: none;
            transform: none;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('partials/header') ?>

    <main>
        <div class="admin-wrap">
            <div class="admin-card">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Admin Dashboard</h2>
                    <a href="<?= url_to('UserController::add') ?>" class="add-btn"><i class="fa-solid fa-user-plus"></i> Add User</a>
                </div>

                <h5 class="mt-3">Registered Users</h5>

                <div class="table-responsive">
                    <table class="table users-table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (! empty($users) && is_array($users)): ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= esc($user['id']) ?></td>
                                        <td><?= esc($user['username']) ?></td>
                                        <td><?= esc($user['email']) ?></td>
                                        <td><?= esc($user['role']) ?></td>
                                        <td class="actions">
                                            <a href="<?= url_to('UserController::edit', $user['id']) ?>" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="<?= url_to('UserController::delete', $user['id']) ?>" title="Delete"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4">No users found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- Pager links -->
                    <?php if (isset($pager) && $pager): ?>
                        <div class="d-flex justify-content-end mt-3">
                            <?= $pager->links() ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <?= $this->include('partials/footer') ?>
</body>

</html>