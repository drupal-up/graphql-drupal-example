<?php

namespace Drupal\drupalup_graphql_mutation\Plugin\GraphQL\Mutations;

use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\DeleteEntityBase;

/**
 * Simple mutation for deleting a riddle node.
 *
 * @GraphQLMutation(
 *   id = "delete_riddle",
 *   entity_type = "node",
 *   entity_bundle = "riddle",
 *   secure = true,
 *   name = "deleteRiddle",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "id" = "String"
 *   }
 * )
 */
class DeleteRiddle extends DeleteEntityBase {

}
