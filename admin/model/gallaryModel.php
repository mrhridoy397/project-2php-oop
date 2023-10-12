<?php
require_once(__dir__ . '/Db.php');
class gallaryModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexgallary()
    {
        $this->query("SELECT * FROM `gallary`");
        $this->execute();

        $gallary = $this->fetchAll();
        if (!empty($gallary)) {
            $Response = array(
               $gallary
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
    public function gallaryCreate(array $data)
    {
        $this->query("INSERT INTO `gallary`(`title`, `shortDescription`, `image`, `status`) VALUES (?,?,?,?)");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['shortDescription']);
        $this->bind(3, $data['image']);
        $this->bind(4, $data['status']);
        

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
    public function editgallary($id)
    {
        $this->query("SELECT * FROM `gallary` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $gallary = $this->fetch();
        if (!empty($gallary)) {
              return  $gallary; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function Updategallary(array $data): array
    {
        $this->query("UPDATE `gallary` SET `title`=?,`shortDescription`=?,`image`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['shortDescription']);
        $this->bind(3, $data['image']);
        $this->bind(4, $data['status']);
        $this->bind(5, $data['id']);

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


    public function deletegallaryImage($id){
        $this->query("SELECT `image`FROM `gallary` WHERE `id` = :id");
        $this->bind('id', $id);
        $this->execute();
        $image = $this->fetch();
        if ($image) {
            return $image;
        } else {
            return false;
        }
    }
        /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function deletegallary($id): array
    {
        $this->query("DELETE FROM `gallary` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'Gallary Delete successfully'
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
