<?php
require_once(__dir__ . '/Db.php');
class paymentModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexpayment()
    {
        $this->query("SELECT * FROM `payment`");
        $this->execute();

        $payment = $this->fetchAll();
        if (!empty($payment)) {
            $Response = array(
               $payment
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
    public function PaymentCreate(array $data)
    {
        $this->query("INSERT INTO `payment`(  `paymentNumber`, `image`, `status`) VALUES (?,?,?)");
        $this->bind(1, $data['paymentNumber']);
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
    public function editpayment($id)
    {
        $this->query("SELECT * FROM `payment` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $payment = $this->fetch();
        if (!empty($payment)) {
              return  $payment; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function Updatepayment(array $data): array
    {
        $this->query("UPDATE `payment` SET `paymentNumber`=?,`image`=?,`status`=? WHERE   `id` =?");
        $this->bind(1, $data['paymentNumber']);
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


    public function deletePaymentImage($id){
        $this->query("SELECT `image`FROM `payment` WHERE `id` = :id");
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
    public function deletePayment($id): array
    {
        $this->query("DELETE FROM `payment` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'Payment Delete successfully'
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
