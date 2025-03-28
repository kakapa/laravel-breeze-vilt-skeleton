<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    /**
     * The attributes that are guarded from mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //
    ];

    /**
     * The model's default attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        //
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        //
    ];

    /**
     * Search input fields' keys.
     *
     * @var array<int, string>
     */
    protected static array $searchable = [
        //
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Incident belongsTo Contact.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function contact()
    {
        return $this->belongsTo(\App\Models\Contact::class);
    }

    /**
     * Incident belongsTo User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Incident belongsTo IncidentType.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function incidentType()
    {
        return $this->belongsTo(\App\Models\IncidentType::class);
    }
}
