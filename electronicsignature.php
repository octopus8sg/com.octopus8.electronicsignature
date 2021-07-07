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
function electronicsignature_civicrm_config(&$config)
{
    _electronicsignature_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function electronicsignature_civicrm_xmlMenu(&$files)
{
    _electronicsignature_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function electronicsignature_civicrm_install()
{
    _electronicsignature_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function electronicsignature_civicrm_postInstall()
{
    _electronicsignature_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function electronicsignature_civicrm_uninstall()
{
    _electronicsignature_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function electronicsignature_civicrm_enable()
{
    _electronicsignature_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function electronicsignature_civicrm_disable()
{
    _electronicsignature_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function electronicsignature_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL)
{
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
function electronicsignature_civicrm_managed(&$entities)
{
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
function electronicsignature_civicrm_caseTypes(&$caseTypes)
{
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
function electronicsignature_civicrm_angularModules(&$angularModules)
{
    _electronicsignature_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function electronicsignature_civicrm_alterSettingsFolders(&$metaDataFolders = NULL)
{
    _electronicsignature_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function electronicsignature_civicrm_entityTypes(&$entityTypes)
{
    _electronicsignature_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function electronicsignature_civicrm_themes(&$themes)
{
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

function electronicsignature_civicrm_buildForm($formName, &$form)
{
        if ($formName == 'CRM_Profile_Form_Edit') {
            return _electronicsignature_CRM_Profile_Form_Edit($form);
        }
//    //path to add templates
//    $templatePath = realpath(dirname(__FILE__) . "/templates");
//
//    //info about who is filling the form
//    $contact_id = CRM_Core_Session::singleton()->getLoggedInContactID();
//    $form->assign('contactid', $contact_id);
//    $cont = new CRM_Contact_BAO_Contact();
//    $cont->id = $contact_id;
//    if (!$cont->find(TRUE)) {
//        return civicrm_api3_create_error(ts('Contact id is not valid'));
//    } else {
//        $contact = $cont->toArray();
//    }
//
//    // check custom fields.
//    // if sign data is present,
//    // but a form is not a profile form
//    // then a template with script to show
//    // readonly signature will be added
//
//    require_once 'CRM/Core/BAO/CustomField.php';
//    $group = "e-Signature";
//    //MAIN DATA FIELD
//    $esign_data_field =
//    $esign_jpg_field =
//    $esign_jpg_data_field =
//    $esign_png_field =
//    $esign_png_data_field = false;
//    $tempvars = $form->get_template_vars('formrun');
//    $cgvars = $form->get_template_vars('cgCount');
//    if (!$cgvars) {
//        return;
//    }
//    if ($tempvars !== 'first') {
//        $form->assign('signature_pad', 'hide');
//    }
//
//    //by default don't show the signature pad
//
//    //esign data field
//    $field = "e-Signature-DATA";
//    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
//    $fieldNAME = "custom_" . $fieldID;
//    //if there is esign data field
//    if ($form->elementExists($fieldNAME)) {
//        $form->assign('signature_pad', 'show');
//        $esign_data_field = true;
//        $form->assign('customfield', $fieldNAME);
//    }
//    $esval = _electronicsignature_getFieldValue($contact_id, $fieldNAME, $fieldID);
//    $form->assign('signature_val', $esval);
//    $form->assign('contactid', $contact_id);
//    $form->assign('contact', $contact);
//
//    //additional for admin panel
//    $fieldNAME = "custom_" . $fieldID . "_-1";
//    if ($form->elementExists($fieldNAME)) {
//        $form->assign('signature_pad', 'show');
//        $esign_data_field = true;
//        $form->assign('customfield', $fieldNAME);
//    }
//    $form->assign('esign_data_field', $esign_data_field);
//
//    //JPG FIELD
//    $field = "e-Signature-JPG";
//    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
//    $fieldNAME = "custom_" . $fieldID;
//    if ($form->elementExists($fieldNAME)) {
//        $esign_jpg_field = true;
//        $form->assign('customfieldjpg', $fieldNAME);
//    }
//
//    //additional for admin panel
//    $fieldNAME = "custom_" . $fieldID . "_-1";
//    if ($form->elementExists($fieldNAME)) {
//        $esign_jpg_field = true;
//        $form->assign('customfieldjpg', $fieldNAME);
//    }
//
//    //JPG DATA FIELD
//    $field = "e-Signature-JPG-64";
//    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
//    $fieldNAME = "custom_" . $fieldID;
//    if ($form->elementExists($fieldNAME)) {
//        $esign_jpg_data_field = true;
//        $form->assign('customfieldjpgbase', $fieldNAME);
//    }
//
//    //additional for admin panel
//    $fieldNAME = "custom_" . $fieldID . "_-1";
//    if ($form->elementExists($fieldNAME)) {
//        $esign_jpg_data_field = true;
//        $form->assign('customfieldjpgbase', $fieldNAME);
//    }
//
//    //PNG FIELD
//    $field = "e-Signature-PNG";
//    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
//    $fieldNAME = "custom_" . $fieldID;
//    if ($form->elementExists($fieldNAME)) {
//        $esign_png_field = true;
//        $form->assign('customfieldpng', $fieldNAME);
//    }
//
//    //additional for admin panel
//    $fieldNAME = "custom_" . $fieldID . "_-1";
//    if ($form->elementExists($fieldNAME)) {
//        $esign_png_field = true;
//        $form->assign('customfieldpng', $fieldNAME);
//    }
//
//    //PNG DATA FIELD
//    $field = "e-Signature-PNG-64";
//    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
//    $fieldNAME = "custom_" . $fieldID;
//    if ($form->elementExists($fieldNAME)) {
//        $esign_png_data_field = true;
//        $form->assign('customfieldpngbase', $fieldNAME);
//    }
//
//    //additional for admin panel
//    $fieldNAME = "custom_" . $fieldID . "_-1";
//    if ($form->elementExists($fieldNAME)) {
//        $esign_png_data_field = true;
//        $form->assign('customfieldpngbase', $fieldNAME);
//    }
//
//
//
//    $form->assign('esign_jpg_field', $esign_jpg_field);
//    $form->assign('esign_jpg_data_field', $esign_jpg_data_field);
//    $form->assign('esign_png_field', $esign_png_field);
//    $form->assign('esign_png_data_field', $esign_png_data_field);
//
//    Civi::resources()->addScriptFile('com.octopus8.electronicsignature', 'dist/main.js');
//    CRM_Core_Region::instance('page-body')->add(array(
//        'template' => "{$templatePath}/justdebug.tpl",
//    ));
//    $form->assign('formrun', 'first');
//    $form->assign('esign_data_field', $esign_data_field);
//    if ($formName == 'CRM_Profile_Form_Edit') {
//        $form->assign('signature_pad', 'edit');
//    }
//    if (!$esign_data_field) {
//        return;
//    }
//    CRM_Core_Region::instance('page-body')->add(array(
//        'template' => "{$templatePath}/esignshow.tpl",
//    ));
//    if (!$esign_png_data_field) {
//        return;
//    }
//    if (!$esign_png_field) {
//        return;
//    }
//    if (!$esign_jpg_data_field) {
//        return;
//    }
//    if (!$esign_jpg_field) {
//        return;
//    }


}

function _electronicsignature_CRM_Profile_Form_Edit($form)
{
    //path to add templates
    $templatePath = realpath(dirname(__FILE__) . "/templates");
    //info about who is filling the form
    $contact_id = CRM_Core_Session::singleton()->getLoggedInContactID();
    $form->assign('contactid', $contact_id);


    // check custom fields.
    // if sign data is present,
    // but a form is not a profile form
    // then a template with script to show
    // readonly signature will be added

    require_once 'CRM/Core/BAO/CustomField.php';
    $group = "e-Signature";
    //MAIN DATA FIELD
    $esign_data_field =
    $esign_jpg_field =
    $esign_jpg_data_field =
    $esign_png_field =
    $esign_png_data_field = false;

    //by default don't show the signature pad

    //esign data field
    $field = "e-Signature-DATA";
    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
    $fieldNAME = "custom_" . $fieldID;
    //if there is esign data field
    if ($form->elementExists($fieldNAME)) {
        $form->assign('signature_pad', 'show');
        $esign_data_field = true;
        $form->assign('customfield', $fieldNAME);
    }
    $esval = _electronicsignature_getFieldValue($contact_id, $fieldNAME, $fieldID);
    $form->assign('signature_val', $esval);
    $form->assign('esign_data_field', $esign_data_field);
//    CRM_Core_Region::instance('page-body')->add(array(
//        'template' => "{$templatePath}/justdebug.tpl",
//    ));

    //JPG FIELD
    $field = "e-Signature-JPG";
    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
    $fieldNAME = "custom_" . $fieldID;
    if ($form->elementExists($fieldNAME)) {
        $esign_jpg_field = true;
        $form->assign('customfieldjpg', $fieldNAME);
    }

    //JPG DATA FIELD
    $field = "e-Signature-JPG-64";
    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
    $fieldNAME = "custom_" . $fieldID;
    if ($form->elementExists($fieldNAME)) {
        $esign_jpg_data_field = true;
        $form->assign('customfieldjpgbase', $fieldNAME);
    }

    //PNG FIELD
    $field = "e-Signature-PNG";
    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
    $fieldNAME = "custom_" . $fieldID;
    if ($form->elementExists($fieldNAME)) {
        $esign_png_field = true;
        $form->assign('customfieldpng', $fieldNAME);
    }

    //PNG DATA FIELD
    $field = "e-Signature-PNG-64";
    $fieldID = CRM_Core_BAO_CustomField::getCustomFieldID($field, $group);
    $fieldNAME = "custom_" . $fieldID;
    if ($form->elementExists($fieldNAME)) {
        $esign_png_data_field = true;
        $form->assign('customfieldpngbase', $fieldNAME);
    }

    //additional for admin panel
    $fieldNAME = "custom_" . $fieldID . "_-1";
    if ($form->elementExists($fieldNAME)) {
        $esign_png_data_field = true;
        $form->assign('customfieldpngbase', $fieldNAME);
    }

    $form->assign('esign_jpg_field', $esign_jpg_field);
    $form->assign('esign_jpg_data_field', $esign_jpg_data_field);
    $form->assign('esign_png_field', $esign_png_field);
    $form->assign('esign_png_data_field', $esign_png_data_field);
    $form->assign('signature_pad', 'edit');


    CRM_Core_Region::instance('page-body')->add(array(
        'template' => "{$templatePath}/esignedit.tpl",
    ));
    Civi::resources()->addScriptFile('com.octopus8.electronicsignature', 'front/edit.js');

}


function electronicsignature_civicrm_postProcess($formName, $form)
{
    if ($formName == 'CRM_Profile_Form_Edit') {
        $values = $form->exportValues();
        $contactid = $form->getVar('_id');

        $customfieldjpg = $form->get_template_vars('customfieldjpg');
        if (!$customfieldjpg) {
            return;
        }

        $customfieldpng = $form->get_template_vars('customfieldpng');
        if (!$customfieldpng) {
            return;
        }

        $customfieldjpgbase = $form->get_template_vars('customfieldjpgbase');
        if (!$customfieldjpgbase) {
            return;
        }

        $customfieldpngbase = $form->get_template_vars('customfieldpngbase');
        if (!$customfieldpngbase) {
            return;
        }

        $datajpg = $values[$customfieldjpgbase];
        $datapng = $values[$customfieldpngbase];
        if (preg_match('/^data:image\/(\w+);base64,/', $datapng, $type)) {
            $data = substr($datapng, strpos($datapng, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
                Civi::log('No Error: no pic');
                $data = $datapng;
            }
            $data = str_replace(' ', '+', $data);
            $data = base64_decode($data);
            if ($data === false) {
                Civi::log('Error: no data');
                $data = $datapng;
            }
            $datapng = $data;
        }

        $a = [
            'name' => "signature.png",
            'mime_type' => "image/png",
            'entity_id' => $contactid,
            'field_name' => $customfieldpng,
            'content' => $datapng,
        ];
//        CRM_Core_Error::debug_var('name', $a);
        try {
            $result = civicrm_api3('Attachment', 'create', $a);
            $myVariable = print_r($result, TRUE);
        } catch (CiviCRM_API3_Exception $e) {
            $myVariable = $e->getMessage();
        }
        CRM_Core_Error::debug_var('result png', $myVariable);
        Civi::log('Base64 Datajpg: ' . $datajpg);
        CRM_Core_Error::debug_var('Base64 jpg', $datajpg);
        if (preg_match('/^data:image\/(\w+);base64,/', $datajpg, $type)) {
            $data = substr($datajpg, strpos($datapng, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
                Civi::log('No Error: no pic');
                $data = $datajpg;
            }
            $imageInfo = explode(";base64,", $datajpg);
            $imgExt = str_replace('data:image/', '', $imageInfo[0]);
            $image = str_replace(' ', '+', $imageInfo[1]);
            $imageName = "signature" . time() . "." . $imgExt;
            $data = base64_decode($image);
            if ($data === false) {
                Civi::log('Error: no data');
                $data = $datajpg;
            }
            $datajpg = $data;
        }

        $b = [
            'name' => $imageName,
            'mime_type' => "image/jpeg",
            'entity_id' => $contactid,
            'field_name' => $customfieldjpg,
            'content' => $datajpg,
        ];
        try {
            $result = civicrm_api3('Attachment', 'create', $b);
            $myVariable = print_r($result, TRUE);
        } catch (CiviCRM_API3_Exception $e) {
            $myVariable = $e->getMessage();
        }
        CRM_Core_Error::debug_var('result jpg', $myVariable);

    }
}

function electronicsignature_civicrm_pageRun(&$page)
{

    //The way to put this only once
    $templatePath = realpath(dirname(__FILE__) . "/templates");
    $tempvars = $page->get_template_vars('arun');
    $tempvars = $page->get_template_vars('_debug_tpls');
    $viewprofiletpl = "CRM_Profile_Page_View";
    $tempname = $page->getVar('_name');
    if ($tempvars != 'first') {
//        return _electronicsignature_profile_page_view($page);
        if ($tempname == $viewprofiletpl) {
            return _electronicsignature_profile_page_view($page);
        }
//else{
//            CRM_Core_Region::instance('page-body')->add(array(
//                'template' => "{$templatePath}/justdebug.tpl",
//            ));
//        }
//
    }
    $page->assign('arun', 'first');
}

function _electronicsignature_profile_page_view($page){
       $templatePath = realpath(dirname(__FILE__) . "/templates");
//        CRM_Core_Region::instance('page-body')->add(array(
//            'template' => "{$templatePath}/justdebug.tpl",
//        ));
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
            'template' => "{$templatePath}/esignshow.tpl",
        ));
    Civi::resources()->addScriptFile('com.octopus8.electronicsignature', 'front/show.js');

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
