<div id="headernetworks">
    <div class="row">
        <div class="col-md-12 animate__animated animate__fadeIn">
            <div class="network-icon text-white d-flex justify-content-end mx-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('messages.lang') }}
                      </a>
                      <ul class="dropdown-menu bg-dark bg-gradient">
                        <li><a class="dropdown-item" href="{{ url('locale/es') }}">ES</a></li>
                        <li><a class="dropdown-item" href="{{ url('locale/en') }}">EN</a></li>
                      </ul>
                </li>
                @for ($i = 0; $i < count($data['data']); $i++)
                    <span class="icons-style"><a href="{{ $data['data'][$i]['link'] }}"><i class="{{ $data['data'][$i]['icon'] }}"></i></a></span>    
                @endfor
            </div>
        </div>
    </div>
</div>