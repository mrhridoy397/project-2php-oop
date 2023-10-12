<?php
require_once(__dir__ . '/controller.php');
require_once('./model/paymentModel.php');
require_once('./controller/newUploadsFile.php');
class paymentController extends Controller
{

    public $active = 'Payment'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new paymentModel();
    }
    
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getpayment(): array
    {
        return $this->Model->indexpayment();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createPayment($data, $file)
    {
       if($file['image'] != ""){
         $fileName = new uploads();
        $fileName->startupload($file);
        $fileName->uploadfile();
        $image  =  $fileName->dbupload;
       }
       else{
        $image = "";
       }

      
        $Payload = array(
            'paymentNumber' => $data['paymentNumber'],
            'image' => $image,
            'status' => $data['status'],
            
        );
        $Response = $this->Model->PaymentCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location: ./paymentIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function Paymentdit($id)
    {
        return $this->Model->editpayment($id);
    }

    public function PaymentUpdate(array $data, $file)
    {
        if($file['image']['name'] != "" && $file['image']['size'] > 5000000 ){
            echo "<script>alert('".$file['image']['size']."');</script>";
            // header("Location:ContentEdit.php?id=".$data['id']);
        }
        else{

        if ($file['image']['name'] == "") {
            $image = $data['oldImage'];
        } 
        else {
            if ($data['oldImage'] != "") {
            unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $data['oldImage']);
            $fileName = new uploads();
            $fileName->startupload($file);
            $fileName->uploadfile();
            $image  =  $fileName->dbupload;
            }
            
        }

       
        $Payload = array(
            'id' => $data['id'],
            'paymentNumber' => $data['paymentNumber'],
            'image' => $image,
            'status' => $data['status'],
        );
        $Response = $this->Model->Updatepayment($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: paymentIndex.php");
            return $Response;
        }
    }
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function PaymentDelete($id)
    {
        $image = $this->Model->deletePaymentImage($id);
        if($image['image'] != false){
            unlink($_SERVER['DOCUMENT_ROOT']."/project-2/".$image['image']);
        }

        $response = $this->Model->deletePayment($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: ./ContentIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./paymentIndex.php");
            return $Response;
        }
    }

}
