<div class="card-body">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Materi <span class="text-danger">*</span></label>
                {{ Form::text('nama_materi',null,['class'=>'form-control'])}}
                @if ($errors->has('nama_materi')) <span class="help-block" style="color:red">{{ $errors->first('nama_materi') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Kategori <span class="text-danger">*</span></label>
                {{ Form::select('kategori', [
                    'Huruf Hijaiyah' => 'Huruf Hijaiyah',
                    'Tajwid' => 'Tajwid',
                    'Nahwu' => 'Nahwu',
                    'Shorof' => 'Shorof',
                    'Muhadatsah' => 'Muhadatsah',
                    'Qiroah' => 'Qiroah',
                    'Kitabah' => 'Kitabah'
                ], null, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) }}
                @if ($errors->has('kategori')) <span class="help-block" style="color:red">{{ $errors->first('kategori') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Tingkat Kesulitan <span class="text-danger">*</span></label>
                {{ Form::select('tingkat_kesulitan', [
                    'Pemula' => 'Pemula',
                    'Menengah' => 'Menengah',
                    'Lanjutan' => 'Lanjutan'
                ], null, ['class' => 'form-control', 'placeholder' => 'Pilih Tingkat']) }}
                @if ($errors->has('tingkat_kesulitan')) <span class="help-block" style="color:red">{{ $errors->first('tingkat_kesulitan') }}</span> @endif
            </div>
            <div class="form-group mt-2">
                <label>Banner <span class="text-danger">*</span></label>
                {{ Form::file('banner',['class'=>'form-control'])}}
                @if ($errors->has('banner')) <span class="help-block" style="color:red">{{ $errors->first('banner') }}</span> @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Kelas (Opsional)</label>
                {{ Form::select('kelas_id', $kelas->pluck('nama_kelas', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Kelas']) }}
                @if ($errors->has('kelas_id')) <span class="help-block" style="color:red">{{ $errors->first('kelas_id') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Urutan <span class="text-danger">*</span></label>
                {{ Form::number('urutan', null, ['class' => 'form-control', 'min' => '1']) }}
                @if ($errors->has('urutan')) <span class="help-block" style="color:red">{{ $errors->first('urutan') }}</span> @endif
            </div>

            <div class="form-group mt-2">
                <label>Status <span class="text-danger">*</span></label>
                {{ Form::select('status', [
                    'Aktif' => 'Aktif',
                    'Draft' => 'Draft',
                    'Arsip' => 'Arsip'
                ], null, ['class' => 'form-control', 'placeholder' => 'Pilih Status']) }}
                @if ($errors->has('status')) <span class="help-block" style="color:red">{{ $errors->first('status') }}</span> @endif
            </div>
        </div>
    </div>

    <div class="form-group mt-2">
        <label>Deskripsi</label>
        {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Deskripsi singkat materi pembelajaran']) }}
        @if ($errors->has('deskripsi')) <span class="help-block" style="color:red">{{ $errors->first('deskripsi') }}</span> @endif
    </div>

    <div class="form-group mt-2">
        <label>Materi <span class="text-danger">*</span></label>
        {{ Form::textarea('materi', null, ['class' => 'form-control']) }}
        @if ($errors->has('materi')) <span class="help-block" style="color:red">{{ $errors->first('materi') }}</span> @endif
    </div>
  
  </div>
  
  <div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('materi.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>

  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('materi');
</script>