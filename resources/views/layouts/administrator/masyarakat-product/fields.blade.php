<div class="">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="d-flex">
                <div class="mr-auto">
                    <h3 class="card-title mt-1">
                        <i class="fa fa-shopping-bag"></i>
                            &nbsp; {{ $title }}
                    </h3>
                </div>
                <div class="mr-1">
                    <a href="{{ route('administrator.masyarakat-product.index') }}" class="btn btn-secondary btn-flat btn-sm">
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
                <div class="col-sm-12">
                <!-- text input -->
                    <div class="form-group">
                        <label> {{ __('Name') }} </label>
                        <input type="text" name="name" @if ($action ===  "show") disabled @endif class="form-control @error('name') is-invalid @enderror" placeholder="Name ..." value="{{ old('name', $data->name) }}" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea id="tinymce-editor" name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Description ..." rows="2" @if ($action ===  "show") disabled @endif >{{ old('description', $data->description) }}</textarea>
                    </div>
                </div>

                @if ($action === "create")
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gambar Produk</label>
                            <div class="custom-file">
                                <input id="image" type="file" class="custom-file-input"  name="url_image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <img alt="image" id="preview-image-before-upload" class="table-avatar align-middle rounded" width="45%" height="45%" src={{ asset('images/static/empty.png') }}>
                        </div>
                    </div>
                @elseif ($action  === "edit")
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gambar Produk</label>
                            <div class="custom-file">
                                <input id="image" type="file" class="custom-file-input"  name="url_image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <a href="{{ $data->url_image }}" target="_blank"><img alt="image" id="preview-image-before-upload" class="table-avatar align-middle rounded" width="45%" height="45%" src="{{ $data->url_image  }}"></a>
                        </div>
                    </div>
                @else
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="logoFile">Gambar Produk</label><br/>
                        <a href="{{ $data->url_image != null ? $data->url_image : asset('images/static/empty.png') }}" target="_blank"><img alt="Logo" class="table-avatar align-middle rounded" width="100px" height="100px" src="{{ $data->url_image != null ? $data->url_image : asset('images/static/empty.png') }}"></a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
