<?php
class Dashboard extends Model{
    public function countLeads(){
        $array = array();

        $sql = "SELECT count(*) as c FROM leads WHERE status = 0";
        $sql = $this->db->query($sql);
        
        $array = $sql->fetch();

        return $array['c'];
    }

    public function countClinicas(){
        $array = array();

        $sql = "SELECT count(*) as c FROM clinicas WHERE status = 1";
        $sql = $this->db->query($sql);
        
        $array = $sql->fetch();

        return $array['c'];
    }
}