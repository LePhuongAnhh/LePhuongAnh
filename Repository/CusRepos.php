<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CusRepos
{
    public static function getAllCus()
    {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'order by c.Cus_id ';

        return DB::select ($sql);
    }

    public static function getCusById($Cus_id)
    {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'where c.Cus_id = ? ';

        return DB::select($sql, [$Cus_id]);
    }

    public static function insert($customer){
        $sql = 'insert into customer ';
        $sql .= '(Cus_Fullname, Cus_Username, Cus_Email, Cus_DoB, Phone, Address) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$customer->Cus_Fullname, $customer->Cus_Username, $customer->Cus_Email,
            $customer->Cus_DoB, $customer->Phone, $customer->Address]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($customer){
        $sql = 'update customer ';
        $sql .= 'set Cus_Fullname = ?, Cus_Username = ?, Cus_Email = ?, Cus_DoB = ?, Phone = ?, Address= ? ';
        $sql .= 'where Cus_id = ? ';

        DB::update($sql, [$customer->Cus_Fullname, $customer->Cus_Username,
            $customer->Cus_Email,  $customer->Cus_DoB, $customer->Phone, $customer->Address, $customer->Cus_id]);
    }

    public static function delete($Cus_id){
        $sql = 'delete from customer ';
        $sql .= 'where Cus_id = ? ';

        DB::delete($sql, [$Cus_id]);
    }
}
