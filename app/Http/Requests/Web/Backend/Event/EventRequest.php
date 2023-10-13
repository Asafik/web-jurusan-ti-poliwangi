<?php

namespace App\Http\Requests\Web\Backend\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
                'title' => 'required',
                'thumbnail' => 'required',
                'summary' => 'required',
                'content' => 'required',
                'date_start'=> 'required',
                'date_end' => 'required',
                'file' => 'mimes:png,jpg,jpeg',
                'slug'=>'required',
                
        ];
    }
}
