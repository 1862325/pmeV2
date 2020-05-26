@extends("interfaceAdmin.index")
@section("contenu")
<article class="form-ajout">
  {{Form::model($produit)}}
          @include("admin.form")
          <div>{{Form::submit("Modifier")}} {{Form::submit("Annuler", ["name"=>"annuler"])}}</div>
    {{Form::close()}}
</article>
@endsection