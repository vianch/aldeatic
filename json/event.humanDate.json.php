<?php
header('Content-type: text/json');
echo '[';
$separator = "";
$days = 16;
 //   echo '  { "date": "2013-03-19 17:30:00", "type": "meeting", "title": "Test Last Year", "description": "Lorem Ipsum dolor set", "url": "" },';
  //  echo '  { "date": "2013-03-23 17:30:00", "type": "meeting", "title": "Test Next Year", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },';

$i = 1;
    echo $separator;
    $initTime = date("Y")."-".date("m")."-".date("d")." ".date("H").":00:00";
    //$initTime = date("Y-m-d H:i:00");
    echo '  { "date": "2013-12-24 17:30:00", "type": "meeting", "title": "Feliz navidad", "description": "Lorem Ipsum dolor set", "url": "" },';
    echo '  { "date": "2013-12-31 17:30:00", "type": "meeting", "title": "FELIZ AÑO!!", "description": "FELIZ AÑO!!", "url": "" },';
    echo '  { "date": "2014-03-03 17:30:00", "type": "meeting", "title": "ClickZLive", "description": " La feria que reune a los expertos en optimización de buscadores y mercadeo digital.", "url": " http://www.clickzlive.com/newyork/" },';
      echo '  { "date": "2014-01-07 17:30:00", "type": "meeting", "title": "Feria", "description": " Descripción: Gatgets, conexión y estilo de vida! La feria de Tecnologías para el consuo más importante del mundo se celebra en Las Vegas!", "url": "  http://www.cesweb.org/" },';

    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 1 days 8 hours')); echo '", "type": "meeting", "title": "Test Project '; echo $i; echo ' Brainstorming", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 2 days 3 hours')); echo '", "type": "test", "title": "A very very long name for a f*cking project '; echo $i; echo ' events", "description": "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.", "url": "http://www.event4.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 2 days 3 hours')); echo '", "type": "meeting", "title": "Project '; echo $i; echo ' meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event5.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 4 days 3 hours')); echo '", "type": "demo", "title": "Project '; echo $i; echo ' demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event6.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 7 days 1 hours')); echo '", "type": "meeting", "title": "Test Project '; echo $i; echo ' Brainstorming", "description": "Lorem Ipsum dolor set", "url": "http://www.event7.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 12 days 3 hours')); echo '", "type": "test", "title": "A very very long name for a f*cking project '; echo $i; echo ' events", "description": "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.", "url": "http://www.event8.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 20 days 10 hours')); echo '", "type": "demo", "title": "Project '; echo $i; echo ' demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event9.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 22 days 3 hours')); echo '", "type": "meeting", "title": "Test Project '; echo $i; echo ' Brainstorming", "description": "Lorem Ipsum dolor set", "url": "http://www.event10.com/" },';
    echo '  { "date": "'; echo date("Y-m-d H:i:00",strtotime($initTime. ' + 28 days 1 hours')); echo '", "type": "test", "title": "A very very long name for a f*cking project '; echo $i; echo ' events", "description": "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.", "url": "http://www.event11.com/" }';
    $separator = ",";

echo ']';
?>