<?php

declare(strict_types=1);

function isArmstrongNumber(int $number): bool
{
    $total = 0;
    $numberArray = str_split(strval($number));
    $numberCount = count($numberArray);

    foreach ($numberArray as $n) {
        $total += pow(intval($n), $numberCount);
    }

    return $total === $number;
}

$__in = json_decode('[0, 5, 10, 153, 100, 9474, 9475, 9926315, 9926314]', true);
$__out = [];
foreach ($__in as $x) {
  try { $__out[] = ["ok" => true, "v" => isArmstrongNumber($x)]; }
  catch (\Throwable $e) { $__out[] = ["ok" => false, "e" => get_class($e)]; }
}
echo json_encode(["out" => $__out]);
