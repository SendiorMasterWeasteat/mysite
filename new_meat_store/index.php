
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ласкаво просимо до ковбасного раю! Ми пропонуємо найкращі продукти.">
    
    <!-- Підключення CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Ковбасний рай</title>
</head>
<body>
    <!-- Підключаємо хедер -->
    <?php include 'header.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <img id="main-image" src="img/sausages.jpg" alt="Ковбаси" class="img-fluid">
                <div class="text-overlay">
                    <h1>Вітаємо в ковбасному раю!</h1>
                </div>
            </div>
            <div class="button-container">
                <button class="catalog-button">Перейти в каталог</button>
            </div>
        </section>

        <section class="carousel">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Індикатори каруселі -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#productCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#productCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#productCarousel" data-bs-slide-to="3"></li>
                    <li data-bs-target="#productCarousel" data-bs-slide-to="4"></li>
                </ol>

                <!-- Елементи каруселі -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/kowbasa.png" class="d-block w-100" alt="Продукт 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Продукт 1</h5>
                            <p>Опис продукту 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/kowbasa.png" class="d-block w-100" alt="Продукт 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Продукт 2</h5>
                            <p>Опис продукту 2.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/kowbasa.png" class="d-block w-100" alt="Продукт 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Продукт 3</h5>
                            <p>Опис продукту 3.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/kowbasa.png" class="d-block w-100" alt="Продукт 4">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Продукт 4</h5>
                            <p>Опис продукту 4.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/kowbasa.png" class="d-block w-100" alt="Продукт 5">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Продукт 5</h5>
                            <p>Опис продукту 5.</p>
                        </div>
                    </div>
                </div>

                <!-- Кнопки управління -->
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Попередній</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Наступний</span>
                </button>
            </div>
        </section>

        <section class="about">
            <h2 style="text-align:center">Про компанію</h2>
            <div class="about-content">
                <p>Текст з інформацією про компанію...</p>
                <div class="video-container">
                    <button class="video-btn" onclick="openModal()" aria-label="Відкрити відео">▶️</button>
                    <div id="videoModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <iframe id="youtube-video" src="https://www.youtube.com/embed/your-video-id" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Підключаємо скрипти -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>

</body>
</html>
