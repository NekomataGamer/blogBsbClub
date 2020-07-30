<?php
class Admin extends model {
    public function login($login, $pass){
        $array = array();

        $sql = "SELECT * FROM admin WHERE login = :login AND passwd = :passwd";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':login', $login);
        $sql->bindValue(':passwd', md5($pass));
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

            $_SESSION['login_adm_bsb'] = $array['id'];

            return true;
        }else{
            return false;
        }
    }

    // POSTS

    public function insertPost($title, $category, $body, $althor_name){
        $sql = "INSERT INTO posts SET id_admin = :id_admin, id_category = :id_category, title = :title, body = :body, author = :author_name";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_admin', $_SESSION['login_adm_bsb']);
        $sql->bindValue(':id_category', $category);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->bindValue(':author_name', $althor_name);
        $sql->execute();

        return true;
    }

    public function listPost(){
        $array = array();

        $sql = "SELECT * FROM posts";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    // CATEGORIES

    public function insertNewCat($title){
        $sql = "INSERT INTO categories SET title = :title";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->execute();

        return true;
    }

    public function listCategories(){
        $array = array();
        $sql = "SELECT * FROM categories";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}