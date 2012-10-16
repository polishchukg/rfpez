<?php

class Seed_Task {

  public function run() {

    \Laravel\CLI\Command::run(array('import_sow_templates'));

    Service::create(array('name' => 'Web Design', 'description' => 'This is the description for web design.'));
    Service::create(array('name' => 'Web Development', 'description' => 'This is the description for web development.'));
    Service::create(array('name' => 'Content Management ', 'description' => 'This is the description for content management.'));

    for ($i = 0; $i < 5; $i++) Factory::vendor();
    for ($i = 0; $i < 5; $i++) Factory::officer();
    for ($i = 0; $i < 10; $i++) Factory::project();
    for ($i = 0; $i < 15; $i++) Factory::bid();
    for ($i = 0; $i < 15; $i++) Factory::question();

    for ($i = 0; $i < 10; $i++) Factory::vendor();

    $p = Factory::project(array('title' => 'New Website for SBA.gov'));
    for ($i = 0; $i < 40; $i++) Factory::bid(array(), $p->id);

    foreach(Officer::all() as $officer) $p->officers()->attach($officer->id);

  }

}
