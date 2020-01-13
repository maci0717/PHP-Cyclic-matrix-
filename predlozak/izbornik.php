<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
<div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
    <li><a href="index.php">Početna</a></li>
    <li>
        <a href="#">Zimski Zadaci</a>
        <ul class="menu vertical">
            <li><a href="zimskizad1.php">Zadatak 1</a></li>
            <li><a href="zimskizad2.php">Zadatak 2</a></li>
            <li><a href="zimskizad3.php">Zadatak 3</a></li>
            <li><a href="zimskizad4.php">Zadatak 4</a></li>
            <li><a href="cyclicMatrix.php">Cyclic Matrix</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Project Euler</a>
        <ul class="menu vertical">
            <li><a href="Problem1.php">Problem 1</a></li>
            <li><a href="Problem2.php">Problem 2</a></li>
            <li><a href="Problem3.php">Problem 3 (Prosti faktori) </a></li>  
            <li><a href="Problem4.php">Problem 4</a></li>
            <li><a href="Problem5.php">Problem 5</a></li>
            <li><a href="Problem6.php">Problem 6</a></li>
            <li><a href="Problem7.php">Problem 7</a></li>
            <li><a href="Problem8.php">Problem 8</a></li>
        </ul>
    </li>
    </ul>
</div>
</div>
<!-- Kraj izbornik -->