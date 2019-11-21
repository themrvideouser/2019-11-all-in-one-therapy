@extends('base')

@section('title', 'Welcome')

@section('top-links')
    <a type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
        Kontakt
    </a>
    <a type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">
        Leistungen
    </a>
    <a type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree">
        Preise
    </a>
    <a type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour">
        Termine
    </a>
    <a type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive">
        Über uns
    </a>

    |
    @auth
        <a href="/backend">Backend</a>
    @endauth
@endsection

@section('main')
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>

    Willkomen auf AIOT
    <div class="accordion" id="myAccordion">

        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
                        Kontakt
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#myAccordion">
                <div class="card-body">
                    <p>Sie erreichen uns unter:
                        <br>
                        <br>
                        <a href="tel:+43 / 123 123 123 123">+43 / 123 123 123 123</a>
                        <br>
                        <a href="mailto:office@example.com">office@example.com</a>
                        <br>
                        <br>
                        Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen
                        Sie verlässlich so bald wie möglich zurück.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                            data-target="#collapseTwo">Leistungen
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#myAccordion">
                <div class="card-body">
                    <ul>
                        <li>Physiotherapie</li>
                        <li>Sport-Physiotherapie</li>
                        <li>Fußreflexzonenmassage</li>
                        <li>Lymphdrainage</li>
                        <li>Kinesio-Taping</li>
                        <li>Osteopathie</li>
                        <li>Fasziendistorsionsmodell (FDM)</li>
                        <li>Craniosacral-Therapie</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                            data-target="#collapseThree">Preise
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#myAccordion">
                <div class="card-body">
                    <p>
                        <b>Preise und Verrechnung:</b>
                        <br>
                    <ul>
                        <li>Physiotherapie 45 min 75 €</li>
                        <li>Osteopathie 45 min 90 €</li>
                        <li>Kinesiotape Stk. 15-25 €</li>
                    </ul>
                    Sollten Sie Ihren vereinbarten Termin nicht 24 Stunden vorher absagen (Telefon, Email), wird Ihnen
                    dieser in Rechnung gestellt.
                    <br>
                    <br>
                    Wir sind umsatzsteuerbefreit gem. § 19 UStg.
                    <br>
                    <br>
                    <b>Kostenrückerstattung:</b>
                    <br>
                    <br>
                    Für eine Rückerstattung der Therapiekosten bei Ihrer Krankenkasse benötigen Sie eine Verordnung für
                    Physiotherapie von Ihrem Haus- oder Facharzt.
                    <br>
                    Diese muss chefärztlich von Ihrer Krankenkasse
                    bewilligt werden (übernehmen wir auch gerne für Sie).
                    <br>
                    <br>
                    Nach Therapieabschluss erhalten Sie eine Rechnung, die Sie gemeinsam mit der bewilligten Verordnung
                    bei Ihrer Krankenkasse einreichen.
                    <br>
                    <br>
                    Sie bekommen einen Teil Ihrer Kosten (unterschiedlicher Teil je nach Kasse) von Ihrer Krankenkasse
                    rückerstattet.
                    <br>
                    Verbleibende Restkosten können von Ihrer Zusatzversicherung übernommen werden.
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour">
                        Termine
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#myAccordion">
                <div class="card-body">
                    <p>
                        Mitzubringen
                        <br>
                    <ul>
                        <li>Bequeme Kleidung</li>
                        <li>Bewilligte Verordnung</li>
                        <li>Befunde (Röntgen, MRT, Arztbrief) falls vorhanden</li>
                        <li>Handtuch</li>
                    </ul>
                    Sie können bei unserer Assistentin Clara während der Sekretariatsöffnungszeiten einen Termin
                    vereinbaren.
                    <br>
                    <br>
                    Unsere Sekretariatsöffnungszeiten sind:
                    <br>
                    Montag - Freitag 8:00 - 11:00
                    <br>
                    <br>
                    <a href="tel:+43 / 123 123 123 123">+43 / 123 123 123 123</a>
                    <br>
                    <a href="mailto:office@example.com">office@example.com</a>
                    <br>
                    <br>
                    Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen
                    Sie verlässlich so bald wie möglich zurück.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive">
                        Über uns
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#myAccordion">
                <div class="card-body">
                    <p>
                        <strong>Anna Fink</strong>
                        <br>
                        <br>
                        Als Physiotherapeutin ist mir die ganzheitliche Arbeit mit dem Patienten wichtig.
                        <br>
                        Die Osteopathie biete ich ebenfalls an - sie ergänzt die Behandlung optimal.
                        <br>
                        Barbara und ich arbeiten schon lange zusammen und wir freuen uns, auch Sie in unserer Praxis
                        begrüßen zu dürfen.
                        <br>
                        <b>Ausbildungen</b>:
                    <ul>
                        <li>2016: FDM Modul 1 + 2</li>
                        <li>Seit 2012: Osteopathie an der Wiener Schule für Osteopathie</li>
                        <li>2010-2012: Sportphysiotherapie</li>
                        <li>2007-2010: Akademie für Physiotherapie am Wilhelminenspital</li>
                    </ul>
                    Berufliche Aktivitäten:
                    <ul>
                        <li>Seit 2019: Praxisgemeinschaft mit Barbara</li>
                        <li>Seit 2011: SPORTO-Praxisgemeinschaft</li>
                        <li>2010-2011: Elements of Performance-Sportphysiotherapie Hagenstadt</li>
                        <li>2008-2009: Orthopädisches Zentrum Otto Meier Krankenhaus</li>
                    </ul>
                    Sportphysiotherapeutische Aktivitäten:
                    <br>
                    <ul>
                        <li>2011: Austria Wien Junioren U13 und U14</li>
                        <li>2010: Fussball Damen U18, Herren FCZ Bern, Balletttänzerinnen Opernhaus Bern, BZ Adelbrie
                            Europacup
                        </li>
                        <li>Niederlande</li>
                        <li>2009: AON-N-Volleys</li>
                    </ul>
                    Therapeutische Erfahrung mit Sportarten:
                    <br>
                    Laufen, Fussball, Volleyball, Ballett, Ausdruckstanz, Boden- und Geräteturnen
                    Hobbies:
                    Reisen, Bodenturnen, Tanzen, Laufen, Freunde, Musik, Schlagzeug spielen
                    <br>
                    <br>
                    Barbara Berg
                    <br>
                    <br>
                    Ich kenne Anna schon seit der Schulzeit und wir haben Teile unserer Ausbildungen gemeinsam gemacht.
                    <br>
                    Gemeinsam möchten wir unseren Patientinnen und Patienten stets das Allerbeste bieten und das gelingt
                    uns jeden tag aufs Neue.
                    <br>
                    Zur Person
                    <br>
                    Ausbildungen:
                    <br>
                    <ul>
                        <li>2012 – 2014: Yoga Ausbildung in Tirol</li>
                        <li>2012: Budo-Teacher-Training in Graz</li>
                        <li>2011: Yoga Master-Training in Nepal</li>
                        <li>2010: Yoga & Spiralakrobatik Foundation Level</li>
                        <li>2002 – 2008: Wiener Schule für Osteopathie</li>
                        <li>1997 – 2000: Akademie für Physiotherapie SFB</li>
                    </ul>
                    Berufliche Aktivitäten:
                    <ul>
                        <li>Seit 2019: Praxisgemeinschaft mit Anna</li>
                        <li>2010 – 2018: Sport-ORTOPABST-Praxisgemeinschaft</li>
                        <li>2006 – 2010: GOLDO Praxisgemeinschaft</li>
                        <li>2005 – 2006: Health & More We do it for you Consult AG</li>
                        <li>2004 – 2005: Sanatorium Helga</li>
                        <li>2000 – 2004: Physikalisches Institut Voltenberg</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
