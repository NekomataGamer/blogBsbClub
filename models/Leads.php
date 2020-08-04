<?php
class Leads extends Model {
    public function addLeads($lead){
        $ip = $_SERVER['REMOTE_ADDR'];
        $s_o = $_SERVER['HTTP_USER_AGENT'];
        
        if(strstr($_SERVER['HTTP_USER_AGENT'], "Linux")) {
                
            $s_o = "Linux"; // Linux

        } elseif(strstr($_SERVER['HTTP_USER_AGENT'], "Windows")) {
                    
                    $s_o = "Windows"; //Windows

        } else {
                    
                    $s_o = "UNDEFINED"; //Nao identificado
        }
        
        $sql = "INSERT INTO leads SET email = :lead, s_o = :s_o, ip = :ip";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':lead', $lead);
        $sql->bindValue(':s_o', $s_o);
        $sql->bindValue(':ip', $ip);
        $sql->execute();
        
        return true;
    }
}