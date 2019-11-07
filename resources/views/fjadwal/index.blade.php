@extends('layout.baseindex')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HALAMAN JADWAL</h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">                           
                            <a href="#" data-target="#modalAdd" data-toggle="modal"><button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">add_circle_outline</i></button></a>
                            <!-- Modal ADD -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Jadwal</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('jadwalPost') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="cbg" class="form-control show-tick" data-live-search="true">
                                                                @foreach($yo as $sia_cabang)
                                                                    <option value="{{$sia_cabang->id}}">{{$sia_cabang->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="kls" type="text" class="form-control" placeholder="Kelas"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <span class="input-group-addon">From</span>    
                                                            <input name="from" type="time" class="form-control time24" placeholder="From">
                                                            <span class="input-group-addon">To</span>
                                                            <input name="to" type="time" class="form-control time24" placeholder="To">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="bidstudi" type="text" class="form-control" placeholder="Bidang Studi"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="ruang" type="text" class="form-control" placeholder="Ruang"/>
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
                            <!-- #END# Modal ADD -->

                            <a href="#" data-target="#modalImport" data-toggle="modal"><button type="button" class="btn bg-blue-grey btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">publish</i></button></a>
                            <!-- Modal IMPORT -->
                            <div class="modal fade" id="modalImport" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Import Jadwal(BELUM)</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('jadwalImport') }}" method="post" enctype="multipart/form-data">
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
                            <!-- #END# Modal IMPORT -->

                            <a href="#" data-target="#modalHapusall" data-toggle="modal"><button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">delete</i></button></a>
                            <!-- Modal DELETE ALL-->
                            <div class="modal fade" id="modalHapusall" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus semua data ini?</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('jadwalDeleteAll') }}" method="post">
                                        {{ csrf_field() }}
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
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Cabang</th>
                                            <th>Kelas</th>    
                                            <th>Bid. Studi</th>
                                            <th>Waktu</th>
                                            <th>Ruang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=0;
                                        ?>
                                        @foreach($jwl as $jwl)
                                        <?php 
                                            $no++;
                                        ?>
                                        <tr class="">
                                            <td><?php echo $no;?></td>
                                            <td>
                                                @foreach ($yo as $sia)
                                                    @if($sia->id == $jwl->id_cbg)
                                                        {{ $sia->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{$jwl->kelas}}</td>
                                            <td>{{$jwl->mapel}}</td>
                                            <td>{{$jwl->from}} - {{$jwl->to}}</td>
                                            <td>{{$jwl->ruang}}</td>
                                            <td>
                                                <a href="#" data-target="#modalEdit{{$jwl->id}}" data-toggle="modal"><button type="button" class="btn btn-warning btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">mode_edit</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit{{$jwl->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit Siswa</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('jadwal.update', $jwl->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                @method('PUT')
                                                                    <div class="form-group form-float form-group-lg">
                                                                        <div class="form-line">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <select name="cbg" class="form-control show-tick" data-live-search="true">
                                                                                        @foreach ($yo as $sia)
                                                                                            <option 
                                                                                                value="{{$sia->id}}"
                                                                                                @if ($sia->id == $jwl->id_cbg)
                                                                                                    selected
                                                                                                @endif
                                                                                                    >{{$sia->name}}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="kls" value="{{$jwl->kelas}}" type="text" class="form-control" placeholder="Kelas"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <span class="input-group-addon">From</span>    
                                                                                    <input name="from" value="{{$jwl->from}}" type="time" class="form-control time24" placeholder="From">
                                                                                    <span class="input-group-addon">To</span>
                                                                                    <input name="to" value="{{$jwl->to}}" type="time" class="form-control time24" placeholder="To">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="bidstudi" value="{{$jwl->mapel}}" type="text" class="form-control" placeholder="Bidang Studi"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="ruang" value="{{$jwl->ruang}}" type="text" class="form-control" placeholder="Ruang"/>
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

                                                <a href="#" data-target="#modalHapus{{$jwl->id}}" data-toggle="modal"><button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">delete_forever</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalHapus{{$jwl->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('jadwal.destroy', $jwl->id) }}" method="POST">
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