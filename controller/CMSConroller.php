<?php
require_once(__dir__ . './Controller.php');
require_once('./model/CMSModel.php');
require_once('./controller/UploadFile.php');
class CMSController extends Controller
{

    public $active = 'CMS'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        $this->Model = new CMSModel();
    }


    // index page courses
    public function getCourses()
    {
        return $this->Model->indexCourses();
    }

    // Slider index page
    public function getSlider()
    {
        return $this->Model->indexSlider();
    }

    // Content index page
    public function getContent()
    {
        return $this->Model->indexContent();
    }

    // Settings
    public function getSetting()
    {
        return $this->Model->settings();
    }

    // Success History

    public function getSuccess()
    {
        return $this->Model->indexSuccess();
    }


    // payment Banking
    public function getPayment()
    {
        return $this->Model->indexPayment();
    }

    // CourseSelect in index page
    public function getCourseSelect()
    {
        return $this->Model->indexCourseSelect();
    }


    //    Success Student in index page
    public function getSuccessStudent()
    {
        return $this->Model->indexSuccessStudent();
    }

    //    graphicsCourse in graphicsMultimedia page
    public function getgraphicsCourse()
    {
        return $this->Model->indexgraphicsCourse();
    }

    //    webSoftwareCourse in webSoftware page
    public function getwebSoftware()
    {
        return $this->Model->indexwebSoftware();
    }

    //    digitalmarketingCourse in digitalmarketing page
    public function getdigitalMarketing()
    {
        return $this->Model->indexdigitalMarketing();
    }

    //    basicTradeCourse in basicTrade page
    public function getbasicTrade()
    {
        return $this->Model->indexbasicTrade();
    }

    //gallary in photoGallary page
    public function getgallary()
    {
        return $this->Model->indexgallary();
    }


    // CreateMassege contact page
    public function CreateMassege($data)
    {
       

        $Payload = array(
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message'],
            'status' => 1,
        );
        $data = $this->Model->CreateMassege($Payload);
        echo $data;
    }

      // createAdmission Admission Page
      public function createAdmission($data)
      {
  
          $Payload = array(
              'courseId' => $data['courseId'],
              'sname' => $data['sname'],
              'phone' => $data['phone'],
              'email' => $data['email'],
              'type' => $data['type'],
              'status' => 1,
          );
          $data = $this->Model->CreateAdmission($Payload);
  
          echo $data;
      }


     //  AllCourse index Page 
     public function AllCourses()
     {
         return $this->Model->AllCourse();
     }

      // selectCourse onlinadmission Page
    public function selectCourses($id)
    {
        return $this->Model->selectCourse($id);
    }

       // Course page courses
    public function Course()
    {
        return $this->Model->CoursesAll();
    }

    
       // freelanching page freelanchingImage
       public function freelanchingImage()
       {
           return $this->Model->indexfreelanching();
       }


       // freelanching page freelanchingContent
       public function freelancingcontent()
       {
           return $this->Model->indexfreelancingcontent();
       }

    //    aboutContent in about page
        public function indexAboutContent()
        {
            return $this->Model->indexAbout();
        }

        // marketPlaceImage in Freelanching page
        public function indexmarketPlaceImage()
        {
            return $this->Model->marketPlaceImage();
        }


}
