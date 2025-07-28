@extends('layouts.app')
@section('title','Data Kelas')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Data Kelas</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('kelas.index') }}">Kelas</a>
                                </li>
                                <li class="breadcrumb-item active">index
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Data Kelas</h4>
                              <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-sm">
                                 <i class="fa fa-plus"></i> Tambah Kelas
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th style="width: 5%">No</th>
                                          <th>Kode Kelas</th>
                                          <th>Nama Kelas</th>
                                          <th>Guru</th>
                                          <th>Kapasitas</th>
                                          <th>Jumlah Siswa</th>
                                          <th>Tahun Ajaran</th>
                                          <th>Semester</th>
                                          <th>Status</th>
                                          <th style="width: 20%" class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($model as $row)
                                       <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td><span class="badge bg-primary">{{ $row->kode_kelas }}</span></td>
                                          <td>{{ $row->nama_kelas }}</td>
                                          <td>{{ $row->guru->nama_lengkap ?? '-' }}</td>
                                          <td>{{ $row->kapasitas }} siswa</td>
                                          <td>{{ $row->siswa->count() }}/{{ $row->kapasitas }}</td>
                                          <td>{{ $row->tahun_ajaran }}</td>
                                          <td>{{ $row->semester }}</td>
                                          <td>
                                            @if($row->status == 'Aktif')
                                                <span class="badge bg-success">{{ $row->status }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $row->status }}</span>
                                            @endif
                                          </td>
                                         <td class="text-center">
                                             <div class="form-button-action">
                                                <a href="{{ route('kelas.show',[$row->id]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-info btn-sm" data-original-title="Detail">
                                                   <i data-feather='eye'></i>
                                                </a>
                                                <a href="{{ route('kelas.edit',[$row->id]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-sm" data-original-title="Edit">
                                                   <i data-feather='edit'></i>
                                                </a>
                                                <button type="button" class="btn btn-link btn-danger btn-sm delete" data-id="{{ $row->id }}">
                                                  <i data-feather='trash-2'></i>
                                               </button>
                                             </div>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                    <!--/ List DataTable -->
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push('scripts')
<script>
$(document).ready(function() {

   $('.delete').click(function(e) {
      var id = $(this).data('id'); 
      swal({
         title: 'Apakah kamu yakin ?',
         text: "Data kelas akan terhapus secara permanen !",
         type: 'warning',
         icon: 'warning',
         buttons:{
            confirm: {
               text : 'Ya, saya yakin!',
               className : 'btn btn-success'
            },
            cancel: {
               visible: true,
               className: 'btn btn-danger'
            }
         }
      }).then((Delete) => {
         if (Delete) {
            $.ajax({
               url: '{{ route('kelas.delete') }}',
               method: 'post',
               cache: false,
               data: {
                  "_token": "{{ csrf_token() }}",
                  "id" :id
               },
               success: function(data){
                  swal("Berhasil!", "Data kelas berhasil dihapus!", {
                     icon : "success",
                     buttons: {        			
                        confirm: {
                           className : 'btn btn-success'
                        }
                     },
                  });
                  location.reload();
               }
            });
         } else {
            swal.close();
         }
      });
   });

});

</script>
@endpush 