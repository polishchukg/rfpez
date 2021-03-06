<?php namespace AdminModels;

class Project extends \Eloquent {

  public $columns = array(
    'id',
    'forked_from_project_id',
    'project_type_id',
    'title',
    'agency',
    'office',
    'zipcode',
    'fork_count',
    'recommended',
    'public',
    'background',
    'sections',
    'variables',
    'price_type',
    'proposals_due_at',
    'sow_progress',
    'posted_to_fbo_at',
    'question_period_over_at',
    'created_at',
    'updated_at',
    'source',
    'delisted',
    'external_url',
    'amending'
  );

  public $edit = array(
    'id',
    'forked_from_project_id',
    'project_type_id',
    'title',
    'agency',
    'office',
    'zipcode',
    'fork_count',
    'recommended',
    'public',
    'background',
    'sections',
    'variables',
    'price_type',
    'proposals_due_at',
    'sow_progress',
    'posted_to_fbo_at',
    'question_period_over_at',
    'created_at',
    'updated_at',
    'source',
    'delisted',
    'external_url',
    'amending'
  );

}