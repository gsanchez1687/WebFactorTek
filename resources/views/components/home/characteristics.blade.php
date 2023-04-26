<div id="characteristics">
    <div class="content animate__animated animate__fadeIn">
         @if ($data['data'][0]['category'] == 1)
            <h1 class="title-style">{{ $data['data'][0]['title'] }}</h1>
            <hr>
            <h2 class="description-style">{{ $data['data'][0]['description'] }}</h2>
         @endif
         <div class="row mt-4">
            @for ($i = 1; $i < count($data['data']); $i++)
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div style="height: 10%;" class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                                <img class="img-fluid" alt="funding" src="{{ $data['data'][$i]['image'] }}">
                            </div>
                            <div class="col-md-6 col-sm-6 text-funding">
                                <h3>{{ $data['data'][$i]['title'] }}</h3>
                                <h4>{{ ($data['data'][$i]['description']) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
         </div>
    </div>
</div>