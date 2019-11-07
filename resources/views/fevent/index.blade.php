@extends('layout.baseindex')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HALAMAN EVENT</h2>
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
                                            <h4 class="modal-title" id="myModalLabel">Tambah Event</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('eventPost') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <select name="cbg" class="form-control show-tick" data-live-search="true">
                                                        <option value="">-- Please select CABANG --</option>
                                                        @foreach($yo as $sia_cabang)
                                                            <option value="{{$sia_cabang->id}}">{{$sia_cabang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="name" type="text" class="form-control" placeholder="Nama Event" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea name="desc" placeholder="Description" rows="9" cols="70"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="tgl" type="date" placeholder="Tanggal" data-mask="99-99-9999" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                        <input name="jam" type="time" class="form-control round-input" placeholder="Waktu"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="loc" type="text" class="form-control round-input" placeholder="Lokasi"/>
                                                        </div>
                                                    </div>
                                                    <div id="map"></div>
                                                    <br>
                                                    <tr><td>Latitude</td> 
                                                        <td><input type="text" name='lat' id='latitude'></td>
                                                    </tr>
                                                    <tr><td>Longitude</td>
                                                        <td><input type="text" name='long' id='longitude'></td>
                                                    </tr>
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
                                            <h4 class="modal-title" id="myModalLabel">Import Absensi(BELUM)</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('absensiImport') }}" method="post" enctype="multipart/form-data">
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
                                            <th>Cabang</th>    
                                            <th>Nama</th>
                                            <th>Desc</th>
                                            <th>Tempat</th>
                                            <th>Tgl</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=0;
                                        ?>
                                        @foreach($ntpa as $abs)
                                        <?php 
                                            $no++;
                                        ?>
                                        <tr class="">
                                            <td><?php echo $no;?></td>
                                            <td>                                                    
                                                @foreach ($yo as $sia)
                                                    @if($sia->id == $abs->id_cbg)
                                                        {{ $sia->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{$abs->name}}</td>
                                            <td>{{$abs->desc}}</td>
                                            <td>{{$abs->loc}}</td>
                                            <td>{{$abs->tgl}}</td>
                                            <td>{{$abs->jam}}</td>
                                            <td>
                                                <a href="#" data-target="#modalEdit{{$abs->id}}" data-toggle="modal"><button type="button" class="btn btn-warning btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">mode_edit</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit{{$abs->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit Event(KURANG MAP)</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('event.update', $abs->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                @method('PUT')
                                                                    <div class="form-group form-float form-group-lg">
                                                                        <div class="form-line">
                                                                            <select name="cbg" class="form-control show-tick" data-live-search="true">
                                                                                @foreach ($yo as $sia)
                                                                                    <option 
                                                                                        value="{{$sia->id}}"
                                                                                        @if ($sia->id == $abs->id_cbg)
                                                                                            selected
                                                                                        @endif
                                                                                            >{{$sia->name}}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="name" value="{{$abs->name}}" type="text" class="form-control" placeholder="Nama Event" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <textarea name="desc" placeholder="Description" rows="9" cols="70">{{$abs->desc}}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="tgl" value="{{$abs->tgl}}" type="date" placeholder="Tanggal" data-mask="99-99-9999" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                <input name="jam" value="{{$abs->jam}}" type="time" class="form-control round-input" placeholder="Waktu"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="loc" value="{{$abs->loc}}" type="text" class="form-control round-input" placeholder="Lokasi"/>
                                                                                </div>
                                                                            </div>
                                                                            <div id="map-edit"></div>
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

                                                <a href="#" data-target="#modalHapus{{$abs->id}}" data-toggle="modal"><button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">delete_forever</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalHapus{{$abs->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('event.destroy', $abs->id) }}" method="POST">
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