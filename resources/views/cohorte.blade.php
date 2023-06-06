<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>
        welcome
        
    </h1>
     <!-- {{$cohortes}}-->
    <table>
        <tr>
            <td>startingDate</td>
            <td>endingDate</td>
            <td>formationChoisie</td>
            <td>periodeFormation</td>
        </tr>

        @foreach ($cohortes as $cohorte)
            <tr>
                <td>{{$cohorte['startingDate']}}</td>
                <td>{{$cohorte['endingDate']}}</td>
                <td>{{$cohorte['formationChoisie']}}</td>
                <td>{{$cohorte['periodeFormation']}}</td>
                <td><button href ="">modifier</button></td>
                <td><button href ="">supprimer</button></td>
                
            </tr>
        @endforeach

    </table>

    <button href ="">ajouter</button>
    
    
  
    </body>
</html>
