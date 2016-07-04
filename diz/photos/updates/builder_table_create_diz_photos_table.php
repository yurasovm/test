<?php namespace Diz\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDizPhotosTable extends Migration
{
    public function up()
    {
        Schema::create('diz_photos_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diz_photos_table');
    }
}
