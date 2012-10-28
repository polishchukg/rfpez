<?php

/*
|--------------------------------------------------------------------------
| Asset Definitions
|--------------------------------------------------------------------------
*/

Bundle::start('basset');

if (Config::get('basset')) Basset\Config::extend(Config::get('basset'));

Basset::scripts('website', function($basset)
{
  $basset->add('bootstrapjs', 'js/vendor/bootstrap.js')
         ->add('bootstrap-datepicker', 'js/vendor/bootstrap-datepicker.js')
         ->add('jqueryui', 'js/vendor/jqueryui.js')
         ->add('autogrow-input', 'js/vendor/autogrow-input.js')
         ->add('jquerytimeago', 'js/vendor/jquery.timeago.js')
         ->add('jqueryvalidate', 'js/vendor/jquery.validate.js')
         ->add('jqueryvalidaterfpez', 'js/vendor/jquery.validate_rfpez.js')
         ->add('jqueryform', 'js/vendor/jquery.form.js')
         ->add('jqueryhotkeys', 'js/vendor/jquery.hotkeys.js')
         ->add('jquerypjax', 'js/vendor/jquery.pjax.js')
         ->add('flashbutton', 'js/flash-button.js')
         ->add('main', 'js/main.js')
         ->add('question-and-answer', 'js/question-and-answer.js')
         ->add('vendor-image-preview', 'js/vendor-image-preview.js')
         ->add('bid-review', 'js/bid-review.js')
         ->add('new-bid', 'js/new-bid.js')
         ->add('validation', 'js/validation.js')
         ->add('filter-projects', 'js/filter-projects.js')
         ->add('collaborators', 'js/collaborators.js')
         ->add('sow-composer', 'js/sow-composer.js')
         ->add('notifications', 'js/notifications.js')
         ->add('dsbs-lookup', 'js/dsbs-lookup.js')
         ->add('infinite-vendor-scroll', 'js/infinite-vendor-scroll.js')
         ->add('save-bid-draft', 'js/save-bid-draft.js')
         ->add('bid-review-hotkeys', 'js/bid-review-hotkeys.js')
         ->add('project-comments', 'js/project-comments.js')
         ->compress();
});

Basset::styles('website', function($basset)
{
  $basset->add('bootstrap', 'bootstrap.css')
         ->add('maincss', 'main.css')
         ->compress();
});
