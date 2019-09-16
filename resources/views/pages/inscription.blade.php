    @extends('pages.template')
     
    @section('contenu')
        <div align="center">
		<h4>Formulaire d'inscription</h4>
		<fieldset>
			<legend>Remplissez les champs !!!</legend>
			<form action="/inscription" method="post" >
				{{ csrf_field() }}
				{{$errors}}
				<table>
					<tr>
						<td>Émail : </td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Mot de passe : </td>
						<td><input type="password" name="password" placeholder="Mot de passe"></td>
						
					</tr>
					<tr>
						<td>Mot de passe : </td>
						<td><input type="password" name="password_confirmation", placeholder="Mot de passe (confirmation)"></td>
					</tr>
					<tr>
						<td rowspan="2"><input type="submit" value="M'inscrire"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>
    @endsection