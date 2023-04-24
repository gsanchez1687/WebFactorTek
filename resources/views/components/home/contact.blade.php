<div id="contact" class="animate__animated animate__fadeIn">
    <div class="form-style d-none d-sm-block d-sm-none d-md-block">
        <div class="input-style">
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('messages.nameform') }}</label>
                <input type="text" class="form-control" id="name" placeholder="{{ __('messages.nameform') }}">
              </div>
              <div class="mb-3">
                <label for="companyname" class="form-label">{{ __('messages.companyname') }}</label>
                <input type="text" class="form-control" id="companyname" placeholder="{{ __('messages.companyname') }}">
              </div>
              <div class="row">
                <div class="col">
                  <label for="phone-number" class="form-label">{{ __('messages.phonenumber') }}</label>
                  <input type="text" class="form-control" id="phone-number" placeholder="{{ __('messages.phonenumber') }}" aria-label="First name">
                </div>
                <div class="col">
                  <label for="email" class="form-label">{{ __('messages.email') }}</label>
                  <input type="text" class="form-control" id="company-email" placeholder="{{ __('messages.email') }}" aria-label="Email">
                </div>
              </div>
              <div class="row mt-3">
                <p>{{ __('messages.solutiontype') }}</p>
                <span>
                    <input class="form-check-input" type="radio" name="Solution" id="Solution1" value="1">
                    <label class="form-check-label" style="padding-right: 5%"  for="gridRadios1">Factory</label>
                    
                    <input class="form-check-input" type="radio" name="Solution" id="Solution1" value="2">
                    <label class="form-check-label" for="gridRadios1">Full Card</label>
                </span>
              </div>
              <div class="row mt-3">
                <span>
                    <label style="padding-right:2%">{{ __('messages.referred') }}</label>
                    <input class="form-check-input" type="radio" name="Referred" id="Referred1" value="1">
                    <label class="form-check-label" style="padding-right: 5%" for="Referred1">{{ __('messages.yes') }}</label>
                    <input class="form-check-input" type="radio" name="Referred" id="Referred2" value="2">
                    <label class="form-check-label" for="Referred2">{{ __('messages.no') }}</label>
                </span>
              </div>
              
              <div class="row mt-3">
                <div>
                    <label for="additional-comments">{{ __('messages.additionalcomments') }}</label>
                    <textarea class="form-control" placeholder="{{ __('messages.additionalcomments') }}" id="additional-comments" style="height: 50px"></textarea>
                  </div>
              </div>
              <div class="pt-3 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-warning">{{ __('messages.submit') }}</button>
              </div>
            
        </div>
    </div>
</div>