<?php require_once("class/app.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main site</title>
<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body> 

<nav class="paper-navbar active" id="navbar">
    <ul class="col-8 col-m-10 col--center">
        <li class="paper-navbar__item paper-navbar__burger paper-color-1" id="menu-toggle"><a href="#">Menu</a></li>
        <li class="paper-navbar__item"><a href="#">GetFreeShit.com</a></li>
        <li class="paper-navbar__item"><a href="#">Categorys</a></li>
        <li class="paper-navbar__item"><a href="#">Find</a></li>
        <li class="paper-navbar__item"><a href="#">Give</a></li>
        <li class="paper-navbar__item"><a href="#">Search</a></li>
    </ul>
</nav>

<div class="row">
    <div class="col-8 col-m-10 col--center">
        <div class="col-l-3 col-4 col-m-6 col-s-6">
            <article class="paper-card">
                <header class="paper-card__header" style="background-image:url(img/placeholder/1.jpg);">
                    <h2 class="paper-card__header--text"><i class="material-icons">face</i> <i class="material-icons">done</i> </h2>
                </header>
                <main class="paper-card__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolorum sunt beatae corrupti, nam unde voluptatibus non doloribus, illo laudantium!</p>
                </main>
                <footer class="paper-card__footer">
                    <a href="#">Share</a>
                    <a href="#">Explore</a>
                </footer>
            </article>
        </div>
        <div class="col-l-3 col-4 col-m-6 col-s-6">
            <article class="paper-card">
                <header class="paper-card__header" style="background-image:url(img/placeholder/2.jpg);">
                    <h2 class="paper-card__header--text">Article header</h2>
                </header>
                <main class="paper-card__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque numquam eligendi nisi veniam sequi ab cum suscipit iusto, deserunt earum.</p>
                </main>
                <footer class="paper-card__footer">
                    <a href="#">Article Footer</a>
                </footer>
            </article>
        </div>
        <div class="col-l-3 col-4 col-m-6">
            <article class="paper-card">
                <header class="paper-card__header" style="background-image:url(img/placeholder/3.jpg);">
                    <h2 class="paper-card__header--text">Article header</h2>
                </header>
                <main class="paper-card__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem numquam sed possimus illo doloribus quos perferendis repudiandae deleniti fuga, reprehenderit.</p>
                </main>
                <footer class="paper-card__footer">
                    <a href="#">Article Footer</a>
                </footer>
            </article>
        </div>
        <div class="col-l-3 col-4 col-m-6">
            <article class="paper-card">
                <header class="paper-card__header" style="background-image:url(img/placeholder/4.jpg);"></header>
                <main class="paper-card__content">
                    <h2 class="paper-card__content--text">Article header <small>subtext</small></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque animi eos sint ipsum laborum, ab autem nostrum explicabo omnis, quos.</p>
                </main>
                <footer class="paper-card__footer">
                    <a href="#">Article Footer</a>
                </footer>
            </article>
        </div>
        <div class="col-l-3 col-4 col-m-6">
            <article class="paper-card">
                <header class="paper-card__header" style="background-image:url(img/placeholder/4.jpg);">
                    <h2 class="paper-card__header--text">Article header</h2>
                </header>
                <footer class="paper-card__footer">
                    <a href="#">Article Footer</a>
                </footer>
            </article>
        </div>
        <div class="col-l-3 col-4 col-m-6">
            <article class="paper-card paper-card--no-image">
                <main class="paper-card__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque animi eos sint ipsum laborum, ab autem nostrum explicabo omnis, quos.</p>
                </main>
                <footer class="paper-card__footer">
                    <a href="#">Article Footer</a>
                </footer>
            </article>
        </div>
    </div>
</div>
<script>
    var menuToggle = document.getElementById("menu-toggle");
    menuToggle.addEventListener("click", function(){
        var navbar = document.getElementById("navbar");
        
        if(navbar.className.split(" ").indexOf('active') > -1){
            var cls = navbar.className.split(" ");
            var a = cls.indexOf("active");
            cls.splice(a, 1);
            navbar.className = cls.join(" ");
        } else {
            navbar.className = navbar.className + " active";
        }
    });
    
    
</script>
</body>
</html>