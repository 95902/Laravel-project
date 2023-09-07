<?php

namespace App\Models;

use App\Enums\SchoolEnum;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperStudenCard
 */
class StudenCard extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $casts = [
        'school' => SchoolEnum::class,
        'is_internal' => 'boolean',
        'date_of_birth' => 'date',
    ];

    protected $fillable = [
        'school',
        'description',
        'is_internal',
        'user_id',
        'date_of_birth',
    ];

    /**
     * @return BelongsTo<User, StudenCard>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
