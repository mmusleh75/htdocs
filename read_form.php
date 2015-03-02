<?php
include 'db_config.php';
include('login.php');

#$fullname=(empty($_POST['fullname'])?"no value":$_POST['fullname']);
#$title= (empty($_POST['title'])?"no value":$_POST['title']);
#$department=(empty($_POST['department'])?"no value":$_POST['department']);
#$reviewer_name=(empty($_POST['reviewer_name'])?"no value":$_POST['reviewer_name']);
$review_reason = (empty($_POST['review_reason'])?"no value":$_POST['review_reason']);
$started_position = (empty($_POST['started_position'])?"no value":$_POST['started_position']);
$apprasial_date = (empty($_POST['apprasial_date'])?"no value":$_POST['apprasial_date']);
$job_knowledge = (empty($_POST['job_knowledge'])?"no value":$_POST['job_knowledge']);
$job_knowledge_comments = (empty($_POST['job_knowledge_comments'])?"no value":$_POST['job_knowledge_comments']);
$productivity = (empty($_POST['productivity'])?"no value":$_POST['productivity']);
$productivity_comments = (empty($_POST['productivity_comments'])?"no value":$_POST['productivity_comments']);
$quality = (empty($_POST['quality'])?"no value":$_POST['quality']);
$quality_comments = (empty($_POST['quality_comments'])?"no value":$_POST['quality_comments']);
$independence = (empty($_POST['independence'])?"no value":$_POST['independence']);
$independence_comments = (empty($_POST['independence_comments'])?"no value":$_POST['independence_comments']);
$creativity = (empty($_POST['creativity'])?"no value":$_POST['creativity']);
$creativity_comments = (empty($_POST['creativity_comments'])?"no value":$_POST['creativity_comments']);
$initiative = (empty($_POST['initiative'])?"no value":$_POST['initiative']);
$initiative_comments = (empty($_POST['initiative_comments'])?"no value":$_POST['initiative_comments']);
$adherence_to_policy = (empty($_POST['adherence_to_policy'])?"no value":$_POST['adherence_to_policy']);
$adherence_to_policy_comments = (empty($_POST['adherence_to_policy_comments'])?"no value":$_POST['adherence_to_policy_comments']);
$judgment = (empty($_POST['judgment'])?"no value":$_POST['judgment']);
$judgment_comments = (empty($_POST['judgment_comments'])?"no value":$_POST['judgment_comments']);
$managerial = (empty($_POST['managerial'])?"no value":$_POST['managerial']);
$managerial_comments = (empty($_POST['managerial_comments'])?"no value":$_POST['managerial_comments']);
$attitude = (empty($_POST['attitude'])?"no value":$_POST['attitude']);
$attitude_comments = (empty($_POST['attitude_comments'])?"no value":$_POST['attitude_comments']);
$results = (empty($_POST['results'])?"no value":$_POST['results']);
$evaluation = (empty($_POST['evaluation'])?"no value":$_POST['evaluation']);
$overall = (empty($_POST['overall'])?"no value":$_POST['overall']);


$review_reason_size = sizeof($review_reason);

for ($i=0; $i<$review_reason_size; $i++){
    echo $review_reason[$i];
    echo "<br>";
}

/*
foreach ($_POST as $key => $value) {
    echo ("$key : $value");
}
*/

echo ($_SESSION['fullname']); echo("<br/>");
echo($_SESSION['job_title']);echo("<br/>");
echo($_SESSION['department']);echo("<br/>");
echo($_SESSION['fullname']);echo("<br/>");
echo($started_position);echo("<br/>");
echo($apprasial_date);echo("<br/>");
echo($job_knowledge);echo("<br/>");
echo($job_knowledge_comments);echo("<br/>");
echo($productivity);echo("<br/>");
echo($productivity_comments);echo("<br/>");
echo($quality);echo("<br/>");
echo($quality_comments);echo("<br/>");
echo($independence);echo("<br/>");
echo($independence_comments);echo("<br/>");
echo($creativity);echo("<br/>");
echo($creativity_comments);echo("<br/>");
echo($initiative);echo("<br/>");
echo($initiative_comments);echo("<br/>");
echo($adherence_to_policy);echo("<br/>");
echo($adherence_to_policy_comments);echo("<br/>");
echo($judgment);echo("<br/>");
echo($judgment_comments);echo("<br/>");
echo($managerial);echo("<br/>");
echo($managerial_comments);echo("<br/>");
echo($attitude);echo("<br/>");
echo($attitude_comments);echo("<br/>");
echo($results);echo("<br/>");
echo($evaluation);echo("<br/>");
echo($overall);echo("<br/>");

$conn = mysql_connect($host, $dbusername, $dbpassword);
if (!$conn) {
  die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db($db, $conn);

$sql = "insert into users (username, password, firstname, lastname, job_title, department) values ('johnd','password','john','doe','mgr','rnd');";

if (mysql_query($sql, $conn) === TRUE) {
    echo "New record created successfully";
} else {
    echo (mysql_error());
}

/*
$query = "SELECT CASE b.job_status
                WHEN 0 THEN 'Pending'
                WHEN 1 THEN '<font color=orange>In Progress</font>'
                WHEN 2 THEN '<font color=green>Success</font>'
                ELSE '<font color=red>Failed</font>'
                END AS `BUIStatus`
                , COUNT(1) BUICount
FROM batch_class_job_queue b
JOIN domain d ON b.domain_id = d.id
WHERE DATEDIFF(UTC_TIMESTAMP(), b.created) <= 7
GROUP BY b.job_status;";

#echo $query;
	
$result_sum = mysql_query($query,$con);

$col_count_sum = mysql_num_fields($result_sum); 

#$num = mysql_numrows($result);
*/

mysql_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Submitting Form Data</title>
    </head>
    <body>
        
    </body>
</html>
