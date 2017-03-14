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
    private $obj_sample = NULL;
    public function __construct() {
        $this->obj_sample = new Images();
    }
    public function index(Request $request)
    {
        $params = $request->all();
        $list_image = $this->obj_sample->get_image($params);
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
        $samples_edit = NULL;
        $sample_id = (int) $request->get('id');
        if (!empty($sample_id) && (is_int($sample_id))) {
            $samples_edit = $this->obj_sample->find($sample_id);
        }
        if ($samples_edit != NULL){
            $this->data_view = array_merge($this->data_view, array(
                'samples_edit' => $samples_edit,
                'request' => $request
            ));
            return view('ad::admin.sample.sample_index', $this->data_view);
        }
        else {
            return view('ad::admin.sample.sample_index');
        }
        
    }
    public function post(Request $request){
        $input = $request->all();
        $sample_id = (int) $request->get('id');
        $sample = NULL;
        if (!empty($sample_id) && is_int($sample_id)) {
                $sample = $this->obj_sample->find($sample_id);
                if (!empty($sample)) {
                    //success
                    $input['sample_id'] = $sample_id;
                    $sample = $this->obj_sample->update_sample($input);
                    return Redirect::route("admin.sample", ["id" => $sample->sample_id]);
                } else {
                    //fail
                    
                }
        } 
        else {
            //ADD
            $sample = $this->obj_sample->add_sample($input);
            if (!empty($sample)) {
                //success
                return Redirect::route("admin.sample", ["id" => $sample->sample_id]);
            } else {
                //fail
            }
        }
    }
    
    public function delete(Request $request) {
        $sample = NULL;
        $sample_id = $request->get('id');
        if (!empty($sample_id)) {
            $sample = $this->obj_sample->find($sample_id);
            if (!empty($sample)) {
                  //Message
                // \Session::flash('message', trans('sample::sample_admin.message_delete_successfully'));
                $sample->delete();
            }
        } else {
        }
        
        $this->data_view = array_merge($this->data_view, array(
            'samples' => $sample,
        ));
        return Redirect::route("admin.sample");
    }


    










}