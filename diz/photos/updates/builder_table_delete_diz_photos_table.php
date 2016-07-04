<?php namespace Diz\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDizPhotosTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('diz_photos_table');
    }
    
    public function down()
    {
        Schema::create('diz_photos_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name', 255);
            $table->text('description')->nullable();
        });
    }
}
