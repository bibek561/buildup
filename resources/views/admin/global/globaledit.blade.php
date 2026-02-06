<div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select name="status" id="status" class="form-select ms-5">
                                    <option value="0" class="p-3" @if($page->status == 0) selected @endif>Draft</option>
                                    <option value="1" class="p-3"@if($page->status == 1) selected @endif>Publish</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Template</label>
                                <select name="template" id="template" class="form-select ms-5">
                                    <option value="0" class="p-3" @if($page->template == 0) selected @endif>Default Template</option>
                                    <option value="1" class="p-3"@if($page->template == 1) selected @endif>Side-To-Side</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 mt-2">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" data-show-remove="false" class="dropify @error('image') is-invalid @enderror" id="image" data-default-file="{{ $page->image }}">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-rotate"></i> Update</button>
                            </div>
                        </div>
                    </div>
