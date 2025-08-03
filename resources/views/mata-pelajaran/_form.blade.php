<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Kode Mata Pelajaran <span class="text-danger">*</span></label>
                {{ Form::text('kode',null,['class'=>'form-control','placeholder'=>'Masukkan kode mata pelajaran'])}}
                @if ($errors->has('kode')) <span class="help-block" style="color:red">{{ $errors->first('kode') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Nama Pelajaran <span class="text-danger">*</span></label>
                {{ Form::text('nama_pelajaran',null,['class'=>'form-control','placeholder'=>'Masukkan nama pelajaran'])}}
                @if ($errors->has('nama_pelajaran')) <span class="help-block" style="color:red">{{ $errors->first('nama_pelajaran') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Guru <span class="text-danger">*</span></label>
                {{ Form::select('guru_id', $guru->pluck('nama_lengkap', 'id')->prepend('Pilih Guru', ''), null, ['class'=>'form-control'])}}
                @if ($errors->has('guru_id')) <span class="help-block" style="color:red">{{ $errors->first('guru_id') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Status <span class="text-danger">*</span></label>
                {{ Form::select('status',[''=>'Pilih Status','Aktif'=>'Aktif','Tidak Aktif'=>'Tidak Aktif'],null,['class'=>'form-control'])}}
                @if ($errors->has('status')) <span class="help-block" style="color:red">{{ $errors->first('status') }}</span> @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Deskripsi</label>
                {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => 8, 'placeholder' => 'Masukkan deskripsi mata pelajaran']) }}
                @if ($errors->has('deskripsi')) <span class="help-block" style="color:red">{{ $errors->first('deskripsi') }}</span> @endif
            </div>
        </div>
    </div>
</div>
  
<div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('mata-pelajaran.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
</div> 