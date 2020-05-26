@if(count($errors) > 0)
<div style="color:red; font-weight:bold">Veuillez corriger les erreurs dans le formulaire.</div>
@endif
<div>
    {{Form::label("nom", "Nom du produit")}}
    {{Form::text("nom")}}
    @error("nom")
    <span style="color:red;">{{$errors->first("nom")}}</span>
    @enderror
</div>
<div>
    {{Form::label("slug", "Nom fichier de l'image")}}
    {{Form::text("slug")}}
    @error("slug")
    <span style="color:red;">{{$errors->first("noImage")}}</span>
    @enderror
</div>
<div>
    {{Form::label("description", "Description du produit")}}
    {{Form::textarea("description")}}
    @error("description")
    <span style="color:red;">{{$errors->first("intro")}}</span>
    @enderror
</div>
<div>
    {{Form::label("calories", "Nombre de calories")}}
    {{Form::text("calories")}}
    @error("calories")
    <span style="color:red;">{{$errors->first("legende")}}</span>
    @enderror
</div>
<div>
    {{Form::label("prix", "Prix du produit")}}
    {{Form::text("prix")}}
    @error("prix")
    <span style="color:red;">{{$errors->first("description")}}</span>
    @enderror
</div>