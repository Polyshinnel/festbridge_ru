<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('page_description');
            $table->timestamps();
        });

        $dataItems = [
            [
                'page_title' => 'Fest Bridge East - эвенты, запоминающиеся на всю жизнь',
                'page_description' => 'Fest Bridge East - международная компания, организующая эвенты в ОАЭ. Мы превращаем любое мероприятие в запоминающееся на всю жизнь событие.',
            ],
            [
                'page_title' => 'Fest Bridge East | Корпоративные мероприятия',
                'page_description' => 'Многолетний опыт и профессиональная команда позволяют нам проводить яркие корпоративные мероприятия любого масштаба. ',
            ],
            [
                'page_title' => 'Fest Bridge East | Фестивали',
                'page_description' => 'Сотрудничество с творческими коллективами и музыкантами по всему миру и тесное взаимодействия с государственными органами дают нам возможность организовывать как глобальные международные фестивали, так и локальные культурные мероприятия.',
            ],
            [
                'page_title' => 'Fest Bridge East | Спортивные программы',
                'page_description' => 'Наша энергичная команда с глубокой спортивной экспертизой организуют для вашей компании корпоративный турнир и чемпионат по любым видам спорта.',
            ],
            [
                'page_title' => 'Fest Bridge East | Семейные торжества',
                'page_description' => 'Семья - это самое главное. Именно поэтому мы подходим к организации любого семейного мероприятия, будь то свадьба или День Рождения, как к самому важному событию в вашей жизни.',
            ],
            [
                'page_title' => 'Fest Bridge East | Ретриты',
                'page_description' => 'Иногда нам всем требуется духовное и физическое восстановление. Наши ретриты в живописнейших уголках ОАЭ помогут вам полностью перезагрузиться через проработки мышления, телесные практики и воссоединение с природой.',
            ],
            [
                'page_title' => 'Fest Bridge East | Контакты',
                'page_description' => 'Хотите организовать запоминающийся эвент или яркое культурное мероприятие? Свяжитесь с нами любым удобным способом или заполните форму обратной связи.',
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('pages')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
