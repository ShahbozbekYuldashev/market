<x-layout.page>
    <x-slot:title>Postni o'zgartirish</x-slot:title>
    <x-layout.start-header>
        Postni o'zgartirish #{{ $blog->id }}
    </x-layout.start-header>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Post yaratish</h6>
                    <h1 class="section-title mb-3">Post o'zgartirish uchun jadvalni tahrirlang</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="control-group m-4">
                                <input type="text" class="form-control p-4" placeholder="Sarlavha kiriting"
                                       name="title" value="{{ $blog->title }}"/>
                                @error('title')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group m-4">
                                <textarea class="form-control p-4" rows="6" placeholder="Qisqa ta'rifini kiriting"
                                          name="short_content">{{ $blog->short_content }}</textarea>
                                @error('short_content')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group m-4">
                                <input type="file" class="form-control p-4 align-middle" name="photo" placeholder="Rasm yuklang">
                                @error('photo')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group m-4">
                                <textarea class="form-control p-4" rows="6" placeholder="Ma'qola matnini kiriting"
                                          name="body">{{ $blog->body }}</textarea>
                                @error('body')
                                <p class="alert alert-danger m-3">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex">
                                <button class="btn btn-success py-3 px-5" type="submit">Saqlash</button>
                            <a href="{{ route('blog.show', ['blog' => $blog->id]) }}" class="btn btn-danger py-3 px-5" type="submit">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout.page>
