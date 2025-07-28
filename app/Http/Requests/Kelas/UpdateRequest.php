<?php

namespace App\Http\Requests\Kelas;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
        $kelasId = $this->route('kelas');
        
        return [
            'nama_kelas' => 'required|string|max:255',
            'kode_kelas' => [
                'required',
                'string',
                'max:50',
                Rule::unique('kelas')->ignore($kelasId)
            ],
            'kapasitas' => 'required|integer|min:1|max:100',
            'tahun_ajaran' => 'required|string|max:20',
            'semester' => 'required|in:Ganjil,Genap',
            'guru_id' => 'required|exists:guru,id',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Aktif,Tidak Aktif'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama_kelas.required' => 'Nama kelas wajib diisi',
            'kode_kelas.required' => 'Kode kelas wajib diisi',
            'kode_kelas.unique' => 'Kode kelas sudah terdaftar',
            'kapasitas.required' => 'Kapasitas wajib diisi',
            'kapasitas.integer' => 'Kapasitas harus berupa angka',
            'kapasitas.min' => 'Kapasitas minimal 1',
            'kapasitas.max' => 'Kapasitas maksimal 100',
            'tahun_ajaran.required' => 'Tahun ajaran wajib diisi',
            'semester.required' => 'Semester wajib dipilih',
            'guru_id.required' => 'Guru wajib dipilih',
            'guru_id.exists' => 'Guru yang dipilih tidak ditemukan',
            'status.required' => 'Status wajib dipilih'
        ];
    }
}
