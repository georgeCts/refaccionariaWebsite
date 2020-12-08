<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class ProductValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function importData(Request $request){
        $datos = $request->all();
        
        $validator = Validator::make($request->all(), [
            'file'          => 'required|file'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        return true;
    }
}
