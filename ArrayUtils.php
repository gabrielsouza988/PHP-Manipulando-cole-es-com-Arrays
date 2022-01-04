<?php

class ArrayUtils
{

    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo 'não foi encontrado no array';
        }
    }
}