<!--Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->


<?php

$text = "Un analogo fisico di un buco nero è il comportamento delle onde sonore in prossimità di un ugello de Laval: una strozzatura utilizzata negli scarichi dei razzi che fa passare il flusso dal regime subsonico a supersonico. Prima dell'ugello le onde sonore possono risalire il flusso del getto, mentre dopo averlo attraversato ciò è impossibile perché il flusso è supersonico, quindi più veloce del suono. Altri analoghi possono essere le onde superficiali in un liquido in moto in un canale circolare con altezza decrescente, un tubo per onde elettromagnetiche la cui velocità è alterata da un laser, una nube di gas di forma ellissoidale in espansione lungo l'asse maggiore.Tutti questi modelli, se raffreddati fino alla condizione di condensato di Bose - Einstein, dovrebbero presentare l'analogo della radiazione di Hawking, e possono essere usati per correggere le previsioni di quest'ultima: come un fluido ideale, la teoria di Hawking considera la velocità della luce (suono) costante, indipendentemente dalla lunghezza d'onda (comportamento detto di Tipo I). Nei fluidi reali la velocità può aumentare (Tipo II) o diminuire (Tipo III) all'aumentare della lunghezza d'onda. Analogamente dovrebbe avvenire con la luce, ma se il risultato fosse che lo spazio tempo diffonde la luce come il Tipo II o il Tipo III, andrebbe modificata la relatività generale, cosa già nota perché per le onde con lunghezza d'onda prossima alla lunghezza di Planck diventa significativa la gravitazione quantistica.Restando invece nel campo relativistico (ossia relativo alla teoria della relatività), poiché per descrivere un buco nero sono sufficienti tre parametri - massa, momento angolare e carica elettrica - i modelli matematici derivabili come soluzioni dell'equazione di campo della relatività generale si riconducono a quattro:";


echo "<pre>";
print_r(explode(".", $text));
echo "</pre>";

?>