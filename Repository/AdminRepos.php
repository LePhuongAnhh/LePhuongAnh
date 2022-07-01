<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin()
    {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.Ad_id ';

        return DB::select ($sql);
     }

    public static function getAdminById($Ad_id)
    {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.Ad_id = ? ';

        return DB::select($sql, [$Ad_id]);
    }

    public static function update($admin){
        $sql = 'update admin ';
        $sql .= 'set Ad_Fullname = ?, Ad_Username = ?, Ad_Email = ?, Ad_DoB = ? ';
        $sql .= 'where Ad_id = ? ';

        return DB::update($sql, [$admin->Ad_Fullname, $admin->Ad_Username,
            $admin->Ad_Email,  $admin->Ad_DoB, $admin->Ad_id]);
    }

    public static function delete($Ad_id){
        $sql = 'delete from admin ';
        $sql .= 'where Ad_id = ? ';

        DB::delete($sql, [$Ad_id]);
    }
}
