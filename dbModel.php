<?php

require 'dataBase.php';

class dbModel {
    public function prepare($sql)
    {
        $pdo = new dataBase();
        return $pdo->PDO->prepare($sql);
    }

    public function select($arr = '')
    {
        if (empty($arr) || $arr['select'] || $arr['id_cat']){
            $select =  $arr['select']?  "ORDER BY {$arr['select']} ": '';
            $category =  $arr['id_cat']?'WHERE id_cat = :id_cat ': '';
            $stm = $this->prepare("SELECT * FROM products $category $select");
            $stm->bindParam(":id_cat", $arr['id_cat'] );
            $stm->execute();
            return json_encode($stm->fetchAll());
        }else{
            if ($arr['id']){
                $stm = $this->prepare("SELECT * FROM products where id = :id");
                $stm->bindParam(':id', $arr['id']);
                $stm->execute();
                return json_encode($stm->fetchAll());
        }if ($arr['gotCategory'] === 'gotCategory') {
                $categories = [];
                $stm = $this->prepare("SELECT * FROM category, products WHERE category.id_cat=products.id_cat ");
                $stm->execute();
                foreach ($stm->fetchAll() as $key => $value) {
                    $categories [$value['id_cat']][$value[1]] += isset($value['id_cat']);

                }
                return json_encode($categories);
            }
        }
    }
}




