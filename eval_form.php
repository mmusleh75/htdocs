<?php 
include ('base.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Performance Appraisal</title>
<link href="css/bitnami.css" media="all" rel="Stylesheet" type="text/css" />
</head>
<body>

<div style="width:80%;">
<form action="read_form.php" method="post" enctype="multipart/form-data">
<h2>Performance Appraisal</h2>
<h2>CONFIDENTIAL</h2>

<table width="100%" border="0">
<tr>
    <td style="float: left;"><input type="submit" name="send" value="Send Forward" class="styled-button-2"></td>
    <td style="float: right;"><a href="logout.php">Log Out</a></td>
</tr>
</table>


<table width="100%">
<tr>
    <td width="50%"><p><b>Employee Name:</b> <?php echo($_SESSION['fullname']);?></p></td>
    <td><p><b>Title:</b> <?php echo($_SESSION['job_title']);?></p></td>
</tr>
<tr>
    <td><p><b>Department:</b> <?php echo($_SESSION['department']);?></p></td>
    <td><p><b>Reviewer's Name:</b> <?php echo($_SESSION['fullname']);?></p></td>
</tr>
</table>

<br />
<b>Reason for Review: </b>
<table width="100%">
<tr>
    <td width="33%"><p><input type="checkbox" name="review_reason[]" value="Annual" checked>Annual</p></td>
    <td width="33%"><p><input type="checkbox" name="review_reason[]" value="Promotion">Promotion</p></td>
    <td width="33%"><p><input type="checkbox" name="review_reason[]" value="Unsatisfactory Performance">Unsatisfactory Performance</p></td>
</tr>
<tr>
    <td><p><input type="checkbox" name="review_reason[]" value="Merit" checked>Merit</p></td>
    <td><p><input type="checkbox" name="review_reason[]" value="End of Probation">End of Probation</p></td>
    <td><p><input type="checkbox" name="review_reason[]" value="Other">Other</p></td>
</tr>
</table>

<br />
<table width="100%">
<tr>
    <td width="33%"><p>Date Employee Began Present Position: <input type="date" name="started_position"></p></td>
    <td width="33%"><p>Appraisal Date: <input type="date" name="apprasial_date"></p></td>
</tr>
</table>

<br />

<div>
<p><b>Instructions:</b> Carefully evaluate employee's work performance in relation to current job requirements. Check rating box to indicate the employee's performance. Indicate N/A if not applicable. Assign points for each rating within the scale and write that number in the top right corner of the box. </p>
</div>

<b>Definitions of Performance Ratings</b><br>
<p><b>V - Very Good:</b> Results clearly exceed most of the requirements of the job in key areas. Performance is of high quality and is achieved on a consistent basis.			</p>

<p><b>G- Good:</b> Competent and dependable level of performance. Results met performance standards of the job and exceeded the requirements in some areas.			</p>

<p><b>I - Improvement Needed:</b> Performance is deficient in certain areas. Improvement is necessary. Results are marginal and do not meet some of the requirements of the job.			</p>

<p><b>U- Unsatisfactory:</b> Results are generally unacceptable and require immediate improvement. Results achieved do not meet the requirements of the job.			</p>

<table width="100%">
<tr>
    <th width="50%"><b>General Factors</b></th>
    <th width="20%"><b>Rating</b></th>
    <th width="30%"><b>Supportive Details or Comments</b></th>
</tr>

<tr>
    <td class="text_align">1. Job Knowledge- The extent to which an employee possesses the practical and technical knowledge required on the job.</td>
    <td class="text_align">
    <input type="radio" name="job_knowledge" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="job_knowledge" value="g"> Good (3)<br>
    <input type="radio" name="job_knowledge" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="job_knowledge" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="job_knowledge_comments" rows="6" cols="50">job knowledge</textarea></td>
</tr>
<tr>
    <td class="text_align">2. Productivity - The extent to which an employee produces a significant volume of work efficiently in a specified period of time and can be relied upon regarding task completion.</td>
    <td class="text_align">
    <input type="radio" name="productivity" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="productivity" value="g"> Good (3)<br>
    <input type="radio" name="productivity" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="productivity" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="productivity_comments" rows="6" cols="50">productivity</textarea></td>
</tr>
<tr>
    <td class="text_align">3. Quality- The extent to which an employee's work is accurate, thorough, neat and assigned tasks are successfully completed.</td>
    <td class="text_align">
    <input type="radio" name="quality" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="quality" value="g"> Good (3)<br>
    <input type="radio" name="quality" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="quality" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="quality_comments" rows="6" cols="50">quality</textarea></td>
</tr>
<tr>
    <td class="text_align">4. Independence- The extent to which an employee performs work with little or no supervision.</td>
    <td class="text_align">
    <input type="radio" name="independence" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="independence" value="g"> Good (3)<br>
    <input type="radio" name="independence" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="independence" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="independence_comments" rows="6" cols="50">independence</textarea></td>
</tr>
<tr>
    <td class="text_align">5. Creativity- The extent to which an employee provides new ideas and finds new and better ways of doing things.</td>
    <td class="text_align">
    <input type="radio" name="creativity" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="creativity" value="g"> Good (3)<br>
    <input type="radio" name="creativity" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="creativity" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="creativity_comments" rows="6" cols="50">creativity</textarea></td>
</tr>
<tr>
    <td class="text_align">6. Initiative- The extent to which an employee seeks new assignments and assumes additional duties when necessary.</td>
    <td class="text_align">
    <input type="radio" name="initiative" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="initiative" value="g"> Good (3)<br>
    <input type="radio" name="initiative" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="initiative" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="initiative_comments" rows="6" cols="50">initiative</textarea></td>
</tr>
<tr>
    <td class="text_align">7. Adherence to Policy- The extent to which an employee adheres to company policy, including availability and an acceptable attendance record.</td>
    <td class="text_align">
    <input type="radio" name="adherence_to_policy" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="adherence_to_policy" value="g"> Good (3)<br>
    <input type="radio" name="adherence_to_policy" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="adherence_to_policy" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="adherence_to_policy_comments" rows="6" cols="50">adherence to policy</textarea></td>
</tr>
<tr>
    <td class="text_align">8. Judgment- The extent to which an employee demonstrates proper judgment and decision making skills when necessary.</td>
    <td class="text_align">
    <input type="radio" name="judgment" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="judgment" value="g"> Good (3)<br>
    <input type="radio" name="judgment" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="judgment" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="judgment_comments" rows="6" cols="50">judgment</textarea></td>
</tr>
<tr>
    <td class="text_align">9. Managerial- The extent to which an employee demonstrates managerial skills to coordinate and direct projects and/or tasks which might include a team effort.</td>
    <td class="text_align">
    <input type="radio" name="managerial" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="managerial" value="g"> Good (3)<br>
    <input type="radio" name="managerial" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="managerial" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="managerial_comments" rows="6" cols="50">managerial</textarea></td>
</tr>
<tr>
    <td class="text_align">10. Attitude- The employee's enthusiasm for the job, loyalty to the company and general attitude, including demonstrating the ability to cooperate, communicate and work with fellow workers.</td>
    <td class="text_align">
    <input type="radio" name="attitude" value="vg" checked> Very Good (4)<br>
    <input type="radio" name="attitude" value="g"> Good (3)<br>
    <input type="radio" name="attitude" value="in"> Improvement Needed (2)<br>
    <input type="radio" name="attitude" value="u"> Unsatisfactory (1)</td>
    <td class="text_align"><textarea name="attitude_comments" rows="6" cols="50">Attitude</textarea></td>
</tr>
</table>

<p><b>Specific Projects/Tasks/Objectives Evaluation:</b></p>
<p>Significant positive or negative results from assignments and objectives for this appraisal period. The following will be considered for the appraisal period:</p>
<textarea name="results" rows="8" cols="100">Specific Projects/Tasks/Objectives Evaluation:</textarea>


<p>Evaluation:</p>
<textarea name="evaluation" rows="8" cols="100">Evaluation</textarea>

<p> Overall Evaluation:
<br><input type="radio" name="overall" value="vg" checked> Very Good
<br><input type="radio" name="overall" value="g"> Good
<br><input type="radio" name="overall" value="in"> Improvement Needed
<br><input type="radio" name="overall" value="u"> Unsatisfactory
</p>
<input type="submit" name="send" value="Send Forward" class="styled-button-2">
</form>
    </div>
</body>