<?php namespace Diz\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDizPhotosTable2 extends Migration
{
    public function up()
    {
        Schema::create('diz_photos_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('visible')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diz_photos_table');
    }
}
