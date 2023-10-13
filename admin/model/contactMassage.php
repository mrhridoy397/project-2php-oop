<?php
require_once(__dir__ . '/Db.php');

class MassageModel extends Db
{


    public function indexmassage()
    {
        $this->query("SELECT * FROM `massage`");
        $this->execute();
        $massage = $this->fetchAll();
        if (!empty($massage)) {
        
            return $massage;
        }
        return array();
    }
    /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function editmassage($id): array
    {
        $this->query("SELECT * FROM `massage` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $massage = $this->fetch();
        if (!empty($massage)) {

            return $massage;
        }
        return array(
            'data' => []
        );
    }


    /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function Updatemassage(array $data): array
    {
        
       
        $this->query("UPDATE `massage` SET `name`=?,`mobile`=?,`email`=?,`subject`=?,`message`=?,`status`=? WHERE `id`=?");
        $this->bind(1, $data['name']);
        $this->bind(2, $data['mobile']);
        $this->bind(3, $data['email']);
        $this->bind(4, $data['subject']);
        $this->bind(5, $data['message']);
        $this->bind(6, $data['status']);
        $this->bind(7, $data['id']);

        
        if ($this->execute()) {
            $Response = array(
                'status' => true,
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false
            );
            return $Response;
        }
    }




    public function deletemassage($id): array
    {
        
        $this->query("DELETE FROM `massage` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' => 'Massage Delete successfully'
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false,
                'msg' => 'Oops! somthing Wrong, Place try again'
            );
            return $Response;
        }
    }

    public function StatusChange($data){
        $this->query("UPDATE `massage` SET `status` = :status WHERE `id` = :id");
        $this->bind(':status', $data['status']);
        $this->bind(':id', $data['id']);
        $this->execute();

        $massage = $this->fetchAll();
        if (!empty($massage)) {
            return  $massage;
        }
        return False;
    }
}
