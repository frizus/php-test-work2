<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * 
 *
 * @property-read \App\Models\Order|null $order
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Region> $regions
 * @property-read int|null $regions_count
 * @method static \Database\Factories\CourierFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Courier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Courier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Courier query()
 * @property int $id
 * @property string $courier_type
 * @property string $working_hours_start
 * @property string $working_hours_end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Courier whereCourierType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Courier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Courier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Courier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Courier whereWorkingHoursEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Courier whereWorkingHoursStart($value)
 * @mixin \Eloquent
 */
class Courier extends Model
{
    use HasFactory;

    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(Region::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
