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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->integer('qty');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

/**
 * php artisan migrate:status                  (consulta o status do banco)
 * php artisan migrate                         (cria as tabelas no banco das migrations ainda nao migradas)
 * php artisan make:migration nome_da_tabela   (Cria o arquivo base na pasta database/migrations)
 * php artisan migrate:fresh                   (dropa(apaga) as tabelas do banco e faz novamente a criação das tabelas (migrate) de todos os arquivos)
 * 
 */