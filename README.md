# com.octopus8.electronicsignature

![Screenshot](/images/screenshot.png)

(*FIXME: In one or two paragraphs, describe what the extension does and why one would download it. *)

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.2+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Getting Started

### Before installation be sure to delete 

* "e-Signature" custom field group and 
* "e-Signature-DATA", 
* "e-Signature-JPG", 
* "e-Signature-JPG-64", 
* "e-Signature-PNG", 
* "e-Signature-PNG-64" custom field types

### After creating Profile don't forget to add
* "e-Signature-DATA :: e-Signature", 
* "e-Signature-JPG :: e-Signature", 
* "e-Signature-JPG-64 :: e-Signature", 
* "e-Signature-PNG :: e-Signature", 
* "e-Signature-PNG-64 :: e-Signature", 

### AND
* nickname (from Contact) and first/last name (from Individual)
fields to Profile

### AND
* You can change Admin notification message template to the message.tpl to avoid sending e-sign raw data to site administrator

## Known Issues

The *IDS check* should be desabled from Administration->Access Control->WP settings

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.octopus8.electronicsignature@https://github.com/FIXME/com.octopus8.electronicsignature/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/com.octopus8.electronicsignature.git
cv en electronicsignature
```

