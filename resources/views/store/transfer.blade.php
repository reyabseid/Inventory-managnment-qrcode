<!-- Main Content -->
@extends('layouts.store')

@section('content')

    <div id="content">
      

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register Employee') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('store.transfer') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="transferTo" class="col-md-4 col-form-label text-md-right">{{ __('Transfer To') }}</label>
    
                                <div class="col-md-6">
                                    <input id="transferTo" type="text" class="form-control @error('transferTo') is-invalid @enderror" name="transferTo" value="{{ old('transferTo') }}" required autofocus>
    
                                    @error('transferTo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="inventorieTypeId" class="col-md-4 col-form-label text-md-right">{{ __('Inventorie Name ID') }}</label>
    
                                <div class="col-md-6">
                                    <input id="inventorieTypeId" type="inventorieTypeId" class="form-control @error('inventorieTypeId') is-invalid @enderror" name="inventorieTypeId" value="{{ old('inventorieTypeId') }}" required autocomplete="inventorieTypeId">
    
                                    @error('inventorieTypeId')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="count" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
    
                                <div class="col-md-6">
                                    <input id="count" type="number" class="form-control @error('count') is-invalid @enderror" name="count" required autocomplete="new-count">
    
                                    @error('count')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="returnable" class="col-md-4 col-form-label text-md-right">{{ __('returnable') }}</label>

                                <div class="col-md-6">
                                    <input type="checkbox" class="form-check-input" name="returnable">
    
                                    @error('returnable')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Transfer') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

@endsection
