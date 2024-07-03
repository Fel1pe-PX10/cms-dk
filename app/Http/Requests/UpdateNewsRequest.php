<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'targetId'      => ['sometimes','required'],
            'headline'      => ['required', 'min:3', 'max:255'],
            'description'   => ['required', 'min:3', 'max:255'],
            'image'         => ['required'],
            'video'         => ['required'],
            'document'      => ['required'],
            'createdBy'     => ['required'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'target_id'  => $this->targetId,
            'created_by' => $this->createdBy,
        ]);
    }
}
