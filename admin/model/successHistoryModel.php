<?php
require_once(__dir__ . '/Db.php');
class successModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexSuccess()
    {
        $this->query("SELECT * FROM `successhistory`");
        $this->execute();

        $success = $this->fetchAll();
        if (!empty($success)) {
            $Response = array(
               $success
            );
            return $Response;
        }
        return array(
          
        );
    }

    /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function SuccessCreate(array $data)
    {
        $this->query("INSERT INTO `successhistory`( `title`, `description`, `status`) VALUES (?,?,?)");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['description']);
        $this->bind(3, $data['status']);
        

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

 


      /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function editSuccess($id)
    {
        $this->query("SELECT * FROM `successhistory` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $success = $this->fetch();
        if (!empty($success)) {
              return  $success; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdateSuccess(array $data): array
    {
        $this->query("UPDATE `successhistory` SET `title`=?,`description`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['description']);
        $this->bind(3, $data['status']);
        $this->bind(4, $data['id']);

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

    public function deleteSuccess($id): array
    {
        $this->query("DELETE FROM `successhistory` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'Content Delete successfully'
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false
            );
            return $Response;
        }
    }



}
