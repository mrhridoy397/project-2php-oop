<?php
require_once(__dir__ . '/Db.php');
class freelanchingImageModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexfreelanchingImage()
    {
        $this->query("SELECT * FROM `freelancingimage`");
        $this->execute();

        $freelanchingImage = $this->fetchAll();
        if (!empty($freelanchingImage)) {
            $Response = array(
               $freelanchingImage
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
    public function freelancingimageCreate(array $data)
    {
        $this->query("INSERT INTO `freelancingimage`( `ShortTitle`, `image`, `status`) VALUES (?,?,?)");
        $this->bind(1, $data['ShortTitle']);
        $this->bind(2, $data['image']);
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
    public function editfreelancingimage($id)
    {
        $this->query("SELECT * FROM `freelancingimage` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $freelancingimage = $this->fetch();
        if (!empty($freelancingimage)) {
              return  $freelancingimage; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function Updatefreelancingimage(array $data): array
    {
        $this->query("UPDATE `freelancingimage` SET `ShortTitle`=?,`image`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['ShortTitle']);
        $this->bind(2, $data['image']);
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


    public function deletefreelancingImage($id){
        $this->query("SELECT `image`FROM `freelancingimage` WHERE `id` = :id");
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
    public function deletefreelancing($id): array
    {
        $this->query("DELETE FROM `freelancingimage` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'freelancingimage Delete successfully'
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
