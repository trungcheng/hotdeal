<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;

trait UserTrait
{

    public static function user()
    {
        return auth()->user();
    }

    public static function id()
    {
        return auth()->id();
    }

    public static function isSuperAdmin()
    {
        if (self::user()) {
            if (User::find(self::id())->role->all === 1) return true;
        }

        return false;
    }

    public function hasRole($nameOrId)
    {
        $userRole = self::user()->role_id;
        $role = Role::find($userRole);
        
        if ($role->all) {
            return true;
        }

        if (is_numeric($nameOrId)) {
            if ($role->id === $nameOrId) {
                return true;
            }
        }

        if ($role->name === $nameOrId) {
            return true;
        }

        return false;
    }

    public function hasRoles($roles, $needsAll = false)
    {
        if (!is_array($roles)) {
            $roles = [$roles];
        }

        if ($needsAll) {
            $hasRoles = 0;
            $numRoles = count($roles);

            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    $hasRoles++;
                }
            }

            return $numRoles === $hasRoles;
        }

        foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }

        return false;
    }

    public static function grantRole($user, $role) {
        $status = false;
        $role = Role::where('name', $role)->first();
        if ($role) {
            $user->update('role_id', $role->id);
            $status = true;
        }

        return $status;
    }

}