<?php

namespace Drupal\graphql_custom\Plugin\GraphQL\Schemas;

use Drupal\graphql\Plugin\GraphQL\Schemas\SchemaPluginBase;

/**
 * Custom schema.
 *
 * @GraphQLSchema(
 *   id = "custom_default",
 *   name = "Custam",
 *   path = "/graphql_custom",
 *   deriver = "Drupal\graphql\Plugin\Deriver\PluggableSchemaDeriver"
 * )
 */
class CustomSchema extends SchemaPluginBase {

}
