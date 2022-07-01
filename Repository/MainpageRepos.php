<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class MainpageRepos
{
    public static function getAllElec()
    {
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'order by p.Elec_name ';

        return DB::select ($sql);
    }

    public static function getElecByID($Elec_id)
    {
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where p.Elec_id = ? ';

        return DB::select($sql, [$Elec_id]);
    }

    public static function getAllCat()
    {
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'order by c.Cate_id ';

        return DB::select ($sql );
    }

    public static function getAllBrand()
    {
        $sql = 'select br.* ';
        $sql .= 'from product as br ';
        $sql .= 'order by br.Brand ';

        return DB::select ($sql);
    }

//    public static function getAllDetailWithCateName(){
//        $sql =' select p.*, c.Cate_Name as CategoryName ';
//        $sql .='from product as p ';
//        $sql .='join category as c on p.Cate_id = c.Cate_id ';
//        $sql .='order by p.Elec_Name ';
//
//        return DB::select($sql);
//    }

    public static function getElecByKey($search){
        $name = '%'.$search.'%';
        $sql = 'select * ';
        $sql .= 'from product as p ';
        $sql .= 'where p.Elec_Name like ? ';

        return DB::select ($sql, [$name]);
    }
}

