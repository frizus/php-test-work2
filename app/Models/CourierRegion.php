<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $courier_id
 * @property int $region_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion whereCourierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierRegion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CourierRegion extends Model
{
    use HasFactory;
}
