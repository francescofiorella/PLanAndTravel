<?php
include_once '../includes/db_connection.php';

session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Privacy e Cookies</title>
    <link rel="shortcut icon" href="../drawable/logo-mini.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
          integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="../style/privacy_and_cookies.css"/>
    <link rel="stylesheet" href="../style/home_page.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"
          integrity="sha512-ztsAq/T5Mif7onFaDEa5wsi2yyDn5ygdVwSSQ4iok5BPJQGYz1CoXWZSA7OgwGWrxrSrbF0K85PD5uLpimu4eQ=="
          crossorigin="anonymous"/>

    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>

<!-- navbar-->
<div class="navbg">
    <navbar>
        <div class="logo">
            <img src="../drawable/navbar-logo.png" alt="logo-sito">
        </div>
        <ul class="menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="mete.php">Mete</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
        <?php
        if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] !== true) {
            ?>
            <div class="cta">
                <a href="login.html" class="button">Login</a>
            </div>
            <?php
        } else {
            ?>
            <div class="profilo">
                <div class="foto">
                    <a href="profilo_utente.php">
                        <?php echo '<img src="../drawable/db/' . $_SESSION['immagine'] . '">' ?>
                    </a>
                </div>
            </div>
            <?php
        }
        ?>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </navbar>
</div>

<!-- intro con sfondo dietro-->
<div class="hero1 hero--small">
    <div class="hero__content">
    </div>
</div>

<!-- Esempio-->
<div class="content">
    <h3 class="normal-text"><b>Art. 1</b></h3>
    <p>Titolare del trattamento. Il titolare dei trattamenti dei dati raccolti tramite Plan&Travel ai
        sensi e per gli effetti dell’art. 13 del Regolamento EU 2016/679, è la società Plan&Travel S.A
        .S. iscritta al Registro delle Imprese di Bari con Codice Fiscale e Partita IVA 09709510760 con
        legale ed amministrativa in Via Roma, 20 Barletta - 76121 (BT). </p>
    <h3 class="normal-text"><b>Art. 2</b></h3>
    <p>Natura facoltativa o obbligatoria del conferimento dei dati. I dati dell'utente conferiti al sito Plan&Travel
        possono
        essere necessari ai fini dell'utilizzo, oppure rivestire carattere facoltativo.
        La natura obbligatoria o facoltativa del conferimento è specificata di volta in volta con la
        segnalazione del carattere (*) per individuare l’obbligatorietà dell’informazione.
        La mancata comunicazione di dati obbligatori può rendere impossibile la prosecuzione e la
        conclusione della finalità perseguita dalla raccolta dei dati corrispondente.
        Ad esempio la mancata indicazione dell’indirizzo di spedizione rende impossibile la conclusione dell’acquisto.
        A tal proposito si vuole evidenziare che l’eventuale comunicazione assente o non corretta di una delle
        informazioni obbligatorie,
        può causare l’impossibilità per Plan&Travel di garantire la congruità del trattamento stesso e rende Plan&Travel
        non responsabile per conseguenze scaturenti da tale comunicazione non corretta.
        Per garantire che i dati personali siano sempre esatti ed aggiornati, la preghiamo di segnalarci ogni modifica
        intervenuta a info@plan&travel.it
        Tra i casi di conferimento facoltativi dei dati dell’utente citiamo quelli per scopi di marketing diretto, ma
        anche in questo caso sarà richiesto uno specifico consenso. </p>
    <h3 class="normal-text"><b>Art. 3</b></h3>
    <p>Finalità del trattamento.
        I dati personali sono raccolti e trattati da Plan&Travel per finalità strettamente connesse all'uso del sito
        web, dei suoi servizi e all'acquisto di prodotti tramite il sito web, ad esempio durante le fasi di:
        Procedura di acquisto dei prodotti su Plan&Travel;
        Registrazione per la ricezione della Newsletter per posta elettronica;
        Fornitura dei servizi di assistenza clienti.
        I dati personali saranno conservati nella forma che consenta la identificazione per il tempo strettamente
        necessario alla finalità per cui i dati sono stati raccolti e trattati e, in ogni caso, entro i limiti di legge.
        I dati personali non saranno comunicati a terzi per scopi non consentiti dalla legge o senza espresso consenso e
        potranno essere comunicati a terzi solo quando ciò sia necessario per dare seguito alla conclusione del
        contratto.
        Inoltre i dati potranno essere comunicati a forze di polizia o all'autorità giudiziaria, in conformità alla
        legge e previa richiesta formale da parte di tali soggetti, ad esempio nell'ambito dei servizi antifrode.
        Può accadere che Plan&Travel si trovi a trattare dati personali di terzi soggetti comunicati direttamente dai
        propri utenti a Plan&Travel, per esempio nel caso in cui l’utente abbia acquistato un prodotto da recapitare ad
        un amico ovvero
        quando il soggetto che corrisponde il prezzo per l’acquisto del prodotto sia diverso dal soggetto cui il
        prodotto è destinato, ovvero ancora quando l’utente intenda segnalare ad un amico un servizio Plan&Travel o
        l’offerta in vendita di un particolare prodotto.
        In tutti questi casi Plan&Travel farà pervenire al soggetto terzo l’informativa prescritta dall'art. 13 del
        Regolamento EU 2016/679 nel momento in cui registra nel proprio archivio i suoi dati,
        ma resta l’obbligo dell’utente di ottenere il consenso della persona cui i dati si riferiscono prima di
        comunicarli a Plan&Travel e di informarlo circa questa Privacy Policy, perché sarà l’unico ed il solo
        responsabile per la comunicazione di informazioni e di dati relativi a terzi soggetti,
        senza che questi abbiano espresso il loro consenso e per il loro uso non corretto o contrario alla legge.
        Il consenso di queste persone non è necessario solo quando i dati di questo soggetto sono comunicati a
        Plan&Travel per la conclusione del contratto con Plan&Travel a suo esclusivo favore.</p>
    <h3 class="normal-text"><b>Art. 4</b></h3>
    <p>Modalità del trattamento.
        Il trattamento dei dati può avvenire in varie forme: elettroniche, cartacee, telematiche, etc.
        Ogni trattamento avviene nel rispetto delle modalità di cui agli art. 11, 31 e ss. del Codice della Privacy e
        mediante l’adozione, nei modi previsti dal disciplinare tecnico in materia di misure minime di sicurezza
        contenuto nell'allegato B, delle misure minime di sicurezza disciplinate dall'art. 35 del Codice della Privacy.
        Con l’accettazione, l’interessato presta espresso consenso al trattamento dei dati secondo le modalità suddette,
        dunque in ogni forma e modo, ivi compresa la cessione dei dati a qualsiasi titolo a soggetti terzi.
        Plan&Travel acquisisce ogni più ampia facoltà e diritto di utilizzo dei dati medesimi, compreso l’uso a fini
        commerciali, anche con riferimento alle banche dati nei quali i dati siano stati eventualmente inseriti e ogni e
        qualsiasi altro utilizzo.</p>
    <h3 class="normal-text"><b>Art. 5</b></h3>
    <p>Comunicazione. I dati saranno trattati dal personale e/o dai collaboratori di Plan&Travel.
        I dati saranno comunicati a terzi soltanto previo consenso espresso, salvo i casi in cui la comunicazione sia
        obbligatoria per legge o sia necessaria per finalità previste dalla legge per il perseguimento delle quali non
        sia richiesto il consenso dell’interessato
        (ad esempio, nel caso di richiesta avanzata dalle forze di polizia o dalla magistratura o altri enti competenti
        oppure per eseguire obblighi derivanti dal contratto concluso).</p>
    <h3 class="normal-text"><b>Art. 6</b></h3>
    <p>Diritti dell’Interessato. Scrivendo a info@plan&travel.it ogni momento l’interessato potrà esercitare i diritti
        riconosciuti dall'art. 13 del Regolamento EU 2016/679:l’aggiornamento, la rettificazione oppure, quando vi ha
        interesse, l’integrazione dei dati; la cancellazione,
        la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, compresi quelli di cui
        non è necessaria la conservazione in relazione agli scopi per i quali i dati sono stati raccolti o
        successivamente trattati; l’attestazione che le operazioni di cui alle lettere a) e b) sono state portate a
        conoscenza,
        anche per quanto riguarda il loro contenuto, di coloro ai quali i dati sono stati comunicati o diffusi,
        eccettuato il caso in cui tale adempimento si rivela impossibile o comporta un impiego di mezzi manifestamente
        sproporzionato rispetto al diritto tutelato. L’interessato ha anche il diritto di opporsi in tutto o in parte al
        trattamento dei propri dati personali:
        per motivi legittimi al trattamento dei dati personali che lo riguardano, ancorché pertinenti allo scopo della
        raccolta; al trattamento di dati personali che lo riguardano a fini di invio di materiale pubblicitario o di
        vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale. In qualsiasi momento
        l’utente può ottenere un elenco
        aggiornato dei responsabili del trattamento scrivendo a info@plan&travel.it </p>
    <h3 class="normal-text"><b>Art. 7</b></h3>
    <p>Modifiche e aggiornamenti della Privacy Policy di Plan&Travel. Il titolare potrà modificare o semplicemente
        aggiornare, in tutto o in parte, la Privacy Policy di Plan&Travel anche in considerazione della modifica delle
        norme di legge o di regolamento che regolano questa materia e proteggono i propri diritti.
        Le modifiche e gli aggiornamenti della Privacy Policy di Plan&Travel saranno notificati agli utenti nella Home
        Page di Plan&Travel non appena adottati e saranno vincolanti non appena pubblicati sul sito web in questa stessa
        sezione. L’utente è pregato ad accedere con regolarità a questa sezione per verificare la pubblicazione della
        più recente ed aggiornata Privacy Policy di Plan&Travel.</p>
    <h3 class="normal-text"><b>Art. 8</b></h3>
    <p>Misure di sicurezza. Plan&Travel adotta le misure di sicurezza adeguate al fine minimizzare i rischi di:
        distruzione perdita dei dati accesso non autorizzato trattamento non consentito o non conforme alle finalità
        indicate nella nostra Privacy Policy. Plan&Travel peraltro, non può garantire che tali misure per la sicurezza
        del sito escludano qualsiasi rischio di accesso non consentito o
        di dispersione dei dati da parte di dispositivi di pertinenza dell’utente. A tal fine consigliamo l’utente di
        verificare l’esistenza sul proprio computer di software adeguati per la protezione della trasmissione in rete di
        dati, e che il fornitore di servizi Internet abbia adottato misure idonee per la sicurezza della trasmissione di
        dati in rete.</p>
    <h3 class="normal-text"><b>Art. 9</b></h3>
    <p>Legge applicabile e rinvio alla normativa. Il rapporto in materia di protezione dei dati personali tra
        Plan&Travel e l’utente è regolato dalla normativa italiana ed in particolare dall'art. 13 del Regolamento EU
        2016/679. L’utente può far riferimento al sito web del Garante per la protezione dei dati personali
        all'indirizzo <a href="http://www.garanteprivacy.it">http://www.garanteprivacy.it</a>,
        per conoscere i propri diritti ed avere l’aggiornamento sulla normativa in materia di tutela delle persone
        rispetto al trattamento dei dati personali. </p>

    <h3 class="normal-text"><b>COOKIE POLICY</b></h3>
    <p>Questo sito utilizza cookie, anche di terze parti, per migliorarne l’esperienza di navigazione e consentire a chi
        naviga di usufruire dei nostri servizi online e di visualizzare pubblicità in linea con le proprie preferenze.
        I cookies utilizzati in questo sito rientrano nelle categorie descritte di seguito; ulteriori informazioni sono
        disponibili nella pagina dell'Informativa sulla Privacy.
        Se prosegui nella navigazione acconsenti all'utilizzo dei cookie.
        In qualunque momento è possibile disabilitare i cookies presenti sul browser; ti ricordiamo che quest'opzione
        potrebbe limitare molte delle funzionalità di navigazione del sito</p>

    <h3 class="normal-text"><b>COSA SONO I COOKIES</b></h3>
    <p>I cookies sono piccoli file di testo che vengono automaticamente posizionati sul PC del navigatore all'interno
        del browser. Essi contengono informazioni di base sulla navigazione in Internet e grazie al browser vengono
        riconosciuti ogni volta che l'utente visita il sito.</p>

    <h3 class="normal-text"><b>GESTIONE DEI COOKIES</b></h3>
    <h3 class="small-text"><b>Attività strettamente necessarie al funzionamento</b></h3>
    <p>Questi cookies hanno natura tecnica e permettono al sito di funzionare correttamente. Ad esempio, mantengono
        l'utente collegato durante la navigazione evitando che il sito richieda di collegarsi più volte per accedere
        alle pagine successive.</p>
    <h3 class="small-text"><b>Attività di salvataggio delle preferenze</b></h3>
    <p>Questi cookie permettono di ricordare le preferenze selezionate dall'utente durante la navigazione, ad esempio,
        consentono di impostare la lingua. </p>
    <h3 class="small-text"><b>Attività Statistiche e di Misurazione dell'audience</b></h3>
    <p>Questi cookie ci aiutano a capire, attraverso dati raccolti in forma anonima e aggregata, come gli utenti
        interagiscono con i nostri siti internet fornendoci informazioni relative alle sezioni visitate, il tempo
        trascorso sul sito, eventuali malfunzionamenti. Questo ci aiuta a migliorare la resa dei nostri siti
        internet.</p>

</div>

<!-- Footer-->

<footer>
    Plan&Travel | Via Roma, 20 - 76121 Barletta (BT) ITALIA | P.Iva 000000000 <br>
    <a class="trans-color-text" href="#">info@plan&travel.com</a> | <span itemprop="telephone"><a
                href="#">0883 200300</a></span>
    <br><a href="privacy_and_cookies.php"> privacy</a> | <a href="privacy_and_cookies.php"> cookie policy</a>

    <div class="social-cont">
        <ul class="social-list">
            <li><a target="_blank" href="#"><img
                            src="https://icon-library.com/images/facebook-png-icon-white/facebook-png-icon-white-18.jpg"
                            title="facebook" alt="Facebook icon"></a></li>
            <li><a target="_blank" href="#"><img
                            src="https://icon-library.com/images/white-instagram-icon-png/white-instagram-icon-png-14.jpg"
                            title="Instagram" alt="Instagram icon"></a></li>
            <li><a target="_blank" href="#"><img
                            src="https://www.suiteforlife.it/wp-content/uploads/2019/09/whatsapp-logo-112413FAA7-seeklogo-298x300.png"
                            title="WhatsApp" alt="WhatsApp icon"></a></li>
        </ul>
    </div><!--/fine social cont-->
    Designed by<br>
    <div class="credits">
        <a href="homepage.php"><img width="32" src="../drawable/logo-mini.png" title="Plan&Travel"
                                    alt="Icona Plan&Travel"></a>
    </div>

</footer>


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"
        integrity="sha512-Nx/M3T/fWprNarYOrnl+gfWZ25YlZtSNmhjHeC0+2gCtyAdDFXqaORJBj1dC427zt3z/HwkUpPX+cxzonjUgrA=="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

        /* Open Panel */
        $(".hamburger").on('click', function () {
            $(".menu").toggleClass("menu--open");
        });

    });


    ScrollReveal().reveal('.reveal', {
        distance: '100px',
        duration: 1500,
        easing: 'cubic-bezier(.215, .61, .355, 1)',
        interval: 600
    });

    ScrollReveal().reveal('.zoom', {
        duration: 1500,
        easing: 'cubic-bezier(.215, .61, .355, 1)',
        interval: 200,
        scale: 0.65,
        mobile: false
    });


    </body>
    </html>