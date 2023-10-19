<?php
require_once(__dir__ . '/controller.php');
require_once('./model/SettingsModel.php');
require_once('./controller/newUploadsFile-2.php');
class Settings extends Controller
{

    public $active = 'settings'; //for highlighting the active link...
    private $Model;

    /**
     * @param null|void
     * @return null|void
     * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
     **/
    public function __construct()
    {
        if (!isset($_SESSION['auth_status'])) header("Location: index.php");
        $this->Model = new SettingModel();
    }
  

    /**
     * @param null|void
     * @return array
     * @desc Returns an array of news by calling the  BatchModel fetchNews method...
     **/
    public function edit(): array
    {
        return $this->Model->edit();
    }

    public function Update($data, $file)
    {
        if ($file['sideLogo']['name'] == "") {
            $sideLogo = $data['oldsideLogo'];
        } 
        else {
            if ($data['oldsideLogo'] != "") {
                unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $data['oldsideLogo']);
            }
            $files = $file['sideLogo'];
            $fileName = new uploads();
            $fileName->startupload($files);
            $fileName->uploadfile();
            $sideLogo  =  $fileName->dbupload;
        }
        if ($file['FaviconIcon']['name'] == "") {
            $FaviconIcon = $data['oldFaviconIcon'];
        } 
        else {
            if ($data['oldFaviconIcon'] != "") {
                unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $data['oldFaviconIcon']);
            }
            $files = $file['FaviconIcon'];
            $fileName = new uploads();
            $fileName->startupload($files);
            $fileName->uploadfile();
            $FaviconIcon  =  $fileName->dbupload;
        }
        if ($file['ContentImage']['name'] == "") {
            $ContentImage = $data['oldContentImage'];
        } 
        else {
            if ($data['oldContentImage'] != "") {
                unlink($_SERVER['DOCUMENT_ROOT'] . "/project-2/" . $data['oldContentImage']);
            }
            $files = $file['ContentImage'];
            $fileName = new uploads();
            $fileName->startupload($files);
            $fileName->uploadfile();
            $ContentImage  =  $fileName->dbupload;
        }
        
      

        $Payload = array(
           'siteTitle' => $data['siteTitle'],
           'sideLogo' => $sideLogo,
           'sliderTitle' => $data['sliderTitle'],
           'email' => $data['email'],
           'phoneNumber' => $data['phoneNumber'],
           'footerTitle' => $data['footerTitle'],
           'address' => $data['address'],
           'footerDev' => $data['footerDev'],
           'coursesTitle' => $data['coursesTitle'],
           'coursesDescription' => $data['coursesDescription'],
           'facebook' => $data['facebook'],
           'twitter' => $data['twitter'],
           'youtube' => $data['youtube'],
           'instagram' => $data['instagram'],
           'Linkdin' => $data['Linkdin'],
           'ifream' => $data['ifream'],
           'ifream2' => $data['ifream2'],
           'openingHours' => $data['openingHours'],
           'FaviconIcon' => $FaviconIcon,
           'payment' => $data['payment'],
           'ContentTitle' => $data['ContentTitle'],
           'ContentImage' => $ContentImage,
           'FreelanchingTitle' => $data['FreelanchingTitle'],
           






        );
        $Response = $this->Model->Update($Payload);

        if (!$Response = true) {
            $Response = 'Sorry, An unexpected error occurred and your request could not be completed.';
            return $Response;
        } else {
            $Response  = 'Congress! you data Update successfully';
            header("location:SettingEdit.php");
            return $Response;
        }
    }


    
}
