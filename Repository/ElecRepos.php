<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ElecRepos
{

    public static function getAllProductWithCateName(){
        $sql =' select p.*, c.Cate_Name as CategoryName ';
        $sql .='from product as p ';
        $sql .='join category as c on p.Cate_id = c.Cate_id ';
        $sql .='order by p.Elec_Name ';

        return DB::select($sql);
    }

    public static function getAllElec()
    {
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'order by p.Elec_id ';

        return DB::select ($sql);
    }

    public static function getElecByID($Elec_id)
    {
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where p.Elec_id = ? ';

        return DB::select($sql, [$Elec_id]);
    }

    public static function insert($product)
    {
        $sql = 'insert into product ';
        $sql .= '(Elec_Name, Cate_id, Price, Brand, Elec_Description, Elec_Images) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$product->Elec_Name, $product->Cate_id,
            $product->Price, $product->Brand, $product->Elec_Description, $product->Elec_Images]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($product)
    {
        $sql = 'update product ';
        $sql .= 'set Elec_Name = ?, Cate_id = ?, Price = ?, Brand = ?, Elec_Description = ?, Elec_Images = ? ';
        $sql .= 'where Elec_id = ? ';

        DB::update($sql, [$product->Elec_Name, $product->Cate_id, $product->Price, $product->Brand, $product->Elec_Description, $product->Elec_Images, $product->Elec_id]);
    }


    public static function delete($Elec_id){
        $sql = 'delete from product ';
        $sql .= 'where Elec_id = ? ';

        return DB::delete($sql, [$Elec_id]);
    }
    public static function selectCate($Cate_id){
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where p.Cate_id = ? ';
        return DB::select($sql, [$Cate_id]);
    }
}
