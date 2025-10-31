<?php
// Задание 1
$products = [
    [
        'name'      => 'Сухой корм для котят',
        'category'  => 'Корма',
        'price'     => '550',
        'brand'     => 'Purina',
        'imageUrl'  => '<image>food1.jpg',
        'stock'     => true,
        'offer'     => 'Скидка 10%'
    ],
    [
        'name'      => 'Влажный корм с тунцом',
        'category'  => 'Корма',
        'price'     => '95',
        'brand'     => 'МНЯМС',
        'imageUrl'  => '<image>food2.jpg',
        'stock'     => true,
        'offer'     => ''
    ],
    [
        'name'      => 'Корм для стерилизованных котов',
        'category'  => 'Корма',
        'price'     => '1992',
        'brand'     => 'K&Dpet',
        'imageUrl'  => '<image>food3.jpg',
        'stock'     => false,
        'offer'     => ' '
    ],
    [
        'name'      => 'Мышка на верёвочке',
        'category'  => 'Игрушки',
        'price'     => '180',
        'brand'     => 'joom',
        'imageUrl'  => '<image>toy1.jpg',
        'stock'     => true,
        'offer'     => ''
    ],
    [
        'name'      => 'Лазерная указка',
        'category'  => 'Игрушки',
        'price'     => '290',
        'brand'     => 'Счастливый кот',
        'imageUrl'  => '<image>toy2.jpg',
        'stock'     => true,
        'offer'     => 'Скидка 5%'
    ],
    [
        'name'      => 'Когтеточка',
        'category'  => 'Игрушки',
        'price'     => '1200',
        'brand'     => 'Расдостный кот',
        'imageUrl'  => '<image>toy3.jpg',
        'stock'     => false,
        'offer'     => ''
    ],
    [
        'name'      => 'Лежанка',
        'category'  => 'Аксессуары',
        'price'     => '950',
        'brand'     => 'Улыбчивый кот',
        'imageUrl'  => '<image>accessory1.jpg',
        'stock'     => true,
        'offer'     => 'Скидка 20%'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зоомагазин для котов</title>
</head>
<body>
    <!-- ЗАДАНИЕ 2 -->
    <div class="section">
        <?php array_map(function($p) {
            echo "{$p['name']} - {$p['category']} - {$p['brand']} {$p['price']}р<br>";
        }, $products); ?>
    </div>

    <!-- ЗАДАНИЕ 3 -->
    <?php
    $sortedProducts = $products;
    usort($sortedProducts, function($a, $b) {
        return $a['price'] <=> $b['price'];
    });
    echo "<table>";
    echo "<tr>
        <th>Наименование</th>
        <th>Категория</th>
        <th>Бренд</th>
        <th>Цена</th>
    </tr>";
    $rows = array_map(function($p) {
        return "<tr>
            <td>{$p['name']}</td>
            <td>{$p['category']}</td>
            <td>{$p['brand']}</td>
            <td>{$p['price']} руб.</td>
        </tr>";
    }, $sortedProducts);
    echo implode("", $rows);
    echo "</table>";
    ?>

<!-- ЗАДАНИЕ 4 -->
    <div class="section">
        <form method="GET">
            <select name="cat" required>
                <option value="">-- Выберите категорию --</option>
                <?php
                $categories = array_unique(array_column($products, 'category'));
                foreach ($categories as $cat) {
                    $selected = ($_GET['cat'] ?? '') === $cat ? 'selected' : '';
                    echo "<option value='$cat' $selected>$cat</option>";
                }
                ?>
            </select>
            <button type="submit">Показать</button>
        </form>

        <?php
        if (!empty($_GET['cat'])) {
            $cat = $_GET['cat'];
            $found = false;
            echo "<table><tr><th>Наименование</th><th>Бренд</th><th>Цена</th></tr>";
            foreach ($products as $p) {
                if ($p['category'] === $cat) {
                    $found = true;
                    echo "<tr>
                        <td>" . htmlspecialchars($p['name']) . "</td>
                        <td>" . htmlspecialchars($p['brand']) . "</td>
                        <td>{$p['price']}р</td>
                    </tr>";
}
            }
            echo "</table>";
            if (!$found) {
                echo "<p>В категории пока нет товаров</p>";
            }
            if (!in_array($cat, $categories)) {
                echo "<p>Ничего не найдено</p>";
            }
        }
        ?>
    </div>
<!-- ЗАДАНИЕ 5 -->


</body>
</html>