<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Hash;
use Route;
use Response;
use Auth;
use URL;
use Session;
use DB;
use Mail;
use App\Job;

use App\Http\Controllers\Controller;



class HomeController extends Controller
{
	public function __construct() {
        $this->layout = "layouts.master";
        //CHECK IF THE HOMEPAGE IS SET
    }

    public function getIndex()
    {   
        return view('pages.index')
        ->with('layout',$this->layout);
    }

    public function getLandingPage()
    {   
        return view('pages.layoutedit')
        ->with('layout',"layouts.Landing_Page");
    }

    public function getFullWidthPics()
    {   
        return view('pages.layoutedit')
        ->with('layout',"layouts.Full_Width_Pics");
    }
    
    public function getFreelancer()
    {   
        return view('pages.layoutedit')
        ->with('layout',"layouts.Freelancer");
    }
    
    public function getAgency()
    {   
        return view('pages.layoutedit')
        ->with('layout',"layouts.agencyl");
    }    

    public function getMobile()
    {   
        return view('pages.layouteditmobile')
        ->with('layout',"layouts.mobile");
    }

    public function postUploads(Request $request)
    {   
        if($request->ajax()){

            $status = 400;
            $files = $_FILES;
            $tempPath = $files['qqfile']['tmp_name']; 
            $image_name = $files['qqfile']['name'];

            $image_types = $files['qqfile']['type'];
            $type_array = explode('/', $image_types);
            $type = $type_array[1];
            $base_type = $type_array[0];


            if ($base_type == "image") {
                $imagePath = public_path('assets'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'posts'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR.'tmp'.DIRECTORY_SEPARATOR.'image');
            } elseif ($base_type == "video") {
                $imagePath = public_path('assets'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'posts'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR.'tmp'.DIRECTORY_SEPARATOR.'video');
            }

            if( ! \File::isDirectory($imagePath) ) {
                \File::makeDirectory($imagePath, 493, true);
            }

            $rand = Job::generateRandomString(5);
            $time = time();
            $final_path = $rand.'_'.$time.'.'.$type;


            if (!is_writable(dirname($imagePath))) {
                $status = 401;
                return Response::json(array(
                    "error" => 'Destination Unwritable'
                    ));
            } else {
                $newpath = $imagePath.DIRECTORY_SEPARATOR.$final_path;
                if (move_uploaded_file($tempPath,$newpath)) {
                    return Response::json(array(
                        'status' => 200,
                        'success'=>true,
                        'img_name' => $final_path,
                        'old_name' => $image_name,
                        'base_type' => $base_type,
                        'full_url' => '/assets/images/posts/1/tmp/image/'.$final_path
                        ));
                } else {
                    $status = 402;
                }
            }
            return Response::json(array(
                'status' => $status
                ));
        }
    }

    


}

