<?php

namespace Source\Ad\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model {

    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = [
        'contact_mail'
    ];
    protected $primaryKey = 'contact_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_contact($params = array()) {
        $eloquent = self::orderBy('contact_id');

        //contact_mail
        if (!empty($params['contact_mail'])) {
            $eloquent->where('contact_mail', 'like', '%'. $params['contact_mail'].'%');
        }

        $samples = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $samples;
    }



    /**
     *
     * @param type $input
     * @param type $contact_id
     * @return type
     */
    public function update_sample($input, $contact_id = NULL) {

        if (empty($contact_id)) {
            $contact_id = $input['contact_id'];
        }

        $sample = self::find($contact_id);

        if (!empty($sample)) {

            $sample->contact_mail = $input['contact_mail'];

            $sample->save();

            return $sample;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_sample($input) {

        $sample = self::create([
                    'contact_mail' => $input['contact_mail'],
        ]);
        return $sample;
    }
}
