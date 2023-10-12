<?php
require_once(__dir__ . '/Db.php');
class SuccessStudentModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexSuccessStudent()
    {
        $this->query("SELECT * FROM `successstudent`");
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
    public function SuccessStudentCreate(array $data)
    {
        $this->query("INSERT INTO `successstudent`( `title`, `student`, `status`) VALUES (?,?,?)");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['student']);
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
    public function editSuccessStudent($id)
    {
        $this->query("SELECT * FROM `successstudent` WHERE`id` = :id");
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
    public function UpdateSuccessStudent(array $data): array
    {
        $this->query("UPDATE `successstudent` SET `title`=?,`student`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['student']);
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

    public function deleteSuccessStudent($id): array
    {
        $this->query("DELETE FROM `successstudent` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'SuccessStudent Delete successfully'
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
