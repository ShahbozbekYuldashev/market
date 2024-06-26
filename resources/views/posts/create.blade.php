<x-layout.page>
    <x-slot:title>Bizning servis</x-slot:title>
    <x-layout.start-header>
        Post yaratuvchi sahifa
    </x-layout.start-header>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Post yaratish</h6>
                    <h1 class="section-title mb-3">Post yaratish uchun jadvalni to'ldiring</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group m-4">
                                <input type="text" class="form-control p-4" placeholder="Sarlavha kiriting"
                                       name="title" value="{{ old('title') }}"/>
                                @error('title')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group m-4">
                                <select class="form-control" aria-label="Default select example" name="category_id">
                                    @foreach( $categories as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group m-4">
                                <select class="form-control" name="category_id" multiple>
                                    @foreach( $tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group m-4">
                                <textarea class="form-control p-4" rows="6" placeholder="Qisqa ta'rifini kiriting"
                                          name="short_content">{{ old('short_content') }}</textarea>
                                @error('short_content')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group m-4">
                                <input type="file" class="form-control p-4 align-middle" name="photo" id="photo"
                                       placeholder="Rasm yuklang">
                                @error('photo')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group m-4">
                                <textarea class="form-control p-4" rows="6" placeholder="Ma'qola matnini kiriting"
                                          name="body">{{ old('body') }}</textarea>
                                @error('body')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout.page>
