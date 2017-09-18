<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model {

	protected $table = 'lead';

	protected $primaryKey = 'lead_id';

	public $timestamps = false;

	protected $fillable = array(
				'lead_id',
				'nome',
				'sobrenome',
				'email',
				'empresa',
        'cargo',
				'data_hora');
}
