@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>EDIT PRODUCT</h5>
    <hr>

    <form method="POST" action="{{ route('product.edit',['id'=>$product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row ">

            <div class="col-12">
                <label for="name" class="">{{ __('Name') }}</label>
                <div class="form-group">
                    <div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $product->name}}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="price" class="">{{ __('Price') }}</label>
                <div class="form-group">
                    <div>
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') ?? $product->price  }}" required autocomplete="price" autofocus>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="brand" class="">{{ __('Model') }}</label>
                <div class="form-group">
                    <div>
                        <select name="brand" id="addproductbrand" class="form-control">
                            <option selected="true" value="" disabled hidden>Choose product model</option>
                            <option value="Small Bouquet">Small Bouquet</option>
                            <option value="Medium Bouquet">Medium Bouquet</option>
                            <option value="Big Bouquet">Big Bouquet</option>
                            <option value="Premium Big Bouquet">Premium Big Bouquet</option>
                            <option value="Custom Buoquet">Custom Buoquet</option>
                            <option value="Bunga Meja">Bunga Meja</option>
                            <option value="Dried Flower">Dried Flower</option>
                            <option value="Palm Kering">Palm Kering</option>
                            <option value="Hampers">Hampers</option>
                            <option value="Gift Box Custom">Gift Box Custom</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="gender" class="">{{ __('Category') }}</label>
                <div class="form-group">
                    <div>
                        <select name="gender" id="addproductgender" class="form-control">
                            <option selected="true" value="" disabled hidden>Choose product category</option>
                            <option value="Bouquet">Bouquet</option>
                            <option value="Bunga">Bunga</option>
                            <option value="Gift Box">Gift Box</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="category" class="">{{ __('Type') }}</label>
                <div class="form-group">
                    <div>
                        <select name="category" id="addproductcategory" class="form-control">
                            <option selected="true" value="" disabled hidden>Choose product type</option>
                            <option value="Standard">Standard</option>
                            <option value="Custom">Custom</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')

                    <div style="color:red; font-weight:bold; font-size:0.7rem;">{{ $message }}</div>

                    @enderror
                </div>
            </div>
            


        </div>
        
        <button type="submit" class="btn btn-success w-100">EDIT PRODUCT</button>
    
    </form>

</div>
    
@endsection