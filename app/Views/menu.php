<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --accent: #222222ff;
            --muted-bg: #f7f6f5;
        }

        * {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(180deg, #fff 0%, var(--muted-bg) 100%);
            color: #222;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 1rem;
        }

        .menu-card {
            background: white;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 6px 14px rgba(30, 30, 30, .06);
            display: flex;
            flex-direction: column;
            height: 100%; /* let grid cells stretch and keep consistent card heights */
        }

        .menu-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
        }

        .price {
            font-weight: 700;
        }

        /* Ensure description grows and pushes actions to the bottom */
        .menu-card .desc {
            flex: 1 1 auto;
            margin-top: 0.5rem;
        }

        .card-actions {
            margin-top: 0.75rem; /* small gap from content */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->include('partials/header') ?>

    <main class="container my-5 pt-5">
        <h1 class="mb-4 text-center">Our Menu</h1>

        <?php if (! empty($items)): ?>
            <div class="menu-grid">
                <?php foreach ($items as $item): ?>
                    <div class="menu-card">
                        <?php if (! empty($item['image_url'])): ?>
                            <img src="<?= esc($item['image_url']) ?>" alt="<?= esc($item['name']) ?>">
                        <?php endif; ?>
                        <h5 class="mt-2"><?= esc($item['name']) ?></h5>
                        <p class="text-muted small desc"><?= esc($item['description']) ?></p>
                        <div class="card-actions">
                            <div class="price">₱<?= number_format($item['price'], 2) ?></div>
                            <button class="btn btn-sm btn-outline-dark">Add</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-center">No menu items available.</p>
        <?php endif; ?>

    </main>

    <?= $this->include('partials/footer') ?>
</body>

</html>