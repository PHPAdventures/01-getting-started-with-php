<?php include '../templates/head.php'; ?>
<?php include '../templates/navigation.php'; ?>

    <form method="POST" action="/calculator.php">
        <input id="num_1" type="number" name="num_1" value="<?= $_POST['num_1'] ?>" required>
        +
        <input id="num_2" type="number" name="num_2" value="<?= $_POST['num_2'] ?>" required>
        =
        <output name="sum" for="num_1 num_2">
            <?= $_POST['num_1'] + $_POST['num_2'] ?>
        </output>
        <input type="submit" value="Calculate Sum">
    </form>

<?php include '../templates/footer.php'; ?>