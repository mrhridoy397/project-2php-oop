<?php
require_once(__dir__ . '/Db.php');
class CourseSelectModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexCourseSelect()
    {
        $this->query("SELECT * FROM `courseselect`");
        $this->execute();

        $CourseSelect = $this->fetchAll();
        if (!empty($CourseSelect)) {
            $Response = array(
               $CourseSelect
            );
            return $Response;
        }
        return array(
          
        );
    }

    /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function CourseSelectCreate(array $data)
    {
        $this->query("INSERT INTO `courseselect`( `courseName`, `image`,`buttonLink`, `status`) VALUES (?,?,?,?)");
        $this->bind(1, $data['courseName']);
        $this->bind(2, $data['image']);
        $this->bind(3, $data['buttonLink']);
        $this->bind(4, $data['status']);
        

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
    public function editCourseSelect($id)
    {
        $this->query("SELECT * FROM `courseselect` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $CourseSelect = $this->fetch();
        if (!empty($CourseSelect)) {
              return  $CourseSelect; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdateCourseSelect(array $data): array
    {
        $this->query("UPDATE `courseselect` SET `courseName`=?,`image`=?,`buttonLink`=?,`status`=? WHERE   `id` =?");
        $this->bind(1, $data['courseName']);
        $this->bind(2, $data['image']);
        $this->bind(3, $data['buttonLink']);
        $this->bind(4, $data['status']);
        $this->bind(5, $data['id']);

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


    public function deleteCourseSelectImage($id){
        $this->query("SELECT `image`FROM `courseselect` WHERE `id` = :id");
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
    public function deleteCourseSelect($id): array
    {
        $this->query("DELETE FROM `courseselect` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'courseselect Delete successfully'
            );
            return $Response;
        } else {
            $Response = array(
                'status' => false
            );
            return $Response;
        }
    }
}
