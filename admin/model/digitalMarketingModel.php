<?php
require_once(__dir__ . '/Db.php');
class digitalMarketingModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexdigitalMarketing()
    {
        $this->query("SELECT * FROM `digitalmarketing`");
        $this->execute();

        $digitalMarketing = $this->fetchAll();
        if (!empty($digitalMarketing)) {
            $Response = array(
               $digitalMarketing
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
    public function digitalMarketingCreate(array $data)
    {
        $this->query("INSERT INTO `digitalmarketing`( `batchId`, `title`, `courseName`, `courseFee`, `description`, `courseDuration`, `Discount`, `classSize`, `image`, `status`)  VALUES (?,?,?,?,?,?,?,?,?,?)");
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
    public function editdigitalMarketing($id)
    {
        $this->query("SELECT * FROM `digitalmarketing` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $digitalMarketing = $this->fetch();
        if (!empty($digitalMarketing)) {
              return  $digitalMarketing; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdatedigitalMarketing(array $data): array
    {
        $this->query("UPDATE `digitalmarketing` SET `batchId`=?,`title`=?,`courseName`=?,`courseFee`=?,`description`=?,`courseDuration`=?,`Discount`=?,`classSize`=?,`image`=?,`status`=? WHERE  `id` =?");
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


    public function deletedigitalMarketingImage($id){
        $this->query("SELECT `image`FROM `digitalmarketing` WHERE `id` = :id");
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
    public function deletedigitalMarketing($id): array
    {
        $this->query("DELETE FROM `digitalmarketing` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'Digitalmarketing Course Delete successfully'
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
