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

    public function insertPost($title, $category, $body, $description, $althor, $link, $featured, $images){
        $sql = "INSERT INTO posts SET id_admin = :id_admin, id_category = :id_category, title = :title, body = :body, author = :author_name, description = :description, featured = :featured, link = :link";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_admin', $_SESSION['login_adm_bsb']);
        $sql->bindValue(':id_category', $category);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->bindValue(':author_name', $althor);
        $sql->bindValue(':description', $description);
        $sql->bindValue(':featured', $featured);
        $sql->bindValue(':link', $link);
        $sql->execute();

        $idPost = $this->db->lastInsertId();

        $u = new Uploader();

        $u->upload($images, $idPost, 'post');

        return $idPost;
    }

    public function getPostData($id){
        $array = array();
        
        $sql = "SELECT * FROM posts WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
            $array['images'] = $this->getImagesProduct($id);
        }

        return $array;
    }

    public function getImagesProduct($id){
        $array = array();

        $sql = "SELECT urlf FROM posts_images WHERE id_post = :id_post";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_post', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function listPost($id_category = ''){
        $array = array();

        if($id_category != ''){
            $sql = "SELECT * FROM posts WHERE id_category = :id_category";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_category', $id_category);
            $sql->execute();
        }else{
            $sql = "SELECT * FROM posts";
            $sql = $this->db->query($sql);
        }

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getFeaturedsPosts(){
        $array = array();

        $sql = "SELECT * FROM posts WHERE featured = :featured";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':featured', 1);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
            
            foreach($array as $key => $item){
                $array[$key]['images'] = $this->getImagesByProductId($item['id']);
            }
        }

        return $array;
    }

    public function getImagesByProductId($id){
        $array = array();

        $sql = "SELECT urlf FROM posts_images WHERE id_post = :id_post";
        $sql =$this->db->prepare($sql);
        $sql->bindValue(':id_post', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    

    public function editPost($title, $category, $body, $author, $link, $featured, $id){
        $sql = "UPDATE posts SET title = :title, id_category = :category, body = :body, author = :author, link = :link, featured = :featured WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':category', $category);
        $sql->bindValue(':body', $body);
        $sql->bindValue(':author', $author);
        $sql->bindValue(':link', $link);
        $sql->bindValue(':featured', $featured);
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        return true;
    }

    public function deletePost($id){
        $sql = "DELETE FROM posts WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    // CATEGORIES

    public function insertNewCat($title, $icon){
        $sql = "INSERT INTO categories SET title = :title";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->execute();

        $idCat = $this->db->lastInsertId();

        $u = new Uploader();

        $u->upload($icon, $idCat, 'category');

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

    public function getDadosFromCategory($id){
        $array = array();

        $sql = "SELECT * FROM categories WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function editCategory($title, $id){
        $sql = "UPDATE categories SET title = :title WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function deleteCategory($id){
        $sql = "DELETE FROM categories WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function deleteImages($url){
        $sql = "DELETE FROM posts_images WHERE urlf = :urlf";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':urlf', $url);
        $sql->execute();

        return true;
    }
}