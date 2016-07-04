<?php namespace Diz\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizPhotosTable extends Migration
{
    public function up()
    {
        Schema::table('diz_photos_table', function($table)
        {
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('diz_photos_table', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
