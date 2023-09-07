<?php

namespace App\Models;

use App\Enums\SchoolEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;





class StudenCard extends Model
{
    use HasFactory;


    protected $casts = [
        'school' => SchoolEnum::class,
        'is_internal' => 'boolean',
        'date_of_birth' => 'date',
    ];

    /**
     * @return BelongsTo<User, StudenCard>
     */


    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
