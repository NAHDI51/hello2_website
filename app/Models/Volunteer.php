<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Volunteer extends Model
{
    /*
    protected $table = 'Volunteer';
    use HasFactory;

    protected $fillable = [
        'id',
        'time_joined',
        'email_id',
        'first_name',
        'last_name',
        'class',
        'section',
        'shift',
        'contact_number',
    ];
    
    protected static function newFactory()
    {
        return \Database\Factories\Volunteer::class;
    }
    */
    protected $table = 'Volunteers';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        # 'id',
        'time_joined',
        'email_id',
        'first_name',
        'last_name',
        'class',
        'section',
        'shift',
        'contact_number',
    ];

    public function getCustomFieldAttribute() {

    }
}
