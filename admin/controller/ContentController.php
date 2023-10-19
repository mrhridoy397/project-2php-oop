<?php
require_once(__dir__ . '/controller.php');
require_once('./model/ContentModel.php');
require_once('./controller/newUploadsFile.php');
class ContentController extends Controller
{

    public $active = 'Content'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new ContentModel();
    }
    
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getContent(): array
    {
        return $this->Model->indexContent();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createContent($data)
    {
      
        $Payload = array(
            'Shortdescription' => $data['Shortdescription'],
            'description' => $data['description'],
            'status' => $data['status'],
            
        );
        $Response = $this->Model->ContentCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location: ./ContentIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function Contentedit($id)
    {
        return $this->Model->editContent($id);
    }

    public function ContentUpdate(array $data)
    {
       
        $Payload = array(
            'id' => $data['id'],
            'Shortdescription' => $data['Shortdescription'],
            'description' => $data['description'],
            'status' => $data['status'],
        );
        $Response = $this->Model->UpdateContent($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ContentIndex.php");
            return $Response;
        }
    
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function ContentDelete($id)
    {

        $response = $this->Model->deleteContent($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: ./ContentIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./ContentIndex.php");
            return $Response;
        }
    }

}
