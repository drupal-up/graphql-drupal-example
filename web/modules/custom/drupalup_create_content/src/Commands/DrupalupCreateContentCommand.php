<?php

namespace Drupal\drupalup_create_content\Commands;

use Drush\Commands\DrushCommands;
use Drupal\Core\Entity\EntityTypeManager;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 */
class DrupalupCreateContentCommand extends DrushCommands {

  private $entityTypeManager;

  /**
   * Part of the DependencyInjection magic happening here.
   */
  public function __construct(EntityTypeManager $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Creates some rilldes.
   *
   * @command drupalup_create_content:riddle
   * @aliases duc-riddle
   * @usage drupalup_create_content:riddle
   *   Creates some riddle nodes.
   */
  public function riddle() {
    $riddles = [
      ['question' => 'What\'s orange and sounds like a parrot?', 'answer' => 'Carrot.'],
      ['question' => 'What has four wheels and flies?', 'answer' => 'A garbage truck.'],
      ['question' => 'What kind of room has no doors or windows?', 'answer' => 'A Mushroom.'],
    ];

    foreach ($riddles as $riddle) {
      $this->entityTypeManager->getStorage('node')
        ->create([
          'type'  => 'riddle',
          'title' => $riddle['question'],
          'question' => [
            'value' => $riddle['question'],
          ],
          'answer' => [
            'value' => $riddle['answer'],
          ],
        ])
        ->save();
      $this->output()->writeln('Some riddle nodes created.');
    }
  }

}
