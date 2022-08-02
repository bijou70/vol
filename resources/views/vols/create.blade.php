<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('vols.store')}}" method="POST" >
        @csrf
        <input type="text" name="code_vol">
        <input type="date" name="date_depart">
        <input type="time" name="heure_depart">
        <input type="text" name="destination">
        <input type="number" name="nbre_placeA">
        <input type="number" name="nbre_placeB">
        <input type="number" name="prix_classeA">
        <input type="number" name="prix_classeB">
        <input type="submit" value="Enregistrer">
        
    </form>
</body>
</html>