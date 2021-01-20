<?php

namespace App\Nova;

use Illuminate\Http\Request;

trait ReadOnlyAccess
{
    /** @see \Laravel\Nova\Authorizable::authorizedToCreate() */
    public static function authorizedToCreate(Request $request): bool
    {
        return false;
    }

    /** @see \Laravel\Nova\Authorizable::authorizedToUpdate() */
    public function authorizedToUpdate(Request $request): bool
    {
        return false;
    }

    /** @see \Laravel\Nova\Authorizable::authorizedToDelete() */
    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }

    /** @see \Laravel\Nova\Authorizable::authorizedToForceDelete() */
    public function authorizedToForceDelete(Request $request): bool
    {
        return false;
    }

    /** @see \Laravel\Nova\Authorizable::authorizedToRestore() */
    public function authorizedToRestore(Request $request): bool
    {
        return false;
    }
}
