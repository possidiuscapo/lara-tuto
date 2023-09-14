<div>
    <div>
        <label for="title1">Entrer le titre</label>
        <input type="text" name="title" value="{{ old('title',  isset($article->title) ? $article->title : null) }}">
        @error('title')
            <div> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="description">Entrer la description </label>
        <textarea name="body" id="description">{{ old('body',  isset($article->body) ? $article->body : null) }}</textarea>
        @error('body')
            <div> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="img">Choisissez une image</label>
        <input type="file" name="image" id="img">
        @error('image')
            <div> {{$message}} </div>
        @enderror
    </div>
    <button type="submit">Enregistrer</button>
</div>
