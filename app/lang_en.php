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
$lang['title'] = 'Research equipment catalogue';
$lang['home.app.title'] = 'Research equipment catalogue';
$lang['home.app.intro'] = 'The research equipment database for the TU Braunschweig.';

/*
 * Access Levels
 */
 
$lang['access.label'] = 'Access Level';
$lang['access.label.plural'] = 'Access Levels';



/*
 * Building
 */
 
$lang['building.label'] = 'Building';
$lang['building.label.plural'] = 'Buildings';



/*
 * Category
 */

// The route MUST be a single, lowercase word suitable for inclusion in a URL
// The route MUST NOT clash with the name of another entity in kit-catalogue, such as 'category' or 'item'.
// The route MUST contain only alphanumeric characters, i.e. Only a-z or 0-9.
// For example, you could use "category" (the default) or "theme".
$lang['cat.route'] = 'category';

$lang['cat.label'] = 'Category';
$lang['cat.label.plural'] = 'Categories';



/*
 * Department
 */
 
// The route MUST be a single, lowercase word suitable for inclusion in a URL
// The route MUST NOT clash with the name of another entity in kit-catalogue, such as 'category' or 'item'.
// The route MUST contain only alphanumeric characters, i.e. Only a-z or 0-9.
// For example, you could use "department" (the default) or "school".
$lang['dept.route'] = 'department';

$lang['dept.label'] = 'Department';
$lang['dept.label.plural'] = 'Departments';



/*
 * Facility
 */
 
$lang['facility.label'] = 'Facility';
$lang['facility.label.plural'] = 'Facilities';

//item title
$lang['item.browse.title'] = 'Browse Items';


/*
 * Item Form Fields (as used in the item editor)
 * Some fields use the labels defined elsewhere, e.g. 'cat.label' or 'dept.label'.
 */

$lang['item.formsection.main'] = 'Main Details';
$lang['item.formsection.description'] = 'Description';
$lang['item.formsection.parent'] = 'Parent Facility';
$lang['item.formsection.categorisation'] = 'Categorisation';
$lang['item.formsection.access'] = 'Access & Usage';
$lang['item.formsection.contact'] = 'Contact Information';
$lang['item.formsection.editors'] = 'Editors';
$lang['item.formsection.location'] = 'Physical Location';
$lang['item.formsection.asset'] = 'Asset & Finance Information';
$lang['item.formsection.custom'] = 'Custom Fields';
$lang['item.formsection.resources'] = 'Resources';

//additional vocabulary
$lang['item.formsection.additional'] = 'Additional Fields';

$lang['item.form.title'] = 'Title';
$lang['item.form.manufacturer'] = 'Manufacturer';
$lang['item.form.model'] = 'Model';
$lang['item.form.short_description'] = 'Short Description';
$lang['item.form.full_description'] = 'Full Description';
$lang['item.form.specification'] = 'Specification';

$lang['item.form.upgrades'] = 'Upgrades';
$lang['item.form.future_upgrades'] = 'Future Upgrades';
$lang['item.form.manufacturer_website'] = 'Manufacturer\'s Website';

$lang['item.form.technique'] = 'Technique';
$lang['item.form.keywords'] = 'Keywords';
$lang['item.form.acronym'] = 'Acronym';

$lang['item.form.is_parent'] = "Use this item as a parent facility";
$lang['item.form.selectparent'] = 'Associate this item with one or more parent facilities';
$lang['item.form.showchildren'] = 'Associated child items';

$lang['item.form.visibility'] = 'Visibility';
$lang['item.form.usergroup'] = 'User Group';
$lang['item.form.availability'] = 'Availability';
$lang['item.form.restrictions'] = 'Restrictions';

$lang['item.form.portability'] = 'Portability';

$lang['item.form.trainingrequired'] = 'Training Required';
$lang['item.form.trainingprovided'] = 'Training Provided';

$lang['item.form.calibrated'] = 'Calibrated';
$lang['item.form.last_calibration_date'] = 'Last Calibration Date';
$lang['item.form.next_calibration_date'] = 'Next Calibration Date';

$lang['item.form.quantity'] = 'Quantity';
$lang['item.form.quantity_detail'] = 'Quantity Detail';

$lang['item.form.contact'] = 'Staff Contact';   // Used as a generic label for contact information

$lang['item.form.contact_1'] = 'First Staff Contact';
$lang['item.form.contact_1_name'] = 'First Contact Name';
$lang['item.form.contact_1_email'] = 'First Contact Email';
$lang['item.form.contact_2'] = 'Second Staff Contact';
$lang['item.form.contact_2_name'] = 'Second Contact Name';
$lang['item.form.contact_2_email'] = 'Second Contact Email';


$lang['item.form.image'] = 'Image';

$lang['item.form.room'] = 'Room';


$lang['item.form.asset_no'] = 'Asset Number';
$lang['item.form.finance_id'] = 'Finance ID / Order Reference';
$lang['item.form.serial_no'] = 'Serial Number';
$lang['item.form.year_of_manufacture'] = 'Year of Manufacture';
$lang['item.form.supplier'] = 'Supplier';
$lang['item.form.date_of_purchase'] = 'Date of Purchase';
$lang['item.form.PAT'] = 'PAT Expiry Date';

$lang['item.form.cost'] = 'Purchase Cost';
$lang['item.form.replacement_cost'] = 'Replacement Cost';
$lang['item.form.end_of_life'] = 'Expected End Of Life';
$lang['item.form.maintenance'] = 'Maintenance';

$lang['item.form.is_disposed_of'] = 'Has Been Disposed Of';
$lang['item.form.date_disposed_of'] = 'Date Disposed Of';

$lang['item.form.archived'] = 'Archived';
$lang['item.form.date_archived'] = 'Date Archived';

$lang['item.form.comments'] = 'Comments';

$lang['item.form.files'] = 'Additional Files & Documentation';

$lang['item.form.copyright_notice'] = 'Copyright Notice';

$lang['item.form.date_added'] = 'Date Added';
$lang['item.form.date_updated'] = 'Date Last Updated';
$lang['item.form.last_updated_username'] = 'Last Updated Username ';
$lang['item.form.last_updated_email'] = 'Last Updated Email';

$lang['item.form.embedded_content'] = 'Embedded Content';

$lang['item.form.links'] = 'Links';



/*
 * Item Property Labels (as used on detail pages)
 * Some fields use the labels defined elsewhere, e.g. 'cat.label' or 'dept.label'.
 */

$lang['item.label.title'] = '';
$lang['item.label.manufacturer'] = 'Manufacturer';
$lang['item.label.model'] = 'Model';
$lang['item.label.short_description'] = '';
$lang['item.label.full_description'] = 'Description';
$lang['item.label.specification'] = 'Specification';

$lang['item.label.upgrades'] = 'Upgrades';
$lang['item.label.future_upgrades'] = 'Future Upgrades';

$lang['item.label.manufacturer_website'] = '';
$lang['item.label.technique'] = 'Technique';
$lang['item.label.acronym'] = 'Acronym';
$lang['item.label.keywords'] = 'Keywords';

$lang['item.label.showchildren'] = 'Associated Items';
$lang['item.label.showparents'] = 'Associated Facilities';

$lang['item.label.usergroup'] = 'User Group';
$lang['item.label.availability'] = 'Availability';
$lang['item.label.restrictions'] = 'Restrictions';

$lang['item.label.portability'] = 'Portability';

$lang['item.label.training'] = 'Training';

$lang['item.label.calibrated'] = 'Calibrated';
$lang['item.label.last_calibration_date'] = 'Last';
$lang['item.label.last_calibration_date'] = 'Next';

$lang['item.label.quantity'] = 'Quantity';
$lang['item.label.quantity_detail'] = '';


$lang['item.label.contact_1'] = 'Contact 1';
$lang['item.label.contact_2'] = 'Contact 2';


$lang['item.label.room'] = 'Room';


$lang['item.label.asset_no'] = 'Asset No.';
$lang['item.label.finance_id'] = 'Purchase Order No.';
$lang['item.label.serial_no'] = 'Serial No.';
$lang['item.label.year_of_manufacture'] = 'Year of Manufacture';
$lang['item.label.supplier'] = 'Supplier';
$lang['item.label.date_of_purchase'] = 'Purchase Date';
$lang['item.label.PAT'] = 'PAT Expiry';


$lang['item.label.cost'] = 'Cost';
$lang['item.label.replacement_cost'] = 'Replacement Cost';
$lang['item.label.end_of_life'] = 'Expected End of Life';
$lang['item.label.maintenance'] = 'Maintenance';

$lang['item.label.is_disposed_of'] = 'Disposed of';
$lang['item.label.date_disposed_of'] = 'Date Disposed of';

$lang['item.label.archived'] = 'Archived';
$lang['item.label.date_archived'] = 'Date Archived';

$lang['item.label.resources'] = 'Additional Resources';

$lang['item.label.copyright_notice'] = '';

$lang['item.label.embedded_content'] = 'Embedded Content';

$lang['item.label.links'] = 'Links';

$lang['item.label.otherresources'] = 'Other Resources';

$lang['item.label.date_updated'] = 'Last Updated';

//new stuff for the item page

$lang['item.label.moredetail'] = 'More detail';
$lang['item.link.enquire'] = 'Enquire';

$lang['item.label.permalink'] = 'Permanent Link';
$lang['item.label.direct_link'] = 'Direct Link';

$lang['item.label.visibility'] = 'Visibility';
$lang['item.visibility.public'] = 'public';

$lang['item.browse.add_item'] = 'add';
$lang['item.browse.edit'] = 'edit';

$lang['item.detail.contact'] = 'Get in touch!';

$lang['item.fineprint.id'] = 'Item ID';

//end of new stuff for the item page


/*
 * Organisations
 */

$lang['org.label'] = 'Organisation';
$lang['org.label.plural'] = 'Organisations';




/*
 * Organisational Units
 */
 
$lang['ou.label.adminsection'] = 'Organisational Structure';
$lang['ou.label'] = 'Organisational Unit';
$lang['ou.label.plural'] = 'Organisational Units';



/*
 * Site
 */
 
$lang['site.label'] = 'Site';
$lang['site.label.plural'] = 'Sites';



/*
 * Tag
 */
 
$lang['tag.label'] = 'Tag';
$lang['tag.label.plural'] = 'Tags';




/*
New stuff from here
*/

//Signin prompt
$config['layout.signin_prompt'] = 'You are currently viewing only those items made visible to the public.  <a href="[[SIGNIN_URL]]" style="font-weight: bold;">Click here to sign in</a>, and view the full catalogue.';

/*
menu nav bar
*/

$config['menu.home.label'] = 'Home';
$config['menu.category.label'] = 'Category';
$config['menu.ou.label'] = 'Departments';
$config['menu.manufacturer.label'] = 'Manufacturer A-Z';
$lang['menu.signin.label'] = 'Sign In';

/*
menu nav bar end
*/

//search
$lang['search'] = "Search...";

/*
home
*/

$lang['home.browsebyou'] = "Browse by Organisational Unit";
$lang['home.browsebycat'] = "Browse by Category";
$lang['home.more'] = "more";

/*
home end
*/

/*
Notes
*/

$lang['notes.category.private'] = 'There are no publically available categories. You will need to sign in first.';
$lang['notes.category.empty'] = 'There are no categories available so it is likely this catalogue is empty.';
$lang['notes.category.list'] = 'The following is a list of all the categories used in this catalogue.';

$lang['notes.ou.empty'] = 'There are no organisational units available so it is likely this catalogue is empty.';
$lang['notes.ou.list'] = 'The following is a list of all the organisational units used in this catalogue.';

$lang['notes.atoz.label'] = 'Manufacturer A-Z';
$lang['notes.atoz.list'] = 'Equipment and facilities are available for manufacturers starting with the following letters.';
$lang['notes.atoz.other'] = 'Other';

$lang['notes.browse.properties'] = 'Viewing items matching the following properties: ';

/*
Notes end
*/

/*
Sign in
*/

$lang['signin.header.head'] = 'Sign in!';

$lang['signin.form.username'] = "Username";
$lang['signin.form.password'] = "Password";
$lang['signin.form.submit'] = "Sign in";

$lang['signin.sso.box'] = 'Follow this link to sign in via SSO.';

$lang['signin.allowsyou.head'] = 'Signing in allowes you to..';
$lang['signin.allowsyou.browse'] = 'Browse and search the full equipment database';
$lang['signin.allowsyou.location'] = 'Check an item\'s location';
$lang['signin.allowsyou.manuals'] = 'Access manuals, case studies and other supporting documentation.';

$lang['signin.layout.welcome'] = 'Welcome';
$lang['signin.layout.signout'] = 'Sign out';
$lang['signin.layout.myitems'] = 'My Items';
$lang['signin.layout.admin'] = 'administration';
$lang['signin.layout.ouadmin'] = 'administration organisational unit';

/*
Sign in end
*/

/*
Enquiry
*/

$lang['enquiry.header.label'] = 'Item Enquiry';
$lang['enquiry.note.form'] = 'Complete the form below to enquire about this equipment. A copy of your enquiry will be emailed to you.';
$lang['enquiry.note.fineprint'] = '* denotes a required field.';
$lang['enquiry.form.equip_info'] = 'Equipment Information';
$lang['enquiry.form.name'] = 'Name';
$lang['enquiry.form.location'] = 'Location';
$lang['enquiry.form.access'] = 'Access Level';
$lang['enquiry.form.details'] = 'Your details';
$lang['enquiry.form.name'] = 'Name';
$lang['enquiry.form.namehelp'] = 'Your full name';
$lang['enquiry.form.email'] = 'Email';
$lang['enquiry.form.emailhelp'] = 'Your contact email address - your enquiry receipt will be sent here.';
$lang['enquiry.form.phone'] = 'Phone Number';
$lang['enquiry.form.phonehelp'] = 'Your contact telephone number.';
$lang['enquiry.form.org'] = 'Organisation / Institution';
$lang['enquiry.form.orghelp'] = 'Your university or company name.';
$lang['enquiry.form.job'] = 'Role / Job Title';
$lang['enquiry.form.jobhelp'] = 'Are you an academic, PhD student, undergraduate student, etc?';
$lang['enquiry.form.deadline'] = 'Booking Deadline';
$lang['enquiry.form.deadlinehelp'] = 'If requesting an equipment booking, when must the work be completed?';
$lang['enquiry.form.enquiry'] = 'Your Enquiry';
$lang['enquiry.form.typ'] = 'Type';
$lang['enquiry.form.option.genenq'] = 'General enquiry';
$lang['enquiry.form.option.bookreq'] = 'Booking request';
$lang['enquiry.form.option.rescollab'] = 'Research collaboration';
$lang['enquiry.form.text'] = 'Text';
$lang['enquiry.form.texthelp'] = 'Enter the text for your enquiry, including any relevant information not entered elsewhere.';
$lang['enquiry.form.antispam'] = 'Please confirm that you are not a robot. :)';
$lang['enquiry.form.cancel'] = 'Cancel';
$lang['enquiry.form.send'] = 'Send Enquiry';

/*
Enquiry end
*/

/*
Admin
*/

//admin home
$lang['admin.home.helpbox'] = 'Here you can find help with the administration of the system:';
$lang['admin.home.header1'] = 'Admin menu';

$lang['admin.home.itemadm'] = 'Manage inventory';
$lang['admin.home.item_field_cust'] = 'Customize fields';
$lang['admin.home.item_new'] = 'Add new item';
$lang['admin.home.import'] = 'import via CSV';
$lang['admin.home.export'] = 'export via CSV';

$lang['admin.home.hp_header'] = 'Homepage blocks';
$lang['admin.home.hp_link'] = 'to Homepage blocks';
$lang['admin.home.hp_cust'] = 'Adjust the design of the blocks on the homepage';

$lang['admin.home.cat_header'] = 'Categories';
$lang['admin.home.cat_meta'] = 'Metadata';
$lang['admin.home.location'] = 'Location';
$lang['admin.home.user_header'] = 'Users';
$lang['admin.home.user_link'] = 'To Users';
$lang['admin.home.user_management'] = 'Usermanagement';
$lang['admin.home.report_header'] = 'Reporting';
$lang['admin.home.report_management'] = 'Manage reporting';
$lang['admin.home.report_link'] = 'To reporting';

//admin OU
$lang['admin.ou.header'] = 'Administer Organisational Structure';
$lang['admin.ou.disabled_title'] = 'The organisational tree is currently disabled for your catalogue.';
$lang['admin.ou.disabled_help'] = 'To enable the tree, change your configuration settings to <em>$config[\'app.use_ou_tree\'] = true;</em>.';
$lang['admin.ou.note'] = 'Here you can see the organisation structure for the catalogue. Click on the name of a organisational unit to edit it or click on the \'add\' button to add a organisational unit.';
$lang['admin.ou.labelh'] = 'Level Labels';
$lang['admin.ou.label_help'] = 'Label the levels of your organisational structure.';
$lang['admin.ou.example'] = 'e.g.';
$lang['admin.ou.safe'] = 'Save Labels';
$lang['admin.ou.warning'] = 'No organisational units have been setup yet.';
$lang['admin.ou.close'] = 'close';
$lang['admin.ou.title'] = 'Title';
$lang['admin.ou.name'] = 'Name *';
$lang['admin.ou.url'] = 'URL';
$lang['admin.ou.location'] = 'Location in Organisation';
$lang['admin.ou.loc_note'] = 'Changing location will move the organisational structure and all its descendents, to beneath the selected organisational structure.';
$lang['admin.ou.save'] = 'Save';

//admin items
$lang['admin.note.edit'] = 'To edit single items, look in the catalogue and click \'edit\' on the top right of the item window.';
$lang['admin.note.import_item'] = 'Import via CSV';
$lang['admin.note.export_csv'] = 'Export via CSV';

//admin custom fields
$lang['admin.cf.header'] = 'Custom Fields';
$lang['admin.cf.note'] = 'Here you can adjust data for items individually.';
$lang['admin.cf.note2'] = 'Custom fields can be used for every item of the system and even be populated via CSV import.';
$lang['admin.cf.warning'] = 'There are no custom fields yet!';
$lang['admin.cf.list'] = 'Here you can see all custom fields for the system';
$lang['admin.cf.existing'] = 'Existing custom fields';
$lang['admin.cf.add_new'] = 'add a custom field';
$lang['admin.cf.fieldname'] = 'field name';
$lang['admin.cf.add'] = 'add';
$lang['admin.cf.edit_head'] = 'edit field:';
$lang['admin.cf.edit_here'] = 'Here you can edit the field.';

$lang['admin.user.header'] = 'User management';
$lang['admin.user.ldapboldnote'] = 'If you are using SSO or LDAP it may not be necessary to have a complete user list for the catalogue.';
$lang['admin.user.ldapnote1'] = 'Kit-Catalogue reads user information automatically while authenticating with Active Directory / LDAP. If you use LDAP, only user with extra permissions need to be maintained in the database.';
$lang['admin.user.ldapnote2'] = 'All other users will be granted standard rights (reading rights to internal items). It does not matter, if they were created as a user before.';
$lang['admin.user.ldapnotetu'] = 'Created user can log in via LDAP login with the Employee number from the TU. The password entered here should therefor be a password with maximum safety, which never needs to be used.';
$lang['admin.user.add_new'] = 'Create new user';
$lang['admin.user.label_username'] = 'User name';
$lang['admin.user.label_forename'] = 'First name';
$lang['admin.user.label_surname'] = 'Last name';
$lang['admin.user.label_email'] = 'E-mail address';
$lang['admin.user.label_password'] = 'Password';
$lang['admin.user.label_password_confirm'] = 'Repeat Password';
$lang['admin.user.add_user_button'] = 'Add User';
$lang['admin.user.usernote'] = 'Here you can check and edit permissions for all users.';
$lang['admin.user.no_users'] = 'There are no users yet.';

$lang['admin.useredit.header'] = 'Edit user';
$lang['admin.useredit.changepw'] = 'Change password';
$lang['admin.useredit.ldap_precedence'] = 'Kit-Catalogue currently uses LDAP-Authentification. LDAP-Authentification will be prioritized over local login.';
$lang['admin.useredit.password_effect'] = 'Changing the password here, will only have an effect, if the username and/or the password cannot be found in the Active Directory.';
$lang['admin.useredit.admin_example'] = 'This is the case for the premade Admin-Account.';
$lang['admin.useredit.not_using_db'] = 'Kit-Catalogue does not use authentication via the own database at the moment. Changing the password here will not have any effect.';
$lang['admin.useredit.cancel'] = 'Cancel';
$lang['admin.useredit.save'] = 'Save';
$lang['admin.useredit.details'] = 'Here we can change the user data';
$lang['admin.useredit.fineprint'] = '* marks a mandatory field.';
$lang['admin.useredit.permissions'] = 'Permissions';
$lang['admin.useredit.systemwide'] = 'Global Permissions';
$lang['admin.useredit.adm'] = 'System admin';
$lang['admin.useredit.specific'] = 'Special Permissions';
$lang['admin.useredit.orgspecific'] = 'All permissions for the organisational structure are listed here.';
$lang['admin.useredit.inclusive'] = 'Permission for higher organisational units are also valid for lower ones.';

$lang['admin.hp.header'] = 'Manage homepage blocks';
$lang['admin.hp.explanation'] = 'With homepage blocks you can add additional options for searching custom fields.';
$lang['admin.hp.boxtext'] = 'Here you can add a new homepage block';
$lang['admin.hp.blockname'] = 'Name of the block';
$lang['admin.hp.blockadd'] = 'Add homepage block';
$lang['admin.hp.count0'] = 'There are no homepage blocks yet';
$lang['admin.hp.list'] = 'Here you can find a list of all homepage blocks';

//admin category
$lang['admin.category.header'] = 'Administer Categories';
$lang['admin.category.add'] = 'Add a new category';
$lang['admin.category.name'] = 'Name';
$lang['admin.category.next'] = 'Next';
$lang['admin.category.rebuildh'] = 'Rebuild category Item Counts';
$lang['admin.category.rebuildnote'] = 'If you need to manually rebuild the item counts cached for each Category, use the button below.';
$lang['admin.category.rebuildsubmit'] = 'Rebuild Item Counts';
$lang['admin.category.cpvh'] = 'Configure CPV Codes';
$lang['admin.category.cpvnote'] = 'The full CPV list contains almost 9,500 entries and can slow down the Category administration pages. You can configure Kit-Catalogue to only use the CPV codes you find relevant by using the button below.';
$lang['admin.category.cpvcfg'] = 'Configure CPV Codes';
$lang['admin.category.note'] = 'Below is the list of the categories available for use in this catalogue.';
$lang['admin.category.note2'] = 'Categories are used to group together items of equipment with a similiar purpose or functionality.';
$lang['admin.category.warning'] = 'No categories have been set up yet.';

//admin access level
$lang['admin.access.header'] = 'Administer Access Levels';
$lang['admin.access.add'] = 'Add a new access level';
$lang['admin.access.name_label'] = 'Access Level Name';
$lang['admin.access.submit_label'] = 'Add Access Level';
$lang['admin.access.note'] = 'Below is the list of access level descriptions available for use in this catalogue';
$lang['admin.access.warning'] = 'No access levels have been setup yet';

//admin report
$lang['admin.report.header'] = 'Reports';
$lang['admin.report.note'] = 'To view the reports available for the different aspects of your catalogue, please select from the list below.';
$lang['admin.report.available'] = 'Available Reports';
$lang['admin.report.inv'] = 'Inventory';
$lang['admin.report.itm'] = 'Items';
$lang['admin.report.stc'] = 'Staff Contacts';
$lang['admin.report.man'] = 'Manufacturers';

//admin sites
$lang['admin.sites.header'] = 'Administer Sites';
$lang['admin.sites.add'] = 'Add a new site';
$lang['admin.sites.label'] = 'Campus/Site Name';
$lang['admin.sites.submit'] = 'Add Site';
$lang['admin.sites.note'] = 'Below is a list of the campus sites available for use in this catalogue.';
$lang['admin.sites.warning'] = 'No sites have been setup yet.';

//admin building
$lang['admin.building.header'] = 'Administer Buildings';
$lang['admin.building.add'] = 'Add a new building';
$lang['admin.building.code'] = 'Building Code';
$lang['admin.building.name'] = 'Name';
$lang['admin.building.site'] = 'Campus Site';
$lang['admin.building.site_warning'] = 'No campus sites have been setup yet.';
$lang['admin.building.site_note'] = 'Campus sites are not essential, but we advise taking the time to add them, escpecially for multi-campus institutions.';
$lang['admin.building.lat'] = 'Latitude';
$lang['admin.building.long'] = 'Longitude';
$lang['admin.building.submit'] = 'Add New Building';
$lang['admin.building.note'] = 'Below is the list of the buildings available for use in this catalogue';
$lang['admin.building.warning'] = 'No buildings have been setup yet.';

//admin org struc
$lang['admin.orgstr.'] = '';


//admin ou
$lang['adminou.home.header'] = 'Admin Options';
$lang['adminou.home.itemadmin'] = 'Manage Items';
$lang['adminou.home.future_release'] = 'You cannot import items directly yet, but you can use the CSV import!';
$lang['adminou.home.report'] = 'Reports and Statistics';
$lang['adminou.home.inventory_report'] = 'Item report';
$lang['adminou.reports.header'] = 'Reports';
$lang['adminou.reports.available'] = 'Available Reports';
$lang['adminou.reports.items'] = 'Objects';

$lang['adminou.inventory.header'] = 'Item report';
$lang['adminou.inventory.customize'] = 'You can configure your report with the following options:';
$lang['adminou.inventory.filter'] = 'Filter options';
$lang['adminou.inventory.filternote'] = 'Use the filter options to show only fitting items.';
$lang['adminou.inventory.fields'] = 'Fields in the report';
$lang['adminou.inventory.fieldsnote'] = 'Choose which information should be displayed.';
$lang['adminou.inventory.fieldsnote2'] = 'You can change the order with the arrow buttons.';
$lang['adminou.inventory.reporting_fields'] = 'Fields of the report';
$lang['adminou.inventory.available_fields'] = 'Available Fields';
$lang['adminou.inventory.orderby'] = 'Sort by';
$lang['adminou.inventory.ordernote1'] = 'You can choose up to 3 rows to order the report by.';
$lang['adminou.inventory.ordernote2'] = 'The name of the item is the title of the item page. If a item does not have a name, the model of the manufacturer will be the name.';
$lang['adminou.inventory.orderby1'] = 'First sort by...';
$lang['adminou.inventory.orderby2'] = 'Than sort by...';
$lang['adminou.inventory.orderby3'] = 'Than sort by...';
$lang['adminou.inventory.view_report'] = 'See report';
$lang['adminou.inventory.download_csv'] = 'Download report as CSV';

$lang['adminou.showreport.header'] = 'Item report';
$lang['adminou.showreport.generatednote'] = 'Generated at ';
$lang['adminou.showreport.items_found'] = ' items found.';
$lang['adminou.showreport.no_items_found'] = 'No items were found for your filters..';

$lang['adminou.showreport.asc'] = 'Ascending';
$lang['adminou.showreport.desc'] = 'Descending';

$lang['admin.edititem.header_edit'] = 'Edit: ';
$lang['admin.edititem.new_item'] = 'New Item';
$lang['admin.edititem.back'] = 'Back to Catalogue';
$lang['admin.edititem.required'] = '* Denotes a required field.';
$lang['admin.edititem.last_updated'] = 'Last updated';
$lang['admin.edititem.visible_public'] = 'This item is <br /><strong>visible to the public</strong>.';
$lang['admin.edititem.name_note'] = 'General name of the item. Mandatory if <em>Manufacturer</em> is blank.';
$lang['admin.edititem.manufacturer_note'] = 'Mandatory if <em>Title</em> is blank.';
$lang['admin.edititem.ou_note'] = 'Where in the organisational tree does this item reside.';
$lang['admin.edititem.ou_help'] = '(only administrators can change an item\'s organisational unit)';
$lang['admin.edititem.visibility'] = 'Is the catalogue entry available for public view or just internally?';
$lang['admin.edititem.internal_only'] = 'Internal Only';
$lang['admin.edititem.public'] = 'Public';
$lang['admin.edititem.save_changes'] = 'Save Changes';
//custodian
$lang['admin.edititem.custodian'] = 'The custodian or primary staff contact.';
$lang['admin.edititem.mail_label'] = 'Email';
$lang['admin.edititem.name_label'] = 'Name';
$lang['admin.edititem.select_mail'] = 'Select an existing email address';
$lang['admin.edititem.existing_mail'] = 'or use a new email address (The "existing email" drop-down must be set to blank)';
$lang['admin.edititem.secondary_staff'] = 'The secondary staff contact.';
//editors
$lang['admin.edititem.editor_note'] = 'Editors can update an individual item\'s details, but are not contactable through emails or enquiries. ';
$lang['admin.edititem.add_editor'] = 'Add New Editors';
$lang['admin.edititem.enter_editornames'] = 'Enter the username of each new editor, one per line.';
$lang['admin.edititem.current_editors'] = 'Current Editors For This Item';
$lang['admin.edititem.none'] = 'None listed.';
$lang['admin.edititem.to_remove_tick'] = 'To remove an editor tick the appropriate box.';
$lang['admin.edititem.username'] = 'username';
$lang['admin.edititem.remove'] = 'remove?';
//descriptions
$lang['admin.edititem.short_desc_note'] = 'A short description to show on listings pages or in search results.';
$lang['admin.edititem.full_desc_note'] = 'The full description to show on the detail page. Note that there might be problems with the loading of your item page, if you use this field. You may use any field other than this and the specification field.';
$lang['admin.edititem.wikitext'] = 'Use wiki-text to format your text!';
$lang['admin.edititem.technical_desc'] = 'Description of the technical specification or operational limits of the equipment. (e.g. Operating temperatures or sample-size restrictions)';
$lang['admin.edititem.upgrades_note'] = 'Any Upgrades that are installed.';
$lang['admin.edititem.future_upgrades_note'] = 'Any potential upgrades that might be purchased or made available in the future.';
$lang['admin.edititem.manufacturer_website_note'] = 'A specific web page containing the manufacturer\'s information about this item, or the manufacturer\'s main website.';
$lang['admin.edititem.technique_note'] = 'What kind of scientific principle, technique or methodology the item uses. (if applicable)';
$lang['admin.edititem.acronym'] = 'Any short-hand acronym or abbreviation used to identify the item.';
$lang['admin.edititem.keywords_1'] = 'Any keywords not mentioned in any of the fields above, but which should include this item in search results.';
$lang['admin.edititem.keywords_2'] = 'This could also include variations in spelling or terminology (e.g. \"multiaxis, multi-axis, multi axis\"';
$lang['admin.edititem.tags_1'] = 'Use tags to group different equipment by particular research areas or activity.';
$lang['admin.edititem.tags_2'] = 'Tags should be seperated by a comma. e.g. graphene, nanotech';
$lang['admin.edititem.tags_3'] = 'Only alphanumeric characters and hyphens can be used in the tag names.';
//parent facilities
$lang['admin.edititem.parent_1'] = 'Yes, this item is a parent facility.';
$lang['admin.edititem.parent_2'] = 'No, this is just a normal item.';
$lang['admin.edititem.nochild'] = 'No child items are associated with this facility.';
$lang['admin.edititem.removechild'] = 'Untick a child item to remove it from this facility.';
$lang['admin.edititem.addchild'] = 'To add items to this facility, edit the child items individually and select this item as their parent.';
$lang['admin.edititem.noparents'] = 'No parent facilities have been defined.';
$lang['admin.edititem.removefacility'] = 'Untick a parent facility to remove this item from it.';
//Categories
$lang['admin.edititem.associated'] = 'Associated Categories';
$lang['admin.edititem.use_new'] = 'or use a new category';
//Access
$lang['admin.edititem.access_note'] = 'What kind of access is usually permitted to this item?';
$lang['admin.edititem.usergroup_note'] = 'Short description of the typical user group. (e.g. "Department" or "Renewable Energy Research Group")';
$lang['admin.edititem.available_note'] = 'An indication of when this item might be available for use. (e.g. "Wednesday afternoons")';
$lang['admin.edititem.restriction_note'] = 'Any restrictions on the use of this item, or specific Health/Safety considerations, etc.';
$lang['admin.edititem.portability_note'] = 'For most items the portability will be obvious and there is no need to be entered, but for special cases you can enter portability information here.';
$lang['admin.edititem.training_note'] = 'Is training required before using this item?';
$lang['admin.edititem.training_1'] = ' Yes, specialised training is required.';
$lang['admin.edititem.training_2'] = ' No training required.';
$lang['admin.edititem.training_3'] = ' Not specified (not shown on site).';
$lang['admin.edititem.traning_provided'] = 'Can training on using this item be provided/arranged?';
$lang['admin.edititem.training_4'] = 'Yes, we can arrange the appropriate training.';
$lang['admin.edititem.training_5'] = 'No, we cannot arrange training.';
$lang['admin.edititem.training_6'] = 'Not specified (not shown on site).';
$lang['admin.edititem.calibrated'] = 'Is this item calibrated?';
$lang['admin.edititem.iscalibrated'] = 'Yes, this item is calibrated.';
$lang['admin.edititem.calibrated_1'] = 'No, this item is not calibrated.';
$lang['admin.edititem.calibrated_2'] = 'Automatic - This item is, or must be, calibrated automatically when used.';
$lang['admin.edititem.calibrated_3'] = 'Not Applicable (not shown on-site).';
$lang['admin.edititem.quantity_note'] = 'If this record describes multiple items, please provide details here.';
//Assets
$lang['admin.edititem.supplier'] = 'Supplier name';
$lang['admin.edititem.maintenance'] = 'Details of any maintenance agreements, contracts or cost.';
$lang['admin.edititem.disposed'] = 'Has this item been disposed of?';
$lang['admin.edititem.disposed_1'] = 'No, still in service.';
$lang['admin.edititem.disposed_2'] = 'Yes, sold on.';
$lang['admin.edititem.disposed_3'] = 'Yes, scrapped.';
$lang['admin.edititem.archive_note1'] = 'Archive records are hidden on the catalogue, and are only visible in the administration area.';
$lang['admin.edititem.archive_note2'] = 'They can be removed regularly by administrators.';
$lang['admin.edititem.archive_active'] = 'No, the record is still active.';
$lang['admin.edititem.archive_inactive'] = 'Yes, this item\'s record is now inactive.';
$lang['admin.edititem.comment_note'] = 'Comments or further information about this item.';


/*
Admin end
*/

/*
Error
*/

$lang['error.404.header'] = 'The requested resource does not exist';
$lang['error.404.note'] = 'Sorry, but the page you tried to view could not be found. It may have been moved or renamed.';
$lang['error.404.next'] = 'What Next?';
$lang['error.404.listone'] = 'If you came from another page on this website, then we may have made a mistake in one of our links.';
$lang['error.404.listtwo'] = 'If you typed the link in to your browser, please check the address and its spelling and try again.';
$lang['error/.404.listthree'] = 'If you followed a link here from another site it may be that their link is broken. If you let the site owners know, they may be able to fix the link.';
$lang['error.404.listfour'] = 'Go to the homepage and begin browsing from there. ';
$lang['error.404.homepagelink'] = 'Homepage';

/*
Error end
*/


/*
Footer
*/

$lang['footer.contactowner'] = 'Contact the catalogue owner';
$lang['footer.poweredby'] = 'This equipment database is powered by the <a href="http://www.kit-catalogue.com/">Kit-Catalogue</a> system.';
$lang['footer.license'] = 'Kit-Catalogue has been developed by Loughborough University and is licensed under the  <a href="http://www.gnu.org/copyleft/gpl.html">Open Source GPLv3 licence</a>.';

/*
Footer end
*/

//favicon
$lang['favicon'] = "https://www.tu-braunschweig.de/icons/tubsdesign/favicon.ico" ;

?>
