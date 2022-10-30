<h1>Adatok bevitele</h1>
{{-- enctype="multipart/form-data --}}
<form method="post" action="/send">
    @csrf
    <div class="mb-6">
        <div>
            <p>Megadható Type mező nevek: pc,laptop,tablet</p>
            <label for="company">Type:</label>
            <input
                type="text"
                name="type"/>
            @error('type')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
       

        <div>
            <label for="company">Part:</label>
            <input
                type="text"
                name="part"/>
            @error('part')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
                
        <div>
            <label for="company">Price:</label>
            <input
                type="text"
                name="price"/>
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>