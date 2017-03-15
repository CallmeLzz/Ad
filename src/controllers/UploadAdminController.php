<?php
namespace Source\Ad\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
use Route,
    Redirect;
use Source\Ad\Models\Images;
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
        $input = $request->all();
        $img_id = (int) $request->get('id');
        $image = NULL;
        if (!empty($img_id) && is_int($img_id)) {
                $image = $this->obj_images->find($img_id);
                if (!empty($image)) {
                    //success
                    $input['imag_id'] = $img_id;
                    $image = $this->obj_image->update_image($input);
                    return Redirect::route("admin.image", ["id" => $image->image_id]);
                } else {
                    //fail
                    
                }
        } 
        else {
            //ADD
                //$image = $this->obj_image->add_image($input);
                if (!empty($image)) {
                    //success
                     $this->validate($request, [          
                        'img_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                    $image = new Images($request->input()) ;
                 
                    if($file = $request->hasFile('img_name')) {                   
                        $file = $request->file('img_name') ;                   
                        $fileName = $file->getClientOriginalName() ;
                        $destinationPath = public_path().'/images/' ;
                        $file->move($destinationPath,$fileName);
                        $image->img_name = $fileName ;
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

    ///////////////////////////////////////////////////////////////////
    public function store(Request $request) {
        
        $this->validate($request, [          
            'img_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = new Images($request->input()) ;
     
         if($file = $request->hasFile('img_name')) {
            
            $file = $request->file('img_name') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $image->img_name = $fileName ;
        }
        $image->save() ;
         return redirect()->route('admin.image')
                        ->with('success','You have successfully uploaded your files');
    }
    
}