<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategoriesForEnabled extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->boolean('enabled')->default(true)->after('type');
        });

        \App\Models\Category::where('type', 'servicio')->update(['enabled' => false]);

        $items = [
            [
                'slug' => 'encuestas',
                'title' => 'Encuestas',
                'body' => '<p style="text-align:justify"><strong>Primer paso que recorreremos.</strong></p><p>Las entrevistas sirven para reconocer las principales necesidades del ni&ntilde;o y de la familia.</p><p>&nbsp;</p><p>Trazaremos el comienzo de la intervenci&oacute;n.</p><p>&nbsp;</p><p>Dichas entrevistas pueden llevarse a cabo de manera presencial en el Centro Integral Eagle Sun y tambi&eacute;n de manera virtual.</p><p>&nbsp;</p><p>Duraci&oacute;n: 45 min.</p><p>&nbsp;</p><p><em>&iexcl;Siempre tendremos un espacio para ti. Cont&aacute;ctanos!</em></p>',
            ],
            [
                'slug' => 'evaluaciones',
                'title' => 'Evaluacion del Diagnóstico',
                'body' => '<p><strong>El segundo escal&oacute;n&hellip;</strong></p><p>Luego de ordenar la biolog&iacute;a es importante identificar que tipo de terapias son las ideales para cada uno de los ni&ntilde;os que forman parte de la familia Eagle Sun.</p><p>Puede iniciarse con una evaluaci&oacute;n del desarrollo global, para un diagnostico en el neurodesarrollo o para habilidades del desarrollo (lenguaje, adaptativas, motoras, sensoriales, entre otras&hellip;)</p><p>&nbsp;</p><p>Duraci&oacute;n: 1 hora o m&aacute;s dependiendo del tipo de evaluaci&oacute;n.</p>',
            ],
            [
                'slug' => 'terapia-ocupacional-s',
                'title' => 'Terapia Ocupacional',
                'body' => '<p style="text-align:justify">Es una disciplina que eval&uacute;a y realiza intervenci&oacute;n de las habilidades del desempe&ntilde;o (motoras, sensoriales, entre otras), de las actividades y ocupaciones de la vida cotidiana con el fin de incorporar de forma independiente al ni&ntilde;o en los contextos escoleres, familiares y la comunidad.</p>',
            ],
            [
                'slug' => 'terapia-lenguaje',
                'title' => 'Terapia del Lenguaje',
                'body' => '<p style="text-align:left">Eval&uacute;a, identifica, y orienta a los ni&ntilde;os con alteraciones en el habla, la voz, el lenguaje, la comunicaci&oacute;n u otros trastornos relacionados.</p><p>Gu&iacute;a y ense&ntilde;a a los ni&ntilde;os a aprender a comunicar sus necesidades y deseos de manera eficiente, desde diversos modelos de intervenci&oacute;n.</p>',
            ],
            [
                'slug' => 'terapia-cognitivo-conductual',
                'title' => 'Terapia Cognitivo Conductual',
                'body' => '<p style="text-align:left">Nuestros especialistas, analizan los comportamientos, revelando las habilidades y patrones de comportamiento, a trav&eacute;s de la observaci&oacute;n estructurada.</p><p>Gu&iacute;an y moldean el comportamiento de los ni&ntilde;os a trav&eacute;s de los enfoques: ESDM, TEACCH, FloorTime.</p>',
            ],
            [
                'slug' => 'terapia-fisica',
                'title' => 'Terapia Física',
                'body' => '<p style="text-align:left">Los movimientos motores, la coordinaci&oacute;n, el ritmo y la secuencia de los mismos, son importantes para la integraci&oacute;n del Sistema Nervioso Central. Para ello, la terapia f&iacute;sica, eval&uacute;a, detecta y orienta, desde diversas t&eacute;cnicas de intervenci&oacute;n para que se desarrollen de forma lineal dichas habilidades.</p>',
            ],
            [
                'slug' => 'terapia-familiar-emocional',
                'title' => 'Terapia Familiar y Emocional',
                'body' => '<p style="text-align:left">Para Eagle Sun, la familia es el pilar fundamental de la intervenci&oacute;n, por eso necesitamos fortalecerla, d&aacute;ndole las herramientas para transcurrir cada etapa dentro de los diagn&oacute;sticos, profundizar en las conexiones entre los miembros de la familia, en organizar planes de acuerdo a la trayectoria evolutiva su hijo (a).</p>',
            ]
        ];

        foreach ($items as $item) {
            $category = \App\Models\Category::create([
                'description' => $item['title'],
                'slug' => $item['slug'],
                'type' => 'servicio'
            ]);

            \App\Models\Item::create([
                'category_id' => $category->id,
                'slug' => $item['slug'],
                'title' => $item['title'],
                'body' => $item['body'],
                'contact_title' => '¿Quieres empezar tu tratamiento?',
                'contact_subtitle' => 'Haz tu cita hoy mismo para que te indiquemos qué opción es la mejor para ti'
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('enabled');
        });
    }
}
