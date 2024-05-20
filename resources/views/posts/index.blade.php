<x-layout.page>
    <x-slot:title>Bizning servis</x-slot:title>
    <x-layout.start-header>
        Blog sahifa
    </x-layout.start-header>

    <!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-8">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Oxirgi maqolalar</h6>
                <h1 class="section-title mb-3">Bizning blog postimizdagi so'nggi maqolalar</h1>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('storage/'. $post->photo) }}" alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <a class="text-secondary text-uppercase font-weight-medium" href="">{{ $post->category->name }}</a>
                </div>
                <h5 class="font-weight-medium mb-4"> {{ $post->title}} </h5>
                <p class="mb-4"> {{ $post->short_content}} </p>
                <a class="btn btn-sm btn-primary py-2" href="{{ route('blog.show', ['blog' => $post->id]) }}">Batafsil o'qish</a>
            </div>
                @endforeach


            <div class="col-12">
                <nav aria-label="Page navigation">
                    {{ $posts->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

</x-layout.page>
