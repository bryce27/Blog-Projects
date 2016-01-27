<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Burns</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <body>

    <div class="container">

        <h3>Burns Depression Chart</h3>

        <div class="statements" style="margin-top: 10px;">

          <table class="table table-bordered table-striped">

            <tr><th>Thoughts and Feelings</th></tr>

            <tr><td>1. Feeling sad or down in the dumps </td></tr>

            <tr><td>2. Feeling unhappy or blue</td></tr>
            <tr><td>3. Crying spells or tearfulness</td></tr>
            <tr><td>4. Feeling discouraged</td></tr>
            <tr><td>5. Feeling hopeless</td></tr>
            <tr><td>6. Low self-esteem</td></tr>
            <tr><td>7. Feeling worthless or inadequate</td></tr>
            <tr><td>8. Guilt or shame</td></tr>
            <tr><td>9. Criticizing yourself or blaming yourself</td></tr>
            <tr><td>10. Difficulty making decisions</td></tr>

            <tr><th>Activities and Personal Relationships</th></tr>
            <tr><td>11. Loss of interest in family, friends or colleagues</td></tr>
            <tr><td>12. Loneliness</td></tr>
            <tr><td>13. Spending less time with family or friends</td></tr>
            <tr><td>14. Loss of motivation</td></tr>
            <tr><td>15. Loss of interest in work or other activities</td></tr>
            <tr><td>16. Avoiding work or other activities</td></tr>
            <tr><td>17. Loss of pleasure or satisfaction in life</td></tr>

            <tr><th>Physical Symptoms</th></tr>
            <tr><td>18. Feeling tired</td></tr>
            <tr><td>19. Difficulty sleeping or sleeping too much</td></tr>
            <tr><td>20. Decreased or increased appetite</td></tr>
            <tr><td>21. Loss of interest in sex</td></tr>
            <tr><td>22. Worrying about your health</td></tr>

            <tr><th>Suicidal Urges</th></tr>
            <tr><td>23. Do you have any suicidal thoughts?</td></tr>
            <tr><td>24. Would you like to end your life?</td></tr>
            <tr><td>25. Do you have a plan for harming yourself?</td></tr>

          </table>

          <form action="burns_checklist.php" method="post">

          <input id="submit_btn" class="btn btn-primary btn-block" name="formSubmit" type="submit" value="Submit">

        </div> <!-- end statements -->

        <div id="input_column" style="margin-top: 10px;">
          <table class="table table-bordered table-hover table-striped">

            <tr><th style="text-align: center;">0 - 4</td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control" ></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control" ></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>

          </table>

          <table class="table table-bordered table-hover table-striped" style="margin-top: 36px;">

            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>

          </table>

          <table class="table table-bordered table-hover table-striped" style="margin-top: 36px;">

            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>

          </table>

          <table class="table table-bordered table-hover table-striped" style="margin-top: 36px;">

            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>
            <tr><td><input type="text" maxlength="1" class="form-control"></td></tr>

          </table>

          </form>

        </div> <!-- end input column -->


        <div id="instructions">

          <div id="numbers">

            <p><span>0</span> - Not at all</p>
            <p><span>1</span> - Somewhat</p>
            <p><span>2</span> - Moderately</p>
            <p><span>3</span> - A lot</p>
            <p><span>4</span> - Extremely</p>

          </div>

            <div id="total">

              <label>Total:</label><input id="total_input" type="text" maxlength="1" readonly="readonly" class="form-control">

            </div> <!-- end total div -->

        </div> <!-- end of instructions -->


        <div class="well" id="explanation">
          <p>0 - 5 -  No depression</p>
          <p>6 - 10 -  Normal but unhappy</p>
          <p>11 - 25 - Mild depression</p>
          <p>26 - 50 - Moderate depression</p>
          <p>51 - 75 - Severe depression</p>
          <p>76 - 100 - Extreme depression</p>
        </div>




    </div> <!-- end container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

      var answers = [];

      $('#submit_btn').click(function(){
          $('#input_column').find('input[type=text],select').each(function() {
            answers.push(this.value);
          });
          answers.push($('#total_input').val());
      
          $.post('test.php', {elements: answers});
      });

      $('input').focusout(function(){
              var total = 0;
        $('#input_column').find('input[type=text],select').each(function() {
            if (this.value != '')
            total += (parseInt(this.value));
          });
        $('#total_input').val(total);
      });
      

    </script>
  </body>
</html>