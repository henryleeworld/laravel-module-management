<?php

namespace Modules\ExpenseManagement\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIncomeCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('income_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
