<?php
require_once(__dir__ . '/controller.php');
require_once('./model/CourseModel.php');
require_once('./controller/newUploadsFile.php');
class Course extends Controller
{

    public $active = 'Course'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new CourseModel();
    }
    public function batch(){
        return $this->Model->getBatch();
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function get(): array
    {
        return $this->Model->index();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function create($data, $file)
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

        $batchId = stripcslashes(strip_tags($data['batchId']));
        $courseName = stripcslashes(strip_tags($data['courseName']));
        $courseDuration = stripcslashes(strip_tags($data['courseDuration']));
        $coursefee = stripcslashes(strip_tags($data['coursefee']));
        $Discount = stripcslashes(strip_tags($data['Discount']));
        $classSize = stripcslashes(strip_tags($data['classSize']));
        $courseAbout = stripcslashes(strip_tags($data['courseAbout']));
        $courseDetails = stripcslashes(strip_tags($data['courseDetails']));
        $isFeatured = stripcslashes(strip_tags($data['isFeatured']));
        $status = stripcslashes(strip_tags($data['status']));

       
        $Payload = array(
            'batchId' => $batchId,
            'courseName' => $courseName,
            'courseDuration' => $courseDuration,
            'coursefee' => $coursefee,
            'Discount' => $Discount,
            'classSize' => $classSize,
            'courseAbout' => $courseAbout,
            'courseDetails' => $courseDetails,
            'isFeatured' => $isFeatured,
            'status' => $status,
            'image' => $image,
        );
        $Response = $this->Model->createCourse($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data added successfully';
            header("location:CourseIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function edit($id): array
    {
        return $this->Model->edit($id);
    }

    public function Update(array $data, $file)
    {
        if ($file['image']['name'] == "") {
            $image = $data['oldImage'];
        } 
        else {
            if ($data['oldImage'] != "") {
                unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $data['oldImage']);
            }
            $fileName = new uploads();
            $fileName->startupload($file);
            $fileName->uploadfile();
            $image  =  $fileName->dbupload;
        }

        $id = stripcslashes(strip_tags($data['id']));
        $batchId = stripcslashes(strip_tags($data['batchId']));
        $courseName = stripcslashes(strip_tags($data['courseName']));
        $courseDuration = stripcslashes(strip_tags($data['courseDuration']));
        $coursefee = stripcslashes(strip_tags($data['coursefee']));
        $Discount = stripcslashes(strip_tags($data['Discount']));
        $classSize = stripcslashes(strip_tags($data['classSize']));
        $courseAbout = stripcslashes(strip_tags($data['courseAbout']));
        $courseDetails = stripcslashes(strip_tags($data['courseDetails']));
        $isFeatured = stripcslashes(strip_tags($data['isFeatured']));
        $status = stripcslashes(strip_tags($data['status']));
    
        $Payload = array(
            'id' => $id,
            'batchId' => $batchId,
            'courseName' => $courseName,
            'courseDuration' => $courseDuration,
            'coursefee' => $coursefee,
            'Discount' => $Discount,
            'classSize' => $classSize,
            'courseAbout' => $courseAbout,
            'courseDetails' => $courseDetails,
            'isFeatured' => $isFeatured,
            'status' => $status,
            'image' => $image,
        );
        $Response = $this->Model->Update($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location:CourseIndex.php");
            return $Response;
        }
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function delete($id)
    {
        $image = $this->Model->deleteImage($id);
        if($image['image'] != false){
            unlink($_SERVER['DOCUMENT_ROOT']."/project-2/".$image['image']);
        }

        $response = $this->Model->delete($id);
        if(!$response){
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location:CourseIndex.php");
            return $Response;
        }
        else{
            $Response['status'] = 'Congress! you data Update successfully';
            header("location:CourseIndex.php");
            return $Response;
        }
    }

}
