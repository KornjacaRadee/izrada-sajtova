<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db = new SQLite3('./api/.db.db');

$res = $db->query("SELECT *
				  FROM dns
				  WHERE id='".$_GET['update']."'");
$row=$res->fetchArray();

if(isset($_POST['submit'])){
$db->exec("UPDATE dns SET  portal1='".$_POST['portal1']."', portal2='".$_POST['portal2']."', portal3='".$_POST['portal3']."', portal4='".$_POST['portal4']."', portal5='".$_POST['portal5']."'
						  WHERE
							  id='".$_POST['id']."'");
$db->close();
header("Location: dns.php");
}
include ('includes/header.php');
$id = $row['id'];
$portal1 = $row['portal1'];
$portal2 = $row['portal2'];
$portal3 = $row['portal3'];
$portal4 = $row['portal4'];
$portal5 = $row['portal5'];


echo "            <div class=\"col-md-8 px-4\">\n";
echo "              <div class=\"card bg-dark text-white\">\n";
echo "                <div class=\"card-header card-header-warning\">\n";
echo "                  <h4 class=\"card-title\">Edit DNS</h4>\n";
echo "                </div>\n";
echo "                <div class=\"card-body\">\n";
echo "                  <form  method=\"post\">\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 1</label>\n";
echo "						   <input type=\"hidden\" name=\"id\" value=\"$id\">\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal1\" value=\"$portal1\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 2</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal2\" value=\"$portal2\">\n";
echo "                        </div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 3</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal3\" value=\"$portal3\">\n";
echo "                        </div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 4</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal4\" value=\"$portal4\">\n";
echo "                        </div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 5</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal5\" value=\"$portal5\">\n";


echo "                        </div>\n";
echo "                      </div>\n";
echo "                      </div>\n";
echo "                      <div>\n";
echo "					<br><button type=\"submit\" name=\"submit\" class=\"btn btn-warning pull-right\">Submit</button>\n";
echo "				</form>\n";
echo "				</div>\n";
echo "              </div>\n";
echo "            </div>\n";
echo "          </div>\n";
echo "    <br><br><br>\n";
include ('includes/footer.php');
echo "</body>\n";
echo "\n";
echo "</html>\n";
