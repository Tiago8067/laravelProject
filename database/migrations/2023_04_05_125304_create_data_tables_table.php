<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('nome_comercial');
            $table->string('nome_cliente');
            $table->date('data_servico');
            $table->string('viatura_ou_loja');
            $table->text('observacao');
            $table->integer('nr_interno');
            $table->text('nr_serie');
            $table->integer('capacidade_kg');
            $table->boolean('persao_permanente');
            $table->string('nome_fabricante');
            $table->year('ano_fabrico');
            $table->boolean('marcacao_CE')->default(true);
            $table->text('localizacao');
            $table->date('data_ultimo_carregamento');
            $table->date('data_ultima_prova_hidraulica');
            $table->boolean('manutencao_MNT');
            $table->boolean('carregamento_MNT_AD');
            $table->string('tipo');
            $table->integer('peso_CO2_kg');
            $table->boolean('prova_hidraulica');
            $table->boolean('selo_seguranca');
            $table->boolean('O_Ring');
            $table->boolean('cavilha');
            $table->boolean('manometro');
            $table->boolean('difusor');
            $table->boolean('base_plastica');
            $table->boolean('rotulo');
            $table->boolean('sparklets_CO2');
            $table->boolean('aprovado');
            $table->string('serv_carga');
            $table->boolean('extintor_novo');
            $table->text('motivo_rejeitado');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tables');
    }
};
