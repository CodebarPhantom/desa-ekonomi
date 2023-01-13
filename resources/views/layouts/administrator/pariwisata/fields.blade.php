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
                    <a href="{{ route('administrator.pariwisata.index') }}" class="btn btn-secondary btn-flat btn-sm">
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
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control  @error('address') is-invalid @enderror" placeholder="Alamat ..." rows="3" @if ($action ===  "show") disabled @endif required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
                    </div>
                </div>

                @if ($action !== "show")
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Logo Pariwisata</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="url_logo" id="customFile-1">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Gambar Pariwisata</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="url_image" id="customFile-2">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>URL Video</label>
                        <input type="text" name="url_video" @if ($action ===  "show") disabled @endif class="form-control  @error('url_video') is-invalid @enderror" placeholder="URL Video Youtube dsb ..." value="{{ old('url_video', $data->url_video) }}" >
                    </div>
                </div>
                @else

                @endif
            </div>



        </div>
    </div>
</div>
