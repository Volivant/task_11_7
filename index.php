<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблицы PHP</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>
<body>
    <!--First table -->
    <div>
        <table>
            <caption>Таблица истинности PHP</caption>
            <tr>
                <th class="tab1">A</th> 
                <th class="tab1">B</th> 
                <th class="tab1">!A</th> 
                <th class="tab1">A || B</th> 
                <th class="tab1">A && B</th> 
                <th class="tab1">A xor B</th>
            </tr>
            <tr>
                <td><?php $a = 0; echo $a;?></td> 
                <td><?php $b = 0; echo $b;?></td> 
                <td><?php echo !$a;?></td> 
                <td><?php echo (int)($a || $b);?></td> 
                <td><?php echo (int)($a && $b);?></td> 
                <td><?php echo (int)($a xor $b);?></td>
            </tr>
            <tr>
                <td><?php $a = 0; echo $a;?></td> 
                <td><?php $b = 1; echo $b;?></td> 
                <td><?php echo !$a;?></td> 
                <td><?php echo (int)($a || $b);?></td> 
                <td><?php echo (int)($a && $b);?></td> 
                <td><?php echo (int)($a xor $b);?></td>
            </tr>
            <tr>
                <td><?php $a = 1; echo $a;?></td> 
                <td><?php $b = 0; echo $b;?></td> 
                <td><?php echo (int)!$a;?></td> 
                <td><?php echo (int)($a || $b);?></td> 
                <td><?php echo (int)($a && $b);?></td> 
                <td><?php echo (int)($a xor $b);?></td>
            </tr>
            <tr>
                <td><?php $a = 1; echo $a;?></td> 
                <td><?php $b = 1; echo $b;?></td> 
                <td><?php echo (int)!$a;?></td> 
                <td><?php echo (int)($a || $b);?></td> 
                <td><?php echo (int)($a && $b);?></td> 
                <td><?php echo (int)($a xor $b);?></td>
            </tr>
        </table>
    </div>

    <!--Second table -->
    <div>
        <table>
            <caption>Таблица гибкое сравнение в PHP</caption>
            <?php
                $a1 = true;
                $a2 = false;
                $a3 = 1;
                $a4 = 0;
                $a5 = -1;
                $a6 = "1";
                $a7 = null;
                $a8 = "php";
            ?>
            <tr>
                <th class="tab2"></th>
                <th class="tab2">true</th> 
                <th class="tab2">false</th> 
                <th class="tab2">1</th> 
                <th class="tab2">0</th> 
                <th class="tab2">-1</th> 
                <th class="tab2">"1"</th>
                <th class="tab2">null</th>
                <th class="tab2">"php"</th>
            </tr>
            <tr>
                <td>true</td> 
                <td><?php var_dump($a1 == $a1);?></td> 
                <td><?php var_dump($a1 == $a2);?></td> 
                <td><?php var_dump($a1 == $a3);?></td> 
                <td><?php var_dump($a1 == $a4);?></td> 
                <td><?php var_dump($a1 == $a5);?></td>
                <td><?php var_dump($a1 == $a6);?></td>
                <td><?php var_dump($a1 == $a7);?></td>
                <td><?php var_dump($a1 == $a8);?></td>
            </tr>
            <tr>
                <td>false</td> 
                <td><?php var_dump($a2 == $a1);?></td> 
                <td><?php var_dump($a2 == $a2);?></td> 
                <td><?php var_dump($a2 == $a3);?></td> 
                <td><?php var_dump($a2 == $a4);?></td> 
                <td><?php var_dump($a2 == $a5);?></td>
                <td><?php var_dump($a2 == $a6);?></td>
                <td><?php var_dump($a2 == $a7);?></td>
                <td><?php var_dump($a2 == $a8);?></td>
            </tr>
            <tr>
                <td>1</td> 
                <td><?php var_dump($a3 == $a1);?></td> 
                <td><?php var_dump($a3 == $a2);?></td> 
                <td><?php var_dump($a3 == $a3);?></td> 
                <td><?php var_dump($a3 == $a4);?></td> 
                <td><?php var_dump($a3 == $a5);?></td>
                <td><?php var_dump($a3 == $a6);?></td>
                <td><?php var_dump($a3 == $a7);?></td>
                <td><?php var_dump($a3 == $a8);?></td>
            </tr>
            <tr>
                <td>0</td> 
                <td><?php var_dump($a4 == $a1);?></td> 
                <td><?php var_dump($a4 == $a2);?></td> 
                <td><?php var_dump($a4 == $a3);?></td> 
                <td><?php var_dump($a4 == $a4);?></td> 
                <td><?php var_dump($a4 == $a5);?></td>
                <td><?php var_dump($a4 == $a6);?></td>
                <td><?php var_dump($a4 == $a7);?></td>
                <td><?php var_dump($a4 == $a8);?></td>
            </tr>
            <tr>
                <td>-1</td> 
                <td><?php var_dump($a5 == $a1);?></td> 
                <td><?php var_dump($a5 == $a2);?></td> 
                <td><?php var_dump($a5 == $a3);?></td> 
                <td><?php var_dump($a5 == $a4);?></td> 
                <td><?php var_dump($a5 == $a5);?></td>
                <td><?php var_dump($a5 == $a6);?></td>
                <td><?php var_dump($a5 == $a7);?></td>
                <td><?php var_dump($a5 == $a8);?></td>
            </tr>
            <tr>
                <td>"1"</td> 
                <td><?php var_dump($a6 == $a1);?></td> 
                <td><?php var_dump($a6 == $a2);?></td> 
                <td><?php var_dump($a6 == $a3);?></td> 
                <td><?php var_dump($a6 == $a4);?></td> 
                <td><?php var_dump($a6 == $a5);?></td>
                <td><?php var_dump($a6 == $a6);?></td>
                <td><?php var_dump($a6 == $a7);?></td>
                <td><?php var_dump($a6 == $a8);?></td>
            </tr>
            <tr>
                <td>null</td> 
                <td><?php var_dump($a7 == $a1);?></td> 
                <td><?php var_dump($a7 == $a2);?></td> 
                <td><?php var_dump($a7 == $a3);?></td> 
                <td><?php var_dump($a7 == $a4);?></td> 
                <td><?php var_dump($a7 == $a5);?></td>
                <td><?php var_dump($a7 == $a6);?></td>
                <td><?php var_dump($a7 == $a7);?></td>
                <td><?php var_dump($a7 == $a8);?></td>
            </tr>
        </table>
    </div>

    <!--Third table -->
    <div>
        <table>
            <caption>Таблица жесткое сравнение в PHP</caption>
            <tr>
                <th class="tab2"></th>
                <th class="tab2">true</th> 
                <th class="tab2">false</th> 
                <th class="tab2">1</th> 
                <th class="tab2">0</th> 
                <th class="tab2">-1</th> 
                <th class="tab2">"1"</th>
                <th class="tab2">null</th>
                <th class="tab2">"php"</th>
            </tr>
            <tr>
                <td>true</td> 
                <td><?php var_dump($a1 === $a1);?></td> 
                <td><?php var_dump($a1 === $a2);?></td> 
                <td><?php var_dump($a1 === $a3);?></td> 
                <td><?php var_dump($a1 === $a4);?></td> 
                <td><?php var_dump($a1 === $a5);?></td>
                <td><?php var_dump($a1 === $a6);?></td>
                <td><?php var_dump($a1 === $a7);?></td>
                <td><?php var_dump($a1 === $a8);?></td>
            </tr>
            <tr>
                <td>false</td> 
                <td><?php var_dump($a2 === $a1);?></td> 
                <td><?php var_dump($a2 === $a2);?></td> 
                <td><?php var_dump($a2 === $a3);?></td> 
                <td><?php var_dump($a2 === $a4);?></td> 
                <td><?php var_dump($a2 === $a5);?></td>
                <td><?php var_dump($a2 === $a6);?></td>
                <td><?php var_dump($a2 === $a7);?></td>
                <td><?php var_dump($a2 === $a8);?></td>
            </tr>
            <tr>
                <td>1</td> 
                <td><?php var_dump($a3 === $a1);?></td> 
                <td><?php var_dump($a3 === $a2);?></td> 
                <td><?php var_dump($a3 === $a3);?></td> 
                <td><?php var_dump($a3 === $a4);?></td> 
                <td><?php var_dump($a3 === $a5);?></td>
                <td><?php var_dump($a3 === $a6);?></td>
                <td><?php var_dump($a3 === $a7);?></td>
                <td><?php var_dump($a3 === $a8);?></td>
            </tr>
            <tr>
                <td>0</td> 
                <td><?php var_dump($a4 === $a1);?></td> 
                <td><?php var_dump($a4 === $a2);?></td> 
                <td><?php var_dump($a4 === $a3);?></td> 
                <td><?php var_dump($a4 === $a4);?></td> 
                <td><?php var_dump($a4 === $a5);?></td>
                <td><?php var_dump($a4 === $a6);?></td>
                <td><?php var_dump($a4 === $a7);?></td>
                <td><?php var_dump($a4 === $a8);?></td>
            </tr>
            <tr>
                <td>-1</td> 
                <td><?php var_dump($a5 === $a1);?></td> 
                <td><?php var_dump($a5 === $a2);?></td> 
                <td><?php var_dump($a5 === $a3);?></td> 
                <td><?php var_dump($a5 === $a4);?></td> 
                <td><?php var_dump($a5 === $a5);?></td>
                <td><?php var_dump($a5 === $a6);?></td>
                <td><?php var_dump($a5 === $a7);?></td>
                <td><?php var_dump($a5 === $a8);?></td>
            </tr>
            <tr>
                <td>"1"</td> 
                <td><?php var_dump($a6 === $a1);?></td> 
                <td><?php var_dump($a6 === $a2);?></td> 
                <td><?php var_dump($a6 === $a3);?></td> 
                <td><?php var_dump($a6 === $a4);?></td> 
                <td><?php var_dump($a6 === $a5);?></td>
                <td><?php var_dump($a6 === $a6);?></td>
                <td><?php var_dump($a6 === $a7);?></td>
                <td><?php var_dump($a6 === $a8);?></td>
            </tr>
            <tr>
                <td>null</td> 
                <td><?php var_dump($a7 === $a1);?></td> 
                <td><?php var_dump($a7 === $a2);?></td> 
                <td><?php var_dump($a7 === $a3);?></td> 
                <td><?php var_dump($a7 === $a4);?></td> 
                <td><?php var_dump($a7 === $a5);?></td>
                <td><?php var_dump($a7 === $a6);?></td>
                <td><?php var_dump($a7 === $a7);?></td>
                <td><?php var_dump($a7 === $a8);?></td>
            </tr>
        </table>
    </div>
    <div>
        Разница между гибким  и жестким сравнением в том, что гибкое сравнение сравнивает значения операндов, а жесткое сравнение кроме значений сравнивает типы операндов. 
    </div>
</body>
</html>
