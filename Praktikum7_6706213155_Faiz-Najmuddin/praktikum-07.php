<?php

# Soal 1
echo "Soal 1 :";
$string = "D3 Rekayasa Perangkat Lunak Aplikasi";
echo "<br>" . substr($string, -33);
echo "<br>" . substr($string, 27);
echo "<br>" . substr($string, 3, -8);
echo "<br>";

# Soal 2
echo "<br>" . "Soal 2 :";
$strings = array(
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
);
#contoh1
/*$strings[0] = str_replace('Abdullah','Abdurrahman',$strings[0]);
$strings[1] = str_replace('kucing','bebek',$strings[1]);
$strings[1] = str_replace('lucu','gemuk',$strings[1]);
$strings[2] = str_replace('bermain','berenang',$strings[2]);*/

#contoh2
$find = array(
    'Abdullah',
    'kucing',
    'lucu',
    'bermain'
);
$replace = array(
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
);

$strings = str_replace($find, $replace, $strings);

foreach ($strings as $value) {
    echo "<br>" . $value;
}
echo "<br>";
# Soal 3
echo nl2br("\n" . "Soal 3 :");
$str = 'My Password';
$user = 'username';

printf("<br> crc32 hash dari %s adalah %s", $str, crc32($str . $user));
printf("<br> md5 hash dari %s adalah %s", $str, md5($str . $user));
printf("<br> sha256 hash dari %s adalah %s", $str, hash('sha256', $user . $str));
echo "<br>";

# Soal 4
echo "<br> Soal 4 : <br>";

function cekPrima($n, $m)
{

    if ($m < $n)
        echo 'jangkauan nilai salah (i.e cekPrima(1,5))';
    else {
        $num = 0;
        for ($i = $n; $i <= $m; $i++) {
            if (isPrime($i)) {
                echo "$i, ";
                $num++;
            }
        }
    }
    echo "<br>ditemukan $num bilangan prima";
}

function isPrime($n)
{
    if ($n == 1) {
        return 0;
    } else {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0)
                return 0;
        }
        return 1;
    }
}

cekPrima(20, 100);












