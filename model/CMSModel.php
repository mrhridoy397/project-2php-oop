<?php
require_once(__dir__ . '/Db.php');
class CMSModel extends Db
{


    // index page courses
    public function indexCourses()
    {
        $this->query("SELECT * FROM `courses` where `isFeatured` = 1 AND `status` = 1  ORDER BY `id` DESC LIMIT 4");
        $this->execute();

        $courses = $this->fetchAll();
        if (!empty($courses)) {
            $Response = array(
                $courses
            );
            return $Response;
        }
        return array();
    }

    // Slider index page
    public function indexSlider()
    {
        $this->query("SELECT * FROM `slider` where `status` = 1");
        $this->execute();

        $slider = $this->fetchAll();
        if (!empty($slider)) {
            $Response = array(
                $slider
            );
            return $Response;
        }
        return array();
    }

    // Content index page
    public function indexContent()
    {
        $this->query("SELECT * FROM `content` where `status` = 1");
        $this->execute();

        $content = $this->fetchAll();
        if (!empty($content)) {
            $Response = array(
                $content
            );
            return $Response;
        }
        return array();
    }



    // Settings
    public function settings()
    {
        $this->query("SELECT * FROM `settings` ");
        $this->execute();
        $settings = $this->fetchAll();
        return $settings;
    }


    // success Story successHistory page
    public function indexSuccess()
    {
        $this->query("SELECT * FROM `successhistory` where `status` = 1");
        $this->execute();

        $success = $this->fetchAll();
        if (!empty($success)) {
            $Response = array(
                $success
            );
            return $Response;
        }
        return array();
    }

    // payment banking
    public function indexPayment()
    {
        $this->query("SELECT * FROM `payment` where `status` = 1");
        $this->execute();

        $payment = $this->fetchAll();
        if (!empty($payment)) {
            $Response = array(
                $payment
            );
            return $Response;
        }
        return array();
    }

    //    Success Student in index page
    public function indexSuccessStudent()
    {
        $this->query("SELECT * FROM `successstudent` where `status` = 1");
        $this->execute();

        $successstudent = $this->fetchAll();
        if (!empty($successstudent)) {
            $Response = array(
                $successstudent
            );
            return $Response;
        }
        return array();
    }



  

    //    gallary in photoGallary page
    public function indexgallary()
    {
        $this->query("SELECT * FROM `gallary` where `status` = 1");
        $this->execute();

        $gallary = $this->fetchAll();
        if (!empty($gallary)) {
            $Response = array(
                $gallary
            );
            return $Response;
        }
        return array();
    }


    // CreateMassege Contact page
    public function CreateMassege(array $data)
    {


        $this->query("INSERT INTO `massage`( `name`, `mobile`, `email`, `subject`, `message`, `status`) VALUES (?,?,?,?,?,?)");
        $this->bind(1, $data['name']);
        $this->bind(2, $data['mobile']);
        $this->bind(3, $data['email']);
        $this->bind(4, $data['subject']);
        $this->bind(5, $data['message']);
        $this->bind(6, $data['status']);

        if ($this->execute()) {
            $data = [
                "statusCode" => 200,
                "Msg" => "Massage Successfully"
            ];
            return json_encode($data);
        } else {
            $data = [
                "statusCode" => 402,
                "Msg" => "internal server error"
            ];
            return json_encode($data);
        }
    }

    // CreateAdmission admission Page
    public function CreateAdmission(array $data)
    {


        $this->query("INSERT INTO `online_admission`( `courseId`, `sname`, `phone`, `email`, `type`, `status`) VALUES (?,?,?,?,?,?)");
        $this->bind(1, $data['courseId']);
        $this->bind(2, $data['sname']);
        $this->bind(3, $data['phone']);
        $this->bind(4, $data['email']);
        $this->bind(5, $data['type']);
        $this->bind(6, $data['status']);

        if ($this->execute()) {
            $data = [
                "statusCode" => 200,
                "Msg" => "Admission Successfully"
            ];
            return json_encode($data);
        } else {
            $data = [
                "statusCode" => 402,
                "Msg" => "internal server error"
            ];
            return json_encode($data);
        }
    }



    //  AllCourse index Page 
    public function AllCourse()
    {
        $this->query("SELECT * FROM `courses` WHERE `status` = 1");
        $this->execute();
        $course = $this->fetchAll();
        if (!empty($course)) {
            return $course;
        }
    }

    // selectCourse OnlinAdmission Page
    public function selectCourse($id)
    {
        $this->query("SELECT * FROM `courses` WHERE `id` = :id");
        $this->bind('id', $id);
        $this->execute();
        $course = $this->fetchAll();
        if (!empty($course)) {
            return $course;
        }
       
    }




    // Course page courses
    public function CoursesAll()
    {
        $this->query("SELECT * FROM `courses` where `isFeatured` = 1 AND `status` = 1");
        $this->execute();

        $courses = $this->fetchAll();
        if (!empty($courses)) {
            $Response = array(
                $courses
            );
            return $Response;
        }
        return array();
    }


    //    freelanchingImage in freelanching page
    public function indexfreelanching()
    {
        $this->query("SELECT * FROM `freelancingimage` where `status` = 1");
        $this->execute();

        $freelanching = $this->fetchAll();
        if (!empty($freelanching)) {
            $Response = array(
                $freelanching
            );
            return $Response;
        }
        return array();
    }


    //    freelanchingImage in freelanching page
    public function indexfreelancingcontent()
    {
        $this->query("SELECT * FROM `freelancingcontent` where `status` = 1");
        $this->execute();

        $freelanching = $this->fetchAll();
        if (!empty($freelanching)) {
            $Response = array(
                $freelanching
            );
            return $Response;
        }
        return array();
    }

     //    aboutContent in about page
     public function indexAbout()
     {
         $this->query("SELECT * FROM `about` where `status` = 1");
         $this->execute();
 
         $about = $this->fetchAll();
         if (!empty($about)) {
             $Response = array(
                 $about
             );
             return $Response;
         }
         return array();
     }

      //    marketPlaceImage in Freelanching page
      public function marketPlaceImage()
      {
          $this->query("SELECT * FROM `marketplaceimage` where `status` = 1");
          $this->execute();
  
          $about = $this->fetchAll();
          if (!empty($about)) {
              $Response = array(
                  $about
              );
              return $Response;
          }
          return array();
      }

      //    Teacher in Teacher page
      public function teacher()
      {
          $this->query("SELECT * FROM `stuff` where `status` = 1");
          $this->execute();
  
          $stuff = $this->fetchAll();
          if (!empty($stuff)) {
              $Response = array(
                  $stuff
              );
              return $Response;
          }
          return array();
      }
}
