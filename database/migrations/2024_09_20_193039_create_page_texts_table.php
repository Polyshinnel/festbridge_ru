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
        Schema::create('page_texts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('lang');
            $table->string('type');
            $table->text('text');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages');
        });

        $dataItems = [
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'Корпоративные мероприятия'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Многолетний опыт и профессиональная команда позволяют нам проводить яркие корпоративные мероприятия любого масштаба.'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Мы поднимаем корпоративный дух,чтобы поднимались ваши прибыли'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Корпоративы'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Тим-билдинги'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Выставки'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Кейтеринг'
            ],

            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'Фестивали'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Сотрудничество с творческими коллективами и музыкантами по всему миру и тесное взаимодействия с государственными органами дают нам возможность организовывать как глобальные международные фестивали, так и локальные культурные мероприятия.'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Сотрудничаем с творческими коллективами и музыкантами по всему миру'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Фестивали'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Культурные события'
            ],

            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'Спортивные программы'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Наша энергичная команда с глубокой спортивной экспертизой организуют для вашей компании корпоративный турнир и чемпионат по любым видам спорта.'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Корпоративные турниры и чемпионаты по любым видам спорта'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Корпоративные турниры'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Бизнес-соревнования'
            ],

            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'Семейные торжества'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Семья - это самое главное. Именно поэтому мы подходим к организации любого семейного мероприятия, будь то свадьба или День Рождения, как к самому важному событию в вашей жизни.'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Организуем каждое семейное мероприятие как самое важное в вашей жизни'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Свадьбы'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Дни рождения'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Детские праздники'
            ],

            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'Ретриты'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Иногда нам всем требуется духовное и физическое восстановление. Наши ретриты в живописнейших уголках ОАЭ помогут вам полностью перезагрузиться через проработки мышления, телесные практики и воссоединение с природой.'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Полная перезагрузка через проработку мышления и телесные практики'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Частные ретриты'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Корпоративные Ретриты'
            ]
        ];

        foreach ($dataItems as $item) {
            DB::table('page_texts')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_texts');
    }
};
