<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'NIM' => 'required|string|max:16|unique:mahasiswas,NIM',
            'nama' => 'required|string|max:250',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
        ];
    }
}
