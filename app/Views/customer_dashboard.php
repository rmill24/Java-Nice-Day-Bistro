<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --accent: #222222ff;
            --muted-bg: #f7f6f5;
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(180deg, #fff 0%, var(--muted-bg) 100%);
            color: #222;
        }

        .dashboard-container {
            padding-top: 5.5rem;
            padding-bottom: 3rem;
        }

        .welcome-card {
            background: white;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            box-shadow: 0 6px 18px rgba(20, 20, 20, 0.06);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .welcome-card h2 {
            margin: 0;
            font-weight: 600;
            color: var(--accent);
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
        }

        .menu-card {
            background: white;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 6px 14px rgba(30, 30, 30, 0.06);
            display: flex;
            flex-direction: column;
            gap: .5rem;
            min-height: 120px;
        }

        .menu-card .title {
            font-weight: 600;
            color: #2b2b2b;
        }

        .menu-card .desc {
            font-size: .95rem;
            color: #5a5a5a;
            flex-grow: 1;
        }

        .price-badge {
            background: var(--accent);
            color: white;
            padding: 6px 10px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .9rem;
        }

        .profile-card {
            background: white;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 6px 18px rgba(20, 20, 20, 0.06);
        }

        .muted {
            color: #6b6b6b;
            font-size: .95rem;
        }

        @media (max-width: 767px) {
            .welcome-card {
                flex-direction: column;
                gap: .75rem;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('partials/header') ?>

    <main class="dashboard-container container">
        <div class="welcome-card">
            <div>
                <h2>Welcome, <?= esc(session()->get('username')) ?>!</h2>
                <p class="muted">Good to see you. Here's what's brewing today.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <section>
                    <h3 class="mb-3">Order History</h3>
                    <?php
                    // static order history for now
                    $orders = [
                        [
                            'id' => '#1001',
                            'date' => '2025-10-01',
                            'items' => [['name' => 'Signature Black Coffee', 'qty' => 1], ['name' => 'Matcha Latte', 'qty' => 1]],
                            'total' => 270.00
                        ],
                        [
                            'id' => '#1002',
                            'date' => '2025-10-12',
                            'items' => [['name' => 'Strawberry Frappuccino', 'qty' => 2]],
                            'total' => 360.00
                        ],
                    ];
                    ?>

                    <?php if (! empty($orders)): ?>
                        <div class="d-flex flex-column gap-3">
                            <?php foreach ($orders as $order): ?>
                                <div class="p-3 bg-white rounded shadow-sm">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <strong>Order <?= esc($order['id']) ?></strong>
                                            <div class="muted"><?= esc($order['date']) ?></div>
                                        </div>
                                        <div class="text-end">
                                            <div class="price-badge">₱<?= number_format($order['total'], 2) ?></div>
                                        </div>
                                    </div>
                                    <div class="mt-2 muted">
                                        <?php foreach ($order['items'] as $it): ?>
                                            <div><?= esc($it['qty']) ?> x <?= esc($it['name']) ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p class="muted">You have no previous orders.</p>
                    <?php endif; ?>
                </section>
            </div>

            <div class="col-lg-4">
                <aside class="profile-card">
                    <h4>Your Profile</h4>
                    <p class="mb-1"><strong>Username:</strong> <?= esc(session()->get('username')) ?></p>
                    <p class="mb-1"><strong>Email:</strong> <?= esc(session()->get('email')) ?></p>
                </aside>
            </div>
        </div>
    </main>

    <?= $this->include('partials/footer') ?>
</body>

</html>