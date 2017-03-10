<?php

namespace Source\Ad\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Source\Ad\Models\Samples;

Class SampleAdminController extends Controller
{
	public $data_view = array();
	private $obj_sample = NULL;

	public function __construct() {
        $this->obj_sample = new Samples();
    }

    public function index(Request $request)
    {
    	$params = $request->all();

        $list_sample = $this->obj_sample->get_samples($params);

        $this->data_view = array_merge($this->data_view, array(
            'samples' => $list_sample,
            'request' => $request,
            'params' => $params
        ));
        return view('ad::admin.sample.sample_index', $this->data_view);
    }

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

    /**
     *
     * @return type
     */
    public function post(Request $request) {
        echo 'ssh';

        /*$this->obj_validator = new SampleAdminValidator();

        $input = $request->all();

        $sample_id = (int) $request->get('id');
        $sample = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($sample_id) && is_int($sample_id)) {

                $sample = $this->obj_sample->find($sample_id);
            }

        } else {
            if (!empty($sample_id) && is_int($sample_id)) {

                $sample = $this->obj_sample->find($sample_id);

                if (!empty($sample)) {

                    $input['sample_id'] = $sample_id;
                    $sample = $this->obj_sample->update_sample($input);

                    //Message
                    \Session::flash('message', trans('sample::sample_admin.message_update_successfully'));
                    return Redirect::route("admin_sample.edit", ["id" => $sample->sample_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::sample_admin.message_update_unsuccessfully'));
                }
            } else {

                $sample = $this->obj_sample->add_sample($input);

                if (!empty($sample)) {

                    //Message
                    \Session::flash('message', trans('sample::sample_admin.message_add_successfully'));
                    return Redirect::route("admin_sample.edit", ["id" => $sample->sample_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::sample_admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'sample' => $sample,
            'request' => $request,
        ), $data);

        return view('sample::sample.admin.sample_edit', $this->data_view);*/
    }
}