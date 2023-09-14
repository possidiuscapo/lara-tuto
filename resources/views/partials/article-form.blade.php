<div>
    <div>
        <label for="">Entrer le titre</label>
        <input type="text" name="title" value="{{ old('title',  isset($article->title) ? $article->title : null) }}">
    </div>
    <div>
        <label for="">Entrer la description </label>
        <textarea name="body" id="">{{ old('body',  isset($article->body) ? $article->body : null) }}</textarea>
    </div>
    <div>
        <label for="img">Choisissez une image</label>
        <input type="file" name="image">
    </div>
    <button type="submit">Enregistrer</button>
</div>
