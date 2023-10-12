<?php
require_once(__dir__ . '/controller.php');
require_once('./model/SuccessStudentModel.php');
require_once('./controller/newUploadsFile.php');
class SuccessStudentController extends Controller
{

    public $active = 'Success Student'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new SuccessStudentModel();
    }
    
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getSuccessStudent(): array
    {
        return $this->Model->indexSuccessStudent();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createSuccessStudent($data)
    {
      
        $Payload = array(
            'title' => $data['title'],
            'student' => $data['student'],
            'status' => $data['status'],
            
        );
        $Response = $this->Model->SuccessStudentCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location: ./SuccessStudentIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function SuccessStudentedit($id)
    {
        return $this->Model->editSuccessStudent($id);
    }

    public function SuccessStudentUpdate(array $data)
    {
       

        $Payload = array(
            'id' => $data['id'],
            'title' => $data['title'],
            'student' => $data['student'],
            'status' => $data['status'],
        );
        $Response = $this->Model->UpdateSuccessStudent($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: SuccessStudentIndex.php");
            return $Response;
        }
    }

    public function SuccessStudentDelete($id)
    {
       

        $response = $this->Model->deleteSuccessStudent($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: ./SuccessStudentIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./SuccessStudentIndex.php");
            return $Response;
        }
    }

}


 

