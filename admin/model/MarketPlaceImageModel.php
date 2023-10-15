<?php
require_once(__dir__ . '/Db.php');
class marketPlaceModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexmarketPlace()
    {
        $this->query("SELECT * FROM `marketplaceimage`");
        $this->execute();

        $marketPlace = $this->fetchAll();
        if (!empty($marketPlace)) {
            $Response = array(
               $marketPlace
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
    public function marketPlaceCreate(array $data)
    {
        $this->query("INSERT INTO `marketplaceimage`(`image`, `status`) VALUES (?,?)");
        $this->bind(1, $data['image']);
        $this->bind(2, $data['status']);
        

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
    public function editmarketPlace($id)
    {
        $this->query("SELECT * FROM `marketplaceimage` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $marketPlace = $this->fetch();
        if (!empty($marketPlace)) {
              return  $marketPlace; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdatemarketPlace(array $data): array
    {
        $this->query("UPDATE `marketplaceimage` SET `image`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['image']);
        $this->bind(2, $data['status']);
        $this->bind(3, $data['id']);

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


    public function deletemarketPlaceImage($id){
        $this->query("SELECT `image`FROM `marketplaceimage` WHERE `id` = :id");
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
    public function deletemarketPlace($id): array
    {
        $this->query("DELETE FROM `marketplaceimage` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'marketplaceimage Delete successfully'
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
