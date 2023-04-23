<div id="benefits">
    <div class="content animate__animated animate__fadeIn">
            <h1 class="title-style">{{ $data['data'][0]['title'] }}</h1>
            <hr>
            <h2 class="description-style">{{ $data['data'][0]['description'] }}</h2>
            <div class="row mt-4">
                @for ($i = 1; $i < count($data['data']); $i++)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $data['data'][$i]['imageheader'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <img width="100px" src="{{ $data['data'][$i]['imagemini'] }}" class="imagemini" alt="...">
                            <h2 class="card-title text-center">{{ $data['data'][$i]['title'] }}</h2>
                            <p class="card-text text-center">{{  $data['data'][$i]['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
    </div>
</div>