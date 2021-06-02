
<div class="modal fade" id="munculmodaltambah" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                            <div class="modal-header" style="background:#007BFF;">
                                <h4 class="modal-title" alignment="center"><b style="font-family:Verdana; color : white">Tambah Data Baru</b> </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>
                            <div class="modal-body">

                        
                        <form action="/olahdatakaryawan/tambah" method="post" class="form-container">
                        
                        {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="hidden" name="id" >
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama"  required="required" class="form-control" placeholder="Nama..">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempatlahir" required="required" class="form-control" placeholder="Tempat Lahir..">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" name="tanggallahir" required="required" class="form-control {{$errors->has('tanggallahir') ? 'is-invalid' : ''}}" placeholder="yyyy-mm-dd..">
                                        @if($errors->has('tanggallahir'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('tanggallahir')}}
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                <label>Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" required="required" value="L"} >
                                        <label for="L">L</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input " name="jeniskelamin" id="jeniskelamin" required="required" value="P" >
                                        <label for="P">P</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="textarea" name="alamat" required="required" class="form-control" placeholder="Alamat.." >
                                </div>
                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input type="text" name="nomorhp" required="required" class="form-control{{$errors->has('nomorhp') ? 'is-invalid' : ''}}" placeholder="xxxx-xxxx-xxxxx">
                                         @if($errors->has('nomorhp'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('nomorhp')}}
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" required="required" class="form-control">
                                            <option selected disabled>Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan</label>
                                    <select name="statusperkawinan" required="required" class="form-control">
                                            <option selected disabled>Pilih</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Janda">Janda</option>
                                            <option value="Duda">Duda</option>
                                    </select>
                                </div>
                                <input type="submit"  value="Simpan Data" class="btn btn-primary">
                            </div>
                            
                        </form>
                       

                    </div>
                    
                </div>
            </div>
            </div>

            