<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class SignupRepos
{
    public static function getAllSignup()
    {
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'order by c.Cus_id ';

        return DB::select ($sql);
    }

    public static function getSignupById($Cus_id)
    {
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'where c.Cus_id = ? ';

        return DB::select($sql, [$Cus_id]);
    }

    public static function insert($customer)
    {
        $sql = 'insert into customer ';
        $sql .= '(Cus_Fullname, Cus_Username, Cus_Email, Cus_DoB, Phone, Address) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$customer->Cus_Fullname, $customer->Cus_Username, $customer->Cus_Email, $customer->Cus_DoB, $customer->Phone, $customer->Address]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }
}
