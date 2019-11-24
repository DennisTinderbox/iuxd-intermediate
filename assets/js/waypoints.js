// WAYPOINTS.JS

var $1_trigger = $('#1');
var $2_trigger = $('#2');
var $3_trigger = $('#3');
var $4_trigger = $('#4');
var $5_trigger = $('#5');
var $6_trigger = $('#6');

var $1_action = $('#1_action');
var $2_action = $('#2_action');
var $3_action = $('#3_action');
var $4_action = $('#4_action');
var $5_action = $('#5_action');
var $6_action = $('#6_action');



// Waypoint at id 1
$1_trigger.waypoint(function () {
  $2_action.removeClass('active');
  $1_action.addClass('active');
}, { offset: '-1%'});



// Waypoint at id 2
$2_trigger.waypoint(function () {
  $1_action.removeClass('active');
  $3_action.removeClass('active');
  $2_action.addClass('active');
}, { offset: '0%'});

// Waypoint at id 3
$3_trigger.waypoint(function () {
  $2_action.removeClass('active');
  $4_action.removeClass('active');
  $3_action.addClass('active');
}, { offset: '0%'});

// Waypoint at id 4
$4_trigger.waypoint(function () {
  $3_action.removeClass('active');
  $5_action.removeClass('active');
  $4_action.addClass('active');
}, { offset: '0%'});

// Waypoint at id 5
$5_trigger.waypoint(function () {
  $4_action.removeClass('active');
  $6_action.removeClass('active');
  $5_action.addClass('active');
}, { offset: '0%'});

// Waypoint at id 6
$6_trigger.waypoint(function () {
  $5_action.removeClass('active');
  $6_action.addClass('active');
}, { offset: '0%'});









