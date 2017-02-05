<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    protected $fillable = ['firstname','lastname','birthdate','city','state','country'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    protected $table = "student";
    protected $primaryKey = "id";

    // Relationships

}
