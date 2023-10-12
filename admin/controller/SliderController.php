<?php
require_once(__dir__ . '/controller.php');
require_once('./model/SliderModel.php');
require_once('./controller/newUploadsFile.php');
class SliderController extends Controller
{

    public $active = 'Slider'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new SliderModel();
    }
    
    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getSlider(): array
    {
        return $this->Model->indexSlider();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createSlider($data, $file)
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
            'title' => $data['title'],
            'Shortdescription' => $data['Shortdescription'],
            'Description' => $data['Description'],
            'btnOne' => $data['btnOne'],
            'btnOneLink' => $data['btnOneLink'],
            'btnTwo' => $data['btnTwo'],
            'btnTwoLink' => $data['btnTwoLink'],
            'logoTitle' => $data['logoTitle'],
            'status' => $data['status'],
            'image' => $image,
        );
        $Response = $this->Model->SliderCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location: ./SliderIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function Slideredit($id)
    {
        return $this->Model->editSlider($id);
    }

    public function SliderUpdate(array $data, $file)
    {
        if($file['image']['name'] != "" && $file['image']['size'] >= 500000 ){
            echo "<script>alert('Ops File size is too large');</script>";
            header("Location:SliderEdit.php?id=".$data['id']);
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
            'title' => $data['title'],
            'Shortdescription' => $data['Shortdescription'],
            'Description' => $data['Description'],
            'btnOne' => $data['btnOne'],
            'btnOneLink' => $data['btnOneLink'],
            'btnTwo' => $data['btnTwo'],
            'btnTwoLink' => $data['btnTwoLink'],
            'logoTitle' => $data['logoTitle'],
            'status' => $data['status'],
            'image' => $image,
        );
        $Response = $this->Model->UpdateSlider($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./SliderIndex.php");
            return $Response;
        }
    }
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function SliderDelete($id)
    {
        $image = $this->Model->deleteSliderImage($id);
        if($image['image'] != false){
            unlink($_SERVER['DOCUMENT_ROOT']."/project-2/".$image['image']);
        }

        $response = $this->Model->deleteSlider($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: ./SliderIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./SliderIndex.php");
            return $Response;
        }
    }

}
