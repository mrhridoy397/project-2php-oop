<?php
require_once(__dir__ . '/controller.php');
require_once('./model/basicTradeModel.php');
require_once('./controller/newUploadsFile.php');
class basicTradeModelController extends Controller
{

    public $active = 'Basic Trade'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new basicTradeModel();
    }


    // batch Asign
    public function batch()
    {
        return $this->Model->getBatch();
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function getbasicTrade(): array
    {
        return $this->Model->indexbasicTrade();
    }
    /**
     * @param array
     * @return array|boolean
     * @desc Creates, and returns a user by calling the create method on the BatchModel...\
     **/
    public function createbasicTrade($data, $file)
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
            'batchId' => $data['batchId'],
            'title' => $data['title'],
            'courseName' => $data['courseName'],
            'courseFee' => $data['courseFee'],
            'description' => $data['description'],
            'courseDuration' => $data['courseDuration'],
            'Discount' => $data['Discount'],
            'classSize' => $data['classSize'],
            'image' => $image,
            'status' => $data['status'],

        );
        $Response = $this->Model->basicTradeCreate($Payload);

        if (!$Response['status']) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data added successfully';
            header("location: basicTradeIndex.php");
            return $Response;
        }
    }

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function basicTradeedit($id)
    {
        return $this->Model->editbasicTrade($id);
    }

    public function basicTradeUpdate(array $data, $file)
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
                'batchId' => $data['batchId'],
                'title' => $data['title'],
                'courseName' => $data['courseName'],
                'courseFee' => $data['courseFee'],
                'description' => $data['description'],
                'courseDuration' => $data['courseDuration'],
                'Discount' => $data['Discount'],
                'classSize' => $data['classSize'],
                'image' => $image,
                'status' => $data['status'],
            );
            $Response = $this->Model->UpdatebasicTrade($Payload);

            if (!$Response['status']) {
                $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
                return $Response;
            } else {
                $Response['status'] = 'Congress! you data Update successfully';
                header("location: basicTradeIndex.php");
                return $Response;
            }
        }
    }


    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function basicTradeDelete($id)
    {
        $image = $this->Model->deletebasicTradeImage($id);
        if ($image['image'] != false) {
            unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $image['image']);
        }

        $response = $this->Model->deletebasicTrade($id);
        if (!$response) {
            $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
            header("location: basicTradeIndex.php");
            return $Response;
        } else {
            $Response['status'] = 'Congress! you data Update successfully';
            header("location: basicTradeIndex.php");
            return $Response;
        }
    }
}
