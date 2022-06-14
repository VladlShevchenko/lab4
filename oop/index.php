<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basics</title>
    <style>
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Синтаксис PHP</h1>
    <hr>
    <p>
        <?php echo "Default echo" ?>
    </p>
    <p>
        <?= "Signs" ?>
    </p>
    <p>
        <?php print "Print" ?>
    </p>
    <hr>
    <p>
        <?php
        $arr = array('r' => 'red', 'g' => 'green', 'b' => array('blue', 'brown', 'black'));
        print_r($arr);
        ?>
    </p>
    <hr>
    <h2>Основні операції із змінними</h2>
    <hr>
    <?php
    $plan = "Довга перспектива";
    $plan_definition = "Для пасивних користувачів";
    $is_booked = true;
    $plan_price = 100;
    $durability = 4;

    ?>
    <p>
        <?php
        echo "Сума = $plan_price * $durability $";
        ?>
    </p>
    <p>
        <?php
        echo "До сплати за " . $durability . " роки всього: " . $plan_price * $durability . "$";
        ?>
    </p>
    <hr>
    <p><?= ($is_booked ? "План заброньований" : "План ще не заброньований") ?></p>
    <p><?php
        const price = "700";
        echo price;
        ?>
    </p>
    <hr>
    <h2>Робота з строками</h2>
    <hr>
    <?php
    $test_string = "Для багатьох акаунтів";
    $test_string_eng = "For many accounts";
    $words = explode(" ", $test_string);
    $test_array = ["Для", "одного", "акаунту"];
    $php_str = implode(" ", $test_array);
    ?>
    <p>
        <?= strlen($test_string_eng) ?>
    </p>
    <p>
        <?= substr($test_string_eng, 3,4) ?>
    </p>
    <p>
        <?= print_r($words) ?>
    </p>
    <p>
        <?= $php_str ?>
    </p>
    <hr>
    <h2>Робота з масивами</h2>
    <hr>
    <?php
    $array_num = [1, 2, 3, 4];
    $test_arr = array('r' => 'red', 'g' => 'green', 'b' => array('blue', 'brown', 'black'));
    $array_plans = [["plan_name" => "Довга перспектива", "plan_description" => "Для пасивних користувачів", "plan_price" => 100, "plan_durability" => 2],
        ["plan_name" => "Найбільш популярний", "plan_description" => "Для активних користувачів", "plan_price" => 200, "plan_durability" => 3],
        ["plan_name" => "Для 2+ користувачів", "plan_description" => "Для багатьох акаунтів", "plan_price" => 300, "plan_durability" => 4]];

    ?>
    <pre><?php print_r($array_num) ?></pre>
    <pre><?php var_export($test_arr) ?></pre>

    <pre><?php print_r($test_arr) ?></pre>
    <pre><?php print_r($array_plans) ?></pre>
    <hr>
    <h2>Робота з циклами</h2>
    <hr>
    <div>
        <?php
        for ($i = 0; $i < 4; $i++): ?>
            <div>Some print</div>
        <?php endfor; ?>
        <br>
        <?php
        for ($i = 4; $i > 0; $i--): ?>
            <div>Another print</div>
        <?php endfor; ?>

        <hr>

        <?php foreach ($array_plans as $plan1): ?>
            <pre><?= $plan1['plan_name'] . "\nОпис: " . $plan1['plan_description'] . "\nЦіна:" . $plan1['plan_price'] . "\n" ?></pre>
        <?php endforeach ?>
        <hr>

    </div>
    <hr>
    <h2>Використання функцій</h2>
    <hr>
    <?php
    function amount_order($plans)
    {
        $total_sum = 0;
        foreach ($plans as $plan) {
            $total_sum += $plan['plan_price'] * $plan['plan_durability'];
        }
        return $total_sum;
    }

    echo "Загальна сума: " . amount_order($array_plans);
    ?>
    <hr>
</div>
</body>
</html>

