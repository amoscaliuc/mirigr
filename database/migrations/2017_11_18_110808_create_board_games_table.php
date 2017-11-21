<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBoardGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('type')->default(1);
            $table->string('number_of_players');
            $table->string('age');
            $table->string('publish_year');
            $table->string('time');
            $table->string('language');
            $table->string('image');
            $table->string('tesera_url');
            $table->string('youtube_url');
            $table->timestamps();
        });

        DB::table('board_games')->insert($this->getGames());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board_games');
    }

    /**
     * Get an array of games
     *
     * @return array
     */
    private function getGames()
    {
        $now = \Carbon\Carbon::now();
        return [
            [
                "name" => "Kingdom Builder (Строитель Королевства)",
                "description" => "
                    Перед Вами красивая градостроительная игра с простыми правилами и интересным игровым процессом. В 2012 году Kingdom Builder признана лучшей игрой года в самой престижной настольной премии Spiel des Jahres, так что на нее стоит обратить внимание!<br>
                    Участники настольной игры Kingdom Builder будут застраивать собственные королевства: занимать земли и устанавливать на них поселения, которые, в свою очередь, будут приносить королевству прибыль. Владелец самого богатого королевства и станет победителем игры.
                ",
                "type" => 2,
                "number_of_players" => "2-4",
                "age" => "от 8+",
                "publish_year" => "2011",
                "time" => "~45",
                "language" => "Языконезависимая",
                "image" => "kingdom.jpg",
                "tesera_url" => "http://tesera.ru/game/kingdom_builder",
                "youtube_url" => "https://www.youtube.com/embed/aUVscbbRqAs",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => "Istanbul:  Brief & Siegel + Mocha & Baksheesh (Станбул: Письма и Печати + Мокко и Бакшиш)",
                "description" => "
                    Перед вами хорошая экономическая стратегия с внушительным списком наград. Вы ищите что-то особенное в игре, которое отличает ее от других - вы это найдете в игре Istanbul. Несложные правила, интересная механика, красивое оформление и хорошая реиграбельность - все это про настольную игру Istanbul. 
                ",
                "type" => 1,
                "number_of_players" => "2-5",
                "age" => "от 8+",
                "publish_year" => "2014",
                "time" => "~60",
                "language" => "Языконезависимая",
                "image" => "istanbul.jpg",
                "tesera_url" => "http://tesera.ru/game/Istanbul/",
                "youtube_url" => "https://www.youtube.com/embed/Cpx7dtQhQyQ",
                "created_at" => $now,
                "updated_at" => $now
            ]
        ];
    }
}
