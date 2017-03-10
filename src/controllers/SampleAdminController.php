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

    
}