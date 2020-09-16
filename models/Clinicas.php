<?php
class Clinicas extends Model{
    public function add($raz_soc, $nome_fant, $cnpj, $nome_resp, $cpf_resp, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $telefone, $email, $senha){

        $sql = "SELECT * FROM clinicas WHERE cnpj = :cnpj";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }else{
            $sql = "INSERT INTO clinicas SET raz_soc = :raz_soc, nome_fant = :nome_fant, cnpj = :cnpj, nome_resp = :nome_resp, cpf_resp = :cpf_resp, rua = :rua, bairro = :bairro, numero = :numero, cidade = :cidade, estado = :estado, cep = :cep, telefone = :telefone, email = :email, senha = :senha";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':raz_soc', $raz_soc);
            $sql->bindValue(':nome_fant', $nome_fant);
            $sql->bindValue(':cnpj', $cnpj);
            $sql->bindValue(':nome_resp', $nome_resp);
            $sql->bindValue(':cpf_resp', $cpf_resp);
            $sql->bindValue(':rua', $rua);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':numero', $numero);
            $sql->bindValue(':cidade', $cidade);
            $sql->bindValue(':estado', $estado);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', md5($senha));
            $sql->execute();

            return true;
        }
    }

    public function getClinicasList(){
        $array = array();

        $sql = "SELECT * FROM clinicas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getClinicaDate($id){
        $array = array();

        $sql = "SELECT * FROM clinicas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function edit($raz_soc, $nome_fant, $cnpj, $nome_resp, $cpf_resp, $cep, $rua, $numero, $bairro, $cidade, $estado, $telefone, $email, $id){
        $sql = "UPDATE clinicas SET raz_soc = :raz_soc, nome_fant = :nome_fant, cnpj = :cnpj, nome_resp = :nome_resp, cpf_resp = :cpf_resp, rua = :rua, bairro = :bairro, numero = :numero, cidade = :cidade, estado = :estado, cep = :cep, telefone = :telefone, email = :email WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':raz_soc', $raz_soc);
        $sql->bindValue(':nome_fant', $nome_fant);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->bindValue(':nome_resp', $nome_resp);
        $sql->bindValue(':cpf_resp', $cpf_resp);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function delete($id){
        $sql = "DELETE FROM clinicas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }
}