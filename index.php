<!doctype html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Filterable Image Gallery Bootstrap | CodingNepal</title>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <!-- Images Filter Buttons Section -->
            <div class="row mt-5" id="filter-buttons">
                <div class="col-12">
                    <button class="btn mb-2 me-1 active" data-filter="all"> Show all </button>
                    <button class="btn mb-2 mx-1" data-filter="nature"> Nature </button>
                    <button class="btn mb-2 mx-1" data-filter="cars"> Cars </button>
                    <button class="btn mb-2 mx-1" data-filter="people"> People </button>
                </div>
            </div>
            <!-- Filterable Images / Cards Section -->
            <div class="row px-2 mt-4 gap-3" id="filterable-cards">
                <div class="card p-0" data-name="nature">
                    <img src="images/nature-1.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Mountains</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="nature">
                    <img src="images/nature-2.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Lights</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="nature">
                    <img src="images/nature-3.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Nature</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="cars">
                    <img src="images/car-1.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Retro</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="cars">
                    <img src="images/car-2.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Fast</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="cars">
                    <img src="images/car-3.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Classic</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="people">
                    <img src="images/people-1.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Men</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="people">
                    <img src="images/people-2.jpg" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title">Girl</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
