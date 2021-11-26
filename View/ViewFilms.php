





<div id="flex">


<div class="containermenu" id="flexcontainermenu">
    <div id="divrecherche">
        <form id="formrecherche">
           <span style="color:white"> Rechercher un film :</span>
        <input type='text'>
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>


    </div>

    <a href="AjoutFilm" class="buttonClassVote">Ajouter un film</a>

</div>
<div class="containertable">


<table class="styled-table" >
    <thead>
        <tr>
            <td>id</td>
            <td>nomFilm</td>
            <td>annee</td>
            <td>score</td>
            <td>nbvotants</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>


    
        <?php
        foreach($films as $film): ?>
        <tr>
        <td><?= $film->id()?> </td>
        <td><?= $film->nom()?> </td>
        <td><?= $film->annee()?> </td>
        <td><?= $film->score()?> </td>
        <td><?= $film->nbVotants()?> </td>

        <td><a class="buttonClassVote" href="./Autre/voterFilm.php?idFilmVote=<?= $film->id() ?>">Voter </td>
        <td><a class="buttonClass" href="./Autre/supprimerFilm.php?idFilmSuppr=<?=$film->id() ?>">supprimer</td>

        </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</div>
</div>





</html>



