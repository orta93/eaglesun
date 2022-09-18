<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('slug');
            $table->string('type');
            $table->timestamps();
        });

        $categories = [
            ['Neurología clínica', 'neurologia-clinica', 'servicio'],
            ['Neuropediatría', 'neuropediatria', 'servicio'],
            ['Neurorehabilitación', 'neurorehabilitacion', 'servicio'],
            ['Neuropsicología', 'neuropsicologia', 'servicio'],
            ['Estimulación Magnética Transcraneal (TMS)', 'estimulacion-magnetica-transcraneal', 'servicio'],
            ['Estudios', 'estudios', 'servicio'],
            ['Daño cerebral adquirido', 'dano-cerebral-adquirido', 'tratamiento'],
            ['Enfermadades neurodegenerativas', 'enfermadades-neurodegenerativas', 'tratamiento'],
            ['Enfermadades congénitas', 'enfermadades-congenitas', 'tratamiento'],
            ['Secuelas neurológicas', 'secuelas-neurologicas', 'tratamiento'],
            ['Dolor', 'dolor', 'tratamiento'],
            ['Depresión', 'depresion', 'tratamiento'],
            ['Otros trastornos neurológicos', 'otros-trastornos-neurologicos', 'tratamiento'],
            ['Otros trastornos psiquiátricas', 'otros-trastornos-psiquiatricas', 'tratamiento'],
            ['Clínica de Epilepsia', 'clinica-de-epilepsia', 'tratamiento'],
            ['Clínica del dolor', 'clinica-del-dolor', 'tratamiento'],
            ['Clínica del sueño', 'clinica-del-sueno', 'tratamiento']
        ];

        foreach($categories as $category) {
            \App\Models\Category::create([
                'description' => $category[0],
                'slug' => $category[1],
                'type' => $category[2]
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
        Schema::dropIfExists('categories');
    }
}
