<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HakenStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100',
            'yomigana'=>'required|max:200',
            'company'=>'required|max:100',
            'number'=>'nullable|max:100',
            'depart'=>'required|max:100',
            'section'=>'required|max:100',
            'job'=>'required|max:100',
            'firstday'=>'nullable|date|different:endday',
            'startday'=>'required|date|different:endday',
            'endday'=>'required|date',
            'worktype'=>'required|max:100',
            'conterm'=>'required|numeric|between:0.5,9',
            'cost'=>'required|integer|min:100',
            'tcostm'=>'nullable|integer|min:1',
            'tcostd'=>'nullable|integer|min:1',
            'troute'=>'nullable|max:100',
            'pnumber'=>'nullable|max:100',
            'pname'=>'nullable|max:100',
            'tcontent'=>'nullable|max:300',
            'aname'=>'required|max:100',
            'aemail'=>'required|email|max:100',
            'body'=>'nullable|max:500',
            'confirmer'=>'required|max:100',
            'cemail'=>'required|email|max:100',
            'costmemo'=>'nullable|max:500',
            'circulator1'=>'nullable|max:100',
            'circulator2'=>'nullable|max:100',
            'circulator3'=>'nullable|max:100',
            'circulator4'=>'nullable|max:100',
            'sccmail1'=>'nullable|email|max:100',
            'sccmail2'=>'nullable|email|max:100',
            'sccmail3'=>'nullable|email|max:100',
            'sccmail4'=>'nullable|email|max:100',
            'sccmail5'=>'nullable|email|max:100',
            'hccmail1'=>'nullable|email|max:100',
            'hccmail2'=>'nullable|email|max:100',
            'hccmail3'=>'nullable|email|max:100',
            'hccmail4'=>'nullable|email|max:100',
            'hccmail5'=>'nullable|email|max:100',
        ];
    }
}
