<?php

namespace Drupal\drupalup_graphql_mutation\Plugin\GraphQL\Mutations;

use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\CreateEntityBase;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Simple mutation for creating a new riddle node.
 *
 * @GraphQLMutation(
 *   id = "create_riddle",
 *   entity_type = "node",
 *   entity_bundle = "riddle",
 *   secure = true,
 *   name = "createRiddle",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "input" = "NodeInput"
 *   }
 * )
 */
class CreateRiddle extends CreateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(
    $value,
    array $args,
    ResolveContext $context,
    ResolveInfo $info
  ) {
    return [
      'title' => $args['input']['title'],
      'question' => $args['input']['question'],
      'answer' => $args['input']['answer'],
    ];
  }

}
