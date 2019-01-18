<?php

namespace Drupal\drupalup_graphql_mutation\Plugin\GraphQL\Mutations;

use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\UpdateEntityBase;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Simple mutation for updating an existing riddle node.
 *
 * @GraphQLMutation(
 *   id = "update_riddle",
 *   entity_type = "node",
 *   entity_bundle = "riddle",
 *   secure = true,
 *   name = "updateRiddle",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "id" = "String",
 *     "input" = "NodeInput"
 *   }
 * )
 */
class UpdateRiddle extends UpdateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(
    $value,
    array $args,
    ResolveContext $context,
    ResolveInfo $info
  ) {
    return array_filter([
      'title' => $args['input']['title'],
      'question' => $args['input']['question'],
      'answer' => $args['input']['answer'],
    ]);
  }

}
