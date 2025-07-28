<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Kelas <span class="text-danger">*</span></label>
                {{ Form::text('nama_kelas',null,['class'=>'form-control','placeholder'=>'Masukkan nama kelas'])}}
                @if ($errors->has('nama_kelas')) <span class="help-block" style="color:red">{{ $errors->first('nama_kelas') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Kode Kelas <span class="text-danger">*</span></label>
                {{ Form::text('kode_kelas',null,['class'=>'form-control','placeholder'=>'Masukkan kode kelas'])}}
                @if ($errors->has('kode_kelas')) <span class="help-block" style="color:red">{{ $errors->first('kode_kelas') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Kapasitas <span class="text-danger">*</span></label>
                {{ Form::number('kapasitas',null,['class'=>'form-control','placeholder'=>'Masukkan kapasitas','min'=>'1','max'=>'100'])}}
                @if ($errors->has('kapasitas')) <span class="help-block" style="color:red">{{ $errors->first('kapasitas') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Tahun Ajaran <span class="text-danger">*</span></label>
                {{ Form::text('tahun_ajaran',null,['class'=>'form-control','placeholder'=>'Contoh: 2024/2025'])}}
                @if ($errors->has('tahun_ajaran')) <span class="help-block" style="color:red">{{ $errors->first('tahun_ajaran') }}</span> @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Semester <span class="text-danger">*</span></label>
                {{ Form::select('semester',[''=>'Pilih Semester','Ganjil'=>'Ganjil','Genap'=>'Genap'],null,['class'=>'form-control'])}}
                @if ($errors->has('semester')) <span class="help-block" style="color:red">{{ $errors->first('semester') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Guru <span class="text-danger">*</span></label>
                {{ Form::select('guru_id',[''=>'Pilih Guru'] + $guru->pluck('nama_lengkap','id')->toArray(),null,['class'=>'form-control'])}}
                @if ($errors->has('guru_id')) <span class="help-block" style="color:red">{{ $errors->first('guru_id') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Status <span class="text-danger">*</span></label>
                {{ Form::select('status',[''=>'Pilih Status','Aktif'=>'Aktif','Tidak Aktif'=>'Tidak Aktif'],null,['class'=>'form-control'])}}
                @if ($errors->has('status')) <span class="help-block" style="color:red">{{ $errors->first('status') }}</span> @endif
            </div>
        </div>
    </div>

    <div class="form-group mt-2">
        <label>Deskripsi</label>
        {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Masukkan deskripsi kelas (opsional)']) }}
        @if ($errors->has('deskripsi')) <span class="help-block" style="color:red">{{ $errors->first('deskripsi') }}</span> @endif
    </div>
  
</div>
  
<div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('kelas.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
</div> 