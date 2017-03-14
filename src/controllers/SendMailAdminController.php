<?php
namespace Source\Ad\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
use Excel;
use Route,
    Redirect;
use Source\Ad\Models\Contacts;
Class SendMailAdminController extends Controller
{
    public $data_view = array();
    private $obj_contact = NULL;
    public function __construct() {
        $this->obj_contact = new Contacts();
    }
    public function index(Request $request)
    {
        $params = $request->all();
        $list_contact = $this->obj_contact->get_contact($params);
        $this->data_view = array_merge($this->data_view, array(
            'contacts' => $list_contact,
            'request' => $request,
            'params' => $params
        ));
        return view('ad::admin.contact.contact_index', $this->data_view);
    }
    /**
     *
     * @return type
     */
    public function edit(Request $request) {
        $contacts_edit = NULL;
        $contact_id = (int) $request->get('id');
        if (!empty($contact_id) && (is_int($contact_id))) {
            $contacts_edit = $this->obj_contact->find($contact_id);
        }
        if ($contacts_edit != NULL){
            $this->data_view = array_merge($this->data_view, array(
                'contacts_edit' => $contacts_edit,
                'request' => $request
            ));
            return view('ad::admin.contact.contact_index', $this->data_view);
        }
        else {
            return view('ad::admin.contact.contact_index');
        }
        
    }
    public function post(Request $request){
        $input = $request->all();
        $contact_id = (int) $request->get('id');
        $contact = NULL;
        if (!empty($contact_id) && is_int($contact_id)) {
                $contact = $this->obj_contact->find($contact_id);
                if (!empty($contact)) {
                    //success
                    $input['contact_id'] = $contact_id;
                    $contact = $this->obj_contact->update_contact($input);
                    return Redirect::route("admin.contact", ["id" => $contact->contact_id]);
                } else {
                    //fail
                    
                }
        } 
        else {
            //ADD
            $contact = $this->obj_contact->add_contact($input);
            if (!empty($contact)) {
                //success
                return Redirect::route("admin.contact", ["id" => $contact->contact_id]);
            } else {
                //fail
            }
        }
    }
    
    public function delete(Request $request) {
        $contact = NULL;
        $contact_id = $request->get('id');
        if (!empty($contact_id)) {
            $contact = $this->obj_contact->find($contact_id);
            if (!empty($contact)) {
                  //Message
                // \Session::flash('message', trans('contact::contact_admin.message_delete_successfully'));
                $contact->delete();
            }
        } else {
        }
        
        $this->data_view = array_merge($this->data_view, array(
            'contacts' => $contact,
        ));
        return Redirect::route("admin.contact");
    }

     public function exportContact(){
        $contact = new Contacts();
        $result_contact = $contact->exportContact();
        
        Excel::create('contacts', function($excel) use($result_contact){
            $excel->sheet('ContactSheet', function($sheet) use($result_contact){
                $sheet->fromArray($result_contact);
            });
        })->export('xls');
    }

    





}