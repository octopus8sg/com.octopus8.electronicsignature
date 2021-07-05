<?php

require_once 'electronicsignature.civix.php';
// phpcs:disable
use CRM_Electronicsignature_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function electronicsignature_civicrm_config(&$config) {
  _electronicsignature_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function electronicsignature_civicrm_xmlMenu(&$files) {
  _electronicsignature_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function electronicsignature_civicrm_install() {
  _electronicsignature_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function electronicsignature_civicrm_postInstall() {
  _electronicsignature_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function electronicsignature_civicrm_uninstall() {
  _electronicsignature_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function electronicsignature_civicrm_enable() {
  _electronicsignature_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function electronicsignature_civicrm_disable() {
  _electronicsignature_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function electronicsignature_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _electronicsignature_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function electronicsignature_civicrm_managed(&$entities) {
  _electronicsignature_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function electronicsignature_civicrm_caseTypes(&$caseTypes) {
  _electronicsignature_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function electronicsignature_civicrm_angularModules(&$angularModules) {
  _electronicsignature_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function electronicsignature_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _electronicsignature_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function electronicsignature_civicrm_entityTypes(&$entityTypes) {
  _electronicsignature_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function electronicsignature_civicrm_themes(&$themes) {
  _electronicsignature_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function electronicsignature_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function electronicsignature_civicrm_navigationMenu(&$menu) {
//  _electronicsignature_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _electronicsignature_civix_navigationMenu($menu);
//}

function electronicsignature_civicrm_apiWrappers(&$wrappers, $apiRequest)
{
    // The APIWrapper is conditionally registered so that it runs only when appropriate
    if ($apiRequest['entity'] == 'Attachment' && $apiRequest['action'] == 'create') {
        if ($apiRequest['version'] == '3') {
            $wrappers[] = new CRM_electronicsignature_API3Wrappers_Attachment();
        }
    }
}

function electronicsignature_civicrm_buildForm($formName, &$form)
{
    $templatePath = realpath(dirname(__FILE__) . "/templates");
//    CRM_Core_Region::instance('page-body')->add(array(
//        'template' => "{$templatePath}/justdebug.tpl",
//    ));
    if ($formName == 'CRM_Profile_Form_Edit') {
        $contact_id = CRM_Core_Session::singleton()->getLoggedInContactID();
        $form->assign('contactid', $contact_id);
        $cont = new CRM_Contact_BAO_Contact();
        $cont->id = $contact_id;
        if (!$cont->find(TRUE)) {
            return civicrm_api3_create_error(ts('Contact id is not valid'));
        } else {
            $contact = $cont->toArray();
        }
//        if($contact_id != $contact['id']){
//            CRM_Core_Region::instance('page-body')->add(array(
//                'template' => "{$templatePath}/justdebug.tpl",
//            ));
//            return;
//        }
        require_once 'CRM/Core/BAO/CustomField.php';
        $group = "e-Signature";
        //MAIN DATA FIELD
        $field = "e-Signature-DATA";
        $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
        $fieldNAME = "custom_" . $fieldID;
        if ($form->elementExists($fieldNAME)) {
            $form->assign('customfield', $fieldNAME);
        }else{
//            $form->assign('customfield', $fieldNAME);
            Civi::log()->info('customfield: ' . $fieldNAME);
            return;
        }
        $esval = _electronicsignature_getFieldValue($contact_id, $fieldNAME, $fieldID);
        $form->assign('signature_val', $esval);
        Civi::resources()->addScriptFile('com.octopus8.o8esignature', 'dist/main.js');
        $form->assign('signature_pad', 'edit');
        $form->assign('contactid', $contact_id);
        $form->assign('contact', $contact);
        //JPG DATA FIELD
        $field = "e-Signature-JPG";
        $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
        $fieldNAME = "custom_" . $fieldID;
        if ($form->elementExists($fieldNAME)) {
            $form->assign('customfieldjpg', $fieldNAME);
        }else{
//            $form->assign('customfieldjpg', $fieldNAME);
            Civi::log()->info('customfieldjpg: ' . $fieldNAME);
            return;
        }
        $field = "e-Signature-JPG-64";
        $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
        $fieldNAME = "custom_" . $fieldID;
        if ($form->elementExists($fieldNAME)) {
            $form->assign('customfieldjpgbase', $fieldNAME);
        }else{
//            $form->assign('customfieldjpgbase', $fieldNAME);
            Civi::log()->info('customfieldjpgbase: ' . $fieldNAME);
            return;
        }
//        $form->addElement('textarea', 'tcustomfieldjpg', $fieldNAME);
        //PNG DATA FIELD
        $field = "e-Signature-PNG";
        $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
        $fieldNAME = "custom_" . $fieldID;
        if ($form->elementExists($fieldNAME)) {
            $form->assign('customfieldpng', $fieldNAME);
        }else{
//            $form->assign('customfieldpng', $fieldNAME);
            Civi::log()->info('customfieldpng: ' . $fieldNAME);
            return;
        }
        $field = "e-Signature-PNG-64";
        $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
        $fieldNAME = "custom_" . $fieldID;
        if ($form->elementExists($fieldNAME)) {
            $form->assign('customfieldpngbase', $fieldNAME);
        }else{
//            $form->assign('customfieldpngbase', $fieldNAME);
            Civi::log()->info('customfieldpngbase: ' . $fieldNAME);
            return;
        }
//        $form->addElement('textarea', 'tcustomfieldpng', $fieldNAME);
        CRM_Core_Region::instance('page-body')->add(array(
            'template' => "{$templatePath}/hidedebug.tpl",
        ));

    }

}

//function electronicsignature_civicrm_idsException(&$skip){
////    $skip[] = 'edit-my-user-profile/?civiwp=CiviCRM&q=civicrm%2Fprofile%2Fedit';
//    $skip[] = 'civicrm/profile';
////    $skip[] = 'civicrm/profile/edit';
//    $myVariable=print_r($skip, TRUE);
//    Civi::log()->info($myVariable);
//}
function electronicsignature_civicrm_postProcess($formName, $form)
{
    if ($formName == 'CRM_Profile_Form_Edit') {
        $values = $form->exportValues();
        $myVariable = print_r($values, TRUE);
        $contactid = $form->getVar( '_id' );
        Civi::log()->info($myVariable);
        //Get what the form sended
        //Find new client id by primary email
//        $result = civicrm_api3('Email', 'get', [
//            'sequential' => 1,
//            'email' => $myVariable['email-Primary'],
//            'is_primary' => 1,
//        ]);
//        $myContact = print_r($result, TRUE);
//        Civi::log()->info('$myContact');
//        Civi::log()->info($myContact);
//        if($result['count'] == 1){
//            $contactid = $result['values']['contact_id'];
//        }else{
//            return;
//        }
        $customfieldjpg = $form->get_template_vars('customfieldjpg');
        if(!$customfieldjpg){
            return;
        }
        $customfieldpng = $form->get_template_vars('customfieldpng');
        if(!$customfieldpng){
            return;
        }
        $customfieldjpgbase = $form->get_template_vars('customfieldjpgbase');
        if(!$customfieldjpgbase){
            return;
        }
        $customfieldpngbase = $form->get_template_vars('customfieldpngbase');
        if(!$customfieldpngbase){
            return;
        }
        $datajpg = $values[$customfieldjpgbase];
        $datapng = $values[$customfieldpngbase];
        $a = [
            'name' => "signature.png",
            'mime_type' => "image/png",
            'entity_id' => $contactid,
            'field_name' => $customfieldpng,
            'content' => $datapng,
        ];
        CRM_Core_Error::debug_var('name', $a);
        $result = civicrm_api3('Attachment', 'create', $a);
        $b = [
            'name' => "signature.jpg",
            'mime_type' => "image/jpg",
            'entity_id' => $contactid,
            'field_name' => $customfieldjpg,
            'content' => $datajpg,
        ];
        $result = civicrm_api3('Attachment', 'create', $b);
    }
}

function electronicsignature_civicrm_pageRun(&$page)
{
    //The way to put this only once
    $templatePath = realpath(dirname(__FILE__) . "/templates");
    $tempvars = $page->get_template_vars('arun');
    $viewprofiletpl = "CRM/Profile/Page/View.tpl";
    //The way to put this only once
    $tempname = $page->get_template_vars('tplFile');
    if ($tempname == $viewprofiletpl) {
        if ($tempvars !== 'first') {
            Civi::resources()->addScriptFile('com.octopus8.electronicsignature', 'dist/main.js');
            $contact_id = CRM_Core_Session::singleton()->getLoggedInContactID();
            $page->assign('contactid', $contact_id);
            $cont = new CRM_Contact_BAO_Contact();
            $cont->id = $contact_id;
            if (!$cont->find(TRUE)) {
                return civicrm_api3_create_error(ts('Contact id is not valid'));
            } else {
                $contact = $cont->toArray();
            }
            require_once 'CRM/Core/BAO/CustomField.php';
            $group = "e-Signature";
            //MAIN DATA FIELD
            $field = "e-Signature-DATA";
            $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
            $fieldNAME = "custom_" . $fieldID;
            $esval = _electronicsignature_getFieldValue($contact_id, $fieldNAME, $fieldID);
            $page->assign('signature_val', $esval);
            $page->assign('signature_pad', 'show');
            $page->assign('customfield', $fieldNAME);
            $page->assign('contactid', $contact_id);
            $page->assign('contact', $contact);
            //JPG DATA FIELD
            $field = "e-Signature-JPG";
            $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
            $fieldNAME = "custom_" . $fieldID;
            $page->assign('customfieldjpg', $fieldNAME);
            //PNG DATA FIELD
            $field = "e-Signature-PNG";
            $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
            $fieldNAME = "custom_" . $fieldID;
            $page->assign('customfieldpng', $fieldNAME);
            $field = "e-Signature-PNG-64";
            $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
            $fieldNAME = "custom_" . $fieldID;
            $page->assign('customfieldpngbase', $fieldNAME);
            $field = "e-Signature-JPG-64";
            $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
            $fieldNAME = "custom_" . $fieldID;
            $page->assign('customfieldjpgbase', $fieldNAME);


            CRM_Core_Region::instance('page-body')->add(array(
                'template' => "{$templatePath}/hidedebug.tpl",
            ));
            //The way to put this only once
            $page->assign('arun', 'first');
        }
    }
}

function _electronicsignature_getFieldValue($entityID, $field, $fieldID)
{
    if (strpos($field, 'custom_') === 0) {
        $custom_field_id = str_replace("custom_", "", $field);
        try {
            $params['entityID'] = $entityID;
            $params[$field] = 1;
            $values = CRM_Core_BAO_CustomValueTable::getValues($params);
            if (!empty($values[$field])) {
                $val = CRM_Core_BAO_CustomField::displayValue($values[$field], $fieldID, $entityID ?? NULL);
                return $val;
            } elseif (!empty($values['error_message'])) {
                return $values['error_message'];
            }
        } catch (Exception $e) {
            //do nothing
        }
    }
    return null;
}


function _electronicsignature_getImage($data)
{
    if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
        $data = substr($data, strpos($data, ',') + 1);
        $type = strtolower($type[1]); // jpg, png, gif

        if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
            return $data;
        }
        $data = str_replace(' ', '+', $data);
        $data = base64_decode($data);
    }
    return $data;
}
