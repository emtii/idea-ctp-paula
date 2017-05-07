@extends('index.index')

@section('frontend_index_body_inner_sections')
    {{-- Finder --}}
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Finder</h2>
                    <hr class="star-primary" />
                </div>
            </div>
            <legend class="text-center">
                Geben Sie hier Ihre Suchoptionen ein, um den passenden Kinderwagen zu finden!
            </legend>

            {{-- @todo: dynamisieren --}}
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">Hersteller</label>
                    <select multiple="multiple" class="form-control">
                        <option value="#brand1">brand #1</option>
                        <option value="#brand2">brand #2</option>
                    </select>
                </div>
                <div class="col-sm-8">
                    <label class="control-label">Preis</label>
                    <div id="slider">
                        {{-- price slider --}}
                        @include('home.include.price_slider')
                    </div>
                </div>
            </div>

            {{-- @todo: dynamisieren --}}
            <div class="row voffset20">
                <div class="col-sm-4">
                    <div class="controls">
                        <label class="control-label">Kinderwagen-Typ</label>
                        <select class="form-control">
                            <option value="1">Klassischer Kinderwagen</option>
                            <option value="2">Buggy</option>
                            <option value="3">Sportwagen</option>
                            <option value="4">Zwillingwagen</option>
                            <option value="5">...</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="controls">
                        <label class="control-label">Alter des Kindes</label>
                        <select class="form-control">
                            <option value="1">0-1</option>
                            <option value="2">1-2</option>
                            <option value="3">2-3</option>
                            <option value="4">3-5</option>
                            <option value="5">...</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="controls">
                        <label class="control-label">Farbe</label>
                        <select class="form-control">
                            <option value="1">schwarz</option>
                            <option value="2">weiß</option>
                            <option value="3">blau</option>
                            <option value="4">grün</option>
                            <option value="5">...</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- @todo: dynamisieren --}}
            <div class="row voffset20">
                <div class="col-sm-4">
                    <div class="controls">
                        <label class="control-label">Gesamtgewicht</label>
                        <select class="form-control">
                            <option value="1">0 - 5 Kg</option>
                            <option value="2">5 - 10 Kg</option>
                            <option value="3">10 - 15 Kg</option>
                            <option value="4">15 - 20 Kg</option>
                            <option value="5">...</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="controls">
                        <label class="control-label">TÜV geprüft</label>
                        <select class="form-control">
                            <option value="1">Ja</option>
                            <option value="2">Nein</option>
                            <option value="3">Ist mir egal (Ich hoffe nicht!)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="controls">
                        <label class="control-label">Anzahl Räder</label>
                        <select class="form-control">
                            <option value="1">3</option>
                            <option value="2">4</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- about --}}
    <section class="success", id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Warum gibt es Paula?</h2>
                    <hr class="star-light" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Paula wurde von mir entwickelt, um allen werdenden Eltern eine schnelle und einfache Möglichkeit zu bieten, einen passenden Kinderwagen für den Nachwuchs zu suchen. Stundenlange Beratungen in diversen</p>
                </div>
                <div class="col-lg-4">
                    <p>Fachgeschäften vor Ort und die unsäglich schlecht gepflegten Datenbanken des Webs haben mich dazu bewogen etwas eigenes zu erstellen. Dies ist das Ergebnis. Viel Spaß beim ausprobieren!</p>
                </div>
            </div>
        </div>
    </section>
@stop