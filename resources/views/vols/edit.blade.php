<form action="{{ route ('vols.update', $avionflana->id) }}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="code_vol" value="{{ $avionflana->code_vol }}">
    <input type="date" name="date_depart" value="{{ $avionflana->date_depart }}">
    <input type="time" name="heure_depart" value="{{ $avionflana->heure_depart }}">
    <input type="text" name="destination" value="{{ $avionflana->destination }}">
    <input type="number" name="nbre_placeA" value="{{ $avionflana->nbre_placeA }}">
    <input type="number" name="nbre_placeB" value="{{ $avionflana->nbre_placeB }}">
    <input type="number" name="prix_classeA" value="{{ $avionflana->prix_classeA }}">
    <input type="number" name="prix_classeB" value="{{ $avionflana->prix_classeB }}">
    <input type="submit" value="Enregistrer"value="Ni yelema">

</form>