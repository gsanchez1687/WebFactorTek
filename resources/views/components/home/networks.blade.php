<div id="networks"> 
    <div class="row text-center">
        <div class="col-md-12">
            <div class="follow">
                Follow us: 
                @for ($i = 0; $i < count($data['data']); $i++)
                    <span><i class="{{ $data['data'][$i]['icon'] }}"></i></span>    
                @endfor
            </div>
        </div>
    </div>
</div>