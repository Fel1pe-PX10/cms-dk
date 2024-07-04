<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('create');;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'targetId'      => ['required'],
            'headline'      => ['required', 'min:3', 'max:255'],
            'description'   => ['required', 'min:3', 'max:255'],
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
