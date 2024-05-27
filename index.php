<?php 
    header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="it">
<head>
    
    <meta name="google-site-verification" content="lNg9rS6b7SCmE1MuQeNgURqRURByNeZMrsm0hYN1pec" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNAKE0014 BUILDS</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body">
    <h1>SNAKE0014 DBD BUILDS</h1>
    <h2>
        <div class="canali">
            <a href="https://www.youtube.com/channel/UC1QkCAbKMK6GOmtIyvd7_bA" target="_blank"><img src="youtube-app-icon.webp" title="Youtube" alt="Youtube" id="youtube" class="linkCanali"></a>
            <a href="https://www.twitch.tv/snake0014" target="_blank"><img src="mobile_iphone-526a4005c7c0760cb83f.webp" title="Twitch" alt="Twitch" id="twitch" class="linkCanali"></a>
            <a href="https://www.tiktok.com/@snakkio0014" target="_blank"><img src="tik-tok.webp" title="TikTok" alt="TikTok" id="tiktok" class="linkCanali"></a>
            <a href="https://www.instagram.com/snakkio14/" target="_blank"><img src="pngegg.webp" title="Instagram" id="insta" class="linkCanali"></a>
        </div>
    </h2>
    <h3>
        <p id="update">Aggiornato al 21/05/2024</p>
    </h3>
    <div id="tutti">
        <button id="showAllButton" class="active">KILLER</button>
        <button id="showAllButtonSurv">SOPRAVVISSUTO</button>
    </div>

    <div id="dropdownContainer">
        <select id="characterSelect">
            <option value="">-- Seleziona un personaggio --</option>
            <option value="trapper">CACCIATORE</option>
            <option value="wraith">SPETTRO</option>
            <option value="billy">MANDRIANO</option>
            <option value="nurse">INFERMIERA</option>
            <option value="huntress">CACCIATRICE</option>
            <option value="myers">OMBRA</option>
            <option value="hag">STREGA</option>
            <option value="doc">DOTTORE</option>
            <option value="bubba">CANNIBALE</option>
            <option value="freddy">INCUBO</option>
            <option value="pig">MAIALE</option>
            <option value="clown">CLOWN</option>
            <option value="spirit">SPIRITO</option>
            <option value="legion">LEGIONE</option>
            <option value="mala">MALATTIA</option>
            <option value="ghost">GHOSTFACE</option>
            <option value="demo">DEMOGORGONE</option>
            <option value="oni">ONI</option>
            <option value="slinger">ARALDO DI MORTE</option>
            <option value="pyr">BOIA</option>
            <option value="blight">PIAGA</option>
            <option value="twins">GEMELLI</option>
            <option value="trick">INGANNATORE</option>
            <option value="neme">NEMESIS</option>
            <option value="ceno">CENOBITA</option>
            <option value="art">ARTISTA</option>
            <option value="sadako">ONRYŌ</option>
            <option value="dredge">DRAGA</option>
            <option value="wesker">MASTERMIND</option>
            <option value="skull">MERCANTE DI TESCHI</option>
            <option value="sing">SINGOLARITÀ</option>
            <option value="alien">XENOMORFO</option>
            <option value="chucky">TIPO BELLO</option>
            <option value="ign">IGNOTO</option>
            <!--<option value="vecna">LITCH</option>-->
        </select>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modalImg" src="" alt="">
            <p id="modalDescription"></p>
        </div>
    </div>

<div class="container inner">
        <!-- SURV BUILD 1-->
        <div class="hidden divSurvivor build-1">
            <a href="" class="linkKiller" target="_blank">CHASE BUILD</a>
            <div class="altPerks perkSurv surv-build1">
                <img src="SurvPerks\iconPerks_Lithe.webp" title="Agilità" alt="Agilità" id="lithe" class="perk">
                <img src="SurvPerks\iconPerks_Resilience.webp" title="Determinazione" alt="Determinazione" id="resil" class="perk">
                <img src="SurvPerks\iconPerks_WindowsOfOpportunity.webp" title="Momenti Propizi" alt="Momenti Propizi" id="windows" class="perk">
                <img src="SurvPerks\iconsPerks_ChampionOfLight.webp" title="Campione di luce" alt="Campione di luce" id="champion" class="perk">
            </div>
        </div>
    
        <!-- SURV BUILD 2-->
        <div class="hidden divSurvivor build-2">
            <a href="" class="linkKiller" target="_blank">SCATTO BUILD</a>
            <div class="altPerks perkSurv surv-build2">
                <img src="SurvPerks\iconPerks_Adrenaline.webp" title="Adrenalina" alt="Adrenalina" id="adren" class="perk">
                <img src="SurvPerks\iconPerks_Fixated.webp" title="Fissata" alt="Fissata" id="fixated" class="perk">
                <img src="SurvPerks\iconPerks_SprintBurst.webp" title="Scatto Improvviso" alt="Scatto Improvviso" id="sprint" class="perk">
                <img src="SurvPerks\iconPerks_Vigil.webp" title="Veglia" alt="Veglia" id="vigil" class="perk">
            </div>
        </div>
    
        <!-- SURV BUILD 3-->
        <div class="hidden divSurvivor build-3">
            <a href="" class="linkKiller" target="_blank">ANTI TUNNEL</a>
            <div class="altPerks perkSurv surv-build3">
                <img src="SurvPerks\iconPerks_OffTheRecord.webp" title="In Via Ufficiosa" alt="In Via Ufficiosa" id="otr" class="perk">
                <img src="SurvPerks\iconPerks_Lithe.webp" title="Agilità" alt="Agilità" id="lithe" class="perk">
                <img src="SurvPerks\iconPerks_WindowsOfOpportunity.webp" title="Momenti Propizi" alt="Momenti Propizi" id="windows" class="perk">
                <img src="SurvPerks\iconPerks_Adrenaline.webp" title="Adrenalina" alt="Adrenalina" id="adren" class="perk">
            </div>
        </div>
    
        <!-- SURV BUILD 4-->
        <div class="hidden divSurvivor build-4">
            <a href="" class="linkKiller" target="_blank">GEN RUSH</a>
            <div class="altPerks perkSurv surv-build4">
                <img src="SurvPerks\iconPerks_DejaVu.webp" title="Déjà Vu" alt="Déjà Vu" id="deja" class="perk">
                <img src="SurvPerks\iconPerks_Hyperfocus.webp" title="Iperconcentrazione" alt="Iperconcentrazione" id="hyper" class="perk">
                <img src="SurvPerks\iconPerks_StakeOut.webp" title="Sotto Controllo" alt="Sotto Controllo" id="stakeout" class="perk">
                <img src="SurvPerks\iconsPerks_Deadline.webp" title="Deadline" alt="Deadline" id="deadline" class="perk">
            </div>
        </div>

</div>


<!-- DIV KILLERS-->
<div id="character" class="inner">
    <!-- TRAPPER -->
    <div class="divKiller trapper">
        <a href="https://www.youtube.com/watch?v=nKlGrIG5Qk8&list=PL5a8akpw9S1lItxGNpGb_FB7S52CGvtO3&index=9" class="linkKiller" target="_blank">CACCIATORE</a>
        <img src="CharPortraits/K01_TheTrapper_Portrait.webp" alt="Cacciatore" id="trapper" class="killer"></br>
        <button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <!--<button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller trapper-build1">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_NoOneEscapesDeath.webp" title="Maledizione: Nessuno Sfugge alla Morte" alt="Maledizione: Nessuno Sfugge alla Morte" id="noed" class="perk" data-description="">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_BrutalStrength.webp" title="Forza Brutale" alt="Forza Brutale" id="brutal" class="perk">
        </div>
        <div class="hidden altPerks perkKiller trapper-build2">
            <img src="Perks\iconPerks_NoOneEscapesDeath.webp" title="Maledizione: Nessuno Sfugge alla Morte" alt="Maledizione: Nessuno Sfugge alla Morte" id="noed" class="perk"></a>
            <img src="Perks\iconPerks_NoWayOut.webp" title="Nessuna Via d'Uscita" alt="Nessuna Via d'Uscita" id="nowayout" class="perk">
            <img src="Perks\iconPerks_BloodWarden.webp" title="Custode Sanguinario" alt="Custode Sanguinario" id="bloodwarden" class="perk">
            <img src="Perks\iconPerks_RememberMe.webp" title="Ricordati di me" alt="Ricordati di me" id="rememberme" class="perk">
        </div>
    </div>

    <!-- WRAITH -->
    <div class="divKiller wraith">
        <a href="https://www.youtube.com/watch?v=sPRoN5TrGc8&list=PL5a8akpw9S1lItxGNpGb_FB7S52CGvtO3&index=10" class="linkKiller" target="_blank">SPETTRO</a>
        <img src="CharPortraits\K02_TheWraith_Portrait.webp" alt="Spettro" id="wraith" class="killer"></br>
            <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller wraith-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
        </div>
    </div>

    <!-- BILLY -->
    <div class="divKiller billy">
        <a href="https://www.youtube.com/watch?v=r705S7nXIiU&list=PL5a8akpw9S1lItxGNpGb_FB7S52CGvtO3&index=12" class="linkKiller" target="_blank">MANDRIANO</a>
        <img src="CharPortraits/K03_TheHillbilly_Portrait.webp" alt="Mandriano" id="billy" class="killer"></br>
         <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller billy-build1">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_DeadManSwitch.webp" title="Dispositivo dell'Uomo Morto" alt="Dispositivo dell'Uomo Morto" id="DMS" class="perk">
        </div>
    </div>

    <!-- NURSE --> 
    <div class="divKiller nurse">
        <a href="https://www.youtube.com/watch?v=zpAFldKPIGg&list=PL5a8akpw9S1lItxGNpGb_FB7S52CGvtO3&index=11" class="linkKiller" target="_blank">INFERMIERA</a>
        <img src="CharPortraits/K04_TheNurse_Portrait.webp" alt="Infermiera" id="nurse" class="killer"></br>
          <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller nurse-build1">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_NowhereToHide.webp" title="Impossibile Nascondersi" alt="Impossibile Nascondersi" id="nowhere" class="perk">
        </div>
    </div>

    <!-- HUNTRESS -->
    <div class="divKiller huntress">
        <a href="https://www.youtube.com/watch?v=2twzH9oJohc&list=PL5a8akpw9S1lItxGNpGb_FB7S52CGvtO3&index=6" class="linkKiller" target="_blank">CACCIATRICE</a>
        <img src="CharPortraits/K08_TheHuntress_Portrait.webp" alt="Cacciatrice" id="huntress" class="killer"></br>
           <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller huntress-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\iconPerks_DarknessRevelated.webp" title="Oscurità Rivelata" alt="Oscurità Rivelata" id="darkness" class="perk">
            <img src="Perks\iconPerks_LethalPursuer.webp" title="Inseguitore Letale" alt="Inseguitore Letale" id="lethal" class="perk">
        </div>
    </div>
    
    <!-- MYERS -->
    <div class="divKiller myers">
        <a href="https://www.youtube.com/watch?v=_-GpUIXh61M&list=PL5a8akpw9S1lItxGNpGb_FB7S52CGvtO3&index=4" class="linkKiller" target="_blank">OMBRA</a>
        <img src="CharPortraits\K06_TheShape_Portrait.webp" alt="Ombra" id="myers" class="killer"></br>
        <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller myers-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_CoupDeGrace.webp" title="Colpo di Grazie" alt="Colpo di Grazie" id="coup" class="perk">
        </div>    
    </div>

    <!-- HAG -->
    <div class="divKiller hag">
        <a href="" class="linkKiller" target="_blank">STREGA</a>
        <img src="CharPortraits\K05_TheHag_Portrait.webp" alt="Strega" id="hag" class="killer"></br>
        <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller hag-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_MakeYourChoice.webp" title="Fa' la tua Scelta" alt="Fa' la tua Scelta" id="makeyour" class="perk">
        </div>
    </div>

    <!-- DOC -->
    <div class="divKiller doc">
        <a href="" class="linkKiller" target="_blank">DOTTORE</a>
        <img src="CharPortraits/K07_TheDoctor_Portrait.webp" alt="Dottore" id="doc" class="killer"></br>
        <button class="altBuilds active" data-name="doc-build1">BUILD 1</button>
        <button class="altBuilds" data-name="doc-build2">BUILD 2</button>
        <!--<button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller doc-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_SaveTheBestForLast.webp" title="Conserva il meglio per la fine" alt="Conserva il meglio per la fine" id="savethebest" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_RapidBrutality.webp" title="Brutalità Rapida" alt="Brutalità Rapida" id="rapidbrut" class="perk">
        </div>
        <div class="hidden altPerks perkKiller doc-build2">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_RapidBrutality.webp" title="Brutalità Rapida" alt="Brutalità Rapida" id="rapidbrut" class="perk">
        </div>
    </div>

    <!-- BUBBA -->
    <div class="divKiller bubba">
        <a href="" class="linkKiller" target="_blank">CANNIBALE</a>
        <img src="CharPortraits/K09_TheCannibal_Portrait.webp" alt="Cannibale" id="bubba" class="killer"></br>
         <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller bubba-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_SpiritFury.webp" title="Furia dello Spirito" alt="Furia dello Spirito" id="spiritfury" class="perk">
            <img src="Perks\iconPerks_Enduring.webp" title="Resistente" alt="Resistente" id="enduring" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
        </div>
    </div>

    <!-- FREDDY -->
    <div class="divKiller freddy">
        <a href="" class="linkKiller" target="_blank">INCUBO</a>
        <img src="CharPortraits/K10_TheNightmare_Portrait.webp" alt="Incubo" id="freddy" class="killer"></br>
        <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller freddy-build1">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
        </div>
    </div>

    <!-- PIG -->
    <div class="divKiller pig">
        <a href="" class="linkKiller" target="_blank">MAIALE</a>
        <img src="CharPortraits/K11_ThePig_Portrait.webp" alt="Maiale" id="pig" class="killer"></br>
         <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller pig-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
        </div>
    </div>

    <!-- CLOWN -->
    <div class="divKiller clown">
        <a href="" class="linkKiller" target="_blank">CLOWN</a>
        <img src="CharPortraits/K12_TheClown_Portrait.webp" alt="Clown" id="clown" class="killer"></br>
        <button class="altBuilds active" data-name="clown-build1">BUILD 1</button>
        <button class="altBuilds" data-name="clown-build2">BUILD 2</button>
        <!--<button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller clown-build1">
            <img src="Perks\iconPerks_BrutalStrength.webp" title="Forza Brutale" alt="Forza Brutale" id="brutal" class="perk">
            <img src="Perks\iconPerks_SaveTheBestForLast.webp" title="Conserva il meglio per la fine" alt="Conserva il meglio per la fine" id="savethebest" class="perk">
            <img src="Perks\iconPerks_RapidBrutality.webp" title="Brutalità Rapida" alt="Brutalità Rapida" id="rapidbrut" class="perk">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
        </div>
        <div class="hidden altPerks perkKiller clown-build2">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_DeadManSwitch.webp" title="Dispositivo dell'Uomo Morto" alt="Dispositivo dell'Uomo Morto" id="DMS" class="perk">
            <img src="Perks\iconPerks_BrutalStrength.webp" title="Forza Brutale" alt="Forza Brutale" id="brutal" class="perk">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
        </div>
    </div>

    <!-- SPIRITO -->
    <div class="divKiller spirit">
        <a href="" class="linkKiller" target="_blank">SPIRITO</a>
        <img src="CharPortraits/K13_TheSpirit_Portrait.webp" alt="Spirito" id="spirit" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller spirit-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_ScourgeHookGiftOfPain.webp" title="Flagello Appuntito: Dono del dolore" alt="Flagello Appuntito: Dono del dolore" id="gift" class="perk">
        </div>
    </div>

    <!-- LEGIONE -->
    <div class="divKiller legion">
        <a href="" class="linkKiller" target="_blank">LEGIONE</a>
        <img src="CharPortraits/K14_TheLegion_Portrait.webp" alt="Legione" id="legion" class="killer"></br>
           <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller legion-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_SpiritFury.webp" title="Furia dello Spirito" alt="Furia dello Spirito" id="spiritfury" class="perk">
            <img src="Perks\iconPerks_Enduring.webp" title="Resistente" alt="Resistente" id="enduring" class="perk">
            <img src="Perks\iconPerks_Thatanophobia.webp" title="Tanatofobia" alt="Tanatofobia" id="thana" class="perk">
        </div>
    </div>

    <!-- MALATTIA -->
    <div class="divKiller mala">
        <a href="" class="linkKiller" target="_blank">MALATTIA</a>
        <img src="CharPortraits/K15_ThePlague_Portrait.webp" alt="Malattia" id="mala" class="killer"></br>
        <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller mala-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_PlayWithYourFood.webp" title="Gioca con il tuo cibo" alt="Gioca con il tuo cibo" id="pwyf" class="perk">
        </div>
    </div>

    <!-- GHOSTFACE -->
    <div class="divKiller ghost">
        <a href="" class="linkKiller" target="_blank">GHOSTFACE</a>
        <img src="CharPortraits/K16_TheGhostface_Portrait.webp" alt="Ghostface" id="ghost" class="killer"></br>
          <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller ghost-build1">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
        </div>
    </div>

    <!-- DEMO -->
    <div class="divKiller demo">
        <a href="" class="linkKiller" target="_blank">DEMOGORGONE</a>
        <img src="CharPortraits/K17_TheDemogorgon_Portrait.webp" alt="Demogorgone" id="demo" class="killer"></br>
               <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller demo-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_DeadManSwitch.webp" title="Dispositivo dell'Uomo Morto" alt="Dispositivo dell'Uomo Morto" id="DMS" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
        </div>
    </div>

    <!-- ONI -->
    <div class="divKiller oni">
        <a href="" class="linkKiller" target="_blank">ONI</a>
        <img src="CharPortraits/K18_TheOni_Portrait.webp" alt="Oni" id="oni" class="killer"></br>
           <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller oni-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\iconPerks_LethalPursuer.webp" title="Inseguitore Letale" alt="Inseguitore Letale" id="lethal" class="perk">
            <img src="Perks\iconPerks_InfectiousFright.webp" title="Terrore Contagioso" alt="Terrore Contagioso" id="fright" class="perk">
        </div>
    </div>

    <!-- SLINGER -->
    <div class="divKiller slinger">
        <a href="" class="linkKiller" target="_blank">ARALDO DI MORTE</a>
        <img src="CharPortraits/K19_TheDeathslinger_Portrait.webp" alt="Araldo di Morte" id="slinger" class="killer"></br>
           <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller slinger-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\iconPerks_DeadManSwitch.webp" title="Dispositivo dell'Uomo Morto" alt="Dispositivo dell'Uomo Morto" id="DMS" class="perk">
        </div>
    </div>

    <!-- PYRAMID -->
    <div class="divKiller pyr">
        <a href="" class="linkKiller" target="_blank">BOIA</a>
        <img src="CharPortraits/K20_TheExecutioner_Portrait.webp" alt="Boia" id="pyr" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller pyr-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_LethalPursuer.webp" title="Inseguitore Letale" alt="Inseguitore Letale" id="lethal" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_ImAllEars.webp" title="Sono Tutt'Orecchi" alt="Sono Tutt'Orecchi" id="allears" class="perk">
        </div>
    </div>

    <!-- BLIGHT -->
    <div class="divKiller blight">
        <a href="" class="linkKiller" target="_blank">PIAGA</a>
        <img src="CharPortraits/K21_TheBlight_Portrait.webp" alt="Piaga" id="blight" class="killer"></br>
        <button class="altBuilds active" data-name="blight-build1">BUILD 1</button>
        <button class="altBuilds" data-name="blight-build2">BUILD 2</button>
        <!--<button class="altBuilds" data-name="blight-build3">BUILD 3</button>
        <button class="altBuilds" data-name="blight-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller blight-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_Eruption.webp" title="Eruzione" alt="Eruzione" id="eruption" class="perk">
            <img src="Perks\iconPerks_NowhereToHide.webp" title="Impossibile Nascondersi" alt="Impossibile Nascondersi" id="nowhere" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
        </div>
        <div class="hidden altPerks perkKiller blight-build2">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_LethalPursuer.webp" title="Inseguitore Letale" alt="Inseguitore Letale" id="lethal" class="perk">
        </div>
    </div>
    
    <!-- TWINS -->
    <div class="divKiller twins">
        <a href="" class="linkKiller" target="_blank">GEMELLI</a>
        <img src="CharPortraits\K22_TheTwins_Portrait.webp" alt="Gemelli" id="twins" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller twins-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_ScourgeHookGiftOfPain.webp" title="Flagello Appuntito: Dono di dolore" alt="Flagello Appuntito: Dono di dolore" id="gift" class="perk">
        </div>
    </div>

    <!-- TRICKSTER -->
    <div class="divKiller trick">
        <a href="" class="linkKiller" target="_blank">INGANNATORE</a>
        <img src="CharPortraits\K23_TheTrickster_Portrait.webp" alt="Ingannatore" id="trick" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller trick-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_UltimateWeapon.webp" title="Arma Suprema" alt="Arma Suprema" id="weapon" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_IronMaiden.webp" title="Vergine di Ferro" alt="Vergine di ferro" id="ferro" class="perk">
        </div>
    </div>

    <!-- NEMESIS -->
    <div class="divKiller neme">
        <a href="" class="linkKiller" target="_blank">NEMESIS</a>
        <img src="CharPortraits\K24_TheNemesis_Portrait.webp" alt="Nemesis" id="neme" class="killer"></br>
        <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller neme-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
        </div>
    </div>

    <!-- CENOBITA -->
    <div class="divKiller ceno">
        <a href="" class="linkKiller" target="_blank">CENOBITA</a>
        <img src="CharPortraits\K25_TheCenobite_Portrait.webp" alt="Cenobita" id="ceno" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller ceno-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_Bamboozle.webp" title="Inganno" alt="Inganno" id="inganno" class="perk">
        </div>
    </div>

    <!-- ARTISTA -->
    <div class="divKiller art">
        <a href="" class="linkKiller" target="_blank">ARTISTA</a>
        <img src="CharPortraits\K26_TheArtist_Portrait.webp" alt="Artista" id="art" class="killer"></br>
              <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller art-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_Eruption.webp" title="Eruzione" alt="Eruzione" id="eruption" class="perk">
            <img src="Perks\iconPerks_DeadManSwitch.webp" title="Dispositivo dell'Uomo Morto" alt="Dispositivo dell'Uomo Morto" id="DMS" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
        </div>
    </div>

    <!-- SADAKO -->
    <div class="divKiller sadako">
        <a href="" class="linkKiller" target="_blank">ONRYŌ</a>
        <img src="CharPortraits\K27_TheOnryo_Portrait.webp" alt="ONRYŌ" id="sadako" class="killer"></br>
            <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller sadako-build1">
            <img src="Perks\iconPerks_Ruin.webp" title="Maledizione: Rovina" alt="Maledizione: Rovina" id="ruin" class="perk">
            <img src="Perks\iconPerks_HexFaceTheDarkness.webp" title="Maledizione: Affronta l'Oscurità" alt="Maledizione: Affronta l'Oscurità" id="facedark" class="perk">
            <img src="Perks\iconPerks_ThrillOfTheHunt.webp" title="Maledizione: Il Brivido della Caccia" alt="Maledizione: Il Brivido della Caccia" id="thrill" class="perk">
            <img src="Perks\iconPerks_HexUndying.webp" title="Maledizione: Immortale" alt="Maledizione: Immortale" id="undying" class="perk">
        </div>
    </div>

    <!-- DREDGE -->
    <div class="divKiller dredge">
        <a href="" class="linkKiller" target="_blank">DRAGA</a>
        <img src="CharPortraits\K28_TheDredge_Portrait.webp" alt="DRAGA" id="dredge" class="killer"></br>
              <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller dredge-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
        </div>
    </div>

    <!-- WESKER -->
    <div class="divKiller wesker">
        <a href="" class="linkKiller" target="_blank">MASTERMIND</a>
        <img src="CharPortraits\K29_TheMasterMind_Portrait.webp" alt="MASTERMIND" id="wesker" class="killer"></br>
               <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller wesker-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
        </div>
    </div>

    <!-- KNIGHT -->
    <div class="divKiller knight">
        <a href="" class="linkKiller" target="_blank">CAVALIERE</a>
        <img src="CharPortraits\K30_TheKnight_Portrait.webp" alt="CAVALIERE" id="knight" class="killer"></br>
           <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller knight-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_Surge.webp" title="Scarica" alt="Scossa" id="surge" class="perk">
        </div>
    </div>

    <!-- MERDANT -->
    <div class="divKiller skull">
        <a href="" class="linkKiller" target="_blank">MERCANTE DI TESCHI</a>
        <img src="CharPortraits\K31_TheSkullMerchant_Portrait.webp" alt="MERCANTE DI TESCHI" id="skull" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller skull-build1">
            <img src="Perks\iconPerks_Deadlock.webp" title="Impasse" alt="Impasse" id="deadlock" class="perk">
            <img src="Perks\iconPerks_BrutalStrength.webp" title="Forza Brutale" alt="Forza Brutale" id="brutal" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
        </div>
    </div>

    <!-- SINGOLARITA' -->
    <div class="divKiller sing">
        <a href="" class="linkKiller" target="_blank">SINGOLARITÀ</a>
        <img src="CharPortraits\K32_TheSingularity_Portrait.webp" alt="SINGOLARITÀ" id="sing" class="killer"></br>
            <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller sing-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_LethalPursuer.webp" title="Inseguitore Letale" alt="Inseguitore Letale" id="lethal" class="perk">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
        </div>
    </div>

    <!-- ALIEN -->
    <div class="divKiller alien">
        <a href="" class="linkKiller" target="_blank">XENOMORFO</a>
        <img src="CharPortraits\K33_TheXenomorph_Portrait.webp" alt="XENOMORFO" id="alien" class="killer"></br>
               <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller alien-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_Eruption.webp" title="Eruzione" alt="Eruzione" id="eruption" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
        </div>
    </div>

    <!-- CHUCKY -->
    <div class="divKiller chucky">
        <a href="" class="linkKiller" target="_blank">TIPO BELLO</a>
        <img src="CharPortraits\K34_TheYerkes_Portrait.webp" alt="TIPO BELLO" id="chucky" class="killer"></br>
              <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller chucky-build1">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_CorruptIntervention.webp" title="Intervento Corrotto" alt="Intervento corrotto" id="corrupt" class="perk">
            <img src="Perks\T_iconPerks_painResonance.webp" title="Flagello Appuntito: Eco di Dolore" alt="Flagello Appuntito: Eco di Dolore" id="painres" class="perk">
            <img src="Perks\iconPerks_Dissolution.webp" title="Dissoluzione" alt="Dissoluzione" id="dissolution" class="perk">
        </div>
    </div>

    <!-- IGNOTO -->
    <div class="divKiller ign">
        <a href="" class="linkKiller" target="_blank">IGNOTO</a>
        <img src="CharPortraits\K35_TheUnknown_Portrait.webp" alt="IGNOTO" id="ign" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>-->
        <div class="altPerks perkKiller ign-build1">
            <img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk">
            <img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk">
            <img src="Perks\iconPerks_MakeYourChoice.webp" title="Fa' la tua Scelta" alt="Fa' la tua Scelta" id="makeyour" class="perk">
            <img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk">
        </div>
    </div>

    <!-- VECNA -->
    <!--<div class="divKiller vecna">
        <a href="" class="linkKiller" target="_blank">IL LITCH</a>
        <img src="CharPortraits\K36_TheLich_Portrait.webp" alt="VECNA" id="vecna" class="killer"></br>
             <!--<button class="altBuilds active" data-name="trapper-build1">BUILD 1</button>
        <button class="altBuilds" data-name="trapper-build2">BUILD 2</button>
        <button class="altBuilds" data-name="trapper-build3">BUILD 3</button>
        <button class="altBuilds" data-name="trapper-build4">BUILD 4</button>
        <div class="altPerks perkKiller vecna-build1">
            <a href="https://deadbydaylight.fandom.com/it/wiki/Anghing%C3%B2?so=search" target="_blank"><img src="Perks\iconPerks_PopGoesTheWeasel.webp" title="Anghingò" alt="Anghingò" id="anghingo" class="perk"></a>
            <a href="https://deadbydaylight.fandom.com/it/wiki/Abbraccio_Lugubre?so=search" target="_blank"><img src="Perks\T_iconPerks_grimEmbrace.webp" title="Abbraccio Lugubre" alt="Abbraccio Lugubre" id="grim" class="perk"></a>
            <a href="https://deadbydaylight.fandom.com/it/wiki/Fa'_la_tua_Scelta?so=search" target="_blank"><img src="Perks\iconPerks_MakeYourChoice.webp" title="Fa' la tua Scelta" alt="Fa' la tua Scelta" id="makeyour" class="perk"></a>
            <a href="https://deadbydaylight.fandom.com/it/wiki/Barbecue_%26_Chili?so=search" target="_blank"><img src="Perks\iconPerks_BBQAndChili.webp" title="Barbecue & Chili" alt="Barbecue & Chili" id="bbq" class="perk"></a>
        </div>
    </div>-->

</div>

<div class="posCredits">
<footer>
    <p class="crediti">Sito web creato da <a href="https://github.com/ImHaise" target="_blank" style="color: rgb(6, 177, 230);">ImHaise</a></p>
    <p class="crediti">Immagini di killer e perk prese dalla <a href="https://deadbydaylight.fandom.com/wiki/Dead_by_Daylight_Wiki" target="_blank" style="color: rgb(6, 177, 230);">Wiki ufficiale di Dead by Daylight</a></p>
</footer>
</div>

    
    <script src="project.js"></script>
</body>
</html>