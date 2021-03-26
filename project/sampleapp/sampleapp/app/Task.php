<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'id','name','status'
    ];

    const STATUS = [
        0 => [ 'label' => '作業中' ],
        1 => [ 'label' => '未着手' ],
    ];

    public function getStatusLabelAttribute()
    {
    
        $status = $this->attributes['status'];

        
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }
}
