<?php
require_once(__dir__ . '/controller.php');
require_once('./model/AboutModel.php');
class AboutController extends Controller
{

    public $active = 'About'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new AboutModel();
    }
    
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getAbout(): array
    {
        return $this->Model->indexAbout();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createAbout($data)
    {
    
      
        $Payload = array(
            'title' => $data['title'],
            'Description' => $data['Description'],
            'status' => $data['status'],
            
        );
        $Response = $this->Model->AboutCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location: AboutIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function Aboutedit($id)
    {
        return $this->Model->editAbout($id);
    }

    public function AboutUpdate(array $data)
    {
      
       
        $Payload = array(
            'id' => $data['id'],
            'title' => $data['title'],
            'Description' => $data['Description'],
            'status' => $data['status'],
        );
        $Response = $this->Model->UpdateAbout($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: AboutIndex.php");
            return $Response;
        }
    }
    


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function AboutDelete($id)
    {
        $response = $this->Model->deleteAbout($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: AboutIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: AboutIndex.php");
            return $Response;
        }
    }

}
