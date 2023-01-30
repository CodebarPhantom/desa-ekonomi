<div class="">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="d-flex">
                <div class="mr-auto">
                    <h3 class="card-title mt-1">
                        <i class="fa fa-store-alt"></i>
                            &nbsp; {{ $title }}
                    </h3>
                </div>
                <div class="mr-1">
                    <a href="{{ route('administrator.umkm.index') }}" class="btn btn-secondary btn-flat btn-sm">
                        <i class="fa fa-arrow-left"></i>
                        &nbsp;&nbsp; Kembali
                    </a>
                </div>
                @if ($action !==  "show")
                    <div class="">
                        <button type="submit" class="btn btn-info btn-flat btn-sm">
                            <i class="fa fa-check"></i>
                            &nbsp;&nbsp; Simpan
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-body">
            @if ($errors->all())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                    <div class="form-group">
                        <label> {{ __('Name') }} </label>
                        <input type="text" name="name" @if ($action ===  "show") disabled @endif class="form-control @error('name') is-invalid @enderror" placeholder="Name ..." value="{{ old('name', $data->name) }}" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="address" @if ($action ===  "show") disabled @endif class="form-control  @error('address') is-invalid @enderror" placeholder="Alamat ..." value="{{ old('address', $data->address) }}"  required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Description ..." rows="2" @if ($action ===  "show") disabled @endif required>{{ old('description', $data->description) }}</textarea>
                    </div>
                </div>

                @if ($action === "create")
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Logo UMKM</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="url_logo" id="customFile-1">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                @elseif ($action  === "edit")
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Logo UMKM</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="url_logo" id="customFile-1">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <a href="{{ $data->url_logo }}" target="_blank"><img alt="Logo" class="table-avatar align-middle rounded" width="100px" height="100px" src="{{ $data->url_logo  }}"></a>
                        </div>
                    </div>
                @else
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="logoFile">Logo UMKM</label><br/>
                        <a href="{{ $data->url_logo != null ? $data->url_logo : "/storage/image/static/empty.png" }}" target="_blank"><img alt="Logo" class="table-avatar align-middle rounded" width="100px" height="100px" src="{{ $data->url_logo != null ? $data->url_logo : "/storage/image/static/empty.png" }}"></a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
