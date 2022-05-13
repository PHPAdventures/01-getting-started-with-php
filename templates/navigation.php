<?php
$links = array(
    'Home' => '/home.php',
    'About' => '/about.php',
    'Calculator' => '/calculator.php',
);
?>

    <nav>
        <h2>Web Site Navigation</h2>
        <ul>
            <?php foreach($links as $name => $url) : ?>
                <li>
                    <a href="<?= $url ?>">
                        <?= $name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
