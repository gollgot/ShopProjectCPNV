@extends('layout')

@section('content')
	<h1>Articles</h1>

	<table>
		@foreach ($categories as $category)

			<tr>
				<td colspan='4'><h2>{{ $category->categoryname }}</h2></td>
			<tr>

			<tr>
				<th>Image</th>
                <th class="title">Titre</th>
                <th>Prix</th>
                <th>Panier</th>
            </tr>

            @foreach ($articles as $article)
            	@if ($article->fkcategory == $category->idcategory)
            		<tr>
            			<td><img src="images/articles/{{ $article->picture }}"></td>
		            	<td>{{ $article->title }}</td>
		            	<td>{{ $article->price }}</td>
		            	<td><a href="#">Ajouter au panier</a></td>
		            </tr>
            	@endif
			@endforeach
        
		@endforeach
	</table>
	
@stop