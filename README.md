# Drupal setup with PHPCS

## Having the drupal/coder package

in this project we have it already in the composer.json file


## Having the setup in the phpcs.xml

```
<?xml version="1.0" encoding="UTF-8"?>
<ruleset name="phpcs-standard">
  <description>Codestyle ruleset for Drupal</description>

  <!-- Specify standards. -->
  <rule ref="Drupal"/>
  <rule ref="DrupalPractice"/>

  <!-- Include path with the Drupal and DrupalPractice rules. -->
  <config name="installed_paths" value="vendor/drupal/coder/coder_sniffer"/>

  <!-- Set ignore extensions. -->
  <!-- @todo remove .css to check also the css files. -->
  <!-- @see https://www.drupal.org/node/2867601#comment-12075633 -->
  <arg name="ignore" value="*.css,*.md,*.txt"/>

  <!-- Specify folders. -->
  <file>web/modules/custom</file>
  <file>web/themes/custom</file>
</ruleset>

```

## Be able to run codesniffer locally:
(if you cloned this repo and want to try it - run composer install first)

```
 ./vendor/bin/phpcs
```

to get results something like:
```
C02WD0CDHTDD:drupal_phpcs nikolay.borisov$ ./vendor/bin/phpcs

FILE: /Users/nikolay.borisov/Sites/drupal_phpcs/web/modules/custom/drupal_up_phpcswrong/src/Plugin/Block/ContactFormBlock.php
------------------------------------------------------------------------------------------------------------------------------
FOUND 6 ERRORS AND 3 WARNINGS AFFECTING 5 LINES
------------------------------------------------------------------------------------------------------------------------------
  5 | WARNING | [x] There must be no blank line following an inline comment
  5 | WARNING | [ ] There must be no blank line following an inline comment
  5 | ERROR   | [x] Inline comments must start with a capital letter
  5 | ERROR   | [x] Inline comments must end in full-stops, exclamation marks, colons, question marks, or closing parentheses
 15 | ERROR   | [x] Namespaced classes/interfaces/traits should be referenced with use statements
 22 | ERROR   | [x] Inline comments must end in full-stops, exclamation marks, colons, question marks, or closing parentheses
 23 | ERROR   | [x] Expected 1 space after "/"; 0 found
 23 | WARNING | [ ] Unused variable $form_builder.
 31 | ERROR   | [x] Missing function doc comment
------------------------------------------------------------------------------------------------------------------------------
PHPCBF CAN FIX THE 7 MARKED SNIFF VIOLATIONS AUTOMATICALLY
------------------------------------------------------------------------------------------------------------------------------

Time: 224ms; Memory: 8MB
```
