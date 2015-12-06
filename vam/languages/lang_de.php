<?php
	// NavBar options
	define ('ABOUT' , 'Über uns ');
	define ('PILOTS' , 'Pilotenliste');
	define ('FLEET' , 'Flotte');
	define ('ROUTES' , 'Ruten');
	define ('STAFF' , 'Staff');
	define ('RULES' , 'Regeln');
	define ('SCHOOL' , 'Schule');
	define ('REGISTER' , 'Registrierung');
	define ('FORUM' , 'Forum');
	define ('LANGUAGES' , 'Sprache');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français');
	define ('LANGUAGE_DE' , 'Deutsch');

	// NavBar options user logged
	define ('MENU' , 'Piloten Menü');
	define ('STATS' , 'Statistiken');
	define ('ADMIN' , 'Administration');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Pilotenliste');
	define ('CALLSIGN' , 'Rufzeichen');
	define ('NAME' , 'Name');
	define ('HUB' , 'Hub');
	define ('LOCATION' , 'Standort');
	define ('HOURS' , 'Stunden');
	define ('RANK' , 'Rang');
	define ('COUNTRY' , 'Land');
	define ('STATUS' , 'Status');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');

	// Fleet list
	define ('FLEET_VA' , 'FLOTTE');
	define ('FLEET_VA_LOC' , 'FLOTTE AT ');
	define ('FLEET_VA_TYPE' , 'FLOTTE TYP ');
	define ('REGISTRY' , 'Kennzeichen');
	define ('TYPE' , 'Typ');
	define ('LOCATION_PLANE' , 'Standort');
	define ('STATUS_PLANE' , 'Status');
	define ('HOURS_PLANE' , 'Stunden');
	define ('NAME_PLANE' , 'Name');
	define ('BOOKED_PLANE' , 'Gebucht');
	define ('PLANE_FREE' , 'Frei');
	define ('PLANE_MAINTENANCE' , 'In Wartung');
	define ('PLANE_BOOKED' , 'Gebucht');
	define ('INFO_PLANE' , 'Info');

	// Routes list
	define ('ROUTES_VA' , 'Ruten');
	define ('FLIGHT_VA' , 'Flug');
	define ('DEPARTURE' , 'Abflug');
	define ('ARRIVAL' , 'Ankunft');
	define ('DEPARTURE_TIME' , 'Abflug Zeit');
	define ('ARRIVAL_TIME' , 'Ankunft Zeit');
	define ('ROUTE_PLANE' , 'Flugzeug Typ');

	// Pilot Register form
	define ('REGISTER_FORM' , 'REGISTRIERUNG');
	define ('PILOT_NAME_REG_FORM' , 'Vorname:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Nachname:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Geburtsdatum:');
	define ('PILOT_IVAOID_REG_FORM' , 'IVAO ID:');
	define ('PILOT_VATSIMID_REG_FORM' , 'VATSIM ID:');
	define ('PILOT_COUNTRY_REG_FORM' , 'Land:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Sprache:');
	define ('PILOT_CITY_REG_FORM' , 'Stadt:');
	define ('PILOT_HUB_REG_FORM' , 'Hub:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Passwort:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Passwort betätigen:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Kommentare:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Registrierung');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Vorname eingeben');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Nachname eingeben');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Geburtsdatum eingeben');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'IVAO ID eingeben');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'VATSIM ID eingeben');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Stadt eingeben');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Email eingeben');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Passwort eingeben');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Kommentar eingeben');
	define ('READ_RULES' , 'Ich haben die VA Regeln gelesen und mit diese Regeln einverstanden');

	// Pilot Register Succesfull Page (index.php?page=pilot_insert)
	define ('REGISTER_SUCCESSFUL' , 'Die Registrierung war erfolgreich');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Wir haben Ihre Registrierung erhalten und werden diese in maximal 24 Stunden bearbeiten!
Sie werden eine neue Email erhalten wenn wir Ihre Registrierung bearbeitet haben. (Wir bitten Sie, admin@virtualairlinesmanager.net als sichere Emailadresse zu listen - wenn Sie keine neue Email erhalten, bitten wir Sie in Ihren Spam folder nachzusehen)');
	define ('REGISTER_CAPTCHA_MSG' , 'Captcha unrichtig, nochmal versuchen');
	define ('REGISTER_WRONG' , 'Die Registrierung war nicht erfolgreich');
	define ('REGISTER_WRONG_MSG' , 'Ein Pilot ist mit dieser email schon registriert');
	define ('REGISTER_CLOSED_MSG' , 'Wir haben zur Zeit leider keine freie Pilotenstelle.');

	// Password Recover
	define ('FORGOT_PASSWORD' , 'PASSWORT VERGESSEN');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Rufzeichen:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Rufzeichen eingeben');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Email eingeben');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Reset Passwort');
	define ('PASSWORD_RESET_WRONG' , 'Reset Passwort');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Inkorrekte Email oder Passwort');
	define ('PASSWORD_RESET_OK' , 'Reset Passwort');
	define ('PASSWORD_RESET_OK_MSG' , 'Ihr neues Passwort wurde per Email gesendet.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'WILLKOMMEN BEI ');
	define ('FLIGHT_NETWORKS' , 'ONLINE NETZWERK');
	define ('TWEETS' , 'TWEETS');

	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'LETZTE FLÜGE');
	define ('LF_CALLSIG' , 'Rufzeichen');
	define ('LF_PILOT' , 'Pilot');
	define ('LF_DEPARTURE' , 'Abflug');
	define ('LF_ARRIVAL' , 'Ankunft');
	define ('LF_FLIGHTDATE' , 'Datum');
	define ('LF_FLIGHTTIME' , 'Flugdauer');

	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'STATISTIKEN');
	define ('ST_NUMPILOTS' , 'Piloten');
	define ('ST_NUMPLANES' , 'Flugzeuge');
	define ('ST_NUMROUTES' , 'Ruten');
	define ('ST_NUMFLIGHTS' , 'Flüge Total');
	define ('ST_NUMCHARTER' , 'Charter Flüge');
	define ('ST_NUMREGULAR' , 'Linien Flüge');
	define ('ST_PERREGULAR' , '% Linien Flüge');

	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NEUE PILOTEN');
	define ('NEWPILOT' , 'Pilot');
	define ('NEWJOINED' , 'Datum');


	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Datum');

	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'AUFKOMMENDE EVENTS');
	define ('EVENT_NAME' , 'Event');
	define ('EVENT_DATE' , 'Datum');


	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'NOTAM Name');
	define ('NOTAM_CREATE_DATE' , 'NOTAM Erstellungs Datum');
	define ('NOTAM_PUBLISH_DATE' , 'NOTAM Erscheinungs Datum');
	define ('NOTAM_TEXT' , 'NOTAM Text');

	// EVENT table
	define ('EVENT' , 'EVENT');
	define ('EVENT_NAME_PANEL' , 'Event Name');
	define ('EVENT_CREATE_DATE' , 'Event Erstellungs Datum');
	define ('EVENT_PUBLISH_DATE' , 'Event Erscheinungs Datum');
	define ('EVENT_TEXT' , 'Event Text');


	// Pilot page
	define ('PILOT_PROFILE' , 'PROFIL');
	define ('PILOT_STATICS' , 'PERSÖHNLICHE STATISTIK');
	define ('PILOT_CERTIFICATIONS' , 'PILOT TYPE RATINGS');
	define ('PILOT_NAME' , 'Name:');
	define ('PILOT_CALLSIGN' , 'Rufzeichen:');
	define ('PILOT_COUNTRY' , 'Land:');
	define ('PILOT_CITY' , 'Stadt:');
	define ('PILOT_HUB' , 'Hub:');
	define ('PILOT_LOCATION' , 'Standort:');
	define ('PILOT_RANK' , 'Rang:');
	define ('PILOT_SALARY' , 'Stundenlohn:');
	define ('PILOT_MONEY' , 'Geld:');
	define ('PILOT_REGISTERDATE' , 'Registrierungs Datum:');
	define ('PILOT_FLIGHTS' , 'Flüge Total:');
	define ('PILOT_HOURS' , 'Stunden Total:');
	define ('PILOT_FLIGHTSREGULAR' , 'Linien Flüge:');
	define ('PILOT_FLIGHTSCHARTER' , 'Charter Flüge:');
	define ('PILOT_DISTANCE' , 'Distanz:');
	define ('PILOT_PERFLIGHTREGULAR' , '% Linien Flüge:');
	define ('PILOT_MANUALREPORT' , 'Manuelle Reports:');
	define ('PILOT_FSKEEPERREPORT' , 'FS Keeper Reports:');
	define ('PILOT_FSACARSREPORT' , 'FS Acars Reports:');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars Reports:');
	define ('PILOT_FLIGTH_MAP' , 'KARTE LETZTE 10 FLÜGE');
	define ('PILOT_FLIGTHS' , 'FLÜGE');
	define ('PILOT_FLIGTHS_DEP' , 'Abflug');
	define ('PILOT_FLIGTHS_ARR' , 'Ankunft');
	define ('PILOT_FLIGTHS_DATE' , 'Datum');
	define ('PILOT_FLIGTHS_DUR' , 'Flugdauer');
	define ('PILOT_FLIGTHS_DIST' , 'Distanz');
	define ('PILOT_FLIGTHS_TYPE' , 'Typ');
	define ('PILOT_FLIGTHS_VALI' , 'Validierung');
	define ('PILOT_FLIGTHS_DETAILS' , 'Details');

	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'FLIGHT TRACK');
	define ('FSACARS_PARAMETER' , 'Parameter');
	define ('FSACARS_VALUE' , 'Value');
	define ('FSACARS_DEPARTURE' , 'Abflug:');
	define ('FSACARS_ARRIVAL' , 'Ankunft:');
	define ('FSACARS_FLIGHTYPE' , 'Flug typ:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charter');
	define ('FSACARS_FLIGHT_REGULAR' , 'Linie');
	define ('FSACARS_STATUS_VALIDATED' , 'Akzeptiert');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Anstehende Validierung');
	define ('FSACARS_STATUS_REJECTED' , 'Nicht akzeptiert');
	define ('FSACARS_STATUS' , 'Status:');
	define ('FSACARS_DATE' , 'Date:');
	define ('FSACARS_DURATION' , 'Flugdauer:');
	define ('FSACARS_PLANETYPE' , 'Flugzeugtyp:');
	define ('FSACARS_FUEL' , 'Kraftstoff:');
	define ('FSACARS_DISTANCE' , 'Distanz:');
	define ('FSACARS_TOUCHDOWN' , 'Landung:');
	define ('FSACARS_LOG' , 'Log:');

	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'FLUG TRACK');
	define ('FSKEEPER_PILOT' , 'Pilot:');
	define ('FSKEEPER_AIRCRAFT' , 'Flugzeug:');
	define ('FSKEEPER_DISTANCE' , 'Distanz:');
	define ('FSKEEPER_DEPARTURE' , 'Abflug:');
	define ('FSKEEPER_ARRIVAL' , 'Ankunft:');
	define ('FSKEEPER_TIME' , 'Zeit:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Abflug Bahn:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Abflug TA:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Ankunft Bahn:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Anknuft TA:');
	define ('FSKEEPER_ZFW' , 'ZFW:');
	define ('FSKEEPER_BFUEL' , 'Block Kraftstoff:');
	define ('FSKEEPER_FFUEL' , 'Flug Kraftstoff:');
	define ('FSKEEPER_VALIDATED' , 'Akzeptiert:');
	define ('FSKEEPER_TYPE' , 'Typ:');
	define ('FSKEEPER_REGISTRY' , 'Flugzeug Kennzeichen:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Linie');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Validiert');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Anstehende Validierung');
	define ('FSKEEPER_STATUS_REJECTED' , 'Nicht akzeptiert');
	define ('FSKEEPER_PASSENGERS' , 'Fluggäste:');
	define ('FSKEEPER_CARGO' , 'Fracht:');
	define ('FSKEEPER_ALTERNATE' , 'Ausweich Flughafen:');
	define ('FSKEEPER_LANDVS' , 'Landung VS:');
	define ('FSKEEPER_LANDIAS' , 'Landung IAS:');
	define ('FSKEEPER_SCORE' , 'Flug Score:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'LANDUNG ANALYSE');
	define ('FSKEEPER_ROUTE' , 'FLUGSTRECKE');
	define ('FSKEEPER_CRITIQUE' , 'FSKEEPER KRITICK');
	define ('FSKEEPER_MAPS' , 'KARTE');

	// Pilot options
	define ('PILOT_ACTIONS' , 'AKTIONEN');
	define ('OPTION_MAIL' , 'Interne Email');
	define ('OPTION_ROUTE_RESERVE' , 'Rute Buchen');
	define ('OPTION_CHANGE_LOCATION' , 'Standort wechseln');
	define ('OPTION_BANK' , 'Mein Bankkonto');
	define ('OPTION_MANUAL_PIREP' , 'Manuelle Pireps');
	define ('OPTION_PROFILE' , 'Profil ändern');
	define ('OPTION_STATS' , 'Meine Statistik');
	define ('OPTION_VA_PARAMETER' , 'VA Parameters');
	define ('OPTION_DOWNLOADS' , 'Downloads');

	// VA Parameters
	define ('VA_PARAMETERS' , 'VA PARAMETER');
	define ('PARAMETER' , 'Parameter');
	define ('VALUE' , 'Value');
	define ('COST_SHORT_JUMP' , 'Kosten Standort wechsel Kurz:');
	define ('COST_MEDIUM_JUMP' , 'Kosten Standort wechsel Mittel:');
	define ('COST_LONG_JUMP' , 'Kosten Standort wechsel Lang');
	define ('PLANE_STATUS_MAINTENANCE' , 'Flugzeug in Wartung bei %');
	define ('LANDING_RATE_CRASH' , 'Landung VS = Crash');
	define ('STATUS_LOST_1' , 'Flugzeug status verlust bein Landungsrate 0 ft/min and -');
	define ('STATUS_LOST_2' , 'Flugzeug status verlust bein Landungsrate -');
	define ('AND_STRING' , ' aund -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Flugzeug abnutzung pro Flug:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Dauer der Flugzeug Wartung:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Dauer der Flugzeug Reparatur nach Crash:');
	define ('PENALTY_IN_CRASH' , 'Strafe nach Crash Landung:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Stundenlohn:');
	define ('SALARY_REDUCTION_CHARTER' , 'Charterflüge abzug');
	define ('DAYS' , ' Tage');

	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'Finanzielle Transaktionen');
	define ('BANK_DATE' , 'Datum');
	define ('BANK_AMOUNT' , 'Betrag');
	define ('BANK_REASON' , 'Standortwechsel / Flug');
	define ('BANK_TOTAL_MONEY' , 'Gesamtbetrag: ');


	// Book a route
	define ('AVAILABLE_ROUTES' , 'VERFÜGBARE RUTEN');
	define ('ROUTES_BOOKED' , 'GEBUCHTES FLUGZEUG UND RUTE');
	define ('AVAILABLE_AIRCRAFT' , 'VERFÜGBARE FLUGZEUGE');
	define ('BOOK_ROUTE_FLIGHT' , 'Flug');
	define ('BOOK_ROUTE_DEPARTURE' , 'Abflug');
	define ('BOOK_ROUTE_ARRIVAL' , 'Ankunft');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Ausweich Flughafen');
	define ('BOOK_ROUTE_TIME_DEP' , 'Uhrzeit Abflug');
	define ('BOOK_ROUTE_TIME_ARR' , 'Uhrzeit Ankunft');
	define ('BOOK_ROUTE_INFORMATION' , 'Information');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Flugzeug Typ');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Flugzeug Kennzeichen');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Flugzeug Status');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Flugzeug gebucht');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Flugzeug gebucht');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Buchung canceln');
	define ('BOOK_ROUTE_CANCEL' , ' Cancel');
	define ('BOOK_ROUTE_CONFIRM' , 'Korrekt gebucht. Die Reservierung wir automitisch in 24 Stunden gelöcht.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'KONFIRMATION');

	// Change Location
	define ('LOCATION_CHANGE' , 'STANDORTSWECHSEL');
	define ('LOCATION_CHANGE_LOCATION' , 'Standort:');
	define ('LOCATION_CHANGE_BTN' , 'Wechsel');

	// Manual Pirep
	define ('MANUAL_PIREP' , 'MANUELLES PIREP');
	define ('MANUAL_PIREP_DATE' , 'Datum:');
	define ('MANUAL_PIREP_DATE_PH' , 'Datum eingeben');
	define ('MANUAL_PIREP_DEP' , 'Abflug:');
	define ('MANUAL_PIREP_DEP_PH' , 'Abflug eingeben');
	define ('MANUAL_PIREP_ARR' , 'Ankunft:');
	define ('MANUAL_PIREP_ARR_PH' , 'Ankunft eingeben');
	define ('MANUAL_PIREP_TIME' , 'Flugdauer:');
	define ('MANUAL_PIREP_TIME_PH' , 'Flugdauer eingeben');
	define ('MANUAL_PIREP_DISTANCE' , 'Distanz:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Distanz eingeben');
	define ('MANUAL_PIREP_FUEL' , 'Treibstoff:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Treibstoff eingebenl');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Flugzeug:');
	define ('MANUAL_PIREP_COMMENT' , 'Kommentar:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Kommentare eingeben');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Flug Typ:');
	define ('MANUAL_PIREP_REG' , 'Linienflug');
	define ('MANUAL_PIREP_CHARTER' , 'Charterflug');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Senden');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Editieren');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Löschen');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Senden');

	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'GEFLOGEN FLÜGE FLUGZEUG ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Datum');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Pilot');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Kennzeichen');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Flugnummer');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Abflug');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Ankunft');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distanz');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Treibstoff');

	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'STANDORTWECHSEL');
	define ('CHANGE_LOCATION_ICAO' , 'Flughafen (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Wechseln');

	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MEIN PROFIL');
	define ('MY_PROFILE_UPDATE_BTN' , 'Aktualisieren');
	define ('MY_PROFILE_UPDATED' , 'Ihr Profil wurde aktualisiert ');


	// INTERNAL MAIL mails.php
	define ('MAILS' , 'INTERNE EMAIL');
	define ('MAILS_NEW' , 'NEUE EMAIL');
	define ('MAILS_REPLY' , 'EMAIL BEANTWORTEN');
	define ('MAILS_DATE' , 'Datum');
	define ('MAILS_FROM' , 'Von');
	define ('MAILS_SUBJECT' , 'Betreff');
	define ('MAILS_SUBJECT_PH' , 'Betreff eingeben');
	define ('MAILS_ACTIONS' , 'Aktionen');
	define ('MAILS_NEW_MESSAGE_LNK' , ' New Email');
	define ('MAILS_NEW_TO' , 'An');
	define ('MAILS_MESSAGE' , 'Nachricht');
	define ('MAILS_MESSAGE_PH' , 'Nachricht eingeben');
	define ('MAILS_SEND_BTN' , 'Senden');

	// STATISTICS
	define ('STATISTICS' , 'STATISTIK');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , '% CHARTER- / LINIENFLÜGE');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , '% REPORT TYP');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , '% FLUGZEUG TYP');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'FLÜGE PRO TAG DIESEN MONAT');
	define ('STATISTICS_TOP5_HOUR' , 'TOP 5 PILOTEN STUNDEN');
	define ('STATISTICS_TOP5_FLIGTH' , 'TOP 5 PILOTEN FLÜGE');
	define ('STATISTICS_TOP5_LANDING' , 'TOP 5 LANDUNGEN');
	define ('STATISTICS_TOP5_ROUTES' , 'TOP 5 RUTEN');
	define ('STATISTICS_CALLSIGN' , 'Rufzeichen');
	define ('STATISTICS_PILOT' , 'Pilot');
	define ('STATISTICS_HOURS' , 'Stunden');
	define ('STATISTICS_FLIGHTS' , 'Flüge');
	define ('STATISTICS_TOUCH' , 'Landung (ft/min)');
	define ('STATISTICS_ROUTE' , 'Rute');

	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manuell');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Linienflug');
	define ('INDEX_PILOT_CHARTER' , 'Charterflug');
	define ('INDEX_PILOT_COMMENT' , 'Kommentare');

	// User not recognized
	define ('INDEX_NO_USER' , 'Kein Zugang. User oder Password falsch');


	// Administration options
	define ('ADM_PARA' , 'VA bearbeiten');
	define ('ADM_HUB_MGR' , 'Hubs bearbeiten');
	define ('ADM_FLEET_TYPE_MGR' , 'Flugzeug typ bearbeiten');
	define ('ADM_FLEET_MGR' , 'Flotte bearbeiten');
	define ('ADM_PILOT_RANK_MGR' , 'Rang bearbeiten');
	define ('ADM_PILOT_MGR' , 'Piloten bearbeiten');
	define ('ADM_ROUTE_MGR' , 'Ruten bearbeiten');
	define ('ADM_ROUTE_FLEET_MGR' , 'Rute/Flugzeug bearbeiten');
	define ('ADM_USER_TYPE_MGR' , 'User bearbeiten');
	define ('ADM_JUMP_MGR' , 'Standortwechsel validator');
	define ('ADM_FLIGHT_MGR' , 'Flüge validieren');
	define ('ADM_NOTAM_MGR' , 'Notams bearbeiten');
	define ('ADM_EVENT_MGR' , 'Events bearbeiten');
	define ('ADM_EMAIL_MGR' , 'Emails bearbeiten');
	define ('ADM_LANGUAGES_MGR' , 'Sprache bearbeiten');
	define ('ADM_ACARS_MGR' , 'ACARS Parameter');
	define ('ADM_NEW_MODULE_MGR' , 'Neues modul');


	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'FLÜGE VALIDIEREN');
	define ('VALIDATE_CALLSIGN' , 'Rufzeichen');
	define ('VALIDATE_DEPARTURE' , 'Abflug');
	define ('VALIDATE_ARRIVAL' , 'Ankunft');
	define ('VALIDATE_DATE' , 'Datum');
	define ('VALIDATE_DURATION' , 'Flugdauer');
	define ('VALIDATE_DISTANCE' , 'Distanz');
	define ('VALIDATE_TYPE' , 'Typ');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Linienflug');
	define ('VALIDATE_CHARTER' , 'Charterflug');
	define ('VALIDATE_ACTION' , 'Aktionen');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Linienflug  ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Charterflug  ');

	// Validate jumps
	define ('VALIDATE_JUMPS' , 'STANDORTSWECHSEL VALIDIEREN');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Rufzeichen');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Abflug');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Ankunft');
	define ('VALIDATE_JUMP_DATE' , 'Datum');
	define ('VALIDATE_JUMP_JUMP1' , 'Standortswechsel Kurz');
	define ('VALIDATE_JUMP_JUMP2' , 'Standortswechsel Mittel');
	define ('VALIDATE_JUMP_JUMP3' , 'Standortswechsel Lang');
	define ('VALIDATE_JUMP' , 'Standortswechsel ');


	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'SIMACARS REPORT');
	define ('VAMACARS_FLITGH_DETAILS' , 'FLUG DETAILS');
	define ('VAMACARS_LANDANALYSIS' , 'LANDUNG ANALYSIS');
	define ('VAMACARS_ROUTE' , 'RUTE');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DETAILS');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validation');
	define ('VAMACARS_STATUS_VALIDATED' , 'Validated');
	define ('VAMACARS_STATUS_REJECTED' , 'Rejected');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Pending Validation');
	define ('VAMACARS_TYPE' , 'Type');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Registry');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Block Fuel');
	define ('VAMACARS_FFUEL' , 'Flight Fuel');
	define ('VAMACARS_PASSENGERS' , 'Passengers');
	define ('VAMACARS_CARGO' , 'Cargo');
	define ('VAMACARS_ALTERNATE1' , 'Alternate');
	define ('VAMACARS_WEIGHTUNIT' , 'Weight Unit');
	define ('VAMACARS_DATE' , 'DATE');
	define ('VAMACARS_DEPARTURE' , 'Departure');
	define ('VAMACARS_ARRIVAL' , 'Arrival');
	define ('VAMACARS_DURATION' , 'Duration');
	define ('VAMACARS_DISTANCE' , 'DISTANCE');
	define ('VAMACARS_DEP_TIME' , 'Departure Time');
	define ('VAMACARS_CRUISE_SPEED' , 'Cruise Speed');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Flight Level');
	define ('VAMACARS_FLIGHT_TYPE' , 'Flight Type');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Aircraft Type');
	define ('VAMACARS_COMMENTS' , 'Pilot Comments');
	define ('VAMACARS_NETWORK' , 'Network');
	define ('VAMACARS_DATEDETAIL' , 'Date');
	define ('VAMACARS_FUELCONSUMED' , 'FUEL CONSUMED');
	define ('VAMACARS_LANDING_PITCH' , 'Landing Pitch');
	define ('VAMACARS_LANDING_BANK' , 'Landing Bank');
	define ('VAMACARS_LANDING_FLAPS' , 'Landing Flaps');
	define ('VAMACARS_LANDING_FORCEG' , 'Landing Force G');
	define ('VAMACARS_LANDING_NAV' , 'Navigation Lights');
	define ('VAMACARS_LANDING_LDG' , 'Landing Lights');
	define ('VAMACARS_LANDING_STR' , 'Strobe Lights');
	define ('VAMACARS_LANDING_BEA' , 'Beacon Lights');
	define ('VAMACARS_IAS' , 'IAS');
	define ('VAMACARS_GS' , 'GS');
	define ('VAMACARS_ALTITUDE' , 'ALTITUDE');
	define ('VAMACARS_FUEL_USED' , 'FUEL CONSUMED');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'FLIGHT STATUS');
	define ('VAMACARS_VAM_MAP' , 'FLIGHT MAP');
	define ('VAMACARS_EVENTS' , 'EVENT');
	define ('VAMACARS_MAIN_EVENTS' , 'MAIN EVENTS');
	define ('VAMACARS_ACARS_DATA' , 'ACARS DATA');
	define ('VAMACARS_HEADING' , 'HEADING');
	define ('VAMACARS_FLIGHT_STATUS' , 'FLIGHT STATUS');
	define ('VAMACARS_CRITICAL_EVENTS' , 'CRITICAL EVENTS');
	define ('VAMACARS_VAM_CHART' , 'ALTITUDE CHART');
	
	// Downloads
	define ('DOWNLOADS' , 'DOWNLOADS');
	define ('DOWNLOAD_NAME' , 'NAME');
	define ('DOWNLOAD_LINK' , 'LINK');

	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'VALIDATION COMMENTS');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMMENT');
	define ('VAMACARS_FLIGHT_RATING' , 'Flight Rating');
	define ('VAMACARS_CRASH' , 'Crashed');
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Validator Comments');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Add comment');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Acept');
	define ('VAMACARS_VALIDATION_REJECT' , 'Reject');	
	define ('VAMACARS_NO' , 'No');
	define ('VAMACARS_YES' , 'Yes');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Fail');	
	define ('VAMACARS_FLIGHTFAILURES' , 'FLIGHT FAILURES');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Beacon off & Engine Running');
	define ('VAMACARS_IAS1000' , 'KIAS Above 250  below 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Lights OFF below 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Lights ON above 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Overspeed');
	define ('VAMACARS_PAUSE' , 'Flight paused');
	define ('VAMACARS_REFUEL' , 'Refueling');
	define ('VAMACARS_SLEW' , 'Slew detected');
	define ('VAMACARS_TAXILIGHTS' , 'Taxi & Taxi lights off');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Take off & lights off');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Landing & lights off');
	define ('VAMACARS_NOTARRIVED' , 'Landed in not planned airport');
	define ('VAMACARS_NUMFAILURES' , 'Number failures');
	define ('VAMACARS_TAXISPEED' , 'Taxi Speed');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'VALIDATOR COMMENTS & FLIGHT RATING');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Validator comments:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validation:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Validation date:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Validated');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'Pending Validation');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rejected');

	// VAM 2.4 BEGIN
	define ('AIRPORT_AIRPORT_METAR' , 'METAR AND TAF INFORMATION');
	define ('AIRPORT_AIRPORT_MAP' , 'FLUGHAFENKARTE');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'AIRPORT FREQUENCIES');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'AIRPORT NEAR NAVIGATION AIDS');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Type');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Name');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Frequency');
	define ('AIRPORT_RUNWAY_INFO' , 'RUNWAY INFORMATION');
	define ('AIRPORT_RUNWAY' , 'Runway');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Runway length');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Runway width');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Runway elevation');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Runway displaced threshold');
	define ('AIRPORT_RUNWAY_HEADING' , 'Runway heading');
	define ('BOOK_ROUTE_INFO' , 'RUTE INFORMATION');
	define ('BOOK_ROUTE_DURATION' , 'Flugdauer');
	define ('BOOK_ROUTE_ROUTE' , 'Rute');
	define ('BOOK_ROUTE_PRICE' , 'Flugpreis');
	define ('BOOK_ROUTE_COMMENTS' , 'Kommentare');
	define ('ROUTES_VA_SEARCHER', 'Rute suchen');
	define ('VAMACARS_VALIDATION_DELETE','Flug Löschen');
	define ('PILOT_RECEIVE_EMAILS','Wollen Sie Emails erhalten?');

	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'FLUGZEUG DATEN');
	define ('AIRCRAFT_DETAILS_PAX' , 'Passagieranzahl');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Maximale Distanz');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Maximale Fracht');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Flugzeug Länge');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Maximale Geschwingkeit');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Maximale Flughöhe');
	define ('AIRCRAFT_DETAILS_CREW' , 'Crew anzahl');
	define ('HUB_DETAILS' , 'HUB DETAILS');
	define ('HUB_PILOTS' , 'HUB PILOTEN');
	define ('HUB_FLEET' , 'HUB FLOTTE');
	define ('HUB_ROUTES' , 'HUB RUTEN');
	define ('HUB_MAP_LOCATION' , 'KARTE RUTEN');
	define ('HUB_NAME' , 'Name');
	define ('HUB_WEB' , 'Webseite');
	define ('HUB_NUM_PILOTS' , 'Anzahl der Piloten');
	define ('HUB_NUM_FLEET' , 'Anzahl der Flugzeuge');
	define ('HUB_NUM_ROUTES' , 'Anzahl der Ruten');
	define ('ADM_TOUR_MODULE_MGR' , 'Tour Bearbeiten');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Finanzen bearbeiten');
	define ('OPERATIONS' , 'Operations');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Tours');
	define ('PILOT_RANKS' , 'Piloten Ränge');
	define ('AWARDS' , 'Auszeichnungen');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'AKTIVE TOURS');
	define ('TOURS_INACTIVE' , 'INAKTIVE TOURS');
	define ('TOUR_DETAILS' , 'TOUR DETAILS');
	define ('TOUR_LEGS' , 'TOUR LEGS');
	define ('TOURS_STATUS' , 'Status');
	define ('TOURS_AWARD' , 'Auszeichnung');
	define ('TOURS_IMAGE' , 'Bild');
	define ('TOURS_NUM_LEGS' , 'Num. Legs');
	define ('TOURS_LEG_STATUS' , 'Legs Status');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Num. Legs Accepted');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Num. Legs Reported');
	define ('TOURS_LEGS_REPORT' , 'Leg reporten');
	define ('TOURS_DISTANCE' , 'Distanz');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Start Datum');
	define ('TOURS_END_DATE' , 'End Datum');
	define ('TOURS_ROUTE_INFO' , 'Rute & Kommentare');
	define ('TOURS_ROUTE' , 'Rute');
	define ('TOURS_COMMENTS' , 'Kommentare');
	define ('TOURS_LEG_REPORT' , 'Leg Reporten');
	define ('TOURS_VALIDATION' , 'TOURS LEGS VALIDIEREN');
	define ('TOURS_LEG' , 'Leg');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Piloten Foto Uploader');
	define ('PILOT_AWARDS' , 'PILOTEN AUSZEICHNUNGEN');
	define ('PILOT_TOURS' , 'PILOTEN TOURS');
	define ('ADM_AWARDS_MGR' , 'Auszeichnungen bearbeiten');
	define ('ADM_AWARDS_PILOR_MGR' , 'Auszeichnung vergeben');
	define ('VAMACARS_LANDINGQNH' , 'Wrong altimeter in Landing');
	define ('VAMACARS_TAKEOFFQNH' , 'Wrong altimeter in Take off');
	define ('LAND_WIND' , 'Landing wind');
	define ('LAND_HDG' , 'Landing heading');
	define ('OPTION_TOUR' , 'Reoport Tour Leg');
	define ('AWARDS_PANEL' , 'AUSZEICHNUNGEN');
	define ('AWARD_NAME' , 'Auszeichnung Name');
	define ('AWARD_IMG' , 'Auszeichnung Bild');
	define ('RANK_PANEL' , 'RÄNGE');
	define ('RANK_IMAGE' , 'Rang Bild');
	define ('RANK_MIN_HOURS' , 'Rang Minimum Stunden');
	define ('RANK_MAX_HOURS' , 'Rang Maximum Stunden');
	// NEW STATS
	define ('ST_MONTH' , 'Monat');
	define ('ST_YEAR' , 'Jahr');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'STUNDEN PRO JAHR UND MONAT');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'FLÜGE PRO JAHR UND MONAT');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 FLÜGE PRO FLUGZEUG TYPE');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 FLÜGE PRO FLUGZEUG');	
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'FLIGHT FINANZBERICHT');
	define ('VA_GLOBAL_FINANCES' , 'VA GLOBAL FINANZBERICHT');
	define ('COSTS' , 'KOSTEN');
	define ('INCOME' , 'EINKOMMEN');
	define ('INCOME_REGULAR_ROUTES' , 'GEWINN- UND VERLUSTLINIENVERKEHR');
	define ('AIRCRAFT_PURCHASE' , 'KAUF VON FLUGZEUGEN');
	define ('FINANCE_BALANCE' , 'FINANZIELLE GLEICHGEWICHT');
	define ('GLOBAL_FINANCES' , 'Global Finanzbericht');
	define ('COSTS_PILOTS_SALARY' , 'KOSTEN PILOTEN GEHALT');
	define ('COSTS_AIRCRAFT_REPAIR' , 'COSTS AIRCRAFT REPAIR');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'COSTS AIRCRAFT MAINTENANCE');	
	// LIVE MAP	
	define ('FLIGHT_STAGE' , 'Flugphase');
	define ('PERC_DONE' , '% Fertiggestellt');
	define ('PENDING_NM' , 'In Erwartung NM');
	
?>