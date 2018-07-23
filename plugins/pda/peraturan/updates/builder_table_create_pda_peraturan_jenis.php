<?php namespace Pda\Peraturan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePdaPeraturanJenis extends Migration
{
    public function up()
    {
        Schema::create('pda_peraturan_jenis', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('nama');
            $table->text('singkatan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pda_peraturan_jenis');
    }
}
