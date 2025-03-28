<?php

namespace App\Observers;

use App\Models\Incident;

class IncidentObserver
{
    /**
     * Handle the "retrieved" event.
     */
    public function retrieved(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "creating" event.
     */
    public function creating(Incident $incident): void
    {
        // Random slug
        do {
            $incident->slug = sprintf('E%s%s', strtoupper(\Str::random(6)), date('dHi'));
        } while (Incident::where('slug', $incident->slug)->exists());
    }

    /**
     * Handle the "created" event.
     */
    public function created(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "replicating" event.
     */
    public function replicating(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "updating" event.
     */
    public function updating(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "updated" event.
     */
    public function updated(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "saving" event.
     */
    public function saving(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "saved" event.
     */
    public function saved(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "trashed" event.
     * Only when SoftDeletes trait is being used.
     */
    public function trashed(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "restoring" event.
     * Only when SoftDeletes trait is being used.
     */
    public function restoring(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "restored" event.
     * Only when SoftDeletes trait is being used.
     */
    public function restored(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "deleting" event.
     */
    public function deleting(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "deleted" event.
     */
    public function deleted(Incident $incident): void
    {
        //
    }

    /**
     * Handle the "force deleted" event.
     * Only when SoftDeletes trait is being used.
     */
    public function forceDeleted(Incident $incident): void
    {
        //
    }
}
