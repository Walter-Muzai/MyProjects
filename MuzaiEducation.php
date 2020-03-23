<?php

namespace App;

use App\User;

use Spatie\Activitylog\Traits\LogsActivity;

use Illuminate\Database\Eloquent\Model;

class MuzaiEducation extends Model
{

    protected static $logName = 'user';

	use LogsActivity;

  	protected $fillable = [ 'education_level', 'institution_name', 'year_of_completion', 'county', 
        'town','user_id'
    	
    ];

    protected static $logAttributes = ['education_level', 'institution_name', 'year_of_completion', 'county', 'town', 'user_id',
    	 
	];

    protected static $logOnlyDirty = true;

	public function user(){

    	return $this -> belongsTo(User::class);
    	
    }
    
}
