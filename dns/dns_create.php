<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new SQLite3('./api/.db.db');

if(isset($_POST['submit'])){
$sql = "DELETE FROM dns";
$db->exec($sql);
$db->exec("INSERT INTO dns(portal1, portal2, portal3, portal4, portal5) VALUES('".$_POST['portal1']."', '".$_POST['portal2']."', '".$_POST['portal3']."', '".$_POST['portal4']."', '".$_POST['portal5']."')");
$db->close();
header("Location: dns.php");
}
include ('includes/header.php');


echo "            <div class=\"col-md-8 px-4\">\n";
echo "              <div class=\"card bg-dark text-white\">\n";
echo "                <div class=\"card-header card-header-warning\">\n";
echo "                  <h4 class=\"card-title\">Add DNS</h4>\n";
echo "                </div>\n";
echo "                <div class=\"card-body\">\n";
echo "                  <form  method=\"post\">\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 1</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal1\">\n";
echo "                      </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 2</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal2\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 3</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal3\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 4</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal4\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 5</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal5\">\n";

echo "                        </div>\n";
echo "                        </div>\n";
echo "                      </div>\n";
echo "                      </div>\n";
echo "                      <div>\n";
echo "					<br><button type=\"submit\" name=\"submit\" class=\"btn btn-warning pull-right\">Submit</button>\n";
echo "				</form>\n";
echo "				</div>\n";
echo "              </div>\n";
echo "            </div>\n";
echo "		   </div>\n";
echo "    <br><br><br>\n";
include ('includes/footer.php');
echo "</body>\n";
echo "\n";
echo "</html>\n";
?>
