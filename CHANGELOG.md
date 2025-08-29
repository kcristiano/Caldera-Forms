== Changelog ==

= Caldera Forms 1.9.8 (December 3, 2023) php 8.0 and 8.1 compatability =
* Fixes php 8.0 and 8.1 compatability.

= Caldera Forms 1.9.7 (March 22, 2022) cf-api fix =
* Fixes an issue with cf-api query param when no id attribute is set.

= Caldera Forms 1.9.6 (December 13, 2021) Regenerating dependencies =
* Regenerate dependencies

= Caldera Forms 1.9.5 (November 4, 2021) 0 - CF-1.9.5 - ... =
* Fix sanitization issue
* Fix dependency version issue

= Caldera Forms 1.9.4 (February 26, 2021) Saving buttons, forms and creators =
* Fixes WP 5.6 Compatibility issues
    * make sure the field edition process ( in @calderajs package ) is passed all data required
    * dequeue jQuery 1.12.4
    * changed deprecated jQuery events
    * call jQuery instead of $
    * add a js click event to reTrigger baldrickTrigger events ( jQuery update seem not to listen to baldrick events for DOM elements that are not shown on the first pageload )
    * add an html onClick event to call baldrickTrigger on the view entry button
    * Add 'permission_callback' => TRUE to tokens.php and crud.php


= Caldera Forms 1.9.3 (December 21, 2020) WP 5.6 =
* Fixes WP 5.6 Compatibility issues
    * New Form creation
    * Clone Form
    * Import / Export Form feature
    * Entry viewer for pinned forms
    * Color picker field


= Caldera Forms 1.9.2 (July 22, 2020) Savings =
* [Fixes Privacy Settings issue](https://github.com/CalderaWP/Caldera-Forms/issues/3577)
* [Fixes caldera_forms_entry_viewer shortcode issue](https://github.com/CalderaWP/Caldera-Forms/issues/3571)
* [Form settings saving issue](https://github.com/CalderaWP/Caldera-Forms/issues/3570)
* [Fixes Duplicate queries selecting from form table on every request](https://github.com/CalderaWP/Caldera-Forms/issues/3553)
* [Entry edition can now be used with plain permalinks structure set](https://github.com/CalderaWP/Caldera-Forms/issues/3568)
* [Fixes Duplicate queries selecting from form table on every request](https://github.com/CalderaWP/Caldera-Forms/issues/3553)
* [Fix Connected forms saving](https://github.com/CalderaWP/Caldera-Forms/pull/3587)

= Caldera Forms 1.9.1 (June 19, 2020) Rebuild build =
* This version fixes an issue with processors that comes from the build process for 1.9.0

= Caldera Forms 1.9.0 (June 18, 2020) Conditionals Improved =
* [Replace conditional logic and improve performance](https://github.com/CalderaWP/Caldera-Forms/pull/3519)
* [Set minimum WordPress version to 5.1.0](https://github.com/CalderaWP/Caldera-Forms/pull/3465)
* [Fixes deprecated warnings in PHP 7.4](https://github.com/CalderaWP/Caldera-Forms/pull/3539)
* [Prevent get_field_data() from always returning null for string form IDs](https://github.com/CalderaWP/Caldera-Forms/pull/3417)
* [Adapt to rawurlencode()](https://github.com/CalderaWP/Caldera-Forms/pull/3528)
* [Add/adjust escaping functions](https://github.com/CalderaWP/Caldera-Forms/pull/3524)
* [Update SendWP SDK](https://github.com/CalderaWP/Caldera-Forms/pull/3548)
* [add `Release Asset` header](https://github.com/CalderaWP/Caldera-Forms/pull/3367)

= Caldera Forms 1.8.11 (March 05, 2020) Two Fixes  =
*"Add Condition" (in line) button is broken in processors
*Magic tag selector throws error if no variables in form


= Caldera Forms 1.8.10 (February 11, 2020) To all our fathers  =
* Main mailer is omitting all text between two % symbols in input
* Variables set in processors are unset after form edition
* Show calculation value when unhiding the calculation field
* Errors stored in transient are printed on all forms in same page if cf_er is used
* Entry resend fails to send conditional fields
* The resend button in entries list view fails to resend the email
* Editing entires in Number Field with value of 0 returns a blank field
* Can not access created form (form cache not cleared)
* Error if TypeError: system_values[type] is null edit.js
* JavaScript Error `zh_cn is not available in the catalog`
* Spelling issue in file field validation message
* Re URL encode the URL variables when using a redirection processor
* Ensure `\Caldera_Forms_Forms::get_forms:()` returns forms added on a filter.
* New filter hook is for numbers passed to calculation 'caldera_forms_calculation_field_get_value'
* Allow processor template to be a string
* Introduce new cf2 services to aid in add-on development
* Improve webpack config


= Caldera Forms 1.8.9 (December 17, 2019) Last '19 update  =
* Hide Pro settings by default and introduced 'caldera_forms_show_pro_ui' filter hook
* Fixed a PHP notice
* completed strings that were missing from translations
* Corrected the list of preset options for US states
* A {referer_url} magic tag was added
* The color picker field was fixed
* Plugins management within our testing local environment

= Caldera Forms 1.8.8 (November 11, 2019) SendWP Init =
* Remove Pro mention information panels next to forms lists (Caldera Forms -> Forms)
* Add mention to SendWP under Email settings
* Add mention to SendWP in the Mailer tab of Form edition page

= Caldera Forms 1.8.7 (August 27, 2019) rtrim( CF\r ) =
*   [r of round() function in manual calculations was trimmed](https://github.com/CalderaWP/Caldera-Forms/issues/3316)
*   [an error was logged when two forms were inserted in same page and one of them was set a File field](https://github.com/CalderaWP/Caldera-Forms/issues/3299)
*   [if no file corresponding to locale was found, Parsley logged an error](https://github.com/CalderaWP/Caldera-Forms/issues/3295)
*   [Vietnamese translation for Parsley](https://github.com/CalderaWP/Caldera-Forms/issues/3303)
*   [PHP coding standards for Caldera Forms](https://github.com/CalderaWP/Caldera-Forms/issues/3314)
*   [switched to Github actions and Gitlab CI](https://github.com/CalderaWP/Caldera-Forms/pull/3306)

= Caldera Forms 1.8.6 (July 23, 2019) trim( CF\n) =
*   New filter Hook "caldera_forms_private_upload_directory"
*   [Checkbox options were showed in json format in entry viewer](https://github.com/CalderaWP/Caldera-Forms/issues/3280)
*   [trim manual formulas when line breaks are mistakenly pasted](https://github.com/CalderaWP/Caldera-Forms/issues/3270)
*   [Fixed cf2 is undefined error logged in ajax queries](https://github.com/CalderaWP/Caldera-Forms/issues/3262)
*   [Fixed options for emails on the form edition view when Pro enhanced delivery is enabled](https://github.com/CalderaWP/Caldera-Forms/issues/3288)

*   [Fixed an issue intalling CF, trunk folder was interfering in tags/1.8.5 folder]
*   [Fixed A pro issue that broke enhanced delivery ( so PDF link and attachment) when multiple files were attached to the email ]


= Caldera Forms 1.8.5 (May 29, 2019) tan(Caldera) =
*   [Caldera Forms calculation fields triggered deprecated function warnings in PHP 7.2.Â ](https://github.com/CalderaWP/Caldera-Forms/issues/2335)
*   [Add a warning if the variable wp is not defined in the front-end](https://github.com/CalderaWP/Caldera-Forms/pull/3202). This alerts users to conflicts like the one that has been fixed with [WP Rocket.](https://wp-rocket.me/blog/wp-rocket-3-3/)
*   [Bug causing a PHP error when viewing entries of a form that has magic tags used for select field labels.](https://github.com/CalderaWP/Caldera-Forms/issues/3167)
*   [Missing CSS for some field types.](https://github.com/CalderaWP/Caldera-Forms/issues/3174)
*   [When an existing form that was previously submitted and was edited, calculation field values returned to zero](https://github.com/CalderaWP/Caldera-Forms/issues/3146).
*   [Advanced file fields v2 were only attaching one file.](https://github.com/CalderaWP/Caldera-Forms/issues/3116)

= Caldera Forms 1.8.4 (March 28, 2019) CF-1.8.4 =
* FIXED: Elementor/Beaver builder conflicts withe render client
* FIXED: Translation code reset to translation files
* FIXED: Markup for the Resend button in entries list
* FIXED: Console errors due to Blocks client enqueued on frontend
* ADDED: Value of additional CSS class name in Caldera Forms block added to rendering

= Caldera Forms 1.8.3 (March 19, 2019) WeGlot support, React + legacy-bundle for WP < 5  =
* ADDED: Weglot Support on page/post Gutenberg block to Form editor page
* FIXED: CF2 File field multiple files attachments
* FIXED: CF2 File field for WordPress versions older than 5.0
* FIXED: Prevent js errors when no cf2 field is in the form during submission event
* FIXED: Conditional disabled
* FIXED: Toggle switch field not initialized properly


= Caldera Forms 1.8.2 (March 7, 2019) It's Snowing In Pittsburgh =
* SECURITY: Patch for issue affecting CF Pro API. Does not affect most users.
* FIXED: Javascript error when Caldera Forms and WordPress SEO by Yoast or Jetpack's map module were used toghether.
* FIXED: Conditionals were missing when variable pricing form template was used.
* FIXED: Prevent form from attempting to render if it doesn't exist, before that triggers a PHP notice.
* FIXED: Consent field, with some settings, created a PHP notice.
* FIXED: Datepicker did not look functional on some devices.
* FIXED: Rangeslider fields, when used in calculations, caused UI lags.

= Caldera Forms 1.8.1 (February 28, 2019) Improved options in fields and fixed js conflicts =
* FIXED: JavaScript error on form submission in Firefox, and possibly other browsers.
* FIXED: Regenerated translation pot file.
* FIXED: Remove forced 'checked' attribute value for radio field types.
* FIXED: Checkbox, dropdown, and autocomplete field types could not have disabled options.

= Caldera Forms 1.8.0 (February 27, 2019) cf2 taste. =
* ADDED: Filter for forms returned by Rest API ( 'caldera_forms_api_prepare_form', $form, $request )
* ADDED: New Advanced File Field ( Added support for drag-and-drop, image previews, Max File Upload size )
* ADDED: job manager for the Transients API ( delete transients via job manager )
* FIXED: Uncaught ReferenceError: ceil is not defined, allows ceil and tan to be used in manual formulas of calculations field
* FIXED: Warning: in_array() expects parameter 2 to be array, null given , fixed and added a test
* FIXED: Date Picker Validation not updating on selecting date
* FIXED: Fatal error when requesting forms via API with ?full=true&details=true
* FIXED: When advancing pages via breadcrumbs - empty fields are validated, preventing advancing
* FIXED: CSV exported from entry viewer has JSON encoded options for checkbox fields
* IMPROVED: Structure of API responses for form routes
* IMPROVED: Handling for deleting the files of private files field
* IMPROVED: Use output buffering to prevent PHP warnings/notices from returning bad JSON ( Fixes: Uncaught TypeError: Cannot read property 'data' of undefined )
* IMPROVED: Added jQuery as a dependency for validator script
* IMPROVED: Don't include disabled forms in the list of forms available in Gutenberg block
* IMPROVED: Local testing environment includes phpunit tests
* IMPROVED: Added js unit tests in Travis CI
* DEPRECATED: Advanced File Uploader 1.0

= Caldera Forms 1.7.6 (January 10, 2019) Blocks. =
* FIXED: Block was not showing in the editor if Gutenberg was not active and WordPress 5.0.1+.
* FIXED: JavaScript error- target container is not a DOM element, due to privacy settings client.

= Caldera Forms 1.7.5 (December 18, 2018) Blocks Blocked. =
* FIXED: Unable to continue with Freemius optin after update to WordPress 5.0.
* FIXED: Freemius optin in Gutenberg content WordPress 5.0.
* FIXED: Form imports may not work after update to WordPress 5.0.1
* FIXED: Logger may cause excessive usage, disabled for now. See: https://github.com/CalderaWP/Caldera-Forms/issues/2855

= Caldera Forms 1.7.4 (October 23, 2018) import {clone} from form =
* FIXED: When cloning a form, the clone had the same ID of the original form, causing the original form to appear to have been lost.
* FIXED: When importing a form, the calculation values of select options were reset to 1.

= Caldera Forms 1.7.3 (October 17, 2018) We're Working On Big Things, Sorry About The Wait, We Wanted You To Have Some Bug Fixes =
* FIXED: Settings for disabling enhanced delivery via Caldera Forms Pro not saving.
* FIXED: Improper validation for better phone fields.
* FIXED: Non admin users were not able to edit their entries in the front-end.
* FIXED: When resending emails, magic tag not parsed in recipients, causing fallback email to be used.
* FIXED: Major performance issue with select2 fields.
* FIXED: Email settings not copied when cloning forms.
* ADDED: Support for calculation value using caldera_forms_field_option_presets filter for field presets.
* ADDED: Translator comments for PII fields.
* ADDED: New action caldera_forms_admin_pre_enqueue - runs before admin assets are enqueued, after they are registered.
* IMPROVED: Markup for consent field link to privacy page.
* FIXED: Dollar sign was not localized in CF Pro marketing.
* FIXED: Could not select form in Gutenberg block if there was only one block.
* FIXED: Dead code from older location of CF Pro API client.
* FIXED: Conditionals from processors not saving if variables in use.

= Caldera Forms 1.7.2 (June 27, 2018) Infinite Jest =
* FIXED: [Incorrect usage of Gutenberg InspectorControls](https://github.com/CalderaWP/Caldera-Forms/issues/2612)
* FIXED: [Input masks not initialized if conditional logic is used on a field.](https://github.com/CalderaWP/Caldera-Forms/issues/2612)
* FIXED: [HTML fields not applying wpautop formatting](https://github.com/CalderaWP/Caldera-Forms/issues/2619)
* FIXED: [Caldera Forms Pro API keys did not appear to save](https://github.com/CalderaWP/Caldera-Forms/issues/2608)
* FIXED: [Anti-spam Honey Pot Settings Not Saving](https://github.com/CalderaWP/Caldera-Forms/issues/2489)
* ADDED: [JavaScript Unit Tests With Jest](https://github.com/CalderaWP/Caldera-Forms/issues/2596)
* ADDED: [Documentation links in Privacy Screen Before Choosing Form](https://github.com/CalderaWP/Caldera-Forms/issues/2598)
* ADDED: [API Client and State Modules](https://github.com/CalderaWP/Caldera-Forms/issues/2564)
* ADDED: [Additional Server-side Validation for email and number fields](https://github.com/CalderaWP/Caldera-Forms/issues/2638)

= Caldera Forms 1.7.1 (June 7, 2018) Flushing Meadows =

* FIXED: Rewrite rules could be flushed during activation in a way that causes an error.
* FIXED: Forms with advanced file fields not submitting properly on Safari and Edge.
* FIXED: Privacy settings being lost on form update.
* FIXED: PHP Warning when there are no internal forms.
* 1.7.1.1: Remove all flush rewrites
* 1.7.1.2: https://github.com/CalderaWP/Caldera-Forms/issues/2595
* 1.7.1.3: https://github.com/CalderaWP/Caldera-Forms/issues/2597
* 1.7.1.4: https://github.com/CalderaWP/Caldera-Forms/issues/2574#issuecomment-395792791

= Caldera Forms 1.7.0 (May 31, 2018) GDPR, PHP, Onward =


GPDR Privacy Tools Preview Release: May 15, 2018

* ADDED: #GDPR Consent fields and privacy page magic tag
* ADDED: #GDPR Option to delete all entries of a form
* ADDED: #GDPR Option to delete all entries of a from
* ADDED: #GDPR Integration with core exporters and erasers and a shiny new privacy page
* IMPROVED: #GDPR Marking fields as containing personally identifiable information
* ADDED: #GDPR Developer-facing APIs for getting fields used for personally identifiable data, modifying the data supplied to WordPress' exporters and erasers by Caldera Forms and more.
* ADDED: #GDPR caldera_forms_gdpr_callback filter For creating custom GDPR exporters and erasers in plugins or custom site development.
* ADDED: #GPDR caldera_forms_privacy_policy_page_url filter  To chane the privacy page link used by consent field and privacy page magic tag from its default -- WordPress' saved option for privacy page.
* REMOVED: SUPPORT FOR PHP 5.4 OR LOWER
* ADDED: Helpful messages in place of forms when PHP or WordPress version requirements are not met
* ADDED: Developer-facing tool for making selecting and deleting saved Caldera Forms entry data easier
* ADDED: Developer-facing tool for custom, paginated queries of entry data
* FIXED: Warning in PHP 7.2 related to count() function
* FIXED: JavaScript conflicts with WooCommerce pages, resolved by removing the Caldera Forms button from all WooCommerce post editors.
* ADDED: Summary and HTML fields automatically set slug
* IMPROVED: automated testing and better documentation for contributing to Caldera Forms. Please see the Github readme.

= Caldera Forms 1.6.3 (May 15, 2018) The Mask =

* FIXED: Could not edit new fields, without saving and reloading first.
* FIXED: Input field masking was not working.

= Caldera Forms 1.6.2 (May 14, 2018) GDPR Part 1 =

* FIXED: Fixed deprecated jQuery XHR syntax in some places. Was causing jQuery errors in some browsers.
* FIXED: mp3s were not allowed by some browsers when they should have been for file fields.
* FIXED: If spam was detected by CF Pro entry was still shown in entry viewer.
* FIXED: Nonce refresh was being abused by spammers and not helping with cache issues.
* IMPROVED: One webback build file for Pro and Blocks
* IMPROVED: Gutenberg block now has better previews and more sensible controls.
* ADDED: Ability to show HTML "field" content in emails.
* ADDED: Link to Caldera Forms Pro app from Caldera Forms Pro page.
* ADDED: Option to mark fields as containing personally identifying information.
* ADDED: caldera_forms_field_wrapper_after_delete action
* ADDED: caldera_forms_field_wrapper_before_delete action
* ADDED: Automatic repair of pro tables if not present.

Caldera Forms 1.6.2 Release Candidate 1 May 10, 2018

= Caldera Forms 1.6.1.1 (April 12, 2018)  =
* Additional SECURITY fix for CVE-2018-7747


= Caldera Forms 1.6.1 (April 12, 2018) Full Globe  =

* FIXED: Logo looked bad on main admin page.
* FIXED: Some sites had an error on update due to PHP 5.3 syntax.
* FIXED: PHP warning when getting entries via REST API for a form with no saved entries.
* FIXED: We did not have the new videos Christie made in the readme.

= Caldera Forms 1.6.0 (March 26, 2018) Anti-Spam: Enhanced  =

= Caldera Forms 1.6.0-rc.1 - March, 14, 2018 =
* SECURITY: CVE-2018-7747
* ADDED: Multiple BCCs and CCs on auto-responders.
* ADDED: Support for multiple checkboxes to be selected by default, using a filter.
* ADDED: Caldera Forms Pro advanced anti-spam.
* ADDED: Freemius insights integration.
* ADDED: Warnings if your PHP version is not supported.
* DEPRECATED: Support for out of date PHP versions.
* UPDATED: Parsely validation library to 2.8.1
* IMPROVED: Made reply-to/from labels in main mailer more accurately reflect how Caldera Forms Pro works, when Caldera Forms Pro is being used.
* FIXED: Work around that was previously in place for WooCommerce nonce validation when items are in cart is now updated to work again.
* FIXED: Breadcrumbs on multi-page forms disappeared when form was submitted, but did not complete the submission.
* FIXED: Multi-page forms not advancing with empty, non-required number fields.
* FIXED: Field sync was not recovering when fields were hidden by conditional logic.
* FIXED: CC and BCC fields not passing to Caldera Forms Pro properly.
* FIXED: Some cases where file fields caused errors during submissions.
* FIXED: Wrong country code was used for Arkansas. Sorry Arkansas.


= Caldera Forms 1.5.9 (January 24, 2018) Happy 2018! =

Caldera Forms 1.5.9-rc.1 - January 18 2018.

* ADDED: Ability to remove wpautop formatting to auto-responder message, by removing a hook. `remove_filter(  'caldera_forms_autoresponse_mail', array( 'Caldera_Forms_Email_Filters', 'format_autoresponse_message' ) );`
* IMPROVED: Caldera Forms Pro API key settings - made inputs wider and setting validate without a page refresh.
* ADDED: Ability to disable enhanced delivery per form.
* ADDED: Ability to change log level via UI.
* ADDED: New unit tests.
* FIXED: Files did not attach to emails if sub menu entry viewer was enabled.
* FIXED: Menu order conflict with LifterLMS and some other plugins causing their menu to disappear.
* FIXED: PHP warning: Fix json_decode expects parameter 1 to be a string admin.php affecting entry exports and entry viewer.
* FIXED: The caldera_forms_entry_viewer shortcode was not using output buffering
* FIXED: Section breaks were showing in CSV
* FIXED: External forms were not working with entry viewer.


= Caldera Forms 1.5.8 (December 21, 2017) We Got You A Block For Christmas =
* ADDED: Caldera Forms block
* ADDED: Caldera Forms Pro API client is now included, you're one step closer to more reliable email delivery with priority support and anti-spam tools.
* ADDED: get_form method to Caldera_Forms_Entry class.
* ADDED: aria-label attribute to form.
* NEW FILTER: caldera_forms_fallback_email - changes the default fallback email.
* FIXED: BC and BCC not setting properly in main mailer with some configurations.
* FIXED: Buttons in main admin page had confusing markup for screen readers that was invalid HTML.
* FIXED: HTML attribute role of form was added to form, which confuses screen readers and is against HTML spec.
* FIXED: HTML attribute role of field was added to element wrapping fields, which confuses screen readers and is against HTML spec.
* FIXED: Edit tokens for front-end editing of entries.
* FIXED: Breadcrumbs were not hiding after submission of multi-page form. Now they hide.
* FIXED: Conflict with Pods effecting Pods Template editor when Caldera Forms is active.
* FIXED: Entry viewer was displaying values of checkbox fields improperly.
* FIXED: Advanced file field required option didn't block users from going to next page, if field was empty.
* FIXED: Select field default was not used in calculation field default.
* FIXED: Select fields were not outputting an empty option, if there default value was 0.
* FIXED: Credit card fields were validating too soon on multi-page forms, preventing advancing to the next page.
* FIXED: There was a console.log() left over from 1.5.7 dev, which is bad.
* FIXED: Some field field uploads could not process as form ID was not set properly.
* FIXED: Caldera_Forms_Entry::get_form_id() was not using all caps ID.
* FIXED: Github plugin updater URL in header.
* FIXED: WYSIWYG field saveds with extra whitespace and double escaped some values.
* IMPROVED: Caldera_Forms_Entry class was using wp_list_pluck() making it impossible to test isolated from WordPress, which was a problem for tests we are doing.
* IMPROVED: We now check if $wpdb is object before using in Caldera_Forms_Entry, making it possible to use this class without WordPress.

= Caldera Forms 1.5.7.1 (November 9, 2017) Quick Fix =
* FIXED: JavaScript error when using conditionals and summary fields.
* FIXED: With some field types, fields with conditional logic, might not be saved.

= Caldera Forms 1.5.7 (November 8, 2017) Prepare For Full Force Nico =
* NEW HOOK: caldera_forms_pre_check_condition filter. Early entry point for conditionals for logging or using an alternative conditional logic system.
* NEW HOOK: caldera_forms_insert_button_include filter. Use to prevent loading of Caldera Forms JavaScript or CSS in post editor.
* NEW HOOK: caldera_forms_submit_process_before filter. Early entry point for logging submissions, etc.
* FIXED: Caldera_Forms::get_field_data() when passed an entry ID always returned null.
* FIXED: Calculation fields used option value, not calculation value, serve-side, for select2 fields.
* FIXED: Role parameter for front-end entry viewer didn't work as string.
* FIXED: CF_API_DATA was being printed to DOM once per form instead of once.
* FIXED: If "Default Option" was used to set select (including autocomplete) default, it's was not set in CFState, effecting summary, HTML and calculation fields.
* FIXED: Checkbox fields were reporting all options in CFState, effecting summary, HTML and calculation fields.
* FIXED: Default value of fields, if initially hidden by conditionals, were not initially tracked properly in CFState, effecting summary, HTML and calculation fields.
* FIXED: Default values (unchanged) are shown in summary/html fields as "false".

= Caldera Forms 1.5.6.2 (October 12, 2017) Tomorrow is my birthday. =
* UPDATED: Input masking library to version 4 - https://github.com/RobinHerbots/Inputmask/blob/4.x/dist/jquery.inputmask.bundle.js
* FIXED: Input masked number fields, with mobile devices did not handle backspaces.
* FIXED: Basic phone field input masking was not working on mobile.
 with numbers was not working on mobile.
 * FIXED: Wrong arguments used with wp_upload_bits() when uploading CSV attached to email. Deprecation notice was triggered.
 * FIXED: Default value of checkbox and select fields was not supplied to calculation fields properly.
 * FIXED: Default value of hidden fields not supplied to calculation fields properly.
 * FIXED: Calculation with no calculation defined makes a invalid foreach notice instead of just being 0.
 * FIXED: Empty calculation triggers PHP Warning message about calc.php (line 218) invalid foreach Bug
 * FIXED: Compatibility with Lightspeed cache required changing a file in Caldera Forms, now it just works.

= Caldera Forms 1.5.6.1 (September 14, 2017) Quick Fix For Calculations. =
* FIXED: Calculation value was ignored by calculation fields.

= Caldera Forms 1.5.6 (September 13, 2017) Sorry for the delay, we had a minor tropical storm issue. =
* ADDED: BCC in auto-responder
* ADDED: Rely-to in auto-responder
* ADDED: Warning in admin if your site is not using SSL.
* ADDED: cf.form.submit JavaScript event triggered by form submission.
* ADDED: cf.form.validated JavaScript event when form is validated
* ADDED: cf.form.init JavaScript event triggered when form is initializes
* ADDED: Field ID in object passed by cf.remove JavaScript event.
* REMOVED: Setting for field description
* NEW FILTER: caldera_forms_csv_file_type to change CSV to TSV.
* SOFT DEPRECATED: Add a deprecation message on email settings screen, which will get absorbed into new settings screen. SendGrid API integration is supported, but discouraged.
* MAJOR UPDATE: Front-end JavaScript for calculations. Rewritten for performance reasons and to make more extensible and easier to add new features to.
* FIXED: From name and from email in main mailer din't work properly with bracket magic tags
* FIXED: Email resend button could trigger fatal error with some form configurations.
* FIXED: Advanced file field file handling.
* FIXED: Summary fields were showing magic tags of synced to field, instead of values, for fields that were field synced.
* FIXED: Auto-complete field calculation value was ignored.
* FIXED: Hidden option values (Labels Only mode) didn't update value on label change.
* FIXED: CSV exports had non-parsable dates.
* FIXED: Calculation fields were not running on page naviagation.
* FIXED: Caldera_Forms_Field_Honey::get() had unused parameters, which were required, but not called, which was causing honey pot issues.

= Caldera Forms 1.5.5 (August 17, 2017) We Had Fun In Canada ! =
* SECURITY FIX: Possible XSS vulnerability in form editor has been patched.
* FIXED: Error when resending forms.
* FIXED: Email settings screen was not showing.
* FIXED: Some configurations caused a 502 error on WPEngine related to object caching.
* FIXED: caldera_forms_pre_load_processors action was repeated.
* FIXED: Star rating fields set to be required could be submitted with no rating in some browsers.
* FIXED: date_diff function was used, which is not PHP 5.2 compatible.
* FIXED: If field IDs are changed from fld1234 style to words and one of those words was a honey pot word, honey pot could return a false positive.
* ADDED: Caldera_Forms_Field_Honey for honey-pot related functionality
* ADDED: Additional classes to generated processor fields.

= Caldera Forms 1.5.4 (August 4, 2017) Revenge of The Sith =
* FIXED: With some versions of MySQL when forms with a revision were saved, new version was marked a revision, not primary so it didn't look like it was saved.
* IMPROVED: There is now a back button for exiting a revision.
* FIXED: Redirect processor might have encoded query vars in URL.
* FIXED: Forms exported by old versions could not be imported.
* FIXED: Some i18n functions.
* CHANGED: jQuery version warning is only shown to admins now.
* ADDED: Utility function to show if any database tables are missing
* ADDED: A standard notification VueJS component, copied from CF Pro client, now available to all add-ons.
* NEW FILTER: caldera_forms_save_revision disables or enables revisions
* FIXED: Toggling form state (enabled/ disabled) no longer creates a new revision.
* FIXED: Main admin experienced JavaScript errors when out of date PHP version was in use.

= Caldera Forms 1.5.3.1 (July 27th, 2017) Attack of the Clones! =

* FIXED: Clone forms were not cloning properly.
* FIXED: Sometimes an error was shown after a form was deleted, even though it was actually deleted.
* FIXED: Translation strings were missing for form templates.

= Caldera Forms 1.5.3 (July 26th, 2017) Canada! =

* NEW FEATURE: Ability to edit, view and restore forms.
* NEW FEATURE: 1 Switch turns on a free CDN for all Caldera Forms JavaScript and CSS.
* NEW FEATURE: {query_var:*} magic tag for WordPress query vars.
* NEW FILTER: caldera_forms_email_csv_data for modifying data used in the CSV file attached to the email.
* NEW FILTER: caldera_forms_admin_csv for modifying data used in the CSV file exported in the admin.
* ADDED: Warning if jQuery version is too old for Caldera Forms to work.
* ADDED: Warning if submission is likely to result in a cross-origin error.
* ADDED: CFState and CFEvents JavaScript objects for improving how state of form is tracked in front-end.
* IMPROVED: HTML fields, summary fields now use CFState and CFEvents to improve performance and prevent some bugs.
* FIXED: Form became unresponsive after a select (or checkbox/radio) field triggers a condition & conditionally hides a hidden by conditional logic field that's value is used in a calculation field, whose value is showed in an HTML field.
* FIXED: Range sliders were not using the right color after being unhidden by conditional logic.
* FIXED: Some fields in modal forms were overflowing modal.
* FIXED: Some fields had aria-labelledby attribute when no corresponding label element existed or was needed.
* FIXED: Calculation value for a select option didn't have to be numeric.
* FIXED: Option presets & option bulk creation was not populating options properly. Now it's fixed.
* FIXED: Checkbox fields used value, not calculations value when used in calculations.

= Caldera Forms 1.5.2.1 (July 5, 2017) (bool) =
* FIXED: We were using boolval() which is not PHP 5.2-5.4 compatible.

= Caldera Forms 1.5.2 (June 30, 2017) Broken Foot Edition =
* NEW FEATURE: Ability to resend messages from saved entries.
* NEW FEATURE: UTM Fields.
* NEW FEATURE: {current_url} magic tag for the current page URL.
* ADDED: cf.presave JS event before the form is saved.
* ADDED: $entry_id as param of caldera_forms_save_field and caldera_forms_save_field-$field_type filters
* ADDED: Caldera_Forms_Entry_Field::insert() method for saving a field value to database.
* FIXED: Select fields without values shown get non-unique values error
* FIXED: Calculation value setting for checkboxes was not respected.
* FIXED: Form wrap ID postfix was never less than 2.
* FIXED: Defaults set from magic tags were not setting select field defaults properly.
* FIXED: Range sliders on page 2 or greater were not respecting their default value properly.
* FIXED: HTML fields live preview didn't respect line breaks from textarea (paragraph) fields
* FIXED: In some cases phone fields could be submitted empty.
* FIXED: File fields were getting an extra outline because form-control class was added when it shouldn't have been.
* FIXED: In entry list, checkbox fields were not being transformed from JSON.
* FIXED: Extra empty option select (dropdown) fields
* FIXED: Forms showed inactive state error when after being reactivated.
* FIXED: Toggle-switches were not using calculation values on server-side.
* FIXED: Missing translation string functions in form templates
* FIXED: Missing translation text domain for mailer from name default setting.
* FIXED: Issue where readme only said "Hi Roy" twice :)

= Caldera Forms 1.5.1 (June 12, 2017) Select Pro =

* NEW FEATURE: Default option that can be set by magic tag for dropdown, radio, checkboxes and toggles
* NEW FEATURE: Ability for select field options to provide a different value to calculations then their value attribute.
* IMPROVED: Headers for sub tabs with links to docs.
* IMPROVED: Description for "from" setting in main mailer
* NEW ACTION: caldera_forms_autoloader_fail Runs when autoloader can't find class file. Useful for debugging or non-standard autoloading.
* IMPROVED: Refactored adding of custom tables. Separated each add table statement and added a check for missing tables whenever you go to Caldera Forms main admin page.
* NEW ACTION: caldera_forms_file_added_to_media_library Runs after Caldera Forms adds a file to media library.
* IMPROVED: If caldera_forms_autoresponse_mail returns null, message isn't sent, making it a early return.
* IMPROVED: Made caldera_forms_autoresponse_mail filter expose entry ID.
* IMPROVED: Made caldera_forms_mailer filter expose entry ID.
* ADDED: Dashicons for submenu items.
* ADDED: Add interface & base class to support future CRM processors, which you and or Shawn should make.
* CHANGED: Page for Caldera Forms Pro
* CHANGED: Extend submenu page to add-ons.
* FIXED: where Caldera_Forms_Render_Util::get_current_form_count() could return 0. It should never be less than 1.
* FIXED: preventing more than one BCC.
* FIXED: Magic tags based on meta -- for example processor magic tags were not being parsed.
* FIXED: Money format setting for calculation fields was not properly rounding.


= Caldera Forms 1.5.0.10 (May 24th, 2017) We Got A Cute Cat Mascot =

* NEW FEATURE: Changed banner to include Catdera mascot.
* NEW FEATURE: Star rating fields now have a setting for the default number of stars.
* NEW FEATURE: TheÂ caldera_forms_mailer filter now exposes the entry ID.
* NEW FEATURE: All entry management actions are now filterable via theÂ caldera_forms_manage_cap filter.
* NEW FEATURE: Added support for radio and checkbox fields in summary fields.
* NEW FILTER: caldera_forms_summary_magic_fields -- to change which fields are used in the summary magic tag.
* NEW FILTER: caldera_forms_magic_summary_field_valueÂ -- to change how a field is displayed in the summary magic tag.
* FIXED: If a submit button was shown on a page of a multi-page for before the last page, it might not work because future pages were validated.
* FIXED: Conditionals based on calculation fields were not updating properly.
* FIXED: Hidden classes were not applied to hidden fields.
* FIXED: Toggle switches values were not included in calucaltions
* FIXED: Label for datepicker fields were not showing as label when labels where hidden.
* FIXED: Duplicate column 'status' error on plugin activation. Hi Shawn.
* FIXED: Datepicker fields could not be edited in the form editor. Added more z-index.
* FIXED: Paragraph fields didn't show saved value in entry editor.

= Caldera Forms 1.5.0.9 (May 2, 2017) Bring Me To Your Contact Form =

* IMPROVED: Multi-page form validation. Validation logic is improved to work with new add-ons and to be faster.
* FIXED: Calculation fields could target wrong fields if two of the same form were on the same page.
* FIXED: Disable conditionals were not enabling or disabling.
* REMOVED: HTML5 datetime type for text fields, since it has no browser support.
* FIXED: When 0 was the value for a conditional to check against, it was lost on form editor reload.
* IMPROVED: Processor and conditional interface to highlight new processor/conditional button.
* NEW ACTION: caldera_forms_delete_entries - Runs when entries are deleted
* NEW ACTION: caldera_forms_change_entry_status - Runs when entry status is changed.
* IMPROVED: Made CSV headers match layout order of forms.
* FIXED: Fatal error could happen when exporting due to Caldera_Forms_Field_Util::check_conditional() not being passed an array
* ADDED: JavaScript events on validation.
* FIXED: PHP notice when getting saved entry and user was not logged in when entry was created.
* FIXED: Required toggle switches didn't trigger validation errors on multi-page forms.
* FIXED: Ensured that summary magic tag used correct internal APIs.
* FIXED: Bad conditional in database updater causing PHP notices.
* FIXED: Field errors were not associated to their field using proper ARIA tag.

= Caldera Forms 1.5.0.8 (April 10, 2017) The Earth Is Round, Contact Forms Are Good =

* FIXED: Calculations fields were rounded wrong in some cases.
* FIXED: Fields that are shown with conditions did not always show up in entry viewer or CSV exports.
* DEPRECATED: Caldera_Forms_Render_Util::field_id_attribute() since it gets form, not field ID attribute.
* ADDED: Caldera_Forms_Render_Util::form_id_attr() to get form ID attribute.
* ADDED: Utility methods for formatting inline JavaScript that were needed in add-ons.

= Caldera Forms 1.5.0.7 ( April 4, 2017 ) %funny_name_for_release% =

* FIXED: Checkbox fields were rendering as {"opt": "ccc" ... which is so bad. Fixed the crap out of that.
* ADDED: New Filter: caldera_forms_magic_file_use_link Allows for showing an image tag in email for file field
* ADDED: Set field defaults with the shortcode
* ADDED: Helpful New Class: Caldera_Forms_Render_Modals for all modal markup and logic. Makes it easier for developers to work with modals, no end-results changed.
* IMPROVED: Contact form template
* IMPROVED: Magic tags for calculations. Now shows before and after settings and formats numbers according to your settings.
* FIXED: Entry navigation for admin entry viewer wasn't working in main admin page. Was in sub-menu entry viewer.
* FIXED: Range slider fields in multi-page forms were not working right.
* IMPROVED: Added a few helpful tooltips to form builder. Will add more soon.
* FIXED: When "Use Country Code" option was checked required phone fields they could be submitted empty, now they can't.
* ADDED: A double check to make sure validation translations were loaded. Will help with slow connections.
* FIXED: Field sync wasn't working if field was hidden by conditional logic.
* FIXED: Fields hidden by conditional logic were not keeping their values when unhidden.
* FIXED: Credit card field validation was making JavaScript errors.
* FIXED: %field_slug:label% magic tags were not showing label.
* FIXED and Improved: Entry abstraction class.
* FIXED: Calculation functions like tan() and atan() or sin() and cosin() that have same(ish) names caused JavaScript errors.
* ADDED: $atts param on caldera_forms_pre_render_form filter.
* FIXED: In some cases fields removed by conditional logic would still be validated and therefore trigger incorrect validation errors server-side.
* FIXED: Shortcode wasn't using "shortcode_atts" filter.

= Caldera Forms 1.5.0.6 ( March 13th, 2017 ) Apex Calculations =

* FIXED: Fields hidden by conditional logic's values were being recorded. This was not the behavior in 1.4.x and was causing issues with calculations calculating the wrong amount.
* FIXED: The "New Field" button,  that isn't really a button, had a confusing icon. It is now move, not hamburger.
* FIXED: The text attribute for "New Field" button, that isn't really a button, was not useful enough. It is now 150% more useful.
* ADDED: Abstraction for entry edit tokens for editing form entries, which Josh felt was going to be immediately useful, but wasn't but, whatever, it will be.
* FIXED: Rewrites were not being flushed on every Caldera Forms update.
* FIXED: Form edit view in admin wasn't working, because rewrites were not being flushed on every Caldera Forms update.
* FIXED: Processor magic tags were not being parsed for forms.
* ADDED: New method for more more reliable and performant meta-based magic tags like those from form processors.

= Caldera Forms 1.5.0.5 ( March 6st, 2017 ) This Field Is Required =

* FIXED: JavaScript error when validator (parsely) was loaded in the wrong order.
* FIXED: Field validation messages like "This Field Is Required" were not translating properly.
* FIXED: Datepickers were not translated when scripts were not minified.
* FIXED: Datepickers that were required and left empty were not marked as invalid.
* FIXED: Reset buttons were not reset buttons.

= Caldera Forms 1.5.0.4 ( March 1st, 2017 ) =

* FIXED: When select field or radio or checkbox had 0 or '0' as default, default was ignored.
* FIXED: An input with a placeholder of 0 or '0' did not receive a placeholder.
* FIXED: When a label for an input was hidden, label was not used as placeholder.
* FIXED: When a label for an input was hidden, non-accessible markup was generated (no label element)
* FIXED: Advanced file fields with certain settings were only uploading one file when multiple files should have been uploaded.
* FIXED: Next and previous page buttons had the wrong input type.
* FIXED: Modals have been wonky for awhile, major change, see update post for more details.
* FIXED: Scroll to top setting wasn't scrolling to top.
* FIXED: Conditional recipients processor wasn't processing.
* FIXED: Local language for the client-side validation was not respecting WordPress language settings.
* FIXED: Conditional calculation fields that shouldn't have calculated were calcuating.

= Caldera Forms 1.5.0.1-3 ( February 22st, 2017) Ãœber Sorry About HTML Fields =

* FIXED: HTML fields were super-broken with accents, cyrillic, non standard UTF-8, and lots of other things.
* FIXED: Fields hidden by conditional logic, which should have not made server-side validation errors were, but errors didn't show and it looked broken.
* FIXED: Entry export or view could cause an error.
* FIXED: API, and therefore entry viewer called a method that got lost between 1.5.0-b-2 and final.
* FIXED: Shortcode for classic mode entry viewer.
* FIXED: Checkbox fields, with no explicit value, don't return label for value, now they do.

= Caldera Forms 1.5.0 ( February 21st, 2017) Volcano! =
* ADDED: A Front-end entry viewer.
* ADDED: Conditional redirect processor.
* ADDED: REST API for form and entry data.
* ADDED: Credit card number field
* ADDED: Credit card expiration field
* ADDED: Credit card secret code field
* ADDED: Number field
* ADDED: A better phone number field.
* ADDED: WYSIWYG field
* ADDED: Summary field
* ADDED: URL Field
* ADDED: Section break field
* ADDED: REST API client JavaScript
* REDUCED: The number of JavaScript and CSS fields that are loaded
* IMPROVED: Checks to make sure that CSS is loaded in header.
* ADDED: caldera_forms_force_enqueue_styles_early filter to force CSS to load in header.
* ADDED: caldera_forms_validate_field_-$field-id filter to add custom field validation by field ID.
* ADDED: Caldera_Forms::time_format() to provide correct time formatting.
* IMPROVED: Consistent entry point for submissions via POST Caldera_Forms::process_form_via_post()
* ADDED: Error message when nonce validation fails.
* ADDED: Caldera_Forms_Fields class. Easy access to all field definitions, or a field's definition using Caldera_Forms_Fields::definition()
* ADDED: Caldera_Forms_Magic class that is so magical we can't discuss it and/or abstracts the magic tag parsing system for more developer friendliness.
* IMPROVED: HTML fields, HTML tags that could break the field -- form, script, iframe -- are now removed instead of making bugs.
* MAJOR IMPROVEMENTS: Caldera_Forms_Render_Assets & Caldera_Forms_Admin_Assets and now handle loading/removing / minfiying CSS and JavaScript way better.
* ADDED: caldera_forms_render_assets_minify to disable minfification of CSS and JavaScript. Useful if you want to minfiy or combine resources using a different plugin.
* ADDED: REST API endpoints for form configuration
* ADDED: REST API endpoints for entries
* ADDED: Ability to show the old entry viewer using a function or shortcode -- only recommend in the admin, or your CSS is going to need a lot of work.
* ADDED: Caldera_Forms_Entry_Update::update_entry_status() a utility method to change entry status by ID.
* FIXED: No more inline JavaScript in the post content. Field configuration and other JavaScript has been abstracted or moved to footer.
* ADDED: Abstract system for building input type fields.
* ADDED: caldera_forms_field_util_math_functions filter to define which math functions can be used in calculation fields.
* ADDED: Caldera_Forms_Field_Util::get_field_by_slug() method to get field configuration by slug.
* ADDED: Caldera_Forms_Field_Util::apply_field_filters
() to add all caldera_forms_render_get_field type filters to field config.
* ADDED: Caldera_Forms_Field_Util::has_field_type() to check if a form has a field of a given type.
* ADDED: Caldera_Forms_Field_Util::get_default() to get default value of a form field.
() to add all caldera_forms_render_get_field type filters to field config.
* ADDED: caldera_forms_credit_card_types filter to set which credit card types can be shown in credit card fields.
* ADDED: Caldera_Forms_Magic_Doer::do_bracket_magic() to handle bracket magic tags.
* ADDED: caldera_forms_pre_do_bracket_magic filter for custom bracket magic tags.
* ADDED: caldera_forms_do_field_bracket_value filter to change values of bracket magic tags.
* ADDED: Spooky magic, not really, but I like using the word magic :)
* ADDED: Caldera_Forms_Magic_Util class full of helful functions for performing Caldera Forms magic.
* ADDED: Caldera_Forms_Render_Assets::register() Registers all Caldera Forms CSS and JavaScript
* ADDED: Caldera_Forms_Render_Assets::enqueue_script() Utility method for enqueuing  JavaScript with the right slug.
* ADDED: Caldera_Forms_Render_Assets::enqueue_script() Utility method for enqueuing  JavaScript with the right slug.
* ADDED: Caldera_Forms_Render_Assets::enqueue_style() Utility method for enqueuing  CSS with the right slug.
* ADDED: Caldera_Forms_Render_Assets::make_url() Utility method for standardizing  CSS and JavaScript slugs.
* ADDED: Caldera_Forms_Render_Assets::get_field_scripts() Utility method to get all Caldera Forms field JavaScript files by slug.
* ADDED: Caldera_Forms_Render_Assets::get_field_styles() Utility method to get all Caldera Forms field CSS files by slug.
* ADDED: caldera_forms_assets_registered action that runs after all Caldera Forms CSS and JavaScripts are registered
* ADDED: Caldera_Forms_Render_Footer class for handling printing scripts and templates in footer.
* ADDED: Caldera_Forms_Render_Nonce class for outputting and verifying front-end form nonce.
* ADDED: caldera_forms_verification_token_failed action that fires when nonce verification fails.
* ADDED: Caldera_Forms_Render_Notices class for streamlining perpetration of succes or error notices returned by from submission.
* ADDED: Caldera_Forms_Render_Util class that helps with outputting notices and other inline data.
* ADDED: Caldera_Forms_Sync_Sync class and its children -- Caldera_Forms_Sync_HTML, Caldera_Forms_Sync_Summary and Caldera_Forms_Sync_Sync -- as well as its factory Caldera_Forms_Sync_Factory for improving magic sync capabilities.
* ADDED: caldera_forms_field_attributes() function to prepare field attributes.
* ADDED: caldera_forms_field_attributes filter to modify field attributes.
* ADDED: caldera_forms_field_attributes-$field_type filter to modify field attributes by field type.
* ADDED: caldera_forms_escape_field_attributes_array() function to escape an array of field attributes
* ADDED: caldera_forms_implode_field_attributes() to implode an array of field attributes
* ADDED: caldera_forms_get_release_series() function to get major version/ release series (IE 5 for Caldera Forms 1.5.x and 6 for Caldera Forms 1.6.x)
* ADDED: eCommerce field category.
* ADDED: New form templates
* ADDED: Scroll to top setting. Jump to top of form on submit.
NOTE: All fixes and new features from 1.4.x releases are included. So this section of changelog is shortish.
* FIXED: Duplicate forms created.
* FIXED: preventing custom field options set by filters form working in some situations.
* FIXED: Form settings tab got messy. We tied it up a bit.


= Caldera Forms 1.4.9 ( February 14, 2017 ) Be My Plugin Update =
* FIXED: File upload fields were attaching files to emails when added to media library, but not set to attach.
* ADDED: New filter: caldera_forms_grid_row_class - adds custom classes to rows in form layout builder.
* ADDED: New filter: caldera_forms_grid_row_id - change row id attribute in form layout builder.
* FIXED: Potential PHPMailer Exception when BCC is not set.

= Caldera Forms 1.4.8 ( January 18, 2017 ) 1.5 Awaits! =
* IMPORTANT: Caldera Forms 1.5 beta 2 will be released shortly, please test, Caldera Forms 1.5 is a big update.
* FIXED: Potential conflict when using Caldera Forms SendGrid mode and the SendGrid plugin, which BTW you shouldn't do, but still, it shouldn't break stuff.
* ADDED: caldera_forms_affiliate_id filter for kind plugin & theme authors who are including Caldera Forms to append their affiliate ID to links to our site in extend tab.
* FIXED: Bad link to Caldera Forms add-ons page, featuring such find add-ons as our Mailchimp and PayPal add-ons, in out post-install banner.
* FIXED: Type on Caldera Forms email notification tab.
* FIXED: where only first letter of field entry was sent when using summary magic tag in Caldera Forms email and PHP version was 5.3 or later. If this affected you, we're sorry, but you also really need to get your host to update your PHP version to PHP 5.6 or PHP7, or get a new host.
* FIXED: Removed extra &nbsp; from radio and checkbox form fields
* FIXED: In some cases when importing or copying a form ID was changed, even if no form of that ID existed.
* FIXED: Importing a form from another WordPress site or a backup now maintains its basic email settings, such as enable.

= Caldera Forms 1.4.7 ( December 19, 2016 ) Happy Early Christmas! =
* FIXED: where checkboxes showed up as JSON data not selected options in emails.
* FIXED: Wrong variable scope in summary magic tag check if field is advanced file field. Didn't break anything, but still.
* ADDED: Ability to remove wpautop formatting on email messages.
* FIXED: Some notices were still showing up in our admin. Commonly used hooks for notices are now removed. The quest to remove all WordPress admin notices continues.
* FIXED: AJAX settings in form settings tab's HTML markup lacked proper accessibility markup.


= Caldera Forms 1.4.6 ( December 12, 2016 ) Summary Magic Tag: No with 15% more magic! =
* FIXED: preventing hidden field values, set in browser (via jQuery or whatever) from being saved properly. This was fun:)
* ADDED: caldera_forms_magic_summary_should_use_label Filter for showing label instead of value for select fields in {summary} magic tags.
* FIXED: Issue where Josh didn't have a good answer for how to do what caldera_forms_magic_summary_should_use_label filter now does.
* FIXED: Issue, which was pretty rare, where summary magic tag might now have the right form's data and therefore summarizes nothing, which isn't really a summary at all.
* FIXED: We didn't have a check to see if SendGrid API was already included. BTW Don't use our SendGrid integration & the SendGrid plugin. Choose one.

= Caldera Forms 1.4.5.1 ( December 4, 2016 ) #WCUS =
* FIXED: Submenu entry viewer had a JavaScript error, it has been eradicated.
* FIXED: Submenu entry viewer header had both old logo and new logo overlapping, which was kind of poetic, but looked bad.

= Caldera Forms 1.4.5 ( December 1, 2016 ) Tacos! Tacos! Tacos! =
* ADDED: caldera_forms_get_field_order filter. Changes order of fields, when you ask for them in layout order. Can use this to change order of fields with {summary} magic tag.
* FIXED: Admin notices were showing up in the form editor and making things look bad. Josh killed them with fire (or jQuery, hard to say.)
* FIXED: Icon in admin and shortcode button was the old CF logo, now it uses the Caldera Globe. Menu is still wrong, which is sad, but you can't win theme all.
* ADDED: A sarcastic comment to config template for states field because WordFence said an empty file is bad.
* ADDED: A cool system to show you helpful links in admin.
* IMPROVED: Position of UI field descriptions.
* ADDED: The ability to specify calculation field decimal separator.
* INCREASED: Expiration of transient for submissions.
* FIXED: Color contrast for required * was not sufficient. Fixed for accessibility reasons. Our form builder must be accesible by default!
* RESTYLED: Shortcode button in form list. Color contrast in old way was insufficient.
* ADDED: caldera_forms_summary_magic_pattern filter for changing the sprintf pattern for the summary magic tag.
* FIXED: A dumb mistake that was putting array_merge error in main admin page sometimes.
* FIXED: Issue where Josh couldn't pack for WordCamp US until he finished Caldera Forms 1.4.5

= Caldera Forms 1.4.4.1 ( November 11, 2016  ) =
* FIXED: Missing CSS that caused the date and color picker fields to not work.

= Caldera Forms 1.4.4 ( November 10, 2016  ) =
* FIXED: Issue where Caldera Forms submit nonce did not verify when using WooCommerce and a non logged in user had items in cart.
* ADDED: caldera_forms_file_upload_handler Filter for alternative file upload handler.
* CHANGED: Usage tracking API URL.
* ADDED: Redirect for old license manager page to new license manager page for less confusion when activating Caldera Forms add-ons
* ADDED: Add to Media Library option for regular file fields.
* FIXED: Previously, files not set to add to media library were left in uploads directory. That was bad, now they are added to a uploads/<hashed-string> and then deleted when no longer needed.
* ADDED: Welcome banner. You are now welcomed to Caldera Forms.
* FIXED: For accessibility reasons, added an Alt tag on Gravatar field display.
* FIXED: For accessibility reasons, the warning color red was changed for better contrast.
* FIXED: Emailed CSVs were showing stored JSON for checkbox fields, now they show checkbox values, which is much better.
* FIXED: Previously you could not edit a hidden form field in the entry editor. Now you can.
* ADDED: Infrastructure for REST API. Will be used more later, right now, it's for add-ons to make use of.
* FIXED: That thing where people ask Josh how he's using REST API in Caldera Forms and he has to say "not at all."
* ADDED: caldera_forms_csv_character_encoding filter for changing character encoding of CSV exports.
* FIXED: For accessibility reasons, added alt tag to toggle switch form field.
* FIXED: Made summary magic tag output fields in order they appear in form, not order they were added. This used to be how it worked, which was good, then it stopped being how it worked, which was bad. But now it is fixed.
* IMPROVED: CSS loading. There are three optional stylesheets, most people select all three, when that happens we now load 1 minified style sheet, instead of 3. That's a good start. Will improve that more in next release.

= Caldera Forms 1.4.3.1 ( October 4th, 2016  ) =
* FIXED: jQuery syntax error in HTML form field JavaScript

= Caldera Forms 1.4.3 ( October 4th, 2016  ) =
* FIXED: where magic tag button was not working in Chrome. There is now no magic tag button, nor is it needed.
* IMPROVED: Email notification tab. Better descriptions, more accessible HTML form markup.
* FIXED: Inline JavaScript for some form fields types that didn't work when jQuery was loaded in footer.
* IMPROVED: Loading of color picker in shortcode form preview. Hi Matt.
* FIXED: Date picker from field was hidden by modal when form was loaded in a modal. It is now moved in from of the modal form so it is visible when loading forms in modals.
* FIXED: Color picker was not working when form was loaded in a modal. Color pickers now work when form is loaded in a popup.
* IMPROVED: HTML for modal forms was using a global, not a class property. That's bad, we feel bad, we fixed it. Forms in a popup FTW!
* FIXED: affecting auto-populating form field options auto-populated using posts.
* IMPROVED: You used to not be able to use magic tags for placeholder of select form fields. You can now preset select fields in your form using magic tags in the placeholder setting.
* ADDED: caldera_forms_prerender_edit action that runs before form editor is rendered.
* FIXED: Issue where readme did not say "Hi Roy." Also, Hi Roy.


= Caldera Forms 1.4.2 ( August 31, 2016 ) =
* ADDED: caldera_forms_new_form_modal_bottom Runs at the bottom of the new forms modal.
* FIXED: causing errors when magic tag value was not a string and preg_matching was attempted
* FIXED: Breadcrumbs title attribute for multi-page forms that was missing.
* FIXED: causing jQuery error and alignment issue when bringing up magic tag list in form admins
* FIXED: preventing a field value of 0 from being saved.
* FIXED: PHP notices caused by viewing entries for forms with no entries
* FIXED: Possibly type error in calculation field in front-end form view.
* FIXED: Contact form template used an invalid email in auto-responder
* FIXED: Auto-responder was not checking for invalid from email settings which was causing emails sent from some forms to fail.

= Caldera Forms 1.4.1 ( July 27, 2016 ) =
* FIXED: preventing saving of forms with checkbox fields. This is the big bad issue that caused this release.
* FIXED: caldera_forms_sendgrid_before filter was added without documentation and this really upset Josh, who would have been so mad at David if he had made this mistake.
* ADDED: Caldera_Forms_Email_Save class, abstracting most functionality from Caldera_Forms_Email_Preview class added in 1.4.0. This resolves issue where Josh was annoyed he could not re-use the preview system to make the PDF add-on for printing and saving form data.
* FIXED: Changed PHP version check for loading advanced email mode from 5.3 to 5.4. Was problem for those on dinoPHP using SendGrid. Really they should update.


= Caldera Forms 1.4.0 ( July 26, 2016 ) =
* FIXED: Datepicker behaviour on mobile. Fallback to default date field behaviour on mobile.
* ADDED: Duplicate field button.
* ADDED: Duplicate field button.
* ADDED: ARIA tags for form fields.
* ADDED: Duplicate field button.
* ADDED: Support for sending emails via SendGrid.
* IMPROVED: Entry viewer is now responsive.
* IMPROVED: Improved labels in form editor to make things easier to find.
* ADDED: Shortcode link to form list.
* ADDED: Shortcode link to form settings.
* ADDED: Email preview mode for ensuring that email settings are correct.
* ADDED: Ability to send emails through SendGrid.
* ADDED: Preset options for select fields.
* IMPROVED: Advanced file fields. These fields are no longer in beta, this is a fully operational battle station.
* FIXED: preventing entries from being saved properly when MariaDB is used.
* FIXED: CSS for advanced field field buttons clashed with TwentySixteen
* IMPROVED: New form modal is now more attractive, encourages using templates and provides template previews.
* FIXED: Permissions for sub-menu entry viewer
* FIXED:  preventing dismissing admin pointer.
* ADDED: caldera_forms_processor_ui_input_pre_html filter for custom admin UI fields
* FIXED: Wrong colors being used for autocomplete (select2) fields.
* FIXED: Active class was not being updated properly on multi-page forms.
* ADDED: Proper ARIA tags for state of pages of multi-page forms.
* FIXED: causing validation on the next page from running on multi-page forms to soon.
* IMPROVED: Input masking for phone fields.
* ADDED: caldera_forms_mailer_invalid action that fires when mailer configuration is invalid.
* FIXED: Issue preventing validation errors from showing properly on some field types.
* ADDED: General settings section of main admin
* ADDED: caldera_forms_ui_field_classes filter for filtering processor UI field classes
* ADDED: Hidden fields to processor UI.
* FIXED: Allowed hidden fields to use custom classes.
* ADDED: New database abstraction, this will become very important soon, aslo it's pretty cool.
* DEPRECATED: Caldera_Forms_Admin::browse_entries() use Caldera_Forms_Entry_UI::view_entries()
* ADDED: caldera_forms_presave_form filter to change form config before saving
* ADDED: Caldera_Forms_Save::create_entry() for creating entries programatically
* ADDED: caldera_forms_widget_init action after widget is initialized.
* ADDED: caldera_forms_sanitize() utility function.
* ADDED: caldera_forms_very_safe_string() for sanatizing a string really hard.
* ADDED: caldera_forms_field_option_presets filter for adding additional option field presets

= Caldera Forms 1.3.5.3 ( May 23, 2016)  =
* Security Release

= Caldera Forms 1.3.5.2 ( May 18, 2016) The Return of the Widget =
* FIXED: The form widget not showing forms

= Caldera Forms 1.3.5.1 ( May 18, 2016) Fix Release =
* FIXED: Issue preventing multi-select fields from saving 2nd or greater option in database.
* FIXED: Pressing "enter" in new form modal did not create new form.
* FIXED: preventing some magic tags from rendering in HTML form fields.
* FIXED: preventing rating star form fields from working with conditional logic.
* FIXED: Issue preventing forms combining user login and user profile editing in same form from validating properly. ( Requires Caldera Forms Users add-on 1.3.4+ )
* FIXED: causing PHP notice when creating shortcode previewer in post editor.
* ADDED: "caldera_forms_admin_init" action at end of constructor for admin class
* ADDED: "caldera_forms_core_init" action at end of constructor for core class
* ADDED: Autoloader for all classes
* FIXED: Missing ARIA tags in auto-generated processor config settings.
* ADDED: "caldera_forms_processor_ui_input_group_html" filter for adding markup to auto-generated processor config groups.
* ADDED: "caldera_forms_processor_ui_input_html" filter for adding markup to auto-generated processor config fields.
* ADDED: Base classes for processors to extend.
* ADDED: Replaced the mini color picker with the native wordpress color picker in form editor.
* FIXED: Issue preventing some disable conditions from disabling form fields.

= Caldera Forms 1.3.5 ( April 21, 2016 ) =
* ADDED: Forms in modals! Ok, this was there for awhile in secret, but it works really well now, so have at it.
* ADDED: Advanced File Upload fields
* ADDED: Optional usage tracking mode
* ADDED: Better handling for errors from forms submissions API
* ADDED: Ability to use "caldera_forms_mailer" filter to disable using wp_mail() -- better emails, like winter, are coming.
* FIXED: affecting widget admin
* FIXED: Improper validation for email details
* FIXED: Inability to disable forms from the admin.
* FIXED: Issue preventing toggle buttons from toggling in forms.
* FIXED: Issue with datapicker language in forms.
* FIXED: Menu pinning
* FIXED: Magic tags for checkbox fields in forms not showing proper value/label in form entry email
* FIXED: that caused a submission result to show code on screen.

= Caldera Forms 1.3.4.2 ( March 31, 2016 ) =
* FIXED: that caused the DB update to not run on manually uploaded updates to Caldera Forms
* FIXED: that caused calculation to fail if they used Math
* FIXED: that caused multiple file fields from being attached to mailer
* FIXED: that stopped forms from being pinned to menu
* FIXED: that threw errors on pinning forms to menu
* REMOVED : experimental code that caused stuff to die
* ADDED : Additional Math support in calculations

= Caldera Forms 1.3.4.1 ( March 30, 2016 ) =
* ADDED: caldera_forms_pre_render_form for returning HTML early.
* ADDED: Form ID and CF version as data attributes in outermost wrapping container for form.
* FIXED: preventing multiple files in same field from attaching to the email.
* FIXED: making multi-file upload fields, effectively always required.
* FIXED: causing conditional logic editor to be real slow.
* FIXED: causing conditional logic editor to not show all conditionals.
* FIXED: causing multi-select checkbox fields to not be editable in entry editor.
* FIXED: causing required checkbox fields, when not checked to not report why form wasn't submitted.
* FIXED: causing CSV export and entry viewer to not properly display multi-select checkbox fields.
* CHANGED: "Pin to Menu" to a more descriptive label. No change in functionality.
* ADDED: caldera_forms_render_field_file filter to Change the file used to create the HTML for a field in the front-end.
* ADDED: entry ID to caldera_forms_submit_post_process and caldera_forms_submit_process_start hooks & documented them.
* ADDED: Caldera_Forms_Forms class to handle all form config CRUD. Refactored form saving for performance and extensibility:)
* FIXED: Typo in default auto-responder message.
* FIXED: preventing variables from rendering in calculation fields.
* IMPROVED: Validation error reporting.
* IMPROVED: Handling AJAX false failures caused by PHP notices/warning/other funny markup form other plugins.


= Caldera Forms 1.3.3.1 ( March 4, 2016) =
* FIXED: causing muti-page forms to validate when going back a page.... again. For reals this time.

= Caldera Forms 1.3.3 ( February 29, 2016) =
* FIXED: preventing some field validation methods from showing
* FIXED: preventing some conditional fields from users add-on from showing
* FIXED: Issue preventing some calculations from working
* FIXED: causing muti-page forms to validate when going back a page.

= Caldera Forms 1.3.2.1 ( January 14, 2016 ) =
* FIXED: that caused calculations using checkboxes or Radio buttons to fail

= Caldera Forms 1.3.2 ( January 14, 2016 ) =
* FIXED: preventing AJAX submissions on certain Apache configurations with ugly permalinks enabled in WordPress
* FIXED: Calculation fields with hidden fields not calculating.
* ADDED: "caldera_forms_cf_ajax_api_url" filter -- Filter the URL for AJAX submissions
* ADDED: Fallback for failed AJAX submissions -- 404s now cause submission via a synchronous request.
* ADDED: Entry Editing.
* FIXED: Menu display conflict with Sensi plugin
* FIXED: Validation errors triggered prematurely on multi-page forms
* FIXED: Use WordPress' setting for database collation. Hi Chris.

= Caldera Forms 1.3.1.2 (November 18, 2015 ) =
* FIXED: Annoying little that broke reCaptcha due to new script loading.

= Caldera Forms 1.3.1.1 (November 12, 2015 ) =
* FIXED: Annoying little that broke the "Next" button if you have a required Checkbox or Radio on a later page. (I know right?)
* FIXED: A few minor cleanups here and there.

= Caldera Forms 1.3.1 (November 5, 2015 ) =
* BIG CHANGE: Implement parsley.js for improved client-side validation.
* BIG CHANGE: New endpoints for processing forms.
* FIXED: Validation issues in mobile Safari.
* FIXED: preventing mailer attachments when returning from Paypal.
* FIXED: where enter key could trigger submit from any page of a multi-page form in some circumstances/ browser.
* FIXED: Recaptcha settings link opening in same window.
* FIXED: where CSS was being loaded in footer in some cases.
* FIXED: Visual issue where datepick fields in Twenty Fifteen theme showed full width.
* ADDED: Ability to set orderby field and order direction for auto-populated fields from UI.
* ADDED: Ability to specifify allowed field types in file fields with or without dots.
* ADDED: support for Github Updater Plugin
* ADDED: caldera_forms_processor_value filter for changing value of a field from a processor.
* ADDED: caldera_forms_manage_cap filter for managing all capabilities by context.
* ADDED: HTML content type header to emails sent via autoresponder processor.
* ADDED: caldera_forms_script_urls and caldera_forms_style_urls filters for modifying/ removing scripts and styles before enqueuing.
* ADDED: Label space option to aid in horizontal alignment.


= Caldera Forms 1.3.0.2 ( September 10, 2015 ) =

= Bugs Fixed =
* Scripts and Styles now load only on pages with forms in the header where they belong
* David should be fired, but acknowledges his lazyness so he got a mild warning.

= Caldera Forms 1.3.0.1 ( September 8, 2015 ) =

= Bugs Fixed =
* Scripts and Styles now load only on pages with forms
* Fixed a that conflicted with WooCommerce v2.4.6
* put back the "disable" condition
* fixes "is greater" and "is smaller" condition that reverted to is
* autopopulate select fields use ID correctly for post_type and term_id for taxonomy



= Caldera Forms 1.3.0 ( August 23, 2015 ) =
* Improved: Adding rows in form layout.
* Added: Conditional groups.
* Added: New helper classes for form processors.
* Fixed: Issue where forms with a file field, without a file uploaded, would break mailer validation.
* Added: Date range settings for date picker fields.
* Improved: Colors in form editor.
* Improved: Inline docs in Caldera_Forms class.
* Added: 2 new form templates.
* Fixed: Issue with field scripts being double loaded.
* Fixed: Issue affecting color pickers as conditional fields.
* Update Translations: German (de_DE), Spanish (es_ES), French (fr_FR), Japanese (ja), Portuguese (pt_PT), Turkish (tr_TR).

= Caldera Forms 1.2.3 ( August 7, 2015) =

= Bugs Fixed =
* Fixed Checkbox values showing as [Object object] in entry view
* HTML field with magic tags now work with conditions
* Toggle switches magic tag now doesn't show ,,,
* Range Slider in conditions improved
* State / Province field correctly uses the required setting
* issue where if you had a single entry in trach, would show no entries.
* some smaller annoying bugs solved

= New Features =
* Added form templates when creating new form.
* Automcomplete (select2) field type.
* File field can now be set to accept mulitple to allow selecting multiple files.
* Portuguese translation thanks to Luis Martins
* Turkish translation thanks to Yavuz Uyar
* Added login/logout link magic tags: {login_url} {logout_url} {register_url} {lostpassword_url}
* Abstracted final DB saving and mailer into new class

= New Hooks =
* caldera_forms_get_form_templates : filter to add your own templates to new form templates
* Added "caldera_forms_mailer_failed" action to run when main mailer fails
* Added "caldera_forms_autoresponder_failed" action to run when autoresponder fails.


= Caldera Forms 1.2.2 ( June, 2015) =

= Bugs Fixed =
* Fixed widget where forms in widget disapeared
* Fixed conditional logic where multiple forms on a page broke conditions
* Fixed a that stopped forms from saving if visual editor was disabled in profile
* A bunch of smaller bugs that was causing minor issues... again

= New Filters =
* caldera_forms_autopopulate_options_post_value_field
* caldera_forms_autopopulate_options_post_label_field
* caldera_forms_autopopulate_options_taxonomy_value_field
* caldera_forms_autopopulate_options_taxonomy_label_field


= Caldera Forms 1.2.1 ( June, 2015) =

= Bugs Fixed =
* Fixed checkbox values not saving on transient redirect ( complicated, but now fixed )
* Fixed required field on HTML element causing a form to not submit without any notice
* Fixed issue with pin to menu rights resetting in form edit
* A bunch of smaller bugs that was causing minor issues

= Improvements =
* Updated the visual styles on forms
* updated mailer setup descriptions to prevent spam filtering of mails
* auto slugs are cleaner
* minor speed improvements in core

= Caldera Forms 1.2.0 ( April, 2015) =

= Bugs Fixed =
* Exports on checkboxes caused issues
* calculation caused problems
* Fixed the slug:label magic tag...again.

= Improvements =
* Updated the visual styles
* Added additional actions and filters
* imroved saving speed


= Caldera Forms 1.1.10 ( April, 2015) =

= Bugs Fixed =
* deleting entries in bulk, disabled form. - fixed.
* viewing entries occationally gave a blank modal.

= Caldera Forms 1.1.9.10 ( April, 2015) =
* error on checkboxes and array tag showing

= Caldera Forms 1.1.9.9 ( April, 2015) =

= Critical fix =
* on php 5.3 widget forms and function render forms gave "permission denied" error. solved.

= Caldera Forms 1.1.9.8 ( April, 2015) =

= Improvements =
* Added setting for custom thousand separator on calculator in money format.
* improved array handling
* set conditions to look at lable not value.
* slugs from option based fields can now reference the lable with %field_slug:label%

= fixes =
* Corrected a in the file upload not stopping on incorrect file type
* fixed an action in the autopopulate options for field config
* fixed a that made the field bind autocomplete box dissapear when scrolling



= Caldera Forms 1.1.9.7 ( April, 2015) =

= fixes =
* Corrected a that allowed setting a field to its own conditional (infinte loop)

= Additions =
* Added a "Entry List" behaviour to Variables to allow the variable to show in entry list.
* Added filter 'caldera_forms_get_form' for filtering form structure before using it.
* Added the ability to render forms directly from an array structure ( Experimental dev feature : Allows you to render forms from a structure without needing to import one ).

= Improvements =
* Made selected field in edit easier to see.
* Added a Drfat / Deactivate mode for forms.

= Caldera Forms 1.1.9.6 ( April, 2015) =

= fixes =
* slashes removed on mailer body
* Reset fixed for toggle buttons working
* reCaptcha multi instances

= Improvements =
* changed the delete element and processor buttons to gray
* changed the Success message box to a textarea for larger notices.

= Added =
* added custom ajax callbacks and overrides
* Increment value processor
* added BCC and Reply To options for mailer
* Mailer Demode to track issues with sending notifications

= 1.1.9.5 ( March, 2015) =

= fixes =
* Fixed datepicker language loader ... again
* Pagination next validator on checkbox prevented progression

= Improvements =
* cleaned up the view entry modal a bit
* cleaned up paragraph entry view
* moved a few hooks around for better handling
* added custom class to html element


= Caldera Forms 1.1.9.4 ( March, 2015) =

= Improvements =
* Added US States to dropdown as option

= fixes =
* Fixed a clash with FacetWP pagination
* Fixed a that stoped the text editor from running on WordPress 3.9
* A few minor fixes and improvements


= Caldera Forms 1.1.9.3 ( February, 2015) =

= Improvements =
* Added ID or Name value selector for autopopulation on selects
* Importer now creates a new form and wont overide the original.
* Modals only close on the dismiss or cancel buttons. no longer on clicking the overlay. (better for management)
* Added Filter: `caldera_forms_autoresponse_config` to allow modifiying the auto responder config
* Added Filter: `caldera_forms_autoresponse_mail` to allow modifiying the auto responder mail object before sending
* Changed the form ajax handler to use the more reliable wp admin-ajax method
* Hooks to extend the autopopulate for option based fields ( caldera_forms_autopopulate_types & caldera_forms_autopopulate_type_config )

= Updated =
* Updated the reCaptcha to use Google's new version

= Fix =
* a few small minor issues where resolved.


= Caldera Forms 1.1.9.2 (30 November, 2014) =

= Fix =
* Issue with HTML binding not working. Solved but need to explore a little more later.
* a few smaller fixes & optimisations

= Caldera Forms 1.1.9.1 (27 october, 2014) =

= Fix =
* Sorted an issue with custom classes not being an array. *facepalm*

= 1.1.9 (26 october, 2014) =

= Fixed =
* multi page validation on radios + checkboxes
* minor fixes

= Improved =
* {embed_post:*} available in archive list

= Added =
* Live preview on shortcode in editor. really. It's awesome.
* Additional filters to aid in auto-populating fields

= Caldera Forms 1.1.8 (7 October, 2014) =

= Fixed =
* Javascript error in reCapture field
* No Default on dropdown field type results in correct blank option
* Minor fixes

= Improved =
* Moved entry creation to just after pre-processor to allow for {entry_id} to be usable
* Class wrapper locations improved for better addons

= Caldera Forms 1.1.7 (29 September, 2014) =

= Fixed =
* Javascript error on deleting entries in pin mode
* Minor fixes

= Improved =
* CSV exporter improvements

= Added =
* Ajax submissions on by default

= Updated =
* Balrick.JS updated to 2.3
* Ajax spinner removed and replaced with overlay blocking.
* Addon licensing v3

= Caldera Forms 1.1.6 (25 September, 2014) =

= Added =
* Akismet spam filtering processor. Listed once Askismet plugin is active and activated.
* Honeypot spamtrap option to place an invisible field in the form to trick spam bots.

= Fixed =
* Checkboxes, Radio & Dropdown select Show Values option corrected to show the values as intended.
* Better Instancing of multiple forms on page.
* Minor activation output error.
* Minor Bugfixes.

= Caldera Forms 1.1.5 (18 September, 2014) =

= Fixed =
* corrected typos in the textdomain
* Validation classes added to Alerts and not Forms.
* Minor fixes that where annoying me

= Updated =
* Handlebars.js v2

= Added =
* Gravatar field for live display of gravatar.

= Caldera Forms 1.1.4 (17 August, 2014) =

= Improved =
* Loading speed improved on form editor
* More Control hooks for form control

= Fixed =
* "Contains" clause in conditionals works correctly
* multi-site fix

= Added =
* option to clone form
* disable condition option for fields
* 'entry_id' magic tag
* Magic tag enabled all mailer fields


= Caldera Forms 1.1.3 (12 August, 2014) =

= Fixed =
* foreach warning in new installs.
* language load corrected
* minor bugs

= Caldera Forms 1.1.2 (6 August, 2014) =

= Fixed =
* datepicker clashing with jquery ui.
* Conditionals working correctly again round 2.
* validation across pages
* minor bugs

= Added =
* Pin to menu option to make direct access to entries way faster
* Extend menu item for addons and licenses
* Community menu item for sharing stuff


= Caldera Forms 1.1.1 (4 August, 2014) =

= Fixed =
* (partly) Success Message magic tags work on ajax mode. not yet on standard submit.
* Conditionals working correctly again.

= Caldera Forms 1.1.0 (1 August, 2014) =

= Added =
* Variables tab: create custom magic tags and URL return values by combining other tags, processor values and static strings.
* Magic tag autocomplete to magic tag enabled inputs in editor.
* Autopopulate options from post type or taxonomy for static select fields (radio, checkboxes, dropdown, toggle switches)


= Enhanced =
* Rebuilt the get_entry and view methods to be easier to use for developers and be more reliable
* Form Instancing and field ID's - can have multiple instances of the same form.
* Additional hooks and filters

= Caldera Forms 1.0.91 (27 July, 2014) =

= Bugfix =
* Fixed the preview button

= Added =
* Form ID added as form class

= Caldera Forms 1.0.9 (25 July, 2014) =

= Bugfix =
* Conditionals error on numerical condition value
* placeholder field took preference on masked input instead of default field

= Additions =
* Form preview button
* Processors can now return an error to stop process chain
* Process transient now accessable for storing process data for redirects and such
* Field ID added to field config panel for reference
* Extra checks for valid data
* Extra filters
* Meta Data view templates to processors

= 1.0.8 (21 July, 2014) =

= Bugfix =
* PHP 5.2+ compatibility fix on grid generation
* Multi-page that stopped the page config from being saved
* Range Slider fixed that broke sliders on multipage forms

= 1.0.7 (20 July, 2014) =

= Bugfix =
* Left off an important table update for the status- very sorry. I hate doing two updates in a day.

= Caldera Forms 1.0.6 (20 July, 2014) =

= Additions =
* Range Slider field type
* Star Rating view filter (show starts in entry view)
* Auto generate mail body from submissions + {summary} magic tag
* field %field_slug% tags dynamically bound in HTML field type ( updates dynamically with field values )
* Gravitar field binding to antry capture to show gravitar of form submitter if email is available - else uses userid of logged in user.
* Trash, restore & delete for submission entry management.
* Bulk actions for submission management (trash, delete, restore & export)
* Form Processor return values are now bindable options for other processors
* Field tags are now bindable values for processors


= Fixes =
* max_input_limit for configurations. fixed without the need to update php.ini (w00t!)
* fixed conditionals support for IE8
* some minor fixes I can't remember right now.

= Enhancements =
* Added processor meta values so that form processors can add to the form submission
* optimized js in editor UI
* more filters and actions for developers
* other stiff I can't remember

= Caldera Forms 1.0.5 (13 July, 2014) =

= Additions =
* Multi Page Forms (still some work to do to make it easier)
* Bulk option insert for select fields (dropdown, radio, checkboxes, toggle button)
* Magic Tags on fields and mailer
* tag conditionals on email message
* Ajax return filter
* Placeholder field to add a custom placeholder rather than using the lable.

= Fixes =
* in ajax verification
* Missing checkmark image in chrome
* Conditionals on checkboxes now works
* Conditionals performance on frontend
* Calculations field responds to conditionals correctly
* Static field types (select options etc) cannot be minipulated from frontend. Preprocessing on submit restores set values.

= Enhancements =
* Switched redirect filter and action order
* File upload method to use WordPress' handler to prevent issues on some installs.
* Field dragging reduces to a set block for easier field placement.

= Caldera Forms 1.0.4 (20 June, 2014) =

* Added Ajax submissions option - found in General Settings.
* Added custom field class - field wrapper based
* Added general input masking for single line text field
* Added Form Exporting and Importing

= Caldera Forms 1.0.3 (12 June, 2014) =

* Added custom input mask format for phone number
* Cleaned up form style
* Fixed in datepicker with no arrows showing
* Fixed text field showing behind star rating

= Caldera Forms 1.0.2 (11 June, 2014) =

* Added Star Rating field
* Added Calculations

= Caldera Forms 1.0.1 (10 June, 2014) =

* Added Phone Field Type
* Additional Hooks & Filters
* Some fixes

= Caldera Forms 1.0.0 =
Initial Release
