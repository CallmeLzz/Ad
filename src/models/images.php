<?php

namespace Source\Ad\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

    protected $table = 'images';
    public $timestamps = false;
    protected $fillable = [
        'img_name'
    ];
    protected $primaryKey = 'img_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_image($params = array()) {
        $eloquent = self::orderBy('img_id');

        //img_name
        if (!empty($params['img_name'])) {
            $eloquent->where('img_name', 'like', '%'. $params['img_name'].'%');
        }

        $images = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $images;
    }



    /**
     *
     * @param type $input
     * @param type $sample_id
     * @return type
     */
    public function update_image($input, $img_id = NULL) {

        if (empty($img_id)) {
            $img_id = $input['img_id'];
        }

        $img = self::find($img_id);

        if (!empty($img)) {

            $img->img_name = $input['img_name'];

            $img->save();

            return $img;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_image($input) {

        $image = self::create([
                    'img_name' => $input['img_name'],
        ]);
        return $image;
    }

     public function updateImg($update_id, $update_name) {
            if ($update_img == null){
                Images::where('img_id', $update_id)->update(array(                  
                    'img_name' => $update_name,                    
            ));
            }
            else {
                Images::where('img_id', $update_id)->update(array(
                    'img_name' => 'images/'.$update_img,                                                  
                    ));
            }   
    }


   






}
