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
        Schema::create('main_page_texts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('text');
            $table->timestamps();
        });

        $dataItems = [
            [
                'type' => 'about_title',
                'text' => 'О КОМПАНИИ'
            ],
            [
                'type' => 'about_subtitle',
                'text' => 'Fest Bridge East - международная компания, организующая эвенты в ОАЭ. Мы превращаем любое мероприятие в запоминающееся на всю жизнь событие.'
            ],
            [
                'type' => 'counter',
                'text' => '5'
            ],
            [
                'type' => 'counter_subtitle',
                'text' => 'лет на рынке'
            ],
            [
                'type' => 'counter',
                'text' => '70'
            ],
            [
                'type' => 'counter_subtitle',
                'text' => 'мероприятий'
            ],
            [
                'type' => 'counter',
                'text' => '15 000'
            ],
            [
                'type' => 'counter_subtitle',
                'text' => 'участников'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('main_page_texts')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page_texts');
    }
};
