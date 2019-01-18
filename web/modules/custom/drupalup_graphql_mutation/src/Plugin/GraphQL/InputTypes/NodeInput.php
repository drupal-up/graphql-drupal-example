<?php

namespace Drupal\drupalup_graphql_mutation\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * The input type for node mutations.
 *
 * @GraphQLInputType(
 *   id = "node_input",
 *   name = "NodeInput",
 *   fields = {
 *     "title" = "String",
 *     "body" = {
 *        "type" = "String",
 *        "nullable" = "TRUE"
 *     }
 *   }
 * )
 */
class NodeInput extends InputTypePluginBase {

}
