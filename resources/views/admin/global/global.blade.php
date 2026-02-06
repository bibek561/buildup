<div class="col-md-4">
    <div class="card-body card shadow br-8">
        <div class="form-group mb-3 d-flex align-items-center">
            <label class="m-0 p-0">Status</label>
            <select class="form-select ms-5" id="status" name="status">
                <option class="p-3" value="1">Publish</option>
                <option class="p-3" value="0">Draft</option>
            </select>
        </div>

        <hr class="shadow-sm">

        <div class="form-group mb-3 d-flex align-items-center">
            <label for="order">Order</label>
            <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number" name="order"
                value="{{ old('order') }}" placeholder="Enter Order">
            @error('order')
                <div class="invalid-feedback" style="display: block;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <hr class="shadow-sm">

        <div class="form-group mb-3 mt-2">
            <label for="image">Featured Image</label>
            <div class="custom-file">
                <input class="dropify @error('image') is-invalid @enderror" id="image" data-show-remove="false"
                    type="file" name="image">
                @error('image')
                    <div class="invalid-feedback" style="display: block;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group mb-3 mt-2">
            <label for="image">Banner Image</label>
            <div class="custom-file">
                <input class="dropify @error('banner_image') is-invalid @enderror" id="banner_image"
                    data-show-remove="false" type="file" name="banner_image">
                @error('image')
                    <div class="invalid-feedback" style="display: block;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <hr class="shadow-sm">

        <div class="card-footers d-flex justify-content-center">
            <button class="btn btn-sm btn-primary w-full" type="submit"><i class="fa-solid fa-plus"></i>
                Publish</button>
        </div>

    </div>
</div>
