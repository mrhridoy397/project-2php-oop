<?php
require_once(__dir__ . '/controller.php');
require_once('./model/FreelanchingModel.php');
require_once('./controller/newUploadsFile.php');
class freelancingcontentController extends Controller
{

    public $active = 'Freelancing Content'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new freelancingcontentModel();
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getfreelancingcontent(): array
    {
        return $this->Model->indexfreelancingcontent();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createfreelancingcontent($data, )
    {

        $Payload = array(
            'title' => $data['title'],
            'Description' => $data['Description'],
            'status' => $data['status'],

        );
        $Response = $this->Model->freelancingcontentCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data added successfully';
            header("location: FreelanchingContentIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function freelancingcontentedit($id)
    {
        return $this->Model->editfreelancingcontent($id);
    }

    public function freelancingcontentUpdate(array $data)
    {
    

            $Payload = array(
                'id' => $data['id'],
                'title' => $data['title'],
                'Description' => $data['Description'],
                'status' => $data['status'],
            );
            $Response = $this->Model->Updatefreelancingcontent($Payload);

            if (!$Response['status']) {
                $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
                return $Response;
            } else {
                $Response['status'] = 'Congress! you data Update successfully';
                header("location: FreelanchingContentIndex.php");
                return $Response;
            }
        }
    


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function freelancingcontentDelete($id)
    {
        $response = $this->Model->deletefreelancingcontent($id);
        if (!$response) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: FreelanchingContentIndex.php");
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: FreelanchingContentIndex.php");
            return $Response;
        }
    }
}
