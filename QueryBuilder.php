<?php


class QueryBuilder{



    public function selectAll($table){

        $stmt = $pdo->prepare('select * from todos');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
    }
}