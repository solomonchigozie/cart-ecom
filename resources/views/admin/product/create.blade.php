<x-app-layout>
    <section class="wsus__product mt_145 pb_100">
        <div class="container">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Add New Product</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" autocomplete="on">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">image</label>
                                    <input type="file" name='image' class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Other Image</label>
                                    <input type="file" name='images[]' class="form-control" multiple>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">name</label>
                                    <input type="text" name='name' class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">price</label>
                                    <input type="numebr" name='price' step="0.00001" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">colors</label>
                                    <select name="colors[]" multiple  id="" class="form-control">
                                        <option value="">select color</option>
                                        <option value="red">red</option>
                                        <option value="blue">blue</option>
                                        <option value="green">green</option>
                                        <option value="yellow">yellow</option>
                                        <option value="pink">pink</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">sku</label>
                                    <input type="text" name='sku' class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Quantity</label>
                                    <input type="number" name='qty' class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">short description</label>
                                    <textarea name="short_description" id="" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">long description</label>
                                    <textarea name="description" id="" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>