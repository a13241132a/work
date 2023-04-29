<?php
    // 段と列を指定して、九九の計算結果を取得する関数
    function get_product($row, $col) {
        return $row . '*' . $col . '=' . ($row * $col);
    }
    // 段と開始列、終了列を指定して、指定された段の九九の計算結果を配列で取得する関数
    function get_product_array($row, $start_col, $end_col) {
        $product_array = array();
        for($col = $start_col; $col <= $end_col; $col++) {
            $product = get_product($row, $col);
            array_push($product_array, $product);
        }
        return $product_array;
    }
    // 開始段、終了段、開始列、終了列を指定して、指定された範囲の九九表を2次元配列で取得する関数
    function get_product_matrix($start_row, $end_row, $start_col, $end_col) {
        $product_matrix = array();
        for($row = $start_row; $row <= $end_row; $row++) {
            $product_array = get_product_array($row, $start_col, $end_col);
            array_push($product_matrix, $product_array);
        }
        return $product_matrix;
    }
    // 作成したget_product_matrix関数をここで呼び、戻り値を変数$product_arrayに格納しましょう。
    $product_array = get_product_matrix(6, 7, 1, 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>九九表</title>
    <link rel="stylesheet" href="practice.css">
</head>
<body>
    <table class="product_matrix">
        <?php foreach($product_array as $product_row): ?>
            <tr>
                <?php foreach($product_row as $product): ?>
                    <td><?php echo $product; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>