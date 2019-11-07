@extends('layout.baseindex')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HALAMAN ROLE</h2>
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
                                            <h4 class="modal-title" id="myModalLabel">Tambah Role</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('rolePost') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input name="name" type="text" class="form-control" placeholder="Name Role"/>
                                                        </div>
                                                    </div>
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
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Name Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 0;
                                        ?>
                                        @foreach($role as $role)
                                        <?php
                                            $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td>{{$role->kode}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                <a href="#" data-target="#modalEdit{{$role->id}}" data-toggle="modal"><button type="button" class="btn btn-warning btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">mode_edit</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit{{$role->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit Role</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('role.update', $role->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                @method('PUT')
                                                                    <div class="form-group form-float form-group-lg">
                                                                        <div class="form-line">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input value="{{$role->kode}}" disabled type="text" class="form-control" placeholder="Kode"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input name="name" value="{{$role->name}}" type="text" class="form-control" placeholder="Name"/>
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

                                                <a href="#" data-target="#modalHapus{{$role->id}}" data-toggle="modal"><button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">delete_forever</i></button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalHapus{{$role->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('role.destroy', $role->id) }}" method="POST">
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