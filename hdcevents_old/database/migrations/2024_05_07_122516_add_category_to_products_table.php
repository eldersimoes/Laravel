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
        Schema::table('products', function (Blueprint $table) {
            $table->string('category',100);
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('category');
            //
        });
    }
};


/**
* Aqui estão os principais comandos relacionados às migrações em Laravel:
* 
* php artisan migrate          (cria o diretorio e os arquivos migration básicos )
* php artisan make:migration:  <nome do arquivo separado por _ >  Cria um novo arquivo de migração para modificar o esquema do banco de dados. As migrações são usadas para criar, modificar ou excluir tabelas e colunas do banco de dados.
* php artisan migrate:install:  Cria a tabela migrations no banco de dados, se ela ainda não existir. Essa tabela é usada para registrar as migrações que foram executadas.
* php artisan migrate:          Executa as migrações pendentes que ainda não foram executadas no banco de dados. Isso cria as tabelas e colunas especificadas nas migrações.
* php artisan migrate:rollback: Desfaz a última migração executada, removendo as alterações feitas no banco de dados. Isso pode ser útil durante o desenvolvimento para reverter rapidamente as alterações e testar novamente.
* php artisan migrate:refresh:  Desfaz todas as migrações e as executa novamente. Isso é útil quando você precisa reiniciar completamente o banco de dados, geralmente durante o desenvolvimento ou testes.
* php artisan migrate:reset:    Reverte todas as migrações, desfazendo todas as alterações feitas no banco de dados. Isso é útil quando você precisa limpar completamente o banco de dados durante o desenvolvimento ou testes.
* php artisan migrate:status:   Exibe o status de todas as migrações, mostrando quais migrações foram executadas e quais estão pendentes.
*/
