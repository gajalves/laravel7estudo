<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->String('uf', 2);
            $table->String('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // para executar o metodo down utilizar o migrate:rollback
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn([
                'uf','email'
            ]);
        });
    }
}
