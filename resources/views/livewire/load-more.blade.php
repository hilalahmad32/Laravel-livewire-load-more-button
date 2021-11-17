<div>
    <div class="container">
        <h1 class="text-center my-5">Load More Posts</h1>
        <div class="row">
            @forelse ($posts as $post)
            <div class="col-xl-12 col-sm-12 my-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Posts ( {{$post->id}} )</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{$post->title}}</h1>
                        <p>
                            {{$post->description}}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <h2>Record Not Found</h2>
            @endforelse

        </div>
        <div class="d-flex justify-content-center">
            @if (count($posts) >= $page_number)
            <button class="btn btn-success my-4" wire:click='load_more()'>Load More</button>
            @else
            <button class="btn btn-success my-4" disabled>Load More</button>
            @endif
        </div>
    </div>
</div>