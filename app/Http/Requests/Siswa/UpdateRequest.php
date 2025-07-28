<?php

namespace App\Http\Requests\Siswa;

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
        $siswaId = $this->route('siswa');
        
        return [
            'nama_lengkap' => 'required|string|max:255',
            'nis' => [
                'required',
                'string',
                'max:20',
                Rule::unique('siswa')->ignore($siswaId)
            ],
            'nisn' => [
                'required',
                'string',
                'max:20',
                Rule::unique('siswa')->ignore($siswaId)
            ],
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
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
            'nis.required' => 'NIS wajib diisi',
            'nis.unique' => 'NIS sudah terdaftar',
            'nisn.required' => 'NISN wajib diisi',
            'nisn.unique' => 'NISN sudah terdaftar',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'no_telepon.required' => 'No telepon wajib diisi',
            'foto.image' => 'File harus berupa gambar',
            'foto.mimes' => 'Format gambar harus jpeg, png, atau jpg',
            'foto.max' => 'Ukuran gambar maksimal 2MB'
        ];
    }
}
