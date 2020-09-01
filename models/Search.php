<?php
class Search extends Model {
    public function search($keyword = '', $local = '', $category = ''){
        $array = array();
        
        $sql = "SELECT * FROM posts WHERE title LIKE :title, localizacao LIKE :localizacao, id_category = :id_category";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', '%'.$keyword.'%');
        $sql->bindValue(':localizacao', '%'.$local.'%');
        $sql->bindValue(':id_category', $category);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;

    }
}