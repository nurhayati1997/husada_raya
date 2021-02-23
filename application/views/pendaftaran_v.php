<style>
/* The spinner */

@keyframes spinner {
  to {transform: rotate(360deg);}
}

.spinner,
.spinner:before {
  width: 20px;
  height: 20px;
  box-sizing: border-box;
}

.spinner:before {
  content: '';
  display: block;
  border-radius: 50%;
  border: 2px solid #ccc;
  border-top-color: #333;
  animation: spinner .6s linear infinite;
}

.spinner-absolute {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -10px;
  margin-left: -10px;
}

/* Animations */

.spinner-add,
.spinner-remove {
  animation-fill-mode: both;
  animation-duration: .4s;
}

.spinner-add {
  animation-name: spinner-add;
}

@keyframes spinner-add {
  from {transform: scale(0);}
  to {transform: scale(1);}
}

.spinner-remove {
  animation-name: spinner-remove;
}

@keyframes spinner-remove {
  to {transform: scale(0);}
}
</style>

<div class="content">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Hello Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Ubah Password</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Husada Raya</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card bg-gradient-primary">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="<?= base_url() ?>assets_admin/img/theme/team-4.jpg" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header bg-transparent">
                <div class="pt-4 text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <button type="button" class="btn btn-default" onclick="tampil_input_modal()">Input Pasien Baru</button>
                      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                          <div class="modal-content bg-gradient-danger">
                            <div class="modal-header">
                              <h6 class="modal-title" id="modal-title-notification">Identitas Pasien Baru</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form role="form" class="form-danger">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="No Rekam Medis" id="nrm" readonly type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="No KTP" id="nik" type="number">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Nama Lengkap" id="nama" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <select class="form-control" onchange="get_nrm()" id="kec">
                                        
                                      </select>
                                    </div>
                                  </div>
                                   <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Nama Orang Tua" id="ortu" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Alamat" id="alamat" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group">
                                      <select class="form-control" onchange="get_nrm()" id="jk">
                                        <option value="">-Pilih Jenis Kelamin-</option>
                                        <option value="0">laki-Laki</option>
                                        <option value="1">Perempuan</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group">
                                      <select class="form-control" id="agama">
                                        <option value="">-Pilih Agama-</option>
                                        <option value="0">Islam</option>
                                        <option value="1">Kriten</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Budha</option>
                                        <option value="4">Konghucu</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group">
                                      <select class="form-control" id="status">
                                        <option value="">-Pilih Status-</option>
                                        <option value="0">Belum Menikah</option>
                                        <option value="1">Menikah</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" id="ttl" placeholder="Tanggal lahir" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Pekerjaan" id="pekerjaan" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Pendidikan" id="pendd" type="text">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="No Hp" id="telp" type="number">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" id="simpan_button" class="btn btn-block btn-info" onclick="tambah_baru()"> <div id="loader"> </div> Simpan</button>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Pendaftaran</button>
                      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h6 class="text-center modal-title " id="modal-title-notification">Pendaftaran Pasien</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <h4 class="text-center " id="modal-title-notification">Jenis Identitas</h4>
                                <form role="form" class="form-danger">
                                  <div class="row">
                                    <div class="col-4">
                                      <div class="form-group">
                                        <div class="custom-control custom-radio mb-3">
                                          <input name="custom-radio-1" class="custom-control-input" id="customRadio5" type="radio">
                                          <label class="custom-control-label" for="customRadio5">No Rm</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <div class="custom-control custom-radio mb-3">
                                          <input name="custom-radio-1" class="custom-control-input" id="customRadio6" checked="" type="radio">
                                          <label class="custom-control-label" for="customRadio6">NIK</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <div class="custom-control custom-radio mb-3">
                                          <input name="custom-radio-1" class="custom-control-input" id="customRadio7" checked="" type="radio">
                                          <label class="custom-control-label" for="customRadio7">Nama</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <div class="form-group">
                                        <div class='input-group' id=''>
                                          <input type='text' class="form-control" />
                                          <span class="input-group-addon input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="button-addon2"> <span class="fa fa-search"></span></button>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="No Rekam Medis" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Nama Lengkap" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="No KTP" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Alamat" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <div class="form-group">
                                        <select class="form-control" id="dokter">
                                          <option selected>Praktik dokter</option>
                                          <option>dr.Nunuk Kristiani,Sp.Rad | Spesialis Radiologi</option>
                                          <option>dr.Nuryatien Husna,Sp.KFR | Spesialis Kedokteran Fisik & Rehabilitas</option>
                                          <option>dr.Mirathi Ayu Irnanda | Dokter Umum</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-block btn-info">Simpan</button>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Antrian Pasien</h4>
                </div>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-lg-10">
                    <div class="pricing card-group flex-column flex-md-row mb-3">
                      <div class="card card-pricing border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                          <h4 class="ls-1 text-primary py-3 mb-0">dr.Mirathi Ayu Irnanda</h4>
                        </div>
                        <div class="card-body px-lg-7">
                          <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                <div class="col ml--4">
                                  <h4 class="mb-0">
                                    <a href="">Nama Pasien</a>
                                  </h4>
                                  <span class="text-success">●</span>
                                  <small>No RM</small>
                                </div>
                                <div class="col-auto">
                                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-asesmen">Antri</button>
                                  <div class="modal fade" id="modal-asesmen" tabindex="-1" role="dialog" aria-labelledby="modal-asesmen" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                      <div class="modal-content bg-gradient-danger">
                                        <div class="modal-header">
                                          <h6 class="modal-title" id="modal-title-notification">Asesmen Awal Pasien</h6>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form role="form" class="form-danger">
                                            <div class="row">
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="No Rekam Medis" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Nama Lengkap" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="No KTP" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Alamat" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <h4 class="card-title text-white text-center mb-0">Anamnesa</h4>
                                                </div>
                                                <div class="col-12">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-active-40"></i></span>
                                                      </div>
                                                      <input class="form-control form-control-lg" placeholder="Keluhan Utama" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Riwayat penyakit Sekarang" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-app"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Riwayat Penyakit Dahulu" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Riwayat Alergi" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Riwayat Operasi" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-books"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Riwayat Transfusi" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-basket"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Riwayat Penggunaan Obat" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <h4 class="card-title text-white text-center mb-0">Pemeriksaan Fisik</h4>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <select class="form-control" id="kesadaran_umum">
                                                      <option selected>Kesadaran Umum</option>
                                                      <option>Baik</option>
                                                      <option>Sedang</option>
                                                      <option>Lemah</option>
                                                      <option>Jelek</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <select class="form-control" id="kesadaran">
                                                      <option selected>Kesadaran</option>
                                                      <option>Composmentis</option>
                                                      <option>Apatis</option>
                                                      <option>Somnolen</option>
                                                      <option>Sopor</option>
                                                      <option>Koma</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-3">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Tekanan Darah" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-3">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Nadi" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-3">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-building"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Suhu" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-3">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-button-pause"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="RR" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                                                      </div>
                                                      <input class="form-control form-control-lg" placeholder="Diagnosa" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-caps-small"></i></span>
                                                      </div>
                                                      <input class="form-control form-control-lg" placeholder="Terapi" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <h4 class="card-title text-white text-center mb-0">Penunjang</h4>
                                                </div>
                                                <div class="col-6">
                                                  <h4 class="card-title text-white text-center mb-0">Lab</h4>
                                                  <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                    <div class="fallback">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                      </div>
                                                    </div>
                                                    <div class="dz-preview dz-preview-single">
                                                      <div class="dz-preview-cover">
                                                        <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <h4 class="card-title text-white text-center mb-0">Radiologi</h4>
                                                  <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                    <div class="fallback">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                      </div>
                                                    </div>
                                                    <div class="dz-preview dz-preview-single">
                                                      <div class="dz-preview-cover">
                                                        <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <h4 class="card-title text-white text-center mb-0">Catatan</h4>
                                                  <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                    <div class="fallback">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                      </div>
                                                    </div>
                                                    <div class="dz-preview dz-preview-single">
                                                      <div class="dz-preview-cover">
                                                        <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-block btn-info">Simpan</button>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <a href="#!" class="text-light">Dokter Umum</a>
                        </div>
                      </div>
                      <div class="card card-pricing zoom-in shadow-lg rounded border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                          <h4 class="ls-1 text-primary py-3 mb-0">dr.Nunuk Kristiani,Sp.Rad</h4>
                        </div>
                        <div class="card-body px-lg-7">
                          <ul class="list-group list-group-flush list my--3 ">
                            <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                <div class="col ml--4">
                                  <h4 class="mb-0">
                                    <a href="#!">Nama Pasien</a>
                                  </h4>
                                  <span class="text-success">●</span>
                                  <small>No RM</small>
                                </div>
                                <div class="col-auto">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-asesmen">Antri</button>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                          <a href="#!" class="text-light">Spesialis Radiologi</a>
                        </div>
                      </div>
                      <div class="card card-pricing border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                          <h4 class=" ls-1 text-primary py-3 mb-0">dr.Nuryatien Husna,Sp.KFR</h4>
                        </div>
                        <div class="card-body px-lg-7">
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                <div class="col ml--4">
                                  <h4 class="mb-0">
                                    <a href="#!">Nama Pasien</a>
                                  </h4>
                                  <span class="text-success">●</span>
                                  <small>No RM</small>
                                </div>
                                <div class="col-auto">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-asesmen">Antri</button>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <a href="#!" class="text-light">Spesialis Kedokteran Fisik & Rehabilitas</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>

<script>
  var random_all = '';
  $(document).ready(function() {
      
  });

  function get_kec() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>pendaftaran/get_kecamatan',
          dataType: 'json',
          success: function(data) {
              var html = '<option value="">-Pilih Kecamatan-</option>';
              for (var i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].ID + '">' + data[i].KECAMATAN + '</option>';
              }
              $("#kec").html(html);
          }
      });
  }

  function tampil_input_modal(){
    get_kec();
    var campur = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz1234567890";
    var panjang = 5;
    for (var i=0; i<panjang; i++) {
        var hasil = Math.floor(Math.random() * campur.length);
        random_all += campur.substring(hasil,hasil+1);
    }
    get_nrm();
    $('#modal-notification').modal('show');
  }

  function get_nrm(){
    document.getElementById("nrm").value = document.getElementById("kec").value + "." + random_all +"." + document.getElementById("jk").value;
  }

  function tambah_baru() {
      if (document.getElementById('nama').value == "") {
          document.getElementById('nama').focus();
      } else if (document.getElementById('kec').value == "") {
          document.getElementById('kec').focus();
      } else if (document.getElementById('alamat').value == "") {
          document.getElementById('alamat').focus();
      } else if (document.getElementById('jk').value == "") {
          document.getElementById('jk').focus();
      } else if (document.getElementById('agama').value == "") {
          document.getElementById('agama').focus();
      } else if (document.getElementById('status').value == "") {
          document.getElementById('status').focus();
      } else if (document.getElementById('ttl').value == "") {
          document.getElementById('ttl').focus();
      } else if (document.getElementById('telp').value == "") {
          document.getElementById('telp').focus();
      } else if (document.getElementById('ortu').value == "") {
          document.getElementById('ortu').focus();
      } else {
          $.ajax({
              type: 'POST',
              data: 'nrm=' + document.getElementById("nrm").value + '&nik=' + document.getElementById('nik').value
              + '&nama=' +  document.getElementById('nama').value + '&kec=' +  document.getElementById('kec').value
              + '&alamat=' +  document.getElementById('alamat').value + '&jk=' +  document.getElementById('jk').value
              + '&agama=' +  document.getElementById('agama').value + '&status=' +  document.getElementById('status').value
              + '&ttl=' +  document.getElementById('ttl').value + '&pekerjaan=' +  document.getElementById('pekerjaan').value
              + '&pendd=' +  document.getElementById('pendd').value + '&telp=' +  document.getElementById('telp').value
              + '&ortu=' +  document.getElementById('ortu').value,
              url: '<?= base_url() ?>pendaftaran/tambah_pasien',
              dataType: 'json',
              beforeSend: function () {
                $('#simpan_button').attr('disabled', true);
                $('#loader').html('');
                addSpinner($('#loader'));
              },
              success: function(data) {
                // console.log(data);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#simpan_button').attr('disabled', false);
                removeSpinner($('#loader'), function () {
                  $('#loader').html('');
                });
                // $('#modal-notification').modal('hide');
              }
          });
      }
  }

  function addSpinner(el, static_pos)
{
  var spinner = el.children('.spinner');
  if (spinner.length && !spinner.hasClass('spinner-remove')) return null;
  !spinner.length && (spinner = $('<div class="spinner' + (static_pos ? '' : ' spinner-absolute') + '"/>').appendTo(el));
  animateSpinner(spinner, 'add');
}

function removeSpinner(el, complete)
{
  var spinner = el.children('.spinner');
  spinner.length && animateSpinner(spinner, 'remove', complete);
}

function animateSpinner(el, animation, complete)
{
  if (el.data('animating')) {
    el.removeClass(el.data('animating')).data('animating', null);
    el.data('animationTimeout') && clearTimeout(el.data('animationTimeout'));
  }
  el.addClass('spinner-' + animation).data('animating', 'spinner-' + animation);
  el.data('animationTimeout', setTimeout(function() { animation == 'remove' && el.remove(); complete && complete(); }, parseFloat(el.css('animation-duration')) * 1000));
}
</script>