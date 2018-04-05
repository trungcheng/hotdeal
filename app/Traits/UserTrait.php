<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
// use App\Models\ObjectPermission;
// use App\Models\Object;
// use App\Models\Permission;
// use App\Models\Role;

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
            if (self::user()->is_super_admin === 1) return true;
        }

        return false;
    }

    public function hasRole($nameOrId)
    {
        // $roles = Role::all();
        // foreach ($roles as $role) {
        //     if ($role->all) {
        //         return true;
        //     }

        //     if (is_numeric($nameOrId)) {
        //         if ($role->id === $nameOrId) {
        //             return true;
        //         }
        //     }

        //     if ($role->name === $nameOrId) {
        //         return true;
        //     }
        // }

        // return false;
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

    public static function grantRole($userId, $role) {
        // $status = false;
        // $role = Role::where('name', $role)->first();
        // if ($role) {
        //     $role->users()->attach($userId);
        //     $status = true;
        // }

        // return $status;
    }

}