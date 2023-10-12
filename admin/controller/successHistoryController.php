<?php
require_once(__dir__ . '/controller.php');
require_once('./model/successHistoryModel.php');
require_once('./controller/newUploadsFile.php');
class successController extends Controller
{

    public $active = 'SuccessHistory'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new successModel();
    }
    
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getSuccess(): array
    {
        return $this->Model->indexSuccess();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createSuccess($data)
    {
      
        $Payload = array(
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'],
            
        );
        $Response = $this->Model->SuccessCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location: ./successHistoryIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function Successedit($id)
    {
        return $this->Model->editSuccess($id);
    }

    public function SuccessUpdate(array $data)
    {
       

        $Payload = array(
            'id' => $data['id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'],
        );
        $Response = $this->Model->UpdateSuccess($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: successHistoryIndex.php");
            return $Response;
        }
    }

    public function SuccessDelete($id)
    {
       

        $response = $this->Model->deleteSuccess($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: ./successHistoryIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./successHistoryIndex.php");
            return $Response;
        }
    }

}


 

