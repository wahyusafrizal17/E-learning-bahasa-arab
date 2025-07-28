@extends('layouts.app')
@section('title','Data Guru')
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
                        <h2 class="content-header-title float-start mb-0">Data Guru</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a>
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
                              <h4 class="card-title">Data Guru</h4>
                              <a href="{{ route('guru.create') }}" class="btn btn-primary btn-sm">
                                 <i class="fa fa-plus"></i> Tambah Guru
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th style="width: 5%">No</th>
                                          <th>Foto</th>
                                          <th>Nama Lengkap</th>
                                          <th>NIP</th>
                                          <th>NUPTK</th>
                                          <th>Bidang Studi</th>
                                          <th>Jenis Kelamin</th>
                                          <th style="width: 20%" class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($model as $row)
                                       <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td>
                                            @if($row->foto)
                                                <img src="{{ asset('foto-guru/'.$row->foto) }}" alt="Foto Guru" width="50" height="50" style="border-radius: 50%; object-fit: cover;">
                                            @else
                                                <img src="{{ asset('app-assets/images/avatars/1.png') }}" alt="Default Avatar" width="50" height="50" style="border-radius: 50%; object-fit: cover;">
                                            @endif
                                          </td>
                                          <td>{{ $row->nama_lengkap }}</td>
                                          <td>{{ $row->nip }}</td>
                                          <td>{{ $row->nuptk }}</td>
                                          <td>{{ $row->bidang_studi }}</td>
                                          <td>{{ $row->jenis_kelamin }}</td>
                                         <td class="text-center">
                                             <div class="form-button-action">
                                                <a href="{{ route('guru.show',[$row->id]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-info btn-sm" data-original-title="Detail">
                                                   <i data-feather='eye'></i>
                                                </a>
                                                <a href="{{ route('guru.edit',[$row->id]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-sm" data-original-title="Edit">
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
         text: "Data guru akan terhapus secara permanen !",
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
               url: '{{ route('guru.delete') }}',
               method: 'post',
               cache: false,
               data: {
                  "_token": "{{ csrf_token() }}",
                  "id" :id
               },
               success: function(data){
                  swal("Berhasil!", "Data guru berhasil dihapus!", {
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