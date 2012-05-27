<?php
/**
 * Copyright (c) 2011 Bart Visscher <bartv@thisnet.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

OC_JSON::checkLoggedIn();
//OC_JSON::checkAppEnabled('todo');
OC::$CLASSPATH['OC_Todo_Todo'] = 'apps/todo/lib/todo.php';
$items = OC_Todo_Todo::getLists();

$tmpl = new OC_Template('todo', 'part.lists');
$tmpl->assign('lists', $items);
echo $tmpl->fetchPage();

/*require_once ("../../../lib/base.php");
OC_JSON::checkLoggedIn();
OC_JSON::checkAppEnabled('calendar');
$calendarid = $_POST['calendarid'];
$calendar = OC_Calendar_App::getCalendar($calendarid);//access check
OC_Calendar_Calendar::setCalendarActive($calendarid, $_POST['active']);
$calendar = OC_Calendar_App::getCalendar($calendarid);
OC_JSON::success(array(
	'active' => $calendar['active'],
	'eventSource' => OC_Calendar_Calendar::getEventSourceInfo($calendar),
));*/
