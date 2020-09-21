<?php

namespace Drupal\csv_import\Plugin\Field\FieldType;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\file\Plugin\Field\FieldType\FileItem;

/**
 * Plugin implementation for csv file upload field.
 *
 * @FieldType(
 *   id = "csv_import",
 *   label = @Translation("Csv import"),
 *   default_widget = "file_generic",
 *   default_formatter = "file_default",
 *   list_class = "\Drupal\file\Plugin\Field\FieldType\FileFieldItemList",
 *   constraints = {"ReferenceAccess" = {}, "FileValidation" = {}}
 * )
 */
class CsvImport extends FileItem {

  /**
   * @inheritDoc
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition)
  {
    return parent::schema($field_definition);
  }

  /**
   * @inheritDoc
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition)
  {
    return parent::propertyDefinitions($field_definition);
  }

  /**
   * @inheritDoc
   */
  public function isEmpty()
  {
    return parent::isEmpty();
  }

}
