<?php
class Consultas extends Model{
    public function getNewAppointments(){
        $array = array();

        $clientes = new Clientes;
        $clinicas = new Clinicas;

        $sql = "SELECT * FROM consultas_marcadas WHERE status_pay = 1 ORDER BY id DESC";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

            $q=0;
            foreach($array as $item){
                $array[$q]['clientes'] = $clientes->getClientData($item['id_cliente']);
                $array[$q]['clinicas'] = $clinicas->getClinicaDate($item['id_clinica']);
                $array[$q]['consulta'] = $this->getAppointmentData($item['id_consulta']);               
                $q++;
            }
        }

        return $array;
    }

    public function getAppointmentData($id_consulta){
        $array = array();

        $sql = "SELECT * FROM consultas WHERE id = :id_consulta";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_consulta', $id_consulta);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getAppintmentMaked($id_consulta){
        $array = array();

        $sql = "SELECT * FROM consultas_marcadas WHERE id = :id_consulta";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_consulta', $id_consulta);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function makeAppointment($dia, $mes, $hora, $minutos, $id_consulta){
        $d1 = date(strtotime($dia."-".$mes."-".$hora."-".$minutos));

        echo date(strtotime($d1));exit;
    }
}