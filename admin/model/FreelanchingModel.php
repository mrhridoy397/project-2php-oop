<?php
require_once(__dir__ . '/Db.php');
class freelancingcontentModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexfreelancingcontent()
    {
        $this->query("SELECT * FROM `freelancingcontent`");
        $this->execute();

        $freelancingcontent = $this->fetchAll();
        if (!empty($freelancingcontent)) {
            $Response = array(
               $freelancingcontent
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
    public function freelancingcontentCreate(array $data)
    {
        $this->query("INSERT INTO `freelancingcontent`( `title`, `Description`, `status`) VALUES (?,?,?)");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['Description']);
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
    public function editfreelancingcontent($id)
    {
        $this->query("SELECT * FROM `freelancingcontent` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $freelancingcontent = $this->fetch();
        if (!empty($freelancingcontent)) {
              return  $freelancingcontent; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function Updatefreelancingcontent(array $data): array
    {
        $this->query("UPDATE `freelancingcontent` SET `title`=?,`Description`=?,`status`=?  WHERE  `id` =?");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['Description']);
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

        /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function deletefreelancingcontent($id): array
    {
        $this->query("DELETE FROM `freelancingcontent` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'freelancingcontent Delete successfully'
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
