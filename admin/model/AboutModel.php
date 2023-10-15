<?php
require_once(__dir__ . '/Db.php');
class AboutModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexAbout()
    {
        $this->query("SELECT * FROM `about`");
        $this->execute();

        $About = $this->fetchAll();
        if (!empty($About)) {
            $Response = array(
               $About
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
    public function AboutCreate(array $data)
    {
        $this->query("INSERT INTO `about`( `title`, `Description`, `status`) VALUES (?,?,?)");
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
    public function editAbout($id)
    {
        $this->query("SELECT * FROM `about` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $About = $this->fetch();
        if (!empty($About)) {
              return  $About; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdateAbout(array $data): array
    {
        $this->query("UPDATE `about` SET `title`=?,`Description`=?,`status`=? WHERE  `id` =?");
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
    public function deleteAbout($id): array
    {
        $this->query("DELETE FROM `about` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'About Delete successfully'
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
