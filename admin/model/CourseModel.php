<?php
require_once(__dir__ . '/Db.php');

class CourseModel extends Db
{
    /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function index(): array
    {
        $this->query("SELECT * FROM `courses`");
        $this->execute();
        $courses = $this->fetchAll();
        if (!empty($courses)) {
            $Response = array(
                'data' => $courses,
            );
            return $Response;
        }
        return array(
            'data' => []
        );
    }

    public function getBatch()
    {
        $this->query("SELECT * FROM `batch`");
        $this->execute();
        $Batchs = $this->fetchAll();
        if (!empty($Batchs)) {
            return $Batchs;
        }
        return array(
            'data' => []
        );
    }

    

    /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function createCourse(array $data): array
    {
        
        $this->query("INSERT INTO `courses`( `batchId`, `courseName`, `courseDuration`, `coursefee`, `Discount`, `classSize`,`courseReviews`, `courseAbout`, `courseDetails`, `isFeatured`, `status`, `image`) 
        VALUES (:batchId,:courseName,:courseDuration,:coursefee,:Discount,:classSize,:courseReviews,:courseAbout,:courseDetails,:isFeatured,:status,:image)");
        $this->bind('batchId', $data['batchId']);
        $this->bind('courseName', $data['courseName']);
        $this->bind('courseDuration', $data['courseDuration']);
        $this->bind('coursefee', $data['coursefee']);
        $this->bind('Discount', $data['Discount']);
        $this->bind('classSize', $data['classSize']);
        $this->bind('courseReviews', $data['courseReviews']);
        $this->bind('courseAbout', $data['courseAbout']);
        $this->bind('courseDetails', $data['courseDetails']);
        $this->bind('isFeatured', $data['isFeatured']);
        $this->bind('status', $data['status']);
        $this->bind('image', $data['image']);

        if ($this->execute()) {
            $Response = array(
                'status' => true,
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false
            );
            return $Response;
        }
    }




    /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function edit($id): array
    {
        $this->query("SELECT * FROM `courses` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $course = $this->fetch();
        if (!empty($course)) {
            return $course;
        }
        return array(
            'status' => false,
            'data' => []
        );
    }


    /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function Update(array $data): array
    {
       
        $this->query("UPDATE `courses` SET `batchId`=:batchId,`courseName`=:courseName,`courseDuration`=:courseDuration,`coursefee`=:coursefee,`Discount`=:Discount,`classSize`=:classSize,`courseReviews`=:courseReviews,`courseAbout`=:courseAbout,`courseDetails`=:courseDetails,`isFeatured`=:isFeatured,`status`=:status,`image`=:image WHERE `id`=:id");
        $this->bind('batchId', $data['batchId']);
        $this->bind('courseName', $data['courseName']);
        $this->bind('courseDuration', $data['courseDuration']);
        $this->bind('coursefee', $data['coursefee']);
        $this->bind('Discount', $data['Discount']);
        $this->bind('classSize', $data['classSize']);
        $this->bind('courseReviews', $data['courseReviews']);
        $this->bind('courseAbout', $data['courseAbout']);
        $this->bind('courseDetails', $data['courseDetails']);
        $this->bind('isFeatured', $data['isFeatured']);
        $this->bind('status', $data['status']);
        $this->bind('image', $data['image']);
        $this->bind('id', $data['id']);

        if ($this->execute()) {
            $Response = array(
                'status' => true,
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false
            );
            return $Response;
        }
    }
    public function deleteImage($id){
        $this->query("SELECT `image`FROM `courses` WHERE `id` = :id");
        $this->bind('id', $id);
        $this->execute();
        $image = $this->fetch();
        if ($image) {
            return $image;
        } else {
            return false;
        }
    }
    /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function delete($id): array
    {
        
        $this->query("DELETE FROM `courses` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' => 'course Delete successfully'
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false,
                'msg' => 'Oops! somthing Wrong, Place try again'
            );
            return $Response;
        }
    }
}
