<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentData extends FormRequest
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
            'studentName'=>'required|regex:/^[\pL\s\-]+$/u',
            'studentEmail'=>'required|email',
            'studentPhone'=>'required|numeric|digits:11',
            'studentCollege'=>'required|regex:/^[\pL\s\-]+$/u',
            'studentYear'=>'required|numeric',
            'studentCommitteeA'=>'required|regex:/^[\pL\s\-]+$/u',
            'studentCommitteeB'=>'required|regex:/^[\pL\s\-]+$/u',
            'studentDateA'=>'required',
            'studentTimeA'=>'required',
            'studentDateB'=>'required',
            'studentTimeB'=>'required',
        ];
    }
    public function messages()
    {
        return [

            'studentName.required' => '*A Name is required',
            'studentName.regex' => '*A Name must be text',
            'studentEmail.required'=> '*An Email is required',
            'studentEmail.email'=> '*An Email must be valid',
            'studentPhone.required'=>'*A Phone is required',
            'studentPhone.numeric'=>'*A Phone must be number',
            'studentPhone.digits'=>'*A Phone must be 11 numbers',
            'studentCollege.required'=>'*A College is required',
            'studentCollege.regex'=>'*A College must be text',
            'studentYear.required'=>'*A Year is required',
            'studentYear.numeric'=>'*A Year must be number',
            'studentCommitteeA.required'=>'*A Committee A is required',
            'studentCommitteeA.regex'=>'*A Committee A must be text',
            'studentCommitteeB.required'=>'*A Committee A is required',
            'studentCommitteeB.regex'=>'*A Committee A must be text',
            'studentDateA.required'=>'*A Date is required',
            'studentTimeA.required'=>'*A Time is required',
            'studentDateB.required'=>'*A Date is required',
            'studentTimeB.required'=>'*A Time is required'
        ];
    }
}
