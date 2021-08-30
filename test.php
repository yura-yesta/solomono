<?php
require 'dataBase.php';

class test2
{
    public function prepare($sql)
    {
        $pdo = new dataBase();
        return $pdo->PDO->prepare($sql);
    }

    public function  __construct(){
        $stm = $this->prepare('SELECT * FROM categories ');
        $stm->execute();
        $res = $stm->fetchAll();
        $out = [];
        $resault = [];

        for ($i = 1; $i <= 10; $i++ ){
            foreach ($res as $key => $value) {
                if ($value['parent_id'] == $i){
                    $newParent = $value['categories_id'];
                    foreach ($res as $keys => $values){
                        if ($values['parent_id'] === $newParent){
                            $resault[$i][$newParent][$values['categories_id']] = $values['categories_id'];
                        }
                    }
                    if(empty($resault[$i][$newParent])){
                        $resault[$i][$newParent] = $newParent;
                    }
                }
            }
        }
        echo '<pre>';
        print_r( $resault);
    }
}

$run = new test2();