<?php
require_once(__dir__ . '/Db.php');
class basicTradeModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexbasicTrade()
    {
        $this->query("SELECT * FROM `basictrade`");
        $this->execute();

        $basicTrade = $this->fetchAll();
        if (!empty($basicTrade)) {
            $Response = array(
               $basicTrade
            );
            return $Response;
        }
        return array(
          
        );
    }

    public function getBatch()
    {
        $this->query("SELECT * FROM `batch`");
        $this->execute();
        $Batchs = $this->fetchAll();
        if (!empty($Batchs)) {
            return $Batchs;
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
    public function basicTradeCreate(array $data)
    {
        $this->query("INSERT INTO `basictrade`( `batchId`, `title`, `courseName`, `courseFee`, `description`, `courseDuration`, `Discount`, `classSize`, `image`, `status`)  VALUES (?,?,?,?,?,?,?,?,?,?)");
        $this->bind(1, $data['batchId']);
        $this->bind(2, $data['title']);
        $this->bind(3, $data['courseName']);
        $this->bind(4, $data['courseFee']);
        $this->bind(5, $data['description']);
        $this->bind(6, $data['courseDuration']);
        $this->bind(7, $data['Discount']);
        $this->bind(8, $data['classSize']);
        $this->bind(9, $data['image']);
        $this->bind(10, $data['status']);
        

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
    public function editbasicTrade($id)
    {
        $this->query("SELECT * FROM `basictrade` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $basicTrade = $this->fetch();
        if (!empty($basicTrade)) {
              return  $basicTrade; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdatebasicTrade(array $data): array
    {
        $this->query("UPDATE `basictrade` SET `batchId`=?,`title`=?,`courseName`=?,`courseFee`=?,`description`=?,`courseDuration`=?,`Discount`=?,`classSize`=?,`image`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['batchId']);
        $this->bind(2, $data['title']);
        $this->bind(3, $data['courseName']);
        $this->bind(4, $data['courseFee']);
        $this->bind(5, $data['description']);
        $this->bind(6, $data['courseDuration']);
        $this->bind(7, $data['Discount']);
        $this->bind(8, $data['classSize']);
        $this->bind(9, $data['image']);
        $this->bind(10, $data['status']);
        $this->bind(11, $data['id']);

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


    public function deletebasicTradeImage($id){
        $this->query("SELECT `image`FROM `basictrade` WHERE `id` = :id");
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
    public function deletebasicTrade($id): array
    {
        $this->query("DELETE FROM `basictrade` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'basicTrade Course Delete successfully'
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
