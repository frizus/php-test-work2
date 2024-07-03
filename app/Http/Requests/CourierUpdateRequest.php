<?php

namespace App\Http\Requests;

use App\Models\Region;
use Illuminate\Foundation\Http\FormRequest;

class CourierUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'courier_type' => 'nullable|in:foor,bike,car',
            'regions' => 'nullable|array|min:1',
            'regions.*' => 'exists:' . Region::class . ',id',
            'working_hours' => 'nullable|array|size:2',
            'working_hours.*' => 'required_with:working_hours,date_format:H:i:s',
            'working_hours.1' => 'required_with:working_hours,after:working_hours.0',
        ];
    }
}
