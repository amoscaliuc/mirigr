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
                "name" => "Строитель Королевства",
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
                "name" => "Станбул: Письма и Печати + Мокко и Бакшиш",
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
            ],
            [
                "name" => "Пять Племен: The Artisans of Naqala + Whims Of The Sultan",
                "description" => "
                    Пять племен – экономическая стратегия, в которой есть все: аукцион, планирование, взаимодействие, сбор сетов, перемещение рабочих, очки за все, что происходит в игре и элегантная механика. Экономическая евро-стратегия, в которой предстоит вступить в предвыборную борьбу за кресло Султана.  
                ",
                "type" => 2,
                "number_of_players" => "2-4",
                "age" => "от 13+",
                "publish_year" => "2014",
                "time" => "~60+",
                "language" => "Языконезависимая",
                "image" => "five_tribes.jpg",
                "tesera_url" => "http://tesera.ru/game/5tribes/",
                "youtube_url" => "https://www.youtube.com/embed/wBxJurJO3Og",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => "7 Чудес: Города + Вавилон",
                "description" => "
                    Настольная игра 7 Чудес (7 Wonders) очередная веха в эволюции настольных игр. Эдакая изящная Цивилизация лайт в хорошем смысле слова. Механика игры построена на драфте (выбираем карту из набора и передаем соседу, при этом получаем от другого соседа его набор карт - и так по кругу).  
                ",
                "type" => 1,
                "number_of_players" => "2-7",
                "age" => "от 10+",
                "publish_year" => "2010",
                "time" => "~40+",
                "language" => "Языконезависимая",
                "image" => "7wonders.jpg",
                "tesera_url" => "http://tesera.ru/game/7_wonders/",
                "youtube_url" => "https://www.youtube.com/embed/sutpd1jYg00",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => "Андор + Легенда о Звёздном щите",
                "description" => "
                    Настольная игра «Андор» переносит ее участников в волшебный мир, которому нужна помощь в борьбе с существами, захватившими Королевство Андор. Игра предлагает игрокам, объединить совместные усилия, распределяя задания, противостоять надвигающейся опасности. Волшебный мир «Андор» представлен множеством обитателей добрых и злых сил. В противостоянии придется встретиться с многочисленными группами Горов и Скарлей, могучими Вардраками и Магами. Но в нелегкой борьбе можно ждать помощи от местных жителей – Ведьм, Гномов, принца Торальда.  
                ",
                "type" => 3,
                "number_of_players" => "2-4",
                "age" => "от 10+",
                "publish_year" => "2012",
                "time" => "~60+",
                "language" => "Русская",
                "image" => "andor.jpg",
                "tesera_url" => "http://tesera.ru/game/die_legenden_von_andor/",
                "youtube_url" => "https://www.youtube.com/embed/V_F-Bo1bP2g",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => "Билет На Поезд - Европа",
                "description" => "
                    «Билет на поезд: Европа» представляет собой стратегическую настольную игру на строительство железных дорог. Данное издание продолжает серию игр «Билет на поезд», действия которых разворачиваются в различных частях света. Сюжет этой игры переносит участников в атмосферу капиталистической Европы начала прошлого столетия.  
                ",
                "type" => 2,
                "number_of_players" => "2-5",
                "age" => "от 8+",
                "publish_year" => "2005",
                "time" => "~60+",
                "language" => "Языконезависимая",
                "image" => "ticket.jpg",
                "tesera_url" => "http://tesera.ru/game/ticket_to_ride_europe/",
                "youtube_url" => "https://www.youtube.com/embed/h64BXs3up08",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => "Доминион",
                "description" => "
                    «Доминион» - настольная карточная игра с интересной механикой. Это игра для всей семьи.  В ходе игры постоянно нужно пополнять колоду, наполняя ее различными картами, которые несут различные действия и возможности. Ну, к примеру, это может быть карта со специальными возможностями, при помощи которой можно купить другую карту или заработать победные очки.  
                ",
                "type" => 2,
                "number_of_players" => "2-4",
                "age" => "от 8+",
                "publish_year" => "2008",
                "time" => "~40+",
                "language" => "Русская",
                "image" => "dominion.jpg",
                "tesera_url" => "http://tesera.ru/game/dominion/",
                "youtube_url" => "https://www.youtube.com/embed/jVnkflVXSyM",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => "Путешествия Марко Поло",
                "description" => "
                    Великолепная комбинация игровых механик, сделала настольную игру The Voyages of Marco Polo одной из лучших в мире. Множество мировых наград и премий, которые получила эта игра, отданы ей по праву и мы в этом убедились буквально с первой партии. Здесь каждый найдет что-то свое любимое: размещение работников, выполнение тайных целей, постепенное открытие действий и т.д. Игра отличается несимметричностью персонажей и высокой степенью реиграбельности. В путешествия по миру просто невозможно наиграться.  
                ",
                "type" => 1,
                "number_of_players" => "2-4",
                "age" => "от 12+",
                "publish_year" => "2015",
                "time" => "~60+",
                "language" => "Русская",
                "image" => "marco.jpg",
                "tesera_url" => "http://tesera.ru/game/the_voyages_of_marco_polo/",
                "youtube_url" => "https://www.youtube.com/embed/_d7UdfDMnng",
                "created_at" => $now,
                "updated_at" => $now
            ]
        ];
    }
}
