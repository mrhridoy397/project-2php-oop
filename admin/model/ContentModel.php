<?php
require_once(__dir__ . '/Db.php');
class ContentModel extends Db
{
       /**
     * @param string
     * @return array
     * @desc Returns a user record based on the method parameter....
     **/
    public function indexContent()
    {
        $this->query("SELECT * FROM `content`");
        $this->execute();

        $content = $this->fetchAll();
        if (!empty($content)) {
            $Response = array(
               $content
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
    public function ContentCreate(array $data)
    {
        $this->query("INSERT INTO `content`( `title`, `Shortdescription`, `description`, `image`, `status`) VALUES (?,?,?,?,?)");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['Shortdescription']);
        $this->bind(3, $data['description']);
        $this->bind(4, $data['image']);
        $this->bind(5, $data['status']);
        

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
    public function editContent($id)
    {
        $this->query("SELECT * FROM `content` WHERE`id` = :id");
        $this->bind('id', $id);
        $this->execute();

        $content = $this->fetch();
        if (!empty($content)) {
              return  $content; 
        }
    }


      /**
     * @param array
     * @return array
     * @desc Creates and returns a user record....
     **/
    public function UpdateContent(array $data): array
    {
        $this->query("UPDATE `content` SET `title`=?,`Shortdescription`=?,`description`=?,`image`=?,`status`=? WHERE  `id` =?");
        $this->bind(1, $data['title']);
        $this->bind(2, $data['Shortdescription']);
        $this->bind(3, $data['description']);
        $this->bind(4, $data['image']);
        $this->bind(5, $data['status']);
        $this->bind(6, $data['id']);

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


    public function deleteContentImage($id){
        $this->query("SELECT `image`FROM `content` WHERE `id` = :id");
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
    public function deleteContent($id): array
    {
        $this->query("DELETE FROM `content` WHERE `id` = :id");
        $this->bind('id', $id);
        if ($this->execute()) {
            $Response = array(
                'status' => true,
                'msg' =>'Content Delete successfully'
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
