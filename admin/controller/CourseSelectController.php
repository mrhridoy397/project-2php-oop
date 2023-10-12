<?php
require_once(__dir__ . '/controller.php');
require_once('./model/CourseSelectModel.php');
require_once('./controller/newUploadsFile.php');
class CourseSelectController extends Controller
{

    public $active = 'Course Select'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new CourseSelectModel();
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getCourseSelect(): array
    {
        return $this->Model->indexCourseSelect();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createCourseSelect($data, $file)
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
            'courseName' => $data['courseName'],
            'image' => $image,
            'buttonLink' => $data['buttonLink'],
            'status' => $data['status'],

        );
        $Response = $this->Model->CourseSelectCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data added successfully';
            header("location: ./CourseSelectIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function CourseSelectedit($id)
    {
        return $this->Model->editCourseSelect($id);
    }

    public function CourseSelectUpdate(array $data, $file)
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
                'courseName' => $data['courseName'],
                'image' => $image,
                'buttonLink' => $data['buttonLink'],
                'status' => $data['status'],
            );
            $Response = $this->Model->UpdateCourseSelect($Payload);

            if (!$Response['status']) {
                $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
                return $Response;
            } else {
                $Response['status'] = 'Congress! you data Update successfully';
                header("location: CourseSelectIndex.php");
                return $Response;
            }
        }
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function CourseSelectDelete($id)
    {
        $image = $this->Model->deleteCourseSelectImage($id);
        if ($image['image'] != false) {
            unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $image['image']);
        }

        $response = $this->Model->deleteCourseSelect($id);
        if (!$response) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: ./ContentIndex.php");
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: ./CourseSelectIndex.php");
            return $Response;
        }
    }
}
