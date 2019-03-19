<?php
/**
 * Kit-Catalogue Default Language File.
 *
 * Future updates to Kit-Catalogue may overwrite this config file.
 *
 * Do not edit the settings in here, instead edit and override the settings in local/local_language.php
 *
 * To control the top-menu text, override the 'menu.<?>.label' settings in your local configuration file.
 */

//app title
$lang['title'] = 'Forschungsgerätekataster';
$lang['home.app.title'] = 'Forschungsgerätekataster';
$lang['home.app.intro'] = 'Das Forschungsgeräteverzeichnis für die TU Braunschweig.';

/*
 * Access Levels
 */

$lang['access.label'] = 'Zugang';
$lang['access.label.plural'] = 'Zugang';



/*
 * Building
 */

$lang['building.label'] = 'Gebäude';
$lang['building.label.plural'] = 'Gebäude';



/*
 * Category
 */

// The route MUST be a single, lowercase word suitable for inclusion in a URL
// The route MUST NOT clash with the name of another entity in kit-catalogue, such as 'category' or 'item'.
// The route MUST contain only alphanumeric characters, i.e. Only a-z or 0-9.
// For example, you could use "category" (the default) or "theme".
$lang['cat.route'] = 'category';

$lang['cat.label'] = 'Kategorie';
$lang['cat.label.plural'] = 'Kategorien';



/*
 * Department
 */

// The route MUST be a single, lowercase word suitable for inclusion in a URL
// The route MUST NOT clash with the name of another entity in kit-catalogue, such as 'category' or 'item'.
// The route MUST contain only alphanumeric characters, i.e. Only a-z or 0-9.
// For example, you could use "department" (the default) or "school".
$lang['dept.route'] = 'department';

$lang['dept.label'] = 'Organisationseinheit';
$lang['dept.label.plural'] = 'Organisationseinheiten';



/*
 * Facility
 */

$lang['facility.label'] = 'Facility';
$lang['facility.label.plural'] = 'Facilities';

//item title
$lang['item.browse.title'] = 'Geräte durchsuchen';


/*
 * Item Form Fields (as used in the item editor)
 * Some fields use the labels defined elsewhere, e.g. 'cat.label' or 'dept.label'.
 */

$lang['item.formsection.main'] = 'Hauptmerkmale';
$lang['item.formsection.description'] = 'Beschreibung';
$lang['item.formsection.parent'] = 'Übergeordnete Einrichtung';
$lang['item.formsection.categorisation'] = 'Kategorisierung';
$lang['item.formsection.access'] = 'Zugang und Nutzung';
$lang['item.formsection.contact'] = 'Kontaktinformationen';
$lang['item.formsection.editors'] = 'Bearbeiter';
$lang['item.formsection.location'] = 'Standort';
$lang['item.formsection.asset'] = 'Anlageinformationen';
$lang['item.formsection.custom'] = 'Zusätzliche Felder';
$lang['item.formsection.resources'] = 'Ressourcen';

//additional vocabulary
$lang['item.formsection.additional'] = 'Zusätzliche Felder';
$lang['item.formsection.custodian'] = '';


$lang['item.form.title'] = 'Titel';
$lang['item.form.manufacturer'] = 'Hersteller';
$lang['item.form.model'] = 'Modell';
$lang['item.form.short_description'] = 'Kurzbeschreibung';
$lang['item.form.full_description'] = 'Beschreibung';
$lang['item.form.specification'] = 'Spezifikation';

$lang['item.form.upgrades'] = 'Volltext';
$lang['item.form.future_upgrades'] = 'Future Upgrades';

$lang['item.form.manufacturer_website'] = 'Seite des Herstellers';
$lang['item.form.technique'] = 'Technik';
$lang['item.form.keywords'] = 'Keywords';
$lang['item.form.acronym'] = 'Akronym';

$lang['item.form.is_parent'] = "Dieses Objekt als Standort darstellen";
$lang['item.form.selectparent'] = 'Dieses Objekt mit Organisationseinheiten assoziieren';
$lang['item.form.showchildren'] = 'Assoziierte Objekte';

$lang['item.form.visibility'] = 'Sichtbarkeit';
$lang['item.form.usergroup'] = 'Nutzergruppe';
$lang['item.form.availability'] = 'Verfügbarkeit';
$lang['item.form.restrictions'] = 'Einschränkungen';

$lang['item.form.portability'] = 'Tragbarkeit';

$lang['item.form.trainingrequired'] = 'Schulung erforderlich';
$lang['item.form.trainingprovided'] = 'Schulung wird angeboten';

$lang['item.form.calibrated'] = 'Kalibriert';
$lang['item.form.last_calibration_date'] = 'Zuletzt kalibriert am ';
$lang['item.form.next_calibration_date'] = 'Nächste Kalibrierung am ';

$lang['item.form.quantity'] = 'Anzahl';
$lang['item.form.quantity_detail'] = 'Details zur Anzahl';

$lang['item.form.contact'] = 'Kontaktdaten';   // Used as a generic label for contact information

$lang['item.form.contact_1'] = 'Erster Kontakt';
$lang['item.form.contact_1_name'] = 'Name des ersten Kontakts';
$lang['item.form.contact_1_email'] = 'E-Mail-Adresse des ersten Kontakts';
$lang['item.form.contact_2'] = 'Zweiter Kontakt';
$lang['item.form.contact_2_name'] = 'Name des zweiten Kontakts';
$lang['item.form.contact_2_email'] = 'E-Mail-Adresse des zweiten Kontakts';


$lang['item.form.image'] = 'Bild';

$lang['item.form.room'] = 'Raum';


$lang['item.form.asset_no'] = 'Anlagennummer';
$lang['item.form.finance_id'] = 'Ordernummer';
$lang['item.form.serial_no'] = 'Seriennummer';
$lang['item.form.year_of_manufacture'] = 'Herstellungsjahr';
$lang['item.form.supplier'] = 'Lieferant';
$lang['item.form.date_of_purchase'] = 'Kaufdatum';
$lang['item.form.PAT'] = 'PAT Expiry Date';

$lang['item.form.cost'] = 'Anschaffungskosten';
$lang['item.form.replacement_cost'] = 'Ersatzkosten';
$lang['item.form.end_of_life'] = 'Vorraussichtliches Ende des Betriebs';
$lang['item.form.maintenance'] = 'Betrieb';

$lang['item.form.is_disposed_of'] = 'Abgeschafft';
$lang['item.form.date_disposed_of'] = 'Datum der Abschaffung';

$lang['item.form.archived'] = 'Archiviert';
$lang['item.form.date_archived'] = 'Datum der Archivierung';

$lang['item.form.comments'] = 'Kommentare';

$lang['item.form.files'] = 'Weitere Dokumentation';

$lang['item.form.copyright_notice'] = 'Copyright Notice';

$lang['item.form.date_added'] = 'hinzugefügt am';
$lang['item.form.date_updated'] = 'letzte Änderung am';
$lang['item.form.last_updated_username'] = 'Letzte Änderung Username ';
$lang['item.form.last_updated_email'] = 'Letzte Änderung Email';

$lang['item.form.embedded_content'] = 'Eingebetteter Content';

$lang['item.form.links'] = 'Links';



/*
 * Item Property Labels (as used on detail pages)
 * Some fields use the labels defined elsewhere, e.g. 'cat.label' or 'dept.label'.
 */

$lang['item.label.title'] = 'Titel';
$lang['item.label.manufacturer'] = 'Hersteller';
$lang['item.label.model'] = 'Modell';
$lang['item.label.short_description'] = 'Kurzbeschreibung';
$lang['item.label.full_description'] = 'Vollbeschreibung';
$lang['item.label.specification'] = 'Spezialisierung';

$lang['item.label.upgrades'] = 'Upgrades';
$lang['item.label.future_upgrades'] = 'Zukünftige Upgrades';

$lang['item.label.manufacturer_website'] = 'Seite des Herstellers';
$lang['item.label.technique'] = 'Technik';
$lang['item.label.acronym'] = 'Acronym';
$lang['item.label.keywords'] = 'Keywordy';

$lang['item.label.showchildren'] = 'Verknüpfte Objekte';
$lang['item.label.showparents'] = 'Verknüpfte Organisationseinheiten';

$lang['item.label.usergroup'] = 'Nutzergruppe';
$lang['item.label.availability'] = 'Verfügbarkeit';
$lang['item.label.restrictions'] = 'Einschränkungen';

$lang['item.label.portability'] = 'Transportierfähig';

$lang['item.label.training'] = 'Schulung';

$lang['item.label.calibrated'] = 'Kalibriert';
$lang['item.label.last_calibration_date'] = 'Zuletzt';
$lang['item.label.last_calibration_date'] = 'Nächster Termin';

$lang['item.label.quantity'] = 'Anzahl';
$lang['item.label.quantity_detail'] = '';


$lang['item.label.contact_1'] = 'Erster Kontakt';
$lang['item.label.contact_2'] = 'Zweiter Kontakt';


$lang['item.label.room'] = 'Raum';


$lang['item.label.asset_no'] = 'Anlagenummer';
$lang['item.label.finance_id'] = 'Ordernummer';
$lang['item.label.serial_no'] = 'Seriennummer';
$lang['item.label.year_of_manufacture'] = 'Jahr der Herstellung';
$lang['item.label.supplier'] = 'Versorger';
$lang['item.label.date_of_purchase'] = 'Kaufdatum';
$lang['item.label.PAT'] = 'PAT Expiry';


$lang['item.label.cost'] = 'Kosten';
$lang['item.label.replacement_cost'] = 'Kosten für das Ersezten';
$lang['item.label.end_of_life'] = 'Erwartetes Ende der Nutzung';
$lang['item.label.maintenance'] = 'Betrieb';

$lang['item.label.is_disposed_of'] = 'Abgeschafft?';
$lang['item.label.date_disposed_of'] = 'Datum der Abschaffung';

$lang['item.label.archived'] = 'Archiviert';
$lang['item.label.date_archived'] = 'Datum der Archivierung';

$lang['item.label.resources'] = 'Zusätzliche Ressourcen';

$lang['item.label.copyright_notice'] = '';

$lang['item.label.embedded_content'] = 'Eingebetteter Inhalt';

$lang['item.label.links'] = 'Links';

$lang['item.label.otherresources'] = 'Weitere Ressourcen';

$lang['item.label.date_updated'] = 'Zuletzt bearbeitet';

//new stuff for the item page

$lang['item.label.moredetail'] = 'Mehr Informationen';
$lang['item.link.enquire'] = 'Kontaktperson zu diesem Item';

$lang['item.label.permalink'] = 'Permanente Adresse';
$lang['item.label.direct_link'] = 'Direktlink';

$lang['item.label.visibility'] = 'Sichtbarkeit';
$lang['item.visibility.public'] = 'Dieses Gerät ist öffentlich einsehbar.';

$lang['item.browse.add_item'] = 'Ein Gerät hinzufügen';
$lang['item.browse.edit'] = 'Editieren';

$lang['item.detail.contact'] = 'Kontakt aufnehmen';

$lang['item.fineprint.id'] = 'Gerät Nr ';

//end of new stuff for the item page


/*
 * Organisations
 */
 
$lang['org.label'] = 'Organisation';
$lang['org.label.plural'] = 'Organisationen';



/*
 * Organisational Units
 */

$lang['ou.label.adminsection'] = 'Organisationsstruktur';
$lang['ou.label'] = 'Organisationseinheit';
$lang['ou.label.plural'] = 'Organisationseinheiten';



/*
 * Site
 */

$lang['site.label'] = 'Adresse';
$lang['site.label.plural'] = 'Adressen';



/*
 * Tag
 */

$lang['tag.label'] = 'Tag';
$lang['tag.label.plural'] = 'Tags';





/*
New stuff from here
*/

//Signin prompt
$config['layout.signin_prompt'] = 'Sie sehen aktuell nur die Objekte, welche öffentlich einsehbar sind.  <a href="[[SIGNIN_URL]]" style="font-weight: bold;">Klicken Sie hier um sich einzuloggen</a>, damit Sie das gesamte Kataster sehen.';

/*
menu nav bar
*/

$config['menu.home.label'] = 'Startseite';
$config['menu.category.label'] = 'Kategorien';
$config['menu.ou.label'] = 'Organisationseinheiten';
$config['menu.manufacturer.label'] = 'Hersteller';
$lang['menu.signin.label'] = 'Anmelden';

/*
menu nav bar end
*/

//search
$lang['search'] = "Suchen...";

/*
home
*/

$lang['home.browsebyou'] = "Durchsuchen nach Organisationseinheiten";
$lang['home.browsebycat'] = "Durchsuchen nach Kategorien";
$lang['home.more'] = "Mehr anzeigen";

/*
home end
*/

/*
Notes
*/

$lang['notes.category.private'] = 'Es gibt keine öffentlich verfügbaren Kategorien. Sie müssen sich anmelden, wenn Sie das Kataster nach Kategorien durchsuchen wollen.';
$lang['notes.category.empty'] = 'Es gibt noch keine Kategorien in diesem Katalog';
$lang['notes.category.list'] = '';

$lang['notes.ou.empty'] = 'Es existieren keine Organisationseinheiten in diesem Katalog.';
$lang['notes.ou.list'] = '';

$lang['notes.atoz.label'] = 'Hersteller A-Z';
$lang['notes.atoz.list'] = 'Bitte wählen Sie den Anfangsbuchstaben des gesuchten Herstellers.';
$lang['notes.atoz.other'] = 'Anderer';

$lang['notes.browse.properties'] = 'Sie sehen Objekte mit den folgenden Eigenschaften:';

/*
Notes end
*/

/*
Sign in
*/

$lang['signin.header.head'] = 'Loggen Sie sich ein!';

$lang['signin.form.username'] = "Mitarbeiterkennung";
$lang['signin.form.password'] = "Passwort";
$lang['signin.form.submit'] = "Anmelden";

$lang['signin.sso.box'] = 'Folgen Sie dem Link, um Single Sign-on zu nutzen.';

$lang['signin.allowsyou.head'] = 'Die Anmeldung ermöglicht Ihnen...';
$lang['signin.allowsyou.browse'] = 'Den gesamten Katalog zu sehen.';
$lang['signin.allowsyou.location'] = 'Den Standort der Geräte zu erfahren.';
$lang['signin.allowsyou.manuals'] = 'Zugriff auf mehr Informationen zu erhalten.';

$lang['signin.layout.welcome'] = 'Willkommen';
$lang['signin.layout.signout'] = 'Abmelden';
$lang['signin.layout.myitems'] = 'Meine Objekte';
$lang['signin.layout.admin'] = 'Administration';
$lang['signin.layout.ouadmin'] = 'Administration der Organisationseinheit';

/*
Sign in end
*/

/*
Enquiry
*/

$lang['enquiry.header.label'] = 'Kontaktaufnahme';
$lang['enquiry.note.form'] = 'Füllen Sie das folgende Formular aus, um mit mit den verantwortlichen Personen in Kontakt zu treten. Eine Kopie wird an Ihre E-Mail-Adresse geschickt.';
$lang['enquiry.note.fineprint'] = 'Mit * markierte Felder sind notwendig.';
$lang['enquiry.form.equip_info'] = 'Geräteinformationen';
$lang['enquiry.form.name'] = 'Gerätename';
$lang['enquiry.form.location'] = 'Standort';
$lang['enquiry.form.access'] = 'Zugang';
$lang['enquiry.form.details'] = 'Über Sie';
$lang['enquiry.form.name'] = 'Name';
$lang['enquiry.form.namehelp'] = 'Ihr vollständiger Name';
$lang['enquiry.form.email'] = 'E-Mail-Adresse';
$lang['enquiry.form.emailhelp'] = 'Ihre E-Mail-Adresse, um Sie zu kontaktieren. Ihre Anfragebestätigung wird zu dieser Adresse versandt.';
$lang['enquiry.form.phone'] = 'Telefonnummer';
$lang['enquiry.form.phonehelp'] = 'Ihre Telefonnummer für weitere Rückfragen';
$lang['enquiry.form.org'] = 'Organisation';
$lang['enquiry.form.orghelp'] = 'Ihre Universität, ihr Institut oder ihr Unternehmen';
$lang['enquiry.form.job'] = 'Rolle';
$lang['enquiry.form.jobhelp'] = 'Was ist ihre Position an ihrer Organisation?';
$lang['enquiry.form.deadline'] = 'Enddatum';
$lang['enquiry.form.deadlinehelp'] = 'Wenn es um eine Anfrage zur Nutzung des Geräts geht, bis wann muss die Arbeit abgeschlossen sein?';
$lang['enquiry.form.enquiry'] = 'Ihre Anfrage';
$lang['enquiry.form.typ'] = 'Typ der Anfrage';
$lang['enquiry.form.option.genenq'] = 'Generelle Anfrage';
$lang['enquiry.form.option.bookreq'] = 'Nutzungsanfrage';
$lang['enquiry.form.option.rescollab'] = 'Forschungskollaboration';
$lang['enquiry.form.text'] = 'Anschreiben';
$lang['enquiry.form.texthelp'] = 'Hier ist Platz für Ihr Anschreiben mit allen Informationen über Sie, die Sie nicht schon sonst angeben konnten.';
$lang['enquiry.form.antispam'] = 'Bitte schließen Sie den Anti-Spam-Schutz ab.';
$lang['enquiry.form.cancel'] = 'Abbrechen';
$lang['enquiry.form.send'] = 'Anfrage absenden';

/*
Enquiry end
*/

/*
Admin
*/

//home
$lang['admin.home.helpbox'] = 'Hilfe bei der Administration des Systems finden Sie hier:';
$lang['admin.home.header1'] = 'Administrationsmenü';

$lang['admin.home.itemadm'] = 'Geräte verwalten';
$lang['admin.home.item_field_cust'] = 'Feld anpassen';
$lang['admin.home.item_new'] = 'Neues Gerät hinzufügen';
$lang['admin.home.import'] = 'CSV-Datei importieren';
$lang['admin.home.export'] = 'CSV-Datei exportieren';

$lang['admin.home.hp_header'] = 'Homepageblocks';
$lang['admin.home.hp_link'] = 'Zu den Homepageblocks';
$lang['admin.home.hp_cust'] = 'Verändern Sie das Aussehen der Blocks auf der Homepage';

$lang['admin.home.cat_header'] = 'Kategorisierung';
$lang['admin.home.cat_meta'] = 'Metadaten zum System';
$lang['admin.home.location'] = 'Standort';
$lang['admin.home.user_header'] = 'Nutzer';
$lang['admin.home.user_link'] = 'Zu den Nutzern';
$lang['admin.home.user_management'] = 'Nutzermanagement';
$lang['admin.home.report_header'] = 'Berichterstattung';
$lang['admin.home.report_management'] = 'Berichtmanagement';
$lang['admin.home.report_link'] = 'Zu der Berichterstattung';

//OU
$lang['admin.ou.header'] = 'Organisationsstruktur verwalten';
$lang['admin.ou.disabled_title'] = 'Die Organisationsstrukturbaum ist aktuell deaktiviert.';
$lang['admin.ou.disabled_help'] = 'Um den Baum zu aktivieren, ändern Sie bitte in Ihrer Konfigurationen die Variable: <em>$config[\'app.use_ou_tree\'] = true;</em>.';
$lang['admin.ou.note'] = 'Hier sehen Sie die Organisationsstruktur des Katalogs. Klicken Sie auf den Namen einer Einheit, um diese zu bearbeiten oder klicken Sie auf den "Hinzufügen" Button, um neue Organisationseinheiten hinzuzufügen.';
$lang['admin.ou.labelh'] = 'Stufen benennen';
$lang['admin.ou.label_help'] = 'Benennnen Sie die Stufen der Organisationsstruktur';
$lang['admin.ou.example'] = 'Beispiel:';
$lang['admin.ou.safe'] = 'Stufenbenennung speichern';
$lang['admin.ou.warning'] = 'Es wurden noch keine Organisationseinheiten erstellt';
$lang['admin.ou.close'] = 'Schließen';
$lang['admin.ou.title'] = 'Titel';
$lang['admin.ou.name'] = 'Name *';
$lang['admin.ou.url'] = 'URL';
$lang['admin.ou.location'] = 'Standort der Organisationseinheit';
$lang['admin.ou.loc_note'] = '';
$lang['admin.ou.save'] = 'Speichern';

//items
$lang['admin.note.edit'] = 'Um einzelne Geräte zu editieren, durchsuchen Sie bitte den Katalog und klicken "editieren" oben rechts bei dem Gerät.';
$lang['admin.note.import_item'] = 'Geräte mittels CSV-Datei importieren.';
$lang['admin.note.export_csv'] = 'Geräte der Datenbank als CSV exportieren.';

//custom fields
$lang['admin.cf.header'] = 'Benutzerdefinierte Geräteattribute';
$lang['admin.cf.note'] = 'Mit dieser Funktion können Sie die Daten für Geräte individuell anpassen.';
$lang['admin.cf.note2'] = 'Benutzerdefinierte Geräteattribute können für jedes Gerät des Systems benutzt werden und auch per CSV-Import gefüllt werden.';
$lang['admin.cf.warning'] = 'Es wurden noch keine benutzerdefinierten Geräteattribute festgelegt!';
$lang['admin.cf.list'] = 'Hier finden Sie eine Liste aller benutzerdefinierten Geräteattribute des Systems';
$lang['admin.cf.existing'] = 'Vorhandene benutzerdefinierte Geräteattribute';
$lang['admin.cf.add_new'] = 'Neues benutzerdefiniertes Geräteattribut hinzufügen';
$lang['admin.cf.fieldname'] = 'Feldname';
$lang['admin.cf.add'] = 'hinzufügen';
$lang['admin.cf.edit_head'] = 'Feld Editieren:';
$lang['admin.cf.edit_here'] = 'Hier können Sie das Feld editieren.';

$lang['admin.user.header'] = 'Nutzerverwaltung';
$lang['admin.user.ldapboldnote'] = 'Mit der Nutzung von SSO oder LDAP ist es oft nicht nötig, eine komplette Nutzerliste einzeln für dieses System zu verwalten.';
$lang['admin.user.ldapnote1'] = 'Kit-Catalogue liest Nutzerinformationen automatisch während des Authentifizierungsprozess bei der Active Directory / LDAP-Anmeldung. Bei der Nutzung der LDAP-Anmeldung müssen nur Nutzer mit Extrarechten verwaltet werden.';
$lang['admin.user.ldapnote2'] = 'Alle anderen Nutzer bekommen Standardrechte (Leserechte auf interne Geräte), unabhängig davon, ob diese vorher angelegt wurden.';
$lang['admin.user.ldapnotetu'] = 'Angelegte Nutzer können sich über die LDAP-Anmeldung mit ihrer Mitarbeiterkennung der TU identifizieren. Das hier angegebene Passwort sollte daher ein maximal sicheres Passwort sein, welches niemals genutzt werden muss.';
$lang['admin.user.add_new'] = 'Neuen Nutzer anlegen';
$lang['admin.user.label_username'] = 'Nutzername';
$lang['admin.user.label_forename'] = 'Vorname';
$lang['admin.user.label_surname'] = 'Nachname';
$lang['admin.user.label_email'] = 'E-Mail-Adresse';
$lang['admin.user.label_password'] = 'Passwort';
$lang['admin.user.label_password_confirm'] = 'Passwort wiederholen';
$lang['admin.user.add_user_button'] = 'Nutzer hinzufügen';
$lang['admin.user.usernote'] = 'Dieses Menü gibt Ihnen die Möglichkeit Nutzerrechte zu kontrollieren.';
$lang['admin.user.no_users'] = 'Es wurden bis jetzt keine Nutzer eingerichtet.';

$lang['admin.useredit.header'] = 'Bearbeiten des Nutzers ';
$lang['admin.useredit.changepw'] = 'Passwort ändern';
$lang['admin.useredit.ldap_precedence'] = 'Aktuell wird LDAP-Authentifizierung genutzt. LDAP-Authentifizierung hat Vorrang über den lokalen Login-Daten.';
$lang['admin.useredit.password_effect'] = 'Hier das Passwort zu ändern hat nur einen Effekt, wenn der Nutzername und/oder das Passwort nicht im Active Directory gefunden wird.';
$lang['admin.useredit.admin_example'] = 'Dies gilt zum Beispiel für den vordefinierten Admin-Account.';
$lang['admin.useredit.not_using_db'] = 'Kit-Catalogue nutzt aktuell keine Authentifizierung durch die eigene Datenbank, daher werden Passwortänderungen hier keinen Effekt haben.';
$lang['admin.useredit.cancel'] = 'Abbrechen';
$lang['admin.useredit.save'] = 'Speichern';
$lang['admin.useredit.details'] = 'Hier können Sie die Nutzerdaten ändern.';
$lang['admin.useredit.fineprint'] = 'Mit * markierte Felder sind notwendig.';
$lang['admin.useredit.permissions'] = 'Berechtigungen';
$lang['admin.useredit.'] = '';
$lang['admin.useredit.systemwide'] = 'Systemweite Berechtigungen';
$lang['admin.useredit.adm'] = 'Systemadministrator';
$lang['admin.useredit.specific'] = 'Spezielle Berechtigungen';
$lang['admin.useredit.orgspecific'] = 'Hier sehen Sie Berechtigungen, die speziell für die Organisationsstruktur gültig sind.';
$lang['admin.useredit.inclusive'] = 'Wenn Berechtigungen für höhere Organisationseinheiten gegeben werden, gelten diese auch für alle untergeordneten Organisationsheiten.';

$lang['admin.hp.header'] = 'Verwalten der Homepageblocks';
$lang['admin.hp.explanation'] = 'Homepageblocks ermöglichen mehr Optionen beim Durchsuchen von benutzerdefinierten Attributen. ';
$lang['admin.hp.boxtext'] = 'Hier können Sie neue Homepageblocks hinzufügen';
$lang['admin.hp.blockname'] = 'Name des Blocks';
$lang['admin.hp.blockadd'] = 'Homepageblock hinzufügen';
$lang['admin.hp.count0'] = 'Es gibt noch keine Homepageblocks';
$lang['admin.hp.list'] = 'Hier finden Sie eine Liste aller Homepageblocks';

//admin category
$lang['admin.category.header'] = 'Kategorien verwalten';
$lang['admin.category.add'] = 'Neue Kategorie hinzuführen';
$lang['admin.category.name'] = 'Name';
$lang['admin.category.next'] = 'Weiter';
$lang['admin.category.rebuildh'] = 'Kategorie-Index zurücksetzen';
$lang['admin.category.rebuildnote'] = 'Falls es notwendig ist, den Objektindex für jede Kategorie zurückzusetzen und neu aufzubauen, können Sie den folgenden Button benutzen.';
$lang['admin.category.rebuildsubmit'] = 'Index zurücksetzen';
$lang['admin.category.cpvh'] = 'CPV-Codes konfigurieren';
$lang['admin.category.cpvnote'] = 'Da die gesamte CPV-Codeliste knapp 9500 Einträge enthält, würde diese die Kategorieseiten ausbremsen. Kit-Catalogue kann so verwaltet werden, dass nur die CPV-Codes genutzt werden, die relevant für das System sind.';
$lang['admin.category.cpvcfg'] = 'CPV-Codes konfigurieren';
$lang['admin.category.note'] = 'Hier finden Sie eine Liste mit allen Kategorien, welches dieses System aktuell führt.';
$lang['admin.category.note2'] = 'Kategorien werden genutzt, um Gruppen zu bilden, in welchen ähnliche Geräte enthalten sind.';
$lang['admin.category.warning'] = 'Es wurden noch keine Kategorien beschrieben.';

//admin access level
$lang['admin.access.header'] = 'Zugangsoptionen verwalten';
$lang['admin.access.add'] = 'Eine Zugangsoption hinzufügen';
$lang['admin.access.name_label'] = 'Name der Zugangsoption';
$lang['admin.access.submit_label'] = 'Zugangsoption hinzufügen';
$lang['admin.access.note'] = 'Hier finden Sie die Liste aller Zugangsoptionen für dieses System';
$lang['admin.access.warning'] = 'Es wurden noch keine Zugangsoptionen angelegt';


//admin report
$lang['admin.report.header'] = 'Berichte';
$lang['admin.report.note'] = 'Klicken Sie auf eine der Kategorien, um dafür einen Bericht des Systems zu erhalten.';
$lang['admin.report.available'] = 'Möglichte Berichte';
$lang['admin.report.inv'] = 'Inventar';
$lang['admin.report.itm'] = 'Objekte';
$lang['admin.report.stc'] = 'Mitarbeiterkontakt';
$lang['admin.report.man'] = 'Hersteller';

//admin sites
$lang['admin.sites.header'] = 'Adressen verwalten';
$lang['admin.sites.add'] = 'Adresse hinzufügen';
$lang['admin.sites.label'] = 'Adresse oder Name des Camous';
$lang['admin.sites.submit'] = 'Hinzufügen';
$lang['admin.sites.note'] = 'Hier sehen Sie eine Liste aller Adressen, welche in diesem Katalog genutzt werden.';
$lang['admin.sites.warning'] = 'Es wurden noch keine Adressen eingetragen.';

//admin building
$lang['admin.building.header'] = 'Gebäude verwalten';
$lang['admin.building.add'] = 'Gebäude hinzufügen';
$lang['admin.building.code'] = 'Gebäudenummer';
$lang['admin.building.name'] = 'Name';
$lang['admin.building.site'] = 'Adresse / Campus';
$lang['admin.building.site_warning'] = 'Es wurden noch keine Standorte angegeben.';
$lang['admin.building.site_note'] = 'Standorte sind nicht zwingend notwendig. Gerade wenn Ihre Organisation mehrere Standorte hat, ist es dennoch sinnvoll diese zuerst einzurichten.';
$lang['admin.building.lat'] = 'Latitude';
$lang['admin.building.long'] = 'Longitude';
$lang['admin.building.submit'] = 'Hinzufügen';
$lang['admin.building.note'] = 'Hier finden Sie die Liste aller Gebäude, die bis jetzt in das System eingetragen wurden.';
$lang['admin.building.warning'] = 'Es wurden noch keine Gebäude hinzugefügt.';

//admin ou
$lang['adminou.home.header'] = 'Verwaltungsoptionen';
$lang['adminou.home.itemadmin'] = 'Geräteverwaltung';
$lang['adminou.home.future_release'] = 'Geräte können momentan noch nicht direkt importiert werden. Bitte nutzen Sie die CSV-Importfunktion.';
$lang['adminou.home.report'] = 'Berichte und Analysen';
$lang['adminou.home.inventory_report'] = 'Inventarbericht';
$lang['adminou.reports.header'] = 'Berichte';
$lang['adminou.reports.available'] = 'Verfügbare Berichte';
$lang['adminou.reports.items'] = 'Objekte';

$lang['adminou.inventory.header'] = 'Inventurbericht';
$lang['adminou.inventory.customize'] = 'Sie können Ihren Bericht durch die folgenden Optionen anpassen.';
$lang['adminou.inventory.filter'] = 'Filteroptionen';
$lang['adminou.inventory.filternote'] = 'Nutzen Sie die Filter, um nur passende Objekte anzuzeigen.';
$lang['adminou.inventory.fields'] = 'Felder des Berichts';
$lang['adminou.inventory.fieldsnote'] = 'Wählen Sie, welche Informationen angezeigt werden sollen.';
$lang['adminou.inventory.fieldsnote2'] = 'Sie können die Reihenfolge mit den Pfeilbuttons verändern.';
$lang['adminou.inventory.reporting_fields'] = 'Berichtfelder';
$lang['adminou.inventory.available_fields'] = 'Verfügbare Felder';
$lang['adminou.inventory.orderby'] = 'Sortieren';
$lang['adminou.inventory.ordernote1'] = 'Sie können Ihre Ergebnisse in bis zu 3 Spalten ordnen.';
$lang['adminou.inventory.ordernote2'] = 'Der Name eines Geräts ist der Titel der Geräteseite. Wenn ein Gerät keinen eigenen Namen hat, so wird das Modell des Herstellers als Name genommen.';
$lang['adminou.inventory.orderby1'] = 'Zuerst sortieren nach...';
$lang['adminou.inventory.orderby2'] = 'Dann sortieren nach...';
$lang['adminou.inventory.orderby3'] = 'Zuletzt sortieren nach...';
$lang['adminou.inventory.view_report'] = 'Bericht ansehen';
$lang['adminou.inventory.download_csv'] = 'Bericht als CSV herunterladen';

$lang['adminou.showreport.header'] = 'Gerätebericht';
$lang['adminou.showreport.generatednote'] = 'Generiert um ';
$lang['adminou.showreport.items_found'] = ' Geräte gefunden.';
$lang['adminou.showreport.no_items_found'] = 'Es wurden keine passenden Geräte gefunden.';

$lang['adminou.showreport.asc'] = 'Aufsteigend';
$lang['adminou.showreport.desc'] = 'Absteigend';

$lang['admin.edititem.header_edit'] = 'Ändern von: ';
$lang['admin.edititem.new_item'] = 'Neues Objekt';
$lang['admin.edititem.back'] = 'Zurück zum Katalog';
$lang['admin.edititem.required'] = 'Felder mit * müssen ausgefüllt werden.';
$lang['admin.edititem.last_updated'] = 'Letztes update:';
$lang['admin.edititem.visible_public'] = 'Dieses Gerät ist <br /><strong>öffentlich einsehbar</strong>.';
$lang['admin.edititem.name_note'] = 'Dies ist der name des Geräts; notwendig wenn <em>Hersteller</em> nicht ausgefüllt ist.';
$lang['admin.edititem.manufacturer_note'] = 'Notwendig wenn kein <em>Titel</em> angegeben ist.';
$lang['admin.edititem.ou_note'] = 'Wo steht dieses Gerät im Organisationsbaum?';
$lang['admin.edititem.ou_help'] = '(nur Systemadministratoren können die Organisationseinheit eines Items ändern.';
$lang['admin.edititem.visibility'] = 'Soll dieser Eintrag öffentlich einsehbar sein oder nur innerhalb der Universität?';
$lang['admin.edititem.internal_only'] = 'Nur intern';
$lang['admin.edititem.public'] = 'Öffentlich';
$lang['admin.edititem.save_changes'] = 'Speichern';
//custodian
$lang['admin.edititem.custodian'] = 'Der primäre Ansprechpartner';
$lang['admin.edititem.mail_label'] = 'E-Mail-Adresse';
$lang['admin.edititem.name_label'] = 'Name';
$lang['admin.edititem.select_mail'] = 'Wählen Sie eine der bereits vorhandenen E-Mail-Adressen';
$lang['admin.edititem.existing_mail'] = 'Oder benutzen Sie eine neue E-Mail-Adresse. Lassen Sie hier das vorherige Drop-Down Menü blank.';
$lang['admin.edititem.secondary_staff'] = 'Zweiter Ansprechpartner';
//editors
$lang['admin.edititem.editor_note'] = 'Editoren können individuelle Objekte updaten, Sie sind aber nicht kontaktierbar.';
$lang['admin.edititem.add_editor'] = 'Neue Editoren hinzufügen';
$lang['admin.edititem.enter_editornames'] = 'Bitte geben Sie den Nutzernamen der neuen Editoren ein, einen pro Linie.';
$lang['admin.edititem.current_editors'] = 'Editoren für dieses Objekt';
$lang['admin.edititem.none'] = 'Keine Editoren gelistet.';
$lang['admin.edititem.to_remove_tick'] = 'Um einen Editor zu entfernen, setzen Sie bitte das Häkchen bei der entsprechenden Box.';
$lang['admin.edititem.username'] = 'Nutzername';
$lang['admin.edititem.remove'] = 'Entfernen?';
//descriptions
$lang['admin.edititem.short_desc_note'] = 'Eine kurze Beschreibung des Objekts, welche in Objektlisten und Suchergebnissen auftaucht.';
$lang['admin.edititem.full_desc_note'] = 'Die volle Beschreibung des Objekts auf der Objektseite. Bitte beachten Sie eventuelle Probleme mit dem Laden der Seite, wenn Sie dieses Feld benutzen. Sollten diese Probleme auftreten, lassen Sie bitte die volle Beschreibung und die Spezifikation aus!';
$lang['admin.edititem.wikitext'] = 'Hier können Sie Wiki-text benutzen, um Ihren Text zu formatieren.';
$lang['admin.edititem.technical_desc'] = 'Beschreibung der technischen Spezifikationen oder Limits, in welchen das Gerät arbeitet, wie etwa Betriebstemperaturen.';
$lang['admin.edititem.upgrades_note'] = 'Jegliche, am Gerät installierten, Upgrades und Erweiterungen für das Gerät.';
$lang['admin.edititem.future_upgrades_note'] = 'Zukünftige Upgrades und Erweiterungen, welche in Zukunft installiert werden sollen.';
$lang['admin.edititem.manufacturer_website_note'] = 'Eine spezifische Website des Herstellers für das Gerät oder die Landingpage des Herstellers.';
$lang['admin.edititem.technique_note'] = 'Welche wissenschaftliches Prinzip, Technik oder Methodik verwendet das Gerät? (Falls zutreffend)';
$lang['admin.edititem.acronym'] = 'Ein gebräuchlicher, kurzer Begriff, um das Gerät zu beschreiben.';
$lang['admin.edititem.keywords_1'] = 'Jegliche Keywords, welche noch nicht bereits genannt wurden, bei welchen dieses Gerät aber definitiv in den Suchanfragen auftauchen soll.';
$lang['admin.edititem.keywords_2'] = 'Dies kann auch verschiedene Schreibweisen oder Terminologien für dieses Gerät oder Techniken beinhalten. (Bsp: multiaxis, multi-axis, multi axis)';
$lang['admin.edititem.tags_1'] = 'Benutzen Sie Tags um verschiedene Geräte für eine bestimmte Forschungsrichtung zu Grupieren.';
$lang['admin.edititem.tags_2'] = 'Tags müssen mit einem Komma getrennt werden: "graphene, nanotech"';
$lang['admin.edititem.tags_3'] = 'Nur Buchstaben, Zahlen und Bindestriche ("-") dürfen für Tags verwendet werden.';
//parent facilities
$lang['admin.edititem.parent_1'] = 'Ja, dieses Objekt ist eine übergeordnete Einrichtung.';
$lang['admin.edititem.parent_2'] = 'Nein, dieses Objekt ist nur ein Gerät.';
$lang['admin.edititem.nochild'] = 'Es sind keine Objekte dieser Einrichtung zugeordnet.';
$lang['admin.edititem.removechild'] = 'Um ein Objekt einer übergeordneten Einrichtung zu entfernen, klicken Sie auf die Box.';
$lang['admin.edititem.addchild'] = 'Um Objekte zu dieser Einrichtung hinzuzufügen, bearbeiten Sie bitte die einzelnen Objekte und fügen die übergeordnete Einrichtung bei diesen Objekten hinzu.';
$lang['admin.edititem.noparents'] = 'Es wurden noch keine übergeordneten Einrichtungen definiert.';
$lang['admin.edititem.removefacility'] = 'Um eine übergeordnete Einrichtung zu entfernen, klicken Sie auf die Box.';
//Categories
$lang['admin.edititem.associated'] = 'Assoziierte Kategorien';
$lang['admin.edititem.use_new'] = 'oder erstellen Sie eine neue Kategorie';
//Access
$lang['admin.edititem.access_note'] = 'In welcher Weise ist der Zugang zu dem Gerät generell zulässig?';
$lang['admin.edititem.usergroup_note'] = 'Wer ist die übliche Nutzergruppe dieses Geräts? Das Institut? Eine bestimmte Forschungsgruppe?';
$lang['admin.edititem.available_note'] = 'Gibt es bestimmte Zeiten, zu denen das Gerät immer zur Verfügung steht?';
$lang['admin.edititem.restriction_note'] = 'Gibt es Beschränkungen des Zugangs, etwa durch Gesundheits- oder Sicherheitsmaßnahmen?';
$lang['admin.edititem.portability_note'] = 'Für viele Geräte ist die Transportfähigkeit des Geräts offensichtlich. Bei diesen Geräten gibt es keine Notwendigkeit dies hier einzutragen.';
$lang['admin.edititem.training_note'] = 'Wird Training benötigt, damit dieses Gerät benutzt werden kann?';
$lang['admin.edititem.training_1'] = 'Ja, spezialisiertes Training ist erforderlich.';
$lang['admin.edititem.training_2'] = 'Kein Training wird benötigt.';
$lang['admin.edititem.training_3'] = 'Nicht angegeben (wird nicht auf der Seite angezeigt).';
$lang['admin.edititem.training_provided'] = 'Wird Training angeboten?';
$lang['admin.edititem.training_4'] = 'Ja, wir können Training arrangieren.';
$lang['admin.edititem.training_5'] = 'Nein, es kann kein Training arrangiert werden.';
$lang['admin.edititem.training_6'] = 'Nicht angegeben (wird nicht auf der Seite angezeigt).';
$lang['admin.edititem.calibrated'] = 'Ist dieses Gerät kalibriert?';
$lang['admin.edititem.iscalibrated'] = 'Ja, dieses Gerät ist kalibriert.';
$lang['admin.edititem.calibrated_1'] = 'Nein, dieses Gerät ist nicht kalibriert.';
$lang['admin.edititem.calibrated_2'] = 'Automatisch - Dieses Gerät wird oder muss bei der Benutzung kalibriert werden.';
$lang['admin.edititem.calibrated_3'] = 'Nicht anwendbar (wird nicht auf er Seite angezeigt).';
$lang['admin.edititem.quantity_note'] = 'Sollten mehrere Einheitne des Geräts existieren, beschreiben Sie die Anzahl hier.';
//Assets
$lang['admin.edititem.supplier'] = 'Lieferantenname';
$lang['admin.edititem.maintenance'] = 'Details zu Instanthaltungsverträgen oder ähnlichen Kosten';
$lang['admin.edititem.disposed'] = 'Wurde dieses Objekt bereits entsorgt?';
$lang['admin.edititem.disposed_1'] = 'Nein, das Objekt wird noch benutzt.';
$lang['admin.edititem.disposed_2'] = 'Ja, das Objekt wurde verkauft.';
$lang['admin.edititem.disposed_3'] = 'Ja, das Objekt wurde verschrottet.';
$lang['admin.edititem.archive_note1'] = 'Einträge des Archiv werden im System versteckt und sind nur im Administrationsbereich sichtbar.';
$lang['admin.edititem.archive_note2'] = 'Sie können regelmäßig von Administratoren entfernt werden.';
$lang['admin.edititem.archive_active'] = 'Nein. der Eintrag ist noch aktiv.';
$lang['admin.edititem.archive_inactive'] = 'Ja, der Eintrag ist jetzt inaktiv.';
$lang['admin.edititem.comment_note'] = 'Kommentar oder weitere Informationen über das Objekt.';

$lang['admin.edititem.'] = '';

/*
Admin end
*/

/*
Error
*/

$lang['error.404.header'] = 'Die angeforderte Ressource existiert nicht';
$lang['error.404.note'] = 'Es tut uns Leid, aber die angeforderte Seite konnte nicht gefunden werden. Sie könnte verschoben oder umbenannt wurden sein.';
$lang['error.404.next'] = 'Was Sie nun tun können:';
$lang['error.404.listone'] = 'Wenn Sie auf diese Seite von diesem Katalog kommen, haben wir einen Fehler bei den Links.';
$lang['error.404.listtwo'] = 'Wenn Sie die Adresse manuell eingegeben haben, gucken Sie bitte,';
$lang['error.404.listthree'] = 'Wenn Sie einem Link einer anderen Website gefolgt sind, ist dieser Link vermutlich kaputt.';
$lang['error.404.listfour'] = 'Sie können auch einfach zur Hauptseite zurück: ';
$lang['error.404.homepagelink'] = 'Homepage';

/*
Error end
*/


/*
Footer
*/

$lang['footer.contactowner'] = 'Kontaktieren Sie die Administration des Katasters';
$lang['footer.poweredby'] = 'Dieses Forschungsgerätekataster wird ermöglicht durch das <a href="http://www.kit-catalogue.com/">Kit-Catalogue</a>-System.';
$lang['footer.license'] = 'Kit-Catalogue wurde von der Loughborough University entwickelt und ist lizensiert unter der <a href="http://www.gnu.org/copyleft/gpl.html">Open Source GPLv3 licence</a>.';

/*
Footer end
*/

//favicon
$lang['favicon'] = "https://www.tu-braunschweig.de/icons/tubsdesign/favicon.ico" ;

?>
