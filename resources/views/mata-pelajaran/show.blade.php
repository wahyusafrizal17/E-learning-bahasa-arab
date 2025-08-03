@extends('layouts.app')
@section('title','Detail Data Mata Pelajaran')
@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Data Mata Pelajaran</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('mata-pelajaran.index') }}">Mata Pelajaran</a>
                                </li>
                                <li class="breadcrumb-item active">Detail
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <section id="dashboard-analytics">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Detail Mata Pelajaran</h4>
                              <a href="{{ route('mata-pelajaran.edit', $mataPelajaran->id) }}" class="btn btn-primary btn-sm">
                                 <i class="fa fa-edit"></i> Edit
                              </a>
                          </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <table class="table table-borderless">
                                       <tr>
                                          <td width="30%">Kode</td>
                                          <td width="5%">:</td>
                                          <td>{{ $mataPelajaran->kode }}</td>
                                       </tr>
                                       <tr>
                                          <td>Nama Pelajaran</td>
                                          <td>:</td>
                                          <td>{{ $mataPelajaran->nama_pelajaran }}</td>
                                       </tr>
                                       <tr>
                                          <td>Guru</td>
                                          <td>:</td>
                                          <td>{{ $mataPelajaran->guru->nama_lengkap ?? '-' }}</td>
                                       </tr>
                                       <tr>
                                          <td>Status</td>
                                          <td>:</td>
                                          <td>
                                             <span class="badge badge-{{ $mataPelajaran->status == 'Aktif' ? 'success' : 'danger' }}">
                                                 {{ $mataPelajaran->status }}
                                             </span>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                                 <div class="col-md-6">
                                    <table class="table table-borderless">
                                       <tr>
                                          <td width="30%">Deskripsi</td>
                                          <td width="5%">:</td>
                                          <td>{{ $mataPelajaran->deskripsi ?? '-' }}</td>
                                       </tr>
                                       <tr>
                                          <td>Dibuat Pada</td>
                                          <td>:</td>
                                          <td>{{ $mataPelajaran->created_at->format('d/m/Y H:i') }}</td>
                                       </tr>
                                       <tr>
                                          <td>Diperbarui Pada</td>
                                          <td>:</td>
                                          <td>{{ $mataPelajaran->updated_at->format('d/m/Y H:i') }}</td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </section>

            </div>
        </div>
    </div>
@endsection 