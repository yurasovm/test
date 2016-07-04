<?php namespace Diz\Photos\Models;

use Model;

/**
 * Model
 */
class Photos extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

 
	public $attachMany = [
		'photos'	=> 'System\Models\File',
	];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diz_photos_table';
}