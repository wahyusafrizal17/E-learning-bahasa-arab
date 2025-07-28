<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Lengkap <span class="text-danger">*</span></label>
                {{ Form::text('nama_lengkap',null,['class'=>'form-control','placeholder'=>'Masukkan nama lengkap'])}}
                @if ($errors->has('nama_lengkap')) <span class="help-block" style="color:red">{{ $errors->first('nama_lengkap') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>NIS <span class="text-danger">*</span></label>
                {{ Form::text('nis',null,['class'=>'form-control','placeholder'=>'Masukkan NIS'])}}
                @if ($errors->has('nis')) <span class="help-block" style="color:red">{{ $errors->first('nis') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>NISN <span class="text-danger">*</span></label>
                {{ Form::text('nisn',null,['class'=>'form-control','placeholder'=>'Masukkan NISN'])}}
                @if ($errors->has('nisn')) <span class="help-block" style="color:red">{{ $errors->first('nisn') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                {{ Form::select('jenis_kelamin',[''=>'Pilih Jenis Kelamin','Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan'],null,['class'=>'form-control'])}}
                @if ($errors->has('jenis_kelamin')) <span class="help-block" style="color:red">{{ $errors->first('jenis_kelamin') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Tempat Lahir <span class="text-danger">*</span></label>
                {{ Form::text('tempat_lahir',null,['class'=>'form-control','placeholder'=>'Masukkan tempat lahir'])}}
                @if ($errors->has('tempat_lahir')) <span class="help-block" style="color:red">{{ $errors->first('tempat_lahir') }}</span> @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Tanggal Lahir <span class="text-danger">*</span></label>
                {{ Form::date('tanggal_lahir',null,['class'=>'form-control'])}}
                @if ($errors->has('tanggal_lahir')) <span class="help-block" style="color:red">{{ $errors->first('tanggal_lahir') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>No Telepon <span class="text-danger">*</span></label>
                {{ Form::text('no_telepon',null,['class'=>'form-control','placeholder'=>'Masukkan no telepon'])}}
                @if ($errors->has('no_telepon')) <span class="help-block" style="color:red">{{ $errors->first('no_telepon') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Email</label>
                {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Masukkan email'])}}
                @if ($errors->has('email')) <span class="help-block" style="color:red">{{ $errors->first('email') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Foto</label>
                {{ Form::file('foto',['class'=>'form-control'])}}
                @if ($errors->has('foto')) <span class="help-block" style="color:red">{{ $errors->first('foto') }}</span> @endif
                <small class="text-muted">Format: JPG, PNG, JPEG. Maksimal 2MB</small>
            </div>
        </div>
    </div>

    <div class="form-group mt-2">
        <label>Alamat <span class="text-danger">*</span></label>
        {{ Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Masukkan alamat lengkap']) }}
        @if ($errors->has('alamat')) <span class="help-block" style="color:red">{{ $errors->first('alamat') }}</span> @endif
    </div>
  
</div>
  
<div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('siswa.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
</div> 