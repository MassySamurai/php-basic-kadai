<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            $nums = [15, 4, 18, 23, 10 ];

            // 昇順表示
            sort_2way($nums);
            // 降順表示
            sort_2way($nums, false);

            function sort_2way($array, $order = true) {
                if ($order === true) {
                    echo '昇順にソートします。<br>';
                    sort($array);
                } else {
                    echo '降順にソートします。<br>';
                    rsort($array);
                }

                foreach ($array as $key => $val) {
                    echo "{$val}<br>";
                }
                return;
            }
        ?>
    </p>
</body>

</html>