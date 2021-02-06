/**
 * @file
 * mollo_creator_drupal behaviors.
 */

(function($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Behavior molloModule.
   */
  Drupal.behaviors.molloModule = {
    attach(context, settings) {
      console.log('Creator');

      const $triggerElem = $('.mollo-creator-drupal-test-1-trigger');
      const $resultElem = $('.mollo-creator-drupal-test-1-result');
      let counter = 0;

      $('#mollo-creator-drupal', context)
        .once('mollo-creator-drupal')
        .each(() => {
          $triggerElem.click(event => {
            console.log('click!');
            event.preventDefault();
            counter++;
            $resultElem.html(counter);
          });
        });
    },
  };
})(jQuery, Drupal, drupalSettings);
