<?php
namespace Source\Ad\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
use Route,
    Redirect;
use Source\Ad\Models\Images;
use Illuminate\Support\Facades\Input;
Class UploadAdminController extends Controller
{
    public $data_view = array();
    private $obj_images = NULL;
    public function __construct() {
        $this->obj_images = new Images();
    }
    public function index(Request $request)
    {
        $params = $request->all();
        $list_image = $this->obj_images->get_image($params);
        $this->data_view = array_merge($this->data_view, array(
            'images' => $list_image,
            'request' => $request,
            'params' => $params
        ));
        return view('ad::admin.image.image_index', $this->data_view);
    }
    /**
     *
     * @return type
     */
    public function edit(Request $request) {
        $images_edit = NULL;
        $img_id = (int) $request->get('id');
        if (!empty($img_id) && (is_int($img_id))) {
            $images_edit = $this->obj_images->find($img_id);
        }
        if ($images_edit != NULL){
            $this->data_view = array_merge($this->data_view, array(
                'images_edit' => $images_edit,
                'request' => $request
            ));
            return view('ad::admin.image.image_index', $this->data_view);
        }
        else {
            return view('ad::admin.image.image_index');
        }
        
    }
    public function post(Request $request){

        $img_id = (int) $request->get('id');
        $img = Input::file('img_url');
        $img_name = $request->input('img_name');
        $image = NULL;
        if (!empty($img_id) && is_int($img_id)) {
                $image = $this->obj_images->find($img_id);
                if (!empty($image)) {
                    //success
                    $input['img_id'] = $img_id;
                     if ($img != null){
                        $this->deletePicture($img_id);

                        $image->updateImg($img_id,$img_name,$this->uploadPicture('img_url'));
                    }
                    else{
                        $image->updateImg($img_id,$img_name,null);
                    }
                    return Redirect::route("admin.image", ["id" => $image->img_id]);
                } else {
                    //fail
                    
                }
        } 
        else {
            //ADD
                $image = new Images($request->input()) ;
                
                if (!empty($image)) {
                    //success
                     $this->validate($request, [ 

                        'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                       
                    ]);
                                   
                    if($file = $request->hasFile('img_url')) {                   
                        $file = $request->file('img_url') ;                   
                        $fileName = $file->getClientOriginalName() ;
                        $destinationPath = public_path().'/images/' ;
                        $file->move($destinationPath,$fileName);
                        $image->img_url = $fileName ;
                        $image->img_name = $img_name ;
                    }
                    $image->save() ;
                     return redirect()->route('admin.image',["id" => $image->img_id])
                                    ->with('success','You have successfully uploaded your files');             
                } else {
                    //fail
            }
        }
    }
    
    public function delete(Request $request) {
        $image = NULL;
        $img_id = $request->get('id');
        if (!empty($img_id)) {
            $image = $this->obj_images->find($img_id);
            if (!empty($image)) {
                  //Message
                // \Session::flash('message', trans('image::image_admin.message_delete_successfully'));
                $image->delete();
            }
        } else {
        }
        
        $this->data_view = array_merge($this->data_view, array(
            'images' => $image,
        ));
        return Redirect::route("admin.image");
    }

 

    /*=============================== UPLOAD PICTURES ===============================*/
    public function uploadPicture($img){
        $img_name = null;
        if (Input::hasfile($img)) {
            $destinationPath = 'images/';
            $extension = Input::file($img)->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $img_name = $fileName;
            Input::file($img)->move($destinationPath, $fileName);
        }
        return $img_name;
    }
/*=============================== DELETE PICTURES ===============================*/
    public function deletePicture($id){
        $picName = null;
        $images = new Images();
        $dataPic = $images->get_image($id);
        foreach ($dataPic as $key => $value) {
            $picName = $value->img_url;
        }
        $checkFile = file_exists(public_path() . '/' . $picName);
        if ($checkFile){
            unlink(public_path() . '/' . $picName);
        }
    }


}