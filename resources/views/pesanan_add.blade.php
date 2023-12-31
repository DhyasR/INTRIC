@extends('layouts.template')

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection

@section('content')
    <style>
        #products {
            width: 100%;
        }
    </style>

    <div class="mt-40 mb-40">
        <form method="POST" action="{{ route('pesanan.add') }}" enctype="multipart/form-data">
            @csrf

            {{-- <div class="row mb-3">

                <label for="tanggal_pemesanan"
                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Pemesanan') }}</label>

                <div class="col-md-6">

                    <input id="tanggal_pemesanan" type="date" class="form-control" name="tanggal_pemesanan"
                        value="{{ $currentDate }}" required>

                </div>

            </div> --}}

            <div class="row mb-3">

                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                <div class="col-md-6">

                    <input id="address" type="text" class="form-control" name="address" required>

                </div>

            </div>

            <div class="row mb-3">

                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Upload Image Bukti Transfer') }}</label>

                <div class="col-md-6">

                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required accept="image/*">
                    <img id="imagePreviewSelect" class="mt-2" style="display:none; max-width: 100%;" />

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-3">

                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">

                    <textarea id="description" class="form-control" name="description" required></textarea>

                </div>

            </div>

            <div class="row mb-3">

                <label for="product_id" class="col-md-4 col-form-label text-md-end">Select Product</label>

                <div class="col-md-6">

                    <select name="product_id[]" id="product_id" class="form-select" multiple required>

                        @foreach ($product as $product)
                            <option value="{{ $product->id }}"
                                data-image="{{ asset('storage/' . $product->product_image) }}">{{ $product->product_name }}
                            </option>
                        @endforeach

                    </select>

                </div>

            </div>


            <input type="number" name="status_id" id="status_id" value="1" hidden readonly>

            <<div class="row mb-3">
                <label for="jumlah" class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>
                <div class="col-md-6">
                    <input id="jumlah" type="text" class="form-control" name="jumlah" required>
                    <div id="jumlah-warning"></div>
                </div>
            </div>

            <div class="row mb-0">

                <div class="col-md-6 offset-md-4">

                    <button type="submit" class="btn btn-primary text-black">

                        {{ __('Add Pesanan') }}

                    </button>

                </div>

            </div>

        </form>

    </div>

    <script>
        $(document).ready(function() {
            $('#product_id').select2({
                templateResult: formatProduct,
                escapeMarkup: function(m) {
                    return m;
                }
            });
        });

        function formatProduct(product) {
            if (!product.id) {
                return product.text;
            }
            var $product = $(
                '<span><img src="' + $(product.element).data('image') + '" class="w-10 h-auto" /> ' + product.text +
                '</span>'
            );
            return $product;
        }

        // Tambahkan fungsi untuk menampilkan pratinjau gambar
        document.getElementById('image').addEventListener('change', function(event) {
    const input = event.target;
    const reader = new FileReader();

    reader.onload = function() {
        const imagePreview = document.getElementById('imagePreviewSelect'); // Change 'imagePreview' to 'imagePreviewSelect'
        imagePreview.src = reader.result;
        imagePreview.style.display = 'block';
    };

    // Membaca file gambar yang dipilih
    if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
    }
});

    $(document).ready(function () {
        $('#jumlah').on('input', function () {
            var value = $(this).val();

            if (!/^\d+$/.test(value)) {
                $('#jumlah-warning').text('Please enter a valid integer value.').show();
            } else {
                $('#jumlah-warning').hide();
            }
        });
    });
</script>

<style>
    #jumlah-warning {
        color: red;
        display: none;
        margin-top: 5px;
    }
</style>

@endsection
