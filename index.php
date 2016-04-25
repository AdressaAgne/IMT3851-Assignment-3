<?php require_once("class/app.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main site</title>
</head>
<body>
   
    <nav>
        <ul class="navbar">
            <li class="navbar__item"><a href="#">link-1</a></li>
            <li class="navbar__item"><a href="#">link-2</a></li>
            <li class="navbar__item"><a href="#">link-3</a></li>
            <li class="navbar__item"><a href="#">link-4</a></li>
            <li class="navbar__item"><a href="#">link-5</a></li>
        </ul>
    </nav>
    
    <main>
        <article class="card">
            <header class="card__header">
                <h2 class="card__header__text">Article header</h2>
            </header>
            <main class="card_content">
                <p>Article Main</p>
            </main>
            <footer class="card_footer">
                <a href="#">Article Footer</a>
            </footer>
        </article>
    </main>
    
    <footer>
        Footer
    </footer>
</body>
</html>