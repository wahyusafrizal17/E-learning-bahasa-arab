<?php

namespace App\Http\Requests\Guru;

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
        $guruId = $this->route('guru');
        
        return [
            'nama_lengkap' => 'required|string|max:255',
            'nip' => [
                'required',
                'string',
                'max:20',
                Rule::unique('guru')->ignore($guruId)
            ],
            'nuptk' => [
                'required',
                'string',
                'max:20',
                Rule::unique('guru')->ignore($guruId)
            ],
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'bidang_studi' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
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
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nip.required' => 'NIP wajib diisi',
            'nip.unique' => 'NIP sudah terdaftar',
            'nuptk.required' => 'NUPTK wajib diisi',
            'nuptk.unique' => 'NUPTK sudah terdaftar',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'no_telepon.required' => 'No telepon wajib diisi',
            'bidang_studi.required' => 'Bidang studi wajib diisi',
            'pendidikan_terakhir.required' => 'Pendidikan terakhir wajib diisi',
            'foto.image' => 'File harus berupa gambar',
            'foto.mimes' => 'Format gambar harus jpeg, png, atau jpg',
            'foto.max' => 'Ukuran gambar maksimal 2MB'
        ];
    }
}
