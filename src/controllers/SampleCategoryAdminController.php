<?php
namespace Source\Ad\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
use Route,
    Redirect;
use Source\Ad\Models\SamplesCategories;
Class SampleCategoryAdminController extends Controller
{
    public $data_view = array();
    private $obj_sample_category = NULL;
    public function __construct() {
        $this->obj_sample_category = new SamplesCategories();
    }
    public function index(Request $request)
    {
        $params = $request->all();
        $list_sample_category = $this->obj_sample_category->get_samples_category($params);
        $this->data_view = array_merge($this->data_view, array(
            'samples_category' => $list_sample_category,
            'request' => $request,
            'params' => $params
        ));
        return view('ad::admin.sample_category.sample_category_index', $this->data_view);
    }
    /**
     *
     * @return type
     */
    public function edit(Request $request) {
        $samples_category_edit = NULL;
        $sample_category_id = (int) $request->get('id');
        if (!empty($sample_category_id) && (is_int($sample_category_id))) {
            $samples_category_edit = $this->obj_sample_category->find($sample_category_id);
        }
        if ($samples_category_edit != NULL){
            $this->data_view = array_merge($this->data_view, array(
                'samples_category_edit' => $samples_category_edit,
                'request' => $request
            ));
            return view('ad::admin.sample_category.sample_category_index', $this->data_view);
        }
        else {
            return view('ad::admin.sample_category.sample_category_index');
        }
        
    }
    public function post(Request $request){
        $input = $request->all();
        $sample_category_id = (int) $request->get('id');
        $sample_category = NULL;
        if (!empty($sample_category_id) && is_int($sample_category_id)) {
                $sample_category = $this->obj_sample_category->find($sample_category_id);
                if (!empty($sample_category)) {
                    //success
                    $input['sample_category_id'] = $sample_category_id;
                    $sample_category = $this->obj_sample_category->update_sample_category($input);
                    return Redirect::route("admin.sample_category", ["id" => $sample_category->sample_category_id]);
                } else {
                    //fail
                    
                }
        } 
        else {
            //ADD
            $sample_category = $this->obj_sample_category->add_sample_category($input);
            if (!empty($sample_category)) {
                //success
                return Redirect::route("admin.sample_category", ["id" => $sample_category->sample_category_id]);
            } else {
                //fail
            }
        }
    }
    
    public function delete(Request $request) {
        $sample_category = NULL;
        $sample_category_id = $request->get('id');
        if (!empty($sample_category_id)) {
            $sample_category = $this->obj_sample_category->find($sample_category_id);
            if (!empty($sample_category)) {
                  //Message
                // \Session::flash('message', trans('sample::sample_admin.message_delete_successfully'));
                $sample_category->delete();
            }
        } else {
        }
        
        $this->data_view = array_merge($this->data_view, array(
            'samples_category' => $sample_category,
        ));
        return Redirect::route("admin.sample_category");
    }
}