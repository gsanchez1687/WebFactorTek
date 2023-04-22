<div id="characteristics">
    <div class="content animate__animated animate__fadeIn">
         @if ($data['data'][0]['category'] == 1)
            <h1 class="title-style">{{ $data['data'][0]['title'] }}</h1>
            <hr>
            <h2 class="description-style">{{ $data['data'][0]['description'] }}</h2>
         @endif
         <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if ($data['data'][1]['category'] == 2)
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                   <img class="img-fluid" alt="funding" src="{{ $data['data'][1]['image'] }}">
                                </div>
                                <div class="col-md-6 col-sm-6 text-funding">
                                    <h3>{{ $data['data'][1]['title'] }}</h3>
                                    <h4> {{ ($data['data'][1]['description'])  }} </h4>
                                    
                                </div>
                            </div>
                        @endif
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      @if ($data['data'][2]['category'] == 2)
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                            <img class="img-fluid" alt="funding" src="{{ $data['data'][2]['image'] }}">
                            </div>
                            <div class="col-md-6 col-sm-6 text-funding">
                                <h3>{{ $data['data'][2]['title'] }}</h3>
                                <h4> {{ ($data['data'][2]['description'])  }} </h4>
                            </div>
                        </div>
                    @endif
                    </div>
                  </div>
            </div>
         </div>
    </div>
</div>