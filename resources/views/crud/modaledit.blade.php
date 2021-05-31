
<div class="modal fade" id="munculmodaledit{{$k->id}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                            <div class="modal-header" style="background : #138496;">
                                <h4 class="modal-title" alignment="center"><b style="font-family:Verdana; color:white">Edit data</b> </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            
                            <div class="modal-body">
                            <form action="/olahdatakaryawan/update" method="post" class="form-container">
                        
                        {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                    <input type="hidden" name="id" value="{{$k->id}}">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama"  placeholder="Nama.." required="required" class="form-control" value="{{$k->nama}}">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempatlahir" placeholder="Tempat lahir.." required="required" class="form-control" value="{{$k->tempatlahir}}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" name="tanggallahir" placeholder="yyyy-mm-dd" required="required" class="form-control {{$errors->has('tanggallahir') ? 'is-invalid' : ''}}" value="{{$k->tanggallahir}}">
                                         @if($errors->has('tanggallahir'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('tanggallahir')}}
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="form-check" >
                                        <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" required="required"  value="L"{{ $k->jeniskelamin == "L" ? 'selected' : ''}} >
                                        <label for="L">L</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input " name="jeniskelamin" id="jeniskelamin" required="required" value="P"{{ $k->jeniskelamin == "P" ? 'selected' : ''}} >
                                        <label for="P">P</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="textarea" name="alamat" placeholder="alamat.." required="required" class="form-control" value="{{$k->alamat}}">
                                </div>
                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input type="text" name="nomorhp" placeholder="xxxx-xxxx-xxxxx" required="required" class="form-control {{$errors->has('nomorhp') ? 'is-invalid' : ''}}" value="{{$k->nomorhp}}" >
                                        @if($errors->has('nomorhp'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('nomorhp')}}
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="form-control" id="agama" name="agama" value="{{$k->agama}}" required="required">
                                            <option selected disabled>Pilih</option>
                                            <option value="Islam " {{ $k->agama == "Islam" ? 'selected' : ''}} >Islam</option>
                                            <option value="Kristen" {{ $k->agama == "Kristen" ? 'selected' : ''}}>Kristen</option>
                                            <option value="Hindu" {{ $k->agama == "Hindu" ? 'selected' : ''}}>Hindu</option>
                                            <option value="Buddha" {{ $k->agama == "Buddha" ? 'selected' : ''}}>Buddha</option>
                                            <option value="Konghucu" {{ $k->agama == "Konghucu" ? 'selected' : ''}}>Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan</label>
                                    <select name="statusperkawinan" id="statusperkawinan" required="required" class="form-control" value="{{$k->statusperkawinan}}" >
                                            <option selected disabled>Pilih</option>
                                            <option value="Kawin" {{ $k->statusperkawinan == "Kawin" ? 'selected' : ''}}>Kawin</option>
                                            <option value="Lajang" {{ $k->statusperkawinan == "Lajang" ? 'selected' : ''}}>Lajang</option>
                                            <option value="Janda" {{ $k->statusperkawinan == "Janda" ? 'selected' : ''}}>Janda</option>
                                            <option value="Duda" {{ $k->statusperkawinan == "Duda" ? 'selected' : ''}}>Duda</option>
                                    </select>
                                </div>
                                <input type="submit"  value="Simpan Data" class="btn btn-info">
                            </div>
                            
                        </form>
                       

                        </div>
                    
                </div>
            </div>
            </div>

            