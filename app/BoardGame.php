<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardGame extends Model
{
    protected $table = "board_games";

    /**
     * Get Board Game Type
     *
     * @return array
     */
    public static function getTypes()
    {
        return [
            1 => 'Экономическая',
            2 => 'Стратегическая',
            3 => 'Кооперативная',
            4 => 'Абстрактная',
            5 => 'Дуэльная'
        ];
    }
}
