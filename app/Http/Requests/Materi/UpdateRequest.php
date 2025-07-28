<?php

namespace App\Http\Requests\Materi;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
   public function rules()
    {
        return [
            'nama_materi'     => 'required|max:255',
            'banner'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'materi'          => 'required',
            'deskripsi'       => 'nullable|max:1000',
            'tingkat_kesulitan' => 'required|in:Pemula,Menengah,Lanjutan',
            'kategori'        => 'required|in:Huruf Hijaiyah,Tajwid,Nahwu,Shorof,Muhadatsah,Qiroah,Kitabah',
            'kelas_id'        => 'nullable|exists:kelas,id',
            'urutan'          => 'required|integer|min:1',
            'status'          => 'required|in:Aktif,Draft,Arsip',
        ];
    }

    public function messages()
    {
        return [
            'nama_materi.required'          => 'Nama materi tidak boleh kosong',
            'nama_materi.max'               => 'Nama materi maksimal 255 karakter',
            'banner.image'                  => 'Banner harus berupa gambar',
            'banner.mimes'                  => 'Banner harus berformat jpeg, png, atau jpg',
            'banner.max'                    => 'Ukuran banner maksimal 2MB',
            'materi.required'               => 'Materi tidak boleh kosong',
            'deskripsi.max'                 => 'Deskripsi maksimal 1000 karakter',
            'tingkat_kesulitan.required'    => 'Tingkat kesulitan harus dipilih',
            'tingkat_kesulitan.in'          => 'Tingkat kesulitan tidak valid',
            'kategori.required'             => 'Kategori harus dipilih',
            'kategori.in'                   => 'Kategori tidak valid',
            'kelas_id.exists'               => 'Kelas tidak ditemukan',
            'urutan.required'               => 'Urutan harus diisi',
            'urutan.integer'                => 'Urutan harus berupa angka',
            'urutan.min'                    => 'Urutan minimal 1',
            'status.required'               => 'Status harus dipilih',
            'status.in'                     => 'Status tidak valid',
        ];
    }
}
