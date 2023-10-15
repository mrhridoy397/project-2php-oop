<?php
require_once(__dir__ . '/controller.php');
require_once('./model/freelancingImageModel.php');
require_once('./controller/newUploadsFile.php');
class FreelanchingController extends Controller
{

    public $active = 'Freelanching Image'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new freelanchingImageModel();
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getfreelanchingImage(): array
    {
        return $this->Model->indexfreelanchingImage();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createfreelanchingImage($data, $file)
    {
        if ($file['image'] != "") {
            $fileName = new uploads();
            $fileName->startupload($file);
            $fileName->uploadfile();
            $image  =  $fileName->dbupload;
        } else {
            $image = "";
        }


        $Payload = array(
            'ShortTitle' => $data['ShortTitle'],
            'image' => $image,
            'status' => $data['status'],

        );
        $Response = $this->Model->freelancingimageCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data added successfully';
            header("location: FreelanchingImageIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function freelancingimageedit($id)
    {
        return $this->Model->editfreelancingimage($id);
    }

    public function freelancingimageUpdate(array $data, $file)
    {
        if ($file['image']['name'] != "" && $file['image']['size'] > 5000000) {
            echo "<script>alert('" . $file['image']['size'] . "');</script>";
            // header("Location:ContentEdit.php?id=".$data['id']);
        } else {

            if ($file['image']['name'] == "") {
                $image = $data['oldImage'];
            } else {
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
                'ShortTitle' => $data['ShortTitle'],
                'image' => $image,
                'status' => $data['status'],
            );
            $Response = $this->Model->Updatefreelancingimage($Payload);

            if (!$Response['status']) {
                $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
                return $Response;
            } else {
                $Response['status'] = 'Congress! you data Update successfully';
                header("location: FreelanchingImageIndex.php");
                return $Response;
            }
        }
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function freelancingImageDelete($id)
    {
        $image = $this->Model->deletefreelancingImage($id);
        if ($image['image'] != false) {
            unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $image['image']);
        }

        $response = $this->Model->deletefreelancing($id);
        if (!$response) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: FreelanchingImageIndex.php");
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: FreelanchingImageIndex.php");
            return $Response;
        }
    }
}
