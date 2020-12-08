<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table    = 'jobs';
    protected $fillable = ['job', 'location_id', 'requirement', 'offer', 'apply', 'contact', 'status', 'file', 'deleted'];

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
