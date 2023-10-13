<?php
require_once(__dir__ . '/controller.php');
require_once('./model/contactMassage.php');
require_once('./controller/newUploadsFile.php');
class MassageController extends Controller
{

    public $active = 'Massage'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new MassageModel();
    }


   
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getmassage(): array
    {
        return $this->Model->indexmassage();
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function massageedit($id)
    {
        return $this->Model->editmassage($id);
    }

    public function massageUpdate(array $data)
    {
       

            $Payload = array(
                'id' => $data['id'],
                'name' => $data['name'],
                'mobile' => $data['mobile'],
                'email' => $data['email'],
                'subject' => $data['subject'],
                'message' => $data['message'],
                'status' => $data['status'],
            );
            $Response = $this->Model->Updatemassage($Payload);

            if (!$Response['status']) {
                $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
                return $Response;
            } else {
                $Response['status'] = 'Congress! you data Update successfully';
                header("location: contactMassageIndex.php");
                return $Response;
            }
        }
    


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function massageDelete($id)
    {
       
        $response = $this->Model->deletemassage($id);
        if (!$response) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: contactMassageIndex.php");
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: contactMassageIndex.php");
            return $Response;
        }
    }
    public function statuschange($data){
        $this->Model->StatusChange($data);
        header("location:contactMassageIndex.php");
    }
}

