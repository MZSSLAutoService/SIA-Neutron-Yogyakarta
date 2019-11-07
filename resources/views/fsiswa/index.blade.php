@extends('layout.baseindex')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HALAMAN SISWA</h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">                           
                            <a href="#" data-target="#modalAdd" data-toggle="modal"><button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">add_circle_outline</i></button></a>
                            <!-- Modal -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Siswa</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('siswaPost') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="cbg" class="form-control show-tick" data-live-search="true">
                                                                <option value="">-- Please select CABANG --</option>
                                                                @foreach($yo as $sia_cabang)
                                                                    <option value="{{$sia_cabang->id}}">{{$sia_cabang->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="nis" type="text" class="form-control" placeholder="NIS"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="name" type="text" class="form-control" placeholder="Nama Siswa"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="ttl" type="date" class="form-control" placeholder="Tanggal Lahir"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="agm" class="form-control show-tick">
                                                                <option value="">-- Please select Agama --</option>
                                                                <option value="0" >Islam</option>
                                                                <option value="1" >Kristen</option>
                                                                <option value="2" >Katholik</option>
                                                                <option value="3" >Hindu</option>
                                                                <option value="4" >Budha</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="jk" class="form-control input-lg m-bot15">
                                                                <option value="">-- Please select Jenis Kelamin --</option>    
                                                                <option value="0" >Laki-Laki</option>
                                                                <option value="1" >Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="ask" type="text" class="form-control" placeholder="Asal Sekolah"/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>                     
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                                <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Modal -->

                            <a href="#" data-target="#modalImport" data-toggle="modal"><button type="button" class="btn bg-blue-grey btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">publish</i></button></a>
                            <!-- Modal -->
                            <div class="modal fade" id="modalImport" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Import Siswa(BELUM)</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('siswaImport') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <label>Pilih file excel</label>
                                                        <div class="form-group">
                                                            <input type="file" name="file" required="required">
                                                        </div>
                                                </div>
                                            </div>                     
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">UPLOAD</button>
                                                <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Modal -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>    
                                            <th>Nama</th>
                                            <th>Asal Sekolah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            $no=0;
                                        ?>
                                        @foreach($siswa as $siswa)
                                        <?php 
                                            $no++;
                                        ?>
                                        <tr class="">
                                            <td><?php echo $no;?></td>
                                            <td>{{$siswa->nis}}</td>
                                            <td>{{$siswa->name}}</td>
                                            <td>{{$siswa->asal_sekolah}}</td>
                                            <td>

                                                <a href="#" data-target="#modalEdit{{$siswa->id}}" data-toggle="modal"><button type="button" class="btn btn-warning btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">mode_edit</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit{{$siswa->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit Siswa</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('sis.update', $siswa->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                @method('PUT')
                                                                    <div class="form-group form-float form-group-lg">
                                                                        <div class="form-line">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <select disabled class="form-control show-tick" data-live-search="true">
                                                                                        @foreach($yo as $sia_cabang)
                                                                                            <option value="{{$sia_cabang->id}}">{{$sia_cabang->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input value="{{$siswa->nis}}" disabled type="text" class="form-control" placeholder="NIS"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="password" type="password" class="form-control" placeholder="New Password"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="repassword" type="password" class="form-control" placeholder="Retype-Password"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="name" value="{{$siswa->name}}" type="text" class="form-control" placeholder="Nama Siswa"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="ttl" type="date" value="{{$siswa->ttl}}" placeholder="Tanggal Lahir" data-mask="99-99-9999" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <select name="agm" class="form-control">
                                                                                        <option value="{{$siswa->agama}}" >
                                                                                            <?php
                                                                                            if($siswa->agama == 0){
                                                                                                echo"Islam";
                                                                                            }elseif($siswa->agama == 1){
                                                                                                echo"Kristen";
                                                                                            }elseif($siswa->agama == 2){
                                                                                                echo "Katholik";
                                                                                            }elseif($siswa->agama == 3){
                                                                                                echo"Hindu";
                                                                                            }else
                                                                                            {
                                                                                                echo"Budha";
                                                                                            }
                                                                                            ?>
                                                                                        </option>
                                                                                        <option value="0" >Islam</option>
                                                                                        <option value="1" >Kristen</option>
                                                                                        <option value="2" >Katholik</option>
                                                                                        <option value="3" >Hindu</option>
                                                                                        <option value="4" >Budha</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <select name="jk" class="form-control">
                                                                                        <option value="{{$siswa->jenis_kelamin}}" >
                                                                                            <?php
                                                                                                if($siswa->jenis_kelamin == 0){
                                                                                                    echo"Laki-Laki";
                                                                                                }elseif($siswa->jenis_kelamin == 1){
                                                                                                    echo"Perempuan";
                                                                                                }
                                                                                            ?>
                                                                                        </option>
                                                                                        <option value="0" >Laki-Laki</option>
                                                                                        <option value="1" >Perempuan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="ask" value="{{$siswa->asal_sekolah}}" type="text" class="form-control" placeholder="Asal Sekolah"/>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                    </div>                     
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE CHANGE</button>
                                                                        <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->

                                                <a href="#" data-target="#modalHapus{{$siswa->id}}" data-toggle="modal"><button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">delete_forever</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalHapus{{$siswa->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('sis.destroy', $siswa->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            @method('DELETE')
                                                                    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                                                    <button type="submit" class="btn btn-danger waves-effect" name="simpan" value="Delete">DELETE</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->
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
            <!-- #END# Exportable Table -->
        </div>
    </section>
@endsection