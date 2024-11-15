<?php

return [
    'about_assets_title'           => 'Om tillgångar',
    'about_assets_text'            => 'Tillgångar är poster som spåras med serienummer eller tillgångstagg. De tenderar att vara mer värdefulla saker där identifiering av en viss sak är viktig.',
    'archived'  				=> 'Arkiverade',
    'asset'  					=> 'Tillgång',
    'bulk_checkout'             => 'Checkout tillgångar',
    'bulk_checkin'              => 'Återta tillgångar',
    'checkin'  					=> 'Checkin Asset',
    'checkout'  				=> 'Checkout Asset',
    'clone'  					=> 'Klon tillgång',
    'deployable'  				=> 'Deployable',
    'deleted'  					=> 'Denna tillgång har tagits bort.',
    'delete_confirm'            => 'Är du säker du vill radera denna tillgång?',
    'edit'  					=> 'Redigera tillgång',
    'model_deleted'  			=> 'Denna tillgångsmodell har tagits bort. Du måste återställa modellen innan du kan återställa tillgången.',
    'model_invalid'             => 'Denna modell för denna tillgång är ogiltig.',
    'model_invalid_fix'         => 'Tillgången måste uppdateras med en giltig tillgångsmodell innan du försöker checka in eller ut den, eller för att inventera den.',
    'requestable'               => 'Tillgängliga',
    'requested'				    => 'Begärda',
    'not_requestable'           => 'Inte begärbar',
    'requestable_status_warning' => 'Ändra inte begärbar status',
    'restore'  					=> 'Återställ tillgången',
    'pending'  					=> 'Väntande',
    'undeployable'  			=> 'Undeployable',
    'undeployable_tooltip'  	=> 'Denna tillgång har en statusetikett som inte går att distribuera och som inte kan checkas ut just nu.',
    'view'  					=> 'Visa tillgång',
    'csv_error' => 'Du har ett fel i din CSV-fil:',
    'import_text' => '<p>Ladda upp en CSV som innehåller tillgångshistorik. Tillgångarna och användarna MÅSTE redan finnas i systemet, annars kommer de att hoppas över. Matchande tillgångar för historikimport sker mot tillgångstaggen. Vi kommer att försöka hitta en matchande användare baserat på användarens namn du anger, och kriterierna du väljer nedan. Om du inte väljer några kriterier nedan, det kommer helt enkelt att försöka matcha på användarnamnet format du konfigurerade i <code>Admin &gt; Allmänna inställningar</code>.</p><p>Fält som ingår i CSV måste matcha rubrikerna: <strong>Asset Tag, Namn, Checkout Date, Checkin Date</strong>. Eventuella ytterligare fält kommer att ignoreras. </p><p>Checkin Datum: tomt eller framtida checkin datum kommer att checka ut objekt till associerad användare. Exklusive kolumnen Checkin Date kommer att skapa ett checkin datum med dagens datum.</p>
    ',
    'csv_import_match_f-l' => 'Försök att matcha användare med <strong>fornamn.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Försök att matcha användare med <strong>förnamn</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Försök att matcha användare med <strong>förnamn</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Försök att matcha användare med <strong>e-post</strong> som användarnamn',
    'csv_import_match_username' => 'Försök att matcha användare med <strong>användarnamn</strong>',
    'error_messages' => 'Felmeddelanden:',
    'success_messages' => 'Lyckade meddelande:',
    'alert_details' => 'Se nedan för detaljer.',
    'custom_export' => 'Anpassad export',
    'mfg_warranty_lookup' => ':manufacturer Garantistatus Uppsök',
    'user_department' => 'Användares avdelning',
];
