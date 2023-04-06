<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function name($nome)
    {
        if (strlen($nome) < 3  || (is_numeric($nome))) {
            echo 'Insira um nome válido';
        } else {
            echo 'Olá ' . $nome . ' seja bem-vindo ao meu site';
        }
    }

    public function contas($numero1, $numero2, $operacao = '')
    {
        switch ($operacao) {
            case "soma":
                $resultado = $numero1 + $numero2;
                echo 'Soma : ' . $resultado;
                break;
            case 'subtração':
                $resultado = $numero1 - $numero2;
                echo 'Subtração :' . $resultado;
                break;
            case 'multiplicação':
                $resultado = $numero1 * $numero2;
                echo 'Multiplicação: ' . $resultado;
                break;
            case 'divisão':
                $resultado = $numero1 / $numero2;
                echo 'Divisão: ' . $resultado;
                break;
            case '':
                $resultado = $numero1 + $numero2;
                echo 'Soma: ' . $resultado;
                $resultado = $numero1 - $numero2;
                echo '</br>Subtração: ' . $resultado;
                $resultado = $numero1 * $numero2;
                echo '</br>Multiplicação: ' . $resultado;
                $resultado = $numero1 / $numero2;
                echo '</br>Divisão: ' . $resultado;
                break;
        }
    }

    // public  function years(int $ano, int $mes = 0, int $dia = 0){
    //     $entrada = new DateTime('now');
    //     $saida = new DateTime('$ano-$mes-$dia');
    //     $idade = $entrada->diff($saida);
    //     dd($entrada);
    //     if ($entrada->format('Y') >= $saida->format('Y')) {
    //         echo 'Insira uma idade valida';
    //     } elseif ($dia == 0 && $mes != 0) {
    //         echo 'Você tem ' . $idade->y . ' anos ' . $idade->m . ' meses';
    //     } elseif ($mes == 0) {
    //         echo 'Você tem ' . $idade->y . ' anos';
    //     } else {
    //         echo 'Você tem ' . $idade->y . ' anos ' . $idade->m . ' meses e ' . $idade->d . ' dias';
    //     }
    // }
}
