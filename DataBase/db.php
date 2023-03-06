<?php 

    //IMPORTAZIONE CLASSI
    require_once __DIR__. '/../classes/product.php';
    require_once __DIR__. '/../classes/food.php';
    require_once __DIR__. '/../classes/toy.php';
    require_once __DIR__. '/../classes/animalCare.php';
    require_once __DIR__. '/../classes/category.php';

    //CREAZIONE ISTANZE

    //Istanze Cibo
    $food1 = new Food (
        'Royal Canin Maxi Adult',
        'Crocchette per cani Royal Canin Size Maxi Adult. Alimento secco completo per cani adulti di grande taglia, con un peso compreso tra i 26 e i 44 kg, dai 15 mesi ai 5 anni di età.',
        69.90,
        new Category ('Cani', '&#128054;'),
        'food',
        'https://arcaplanet.vtexassets.com/arquivos/ids/243809/royal-canin-size-cane-maxi-adult.jpg?v=1764509941',
        '5kg',
        '+2 anni',
        '2025'
    );
    $food2 = new Food(
        'Bocconi con Manzo',
        'Alimento completo per cani adulti in bocconi',
        0.99,
        new Category ('Cani', '&#128054;'),
        'food',
        'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw696ff7e1/idt/migliorcane_bocconi_con_manzo_405_gr__8007520011204_160924.jpg?sw=800&sh=800',
        '400g',
        '+6 mesi',
        'dicembre 2024'
    );
    $food3 = new Food(
        'Whiskas 1',
        'Alimento umido per gatti adulti, con carne fresca, del tutto privo di coloranti e aromi artificiali, senza zuccheri aggiunti, in tante prelibate varianti',
        2.99,
        new Category ('Gatti', '&#128049;'),
        'food',
        'https://shop-cdn-m.mediazs.com/bilder/whiskas/lattine/x/g/5/400/67677_pla_whiskas_1_mithuhningelee_400g_5.jpg',
        '400g',
        '+6 mesi',
        'marzo 2026'
    );

    //Istanze Giochi
    $toy1 = new Toy (
        'Trixie corda gioco per cani',
        'Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla, contribuisce a pulire gli spazi interdentali in modo giocoso, in cotone robusto ma leggero.',
        2.50,
        new Category ('Cani', '&#128054;'),
        'toy',
        'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg',
        'tutti',
        'corda',
    );
    $toy2 = new Toy (
        'KONG Goodie Bone S',
        'Gioco KONG Goodie Bone, osso in caucciù naturale da masticare per cani fino a 9 kg, materiale robusto per un passatempo che dura a lungo, con Goodie Grippers™ alle due estremità da riempire con snack.',
        7.99,
        new Category ('Cani', '&#128054;'),
        'toy',
        'https://shop-cdn-m.mediazs.com/bilder/kong/goodie/bone/s/7/400/219797_kong_goodie_bone_hs_02_7.jpg',
        'piccoli',
        'gomma',
    );
    $toy3 = new Toy (
        'Colonna tiragraffi Karlie Rofra',
        'Compatta colonna tiragraffi per gatti, in zostera intrecciata naturale',
        16.99,
        new Category ('Gatti', '&#128049;'),
        'toy',
        'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg',
        'tutti',
        'vari',
    );

    //Istanze Prodotti animal Care
    $animalCare1 = new AnimalCare (
        'Trixie corda gioco per cani',
        'Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla, contribuisce a pulire gli spazi interdentali in modo giocoso, in cotone robusto ma leggero.',
        2.50,
        new Category ('Cani', '&#128054;'),
        'animal care',
        'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg',
        'tutti',
        'corda',
    );
    $animalCare2 = new AnimalCare (
        'Trixie corda gioco per cani',
        'Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla, contribuisce a pulire gli spazi interdentali in modo giocoso, in cotone robusto ma leggero.',
        2.50,
        new Category ('Cani', '&#128054;'),
        'animal care',
        'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg',
        'tutti',
        'corda',
    );
    $animalCare3 = new AnimalCare (
        'Trixie corda gioco per cani',
        'Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla, contribuisce a pulire gli spazi interdentali in modo giocoso, in cotone robusto ma leggero.',
        2.50,
        new Category ('Cani', '&#128049;'),
        'animal care',
        'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg',
        'tutti',
        'corda',
    );

