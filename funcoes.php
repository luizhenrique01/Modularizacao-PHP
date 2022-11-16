<?php

function mediaPonderada (float $nota1, float $nota2, float $nota3): float
{
    return ($nota1 * 5) + ($nota2 * 3) + ($nota3 * 2) / 5 + 3 + 2;
}

function mediaAritimetica (float $nota1, float $nota2, float $nota3): float
{
    return ($nota1 + $nota2 + $nota3) / 3;
}
