<?php

namespace App\Http\Requests;

use App\Models\Region;
use Illuminate\Foundation\Http\FormRequest;

class OrdersPostRequest extends FormRequest
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
            'data.weight' => 'required|numeric',
            'data.region' => 'exists:' . Region::class . ',id',
            'data.delivery_hours' => 'required|array|size:2',
            'data.delivery_hours.*' => 'required_with:data.delivery_hours,date_format:H:i:s',
            'data.delivery_hours.1' => 'required_with:data.delivery_hours,after:data.delivery_hours.0',
        ];
    }
}
