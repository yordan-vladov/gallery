<?php
// Fetch images from the database
include "connect.php";
$sql = "SELECT title, description, filename, category FROM images";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Filterable Image Gallery Bootstrap</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
    />
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Filter Buttons -->
        <div class="row mt-5" id="filter-buttons">
            <div class="col-12">
                <button class="btn mb-2 me-1 active" data-filter="all"> Show all </button>
                <button class="btn mb-2 mx-1" data-filter="nature"> Nature </button>
                <button class="btn mb-2 mx-1" data-filter="cars"> Cars </button>
                <button class="btn mb-2 mx-1" data-filter="people"> People </button>
            </div>
        </div>

        <!-- Gallery Images -->
        <div class="row px-2 mt-4 gap-3" id="filterable-cards">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="card p-0" data-name="<?= htmlspecialchars(
                        $row["category"]
                    ) ?>">
                        <img src="images/<?= htmlspecialchars(
                            $row["filename"]
                        ) ?>" alt="img" />
                        <div class="card-body">
                            <h6 class="card-title"><?= htmlspecialchars(
                                $row["title"]
                            ) ?></h6>
                            <p class="card-text"><?= htmlspecialchars(
                                $row["description"]
                            ) ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No images found.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
