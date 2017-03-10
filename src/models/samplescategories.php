<?php

namespace Source\Ad\Models;

use Illuminate\Database\Eloquent\Model;

class SamplesCategories extends Model {

    protected $table = 'samples_categories';
    public $timestamps = false;
    protected $fillable = [
        'sample_category_name'
    ];
    protected $primaryKey = 'sample_category_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_samples_category($params = array()) {
        $eloquent = self::orderBy('sample_category_id');

        //sample_category_name
        if (!empty($params['sample_category_name'])) {
            $eloquent->where('sample_category_name', 'like', '%'. $params['sample_category_name'].'%');
        }

        $samples_category = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $samples_category;
    }



    /**
     *
     * @param type $input
     * @param type $sample_id
     * @return type
     */
    public function update_sample_category($input, $sample_category_id = NULL) {

        if (empty($sample_category_id)) {
            $sample_category_id = $input['sample_category_id'];
        }

        $sample_category = self::find($sample_category_id);

        if (!empty($sample_category)) {

            $sample_category->sample_category_name = $input['sample_category_name'];

            $sample_category->save();

            return $sample_category;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_sample_category($input) {

        $sample_category = self::create([
                    'sample_category_name' => $input['sample_category_name'],
        ]);
        return $sample_category;
    }
}
