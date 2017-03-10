<?php
namespace Source\Ad\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
use Route,
    Redirect;
use Source\Ad\Models\Samples;
<<<<<<< HEAD

Class SampleAdminController extends Controller {

    public $data_view = array();
    private $obj_sample = NULL;

    public function __construct() {
        $this->obj_sample = new Samples();
    }

    public function index(Request $request) {
=======
Class SampleAdminController extends Controller
{
    public $data_view = array();
    private $obj_sample = NULL;
    public function __construct() {
        $this->obj_sample = new Samples();
    }
    public function index(Request $request)
    {
>>>>>>> origin/master
        $params = $request->all();
        $list_sample = $this->obj_sample->get_samples($params);
        $this->data_view = array_merge($this->data_view, array(
            'samples' => $list_sample,
            'request' => $request,
            'params' => $params
        ));
        return view('ad::admin.sample.sample_index', $this->data_view);
    }
<<<<<<< HEAD

=======
>>>>>>> origin/master
    /**
     *
     * @return type
     */
    public function edit(Request $request) {
        $sample = NULL;
        $sample_id = (int) $request->get('id');
        if (!empty($sample_id) && (is_int($sample_id))) {
            $sample = $this->obj_sample->find($sample_id);
        }
        $this->data_view = array_merge($this->data_view, array(
            'samples_edit' => $sample,
            'request' => $request
        ));
        return view('ad::admin.sample.sample_index', $this->data_view);
    }
<<<<<<< HEAD

    public function post(Request $request) {
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
        } else {
            //ADD
            $sample = $this->obj_sample->add_sample($input);
            if (!empty($sample)) {
                //success
                return Redirect::route("admin_sample.edit", ["id" => $sample->sample_id]);
            } else {
                //fail
            }
        }
    }

    public function delete(Request $request) {
        $sample = NULL;
=======
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
                return Redirect::route("admin_sample.edit", ["id" => $sample->sample_id]);
            } else {
                //fail
            }
        }
    }
    
    public function delete(Request $request) {
        $sample = NULL;
>>>>>>> origin/master
        $sample_id = $request->get('id');
        if (!empty($sample_id)) {
            $sample = $this->obj_sample->find($sample_id);
            if (!empty($sample)) {
                //Message
                // \Session::flash('message', trans('sample::sample_admin.message_delete_successfully'));
                $sample->delete();
            }
        } else {
<<<<<<< HEAD
            
=======
>>>>>>> origin/master
        }

        $this->data_view = array_merge($this->data_view, array(
            'samples' => $sample,
        ));
        return Redirect::route("admin.sample");
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> origin/master
