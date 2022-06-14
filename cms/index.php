<?php
include_once "./elements/head.php" ?>
<body>
<?php include_once "./elements/header.php" ?>
<main class="main">
    <?php
    $pages_array = ['faq', 'index', 'plans'];
    $page = trim(strip_tags($_GET['page']));
    if (!$page) {
        include_once "./pages/index.php";
    }
    elseif (!in_array($page, $pages_array)) {
        echo "<p class='not-found'>Page not found</p>";
    }
    else {
        include_once "./pages/$page.php";
    }
    ?>
</main>
<?php include_once "./elements/footer-links.php" ?>
<?php include_once "./elements/footer.php" ?>
</body>
