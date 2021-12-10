<div class="d-flex flex-wrap">
    @foreach($genres as $genre)
        <div class="card card-body align-items-center m-1 p-2  ">
            <div class="text-dark">
                {{ $genre->name }}
            </div>
        </div>
    @endforeach
</div>
