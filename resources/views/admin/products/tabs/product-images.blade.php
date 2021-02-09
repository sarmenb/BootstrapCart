@foreach($product->images as $item)
<div id="product-images">
    <div class="media bg-white align-items-center ui-bordered py-3 mb-2">
        <a href="javascript:void(0)" class="d-block ui-w-100 mr-4">
            <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid" alt="" />
        </a>
        <div class="media-body">
            <form method="POST" action="{{ route('image.update', $item->slug) }}" enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                <label class="switcher switcher-sm">
                    <input type="radio" name="product-primary-image" value="{{ $item->slug }}" class="switcher-input" 
                    @if($item->is_primary == 1) checked @endif>
                    <span class="switcher-indicator">
                        <span class="switcher-yes"></span>
                        <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Primary image</span>
                </label>
            </form>
        </div>

        <form method="POST" action="{{ route('image.destroy', $item->slug) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger borderless icon-btn d-block mx-4"><i class="ion ion-md-close"></i></button>
        </form>
    </div>                     
</div>
@endforeach