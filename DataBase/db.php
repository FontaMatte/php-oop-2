<?php 

    //IMPORTAZIONE CLASSI
    require_once __DIR__. '/../classes/product.php';
    require_once __DIR__. '/../classes/food.php';
    require_once __DIR__. '/../classes/toy.php';
    require_once __DIR__. '/../classes/animalCare.php';
    require_once __DIR__. '/../classes/category.php';
    require_once __DIR__. '/../classes/customer.php';
    require_once __DIR__. '/../classes/subscribeCustomer.php';
    require_once __DIR__. '/../classes/cart.php';
    require_once __DIR__. '/../classes/order.php';
    require_once __DIR__. '/../classes/creditCard.php';

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

    $foodArray = [$food1, $food2, $food3];

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

    $toysArray = [$toy1, $toy2, $toy3];

    //Istanze Prodotti animal Care
    $animalCare1 = new AnimalCare (
        'Pet Head Shampoo Sensitive Soul',
        'Shampoo Pet Head Sensitive Soul per cani con pelle sensibile, con fiocchi d\'avena, estratto di calendula, olio di marula & Aloe Vera, cura e deterge delicatamente.',
        12.99,
        new Category ('Cani', '&#128054;'),
        'animal care',
        'https://shop-cdn-m.mediazs.com/bilder/pet/head/shampoo/sensitive/soul/5/400/159699_pla_companyofanimals_pethead_sensitivesoul_shampoo_300ml_hs_01_5.jpg',
        '300ml',
        'Agosto 2027',
    );
    $animalCare2 = new AnimalCare (
        'Olio di cocco vergine BIO per animali',
        'Olio di cocco per cani e gatti 100% biologico naturale, per uso orale ed esterno, con elevato contenuto di acido laurico contro zecche, parassiti e agenti patogeni, per la salute di pelle e pelo.',
        10.49,
        new Category ('Cani', '&#128054;'),
        'animal care',
        'https://shop-cdn-m.mediazs.com/bilder/olio/di/cocco/vergine/bio/per/animali/8/400/75989_pla_biovirgincoconutoil_hs_01_8.jpg',
        '500ml',
        'gennaio 2026',
    );
    $animalCare3 = new AnimalCare (
        'Lettiera Tigerino Crystals - Sensitive (senza profumo)',
        'Lettiera in silicio Crystals Tigerino Sensitive, ultra assorbente e dall\'ottima resa, neutralizza all\'istante i cattivi odori, priva di polvere e senza profumo, per gatti sensibili agli odori.',
        8.29,
        new Category ('Gatti', '&#128049;'),
        'animal care',
        'https://shop-cdn-m.mediazs.com/bilder/lettiera/tigerino/crystals/sensitive/senza/profumo/2/400/tigerino_crystal_sensitive_5l_1000x1000_2.jpg',
        '2.1 Kg',
        'No scadenza',
    );

    $animalCareArray = [$animalCare1, $animalCare2, $animalCare3];

    // Istanze Clienti
    $customer1 = new Customer('piero','pierogmail.com');
    $customer2 = new Customer('piero','pierogmail.com');
    $customer3 = new SubscribeCustomer('piero','pierogmail.com');
    $customer4 = new SubscribeCustomer('piero','pierogmail.com');


    // Istanze Carrelli
    $cart1 = new Cart([$animalCare1, $food2, $toy3]);
    $cart2 = new Cart([$animalCare2, $food3, $toy1]);
    $cart3 = new Cart([$animalCare3, $food1, $toy2]);
    $cart4 = new Cart([$animalCare1, $food2, $toy3]);

    //Istanze carte di credito
    try {
        $creditCard1 = new CreditCard(5675657687736452,new DateTime('2024-01-01'),545);
    }
    catch (Exception $e) {
        echo '<h1>ERRORE: Carta Scaduta</h1>';
        die();
    }

    // $creditCard2 = new CreditCard(567435687,new DateTime('20205-01-01'),977);
    // $creditCard3 = new CreditCard(567768677687,new DateTime('2026-01-01'),324);
    // $creditCard4 = new CreditCard(532442387,new DateTime('2021-01-01'),767);

    // Istanze Ordini
    // $order1 = new Order($customer1, $cart1, $creditCard1);
    // $order2 = new Order($customer2, $cart2, $creditCard2);
    // $order3 = new Order($customer3, $cart3, $creditCard3);
    // $order4 = new Order($customer4, $cart4, $creditCard4);

    // var_dump($order1);





