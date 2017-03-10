<?php

namespace Source\Ad\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Source\Ad\Models\Samples;

Class AdController extends Controller
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
        return view('ad::admin.page.index', $this->data_view);
    	//var_dump(base_path());
    	//var_dump(public_path());
    	//return view('ad::admin.masterpage', array());
    	//return view('ad::index', array());
    }
}