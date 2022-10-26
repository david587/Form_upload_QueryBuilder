<h1>Adatok bevitele</h1>
<form method="post" action="/send" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="company">Type:</label>
        <input
            type="text"
            name="type"/>
        @error('type')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror


        <label for="company">Part:</label>
        <input
            type="text"
            name="part"/>
        @error('part')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <label for="company">Price:</label>
        <input
            type="text"
            name="price"/>
        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <button>Submit</button>
    </form>