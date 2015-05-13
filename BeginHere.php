<!DOCTYPE php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Begin Here</title>

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="chosen_v1.4.2/chosen.css" rel="stylesheet">
    <link href="style_app.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="assets/Levanto_logo.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="chosen_v1.4.2/chosen.jquery.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollspy">
<div id="wrapper">
    <div id="header">
      <?php include("navbar.php"); ?>
    </div>

<div id="content_wrapper">
<div class="BeginHere_container">
  <div class="row">
    <div class="col-sm-2 nav_scroll" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked affix-top" data-spy="affix">
            <li class="spy_list active"><a href="#BasicInfo">Basic Info</a></li>
            <li class="spy_list"><a href="#Income">Income</a></li>
            <li class="spy_list"><a href="#MonthlyExpenses">Monthly Expenses</a></li>
            <li class="spy_list"><a href="#InsuranceAndLoans">Insurance and Loans</a></li>
        </ul>
    </div>
        <div class="col-sm-10"><div class="content">
          <p>Providing your information is necessary so that Levanto is able to build your Personal Cash Flow Plan. Please have an understanding of your personal finance goals, household information, bill statements, and basic living expenses expenses ready.
 
          Once you have completed the following steps, you will be able to schedule an appointment to virtually meet with one of Levanto's Household Finance Officers.</p>
          <h1 id="BasicInfo">Basic Info</h1>
            <div class="row">
              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">First Name*</span>
                  <input type="text" class="form-control" placeholder="John" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Last Name*</span>
                  <input type="text" class="form-control" placeholder="Doe" aria-describedby="basic-addon1">
                </div>
              </div>

            <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Street Address*</span>
                  <input type="text" class="form-control" placeholder="1234 Levanto Lane" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Address Line 2</span>
                  <input type="text" class="form-control" placeholder="Apt. L" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">City*</span>
                  <input type="text" class="form-control" placeholder="Troy" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">State*</span>
                  <input type="text" class="form-control" placeholder="MI" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Zip Code*</span>
                  <input type="text" class="form-control" placeholder="48084" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Phone Number*</span>
                  <input type="text" class="form-control" placeholder="123 - 456 - 7890" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="btn-group"><div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    What is your marital status?*
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Single</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Married</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Widowed</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Divorced</a></li>
                  </ul>
                </div></div>
              </div>

              <div class="col-sm-4">
                <div class="btn-group"><div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    How many dependants do you have?*
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">0</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">4</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">5+</a></li>
                  </ul>
                </div></div>
              </div>

              <div class="col-sm-6"> 
                <p>What are your top 3 financial objectives?</p>
                <select data-placeholder="Choose 3 objectives" class="chosen-select" multiple style="width:350px;" tabindex="11">
                  <option value=""></option>
                  <option value="Save Time">Save Time</option>
                  <option value="Create Wealth">Create Wealth</option>
                  <option value="Pay Down Debt">Pay Down Debt</option>
                  <option value="Eliminate Late Fees">Eliminate Late Fees</option>
                  <option value="Visibility">Visibility</option>
                  <option value="Other">Other</option>
                </select>
                <script>$(".chosen-select").chosen();</script> 
              </div>

              <div class="col-sm-6">
                <p>Tell us about your personal financial situation.</p>
                <textarea rows="3" class="form-control" aria-describedby="basic-addon1"></textarea>
              </div>
            </div>

            <h1 id="Income">Income</h1>
            <div id="headerDivImg_income">
              <div id="titleTextImg_income">
                <p>Please choose the pay frequency and amount per pay period (after all taxes and deductions) of all income sources.</p>
                <div class="row">
                  <div class="col-sm-3">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Description</span>
                    <input type="text" class="form-control" placeholder="Salary" aria-describedby="basic-addon1">
                  </div>
                  </div>
                  <div class="col-sm-3">
                  <div class="btn-group"><div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Pay Frequency
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Weekly</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Bi-weekly</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Semi-monthly (15th and 30th)</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Monthly</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Quarterly</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                    </ul>
                  </div></div>
                  </div>
                  <div class="col-sm-3">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Income / Pay Period $</span>
                    <input type="text" class="form-control" placeholder="4500.00" aria-describedby="basic-addon1">
                  </div>
                  </div>
                  <div class="col-sm-3">
                    <a id="imageDivLink_income" href="javascript:toggle5('contentDivImg_income', 'imageDivLink_income');"><img src="assets/plus.png"></a>
                  </div>
                </div>
              </div>
            </div>

              <div id="contentDivImg_income" style="display: none;">
                <div id="headerDivImg_income1">
                  <div class="row">
                    <div class="col-sm-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Description</span>
                      <input type="text" class="form-control" placeholder="Spouse Salary" aria-describedby="basic-addon1">
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="btn-group"><div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Pay Frequency
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Weekly</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Bi-weekly</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Semi-monthly (15th and 30th)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Monthly</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Quarterly</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                      </ul>
                    </div></div>
                    </div>
                    <div class="col-sm-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Income / Pay Period $</span>
                      <input type="text" class="form-control" placeholder="7500.00" aria-describedby="basic-addon1">
                    </div>
                    </div>
                    <div class="col-sm-3">
                      <a id="imageDivLink_income1" href="javascript:toggle5('contentDivImg_income1', 'imageDivLink_income1');"><img src="assets/plus.png"></a>
                    </div>
                  </div>
                </div>
              </div>

                  <div id="contentDivImg_income1" style="display: none;">
                    <div class="row">
                      <div class="col-sm-3">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Description</span>
                        <input type="text" class="form-control" placeholder="Additional Income" aria-describedby="basic-addon1">
                      </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="btn-group"><div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                          Pay Frequency
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Weekly</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Bi-weekly</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Semi-monthly (15th and 30th)</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Monthly</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Quarterly</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                        </ul>
                      </div></div>
                      </div>
                      <div class="col-sm-3">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Income / Pay Period $</span>
                        <input type="text" class="form-control" placeholder="3000.00" aria-describedby="basic-addon1">
                      </div>
                      </div>
                    </div>
                  </div>
            
            <h1 id="MonthlyExpenses">Monthly Expenses</h1>
              <h2>Please list your average monthly cost for the following expenses.</h2>
              <p><b>Housing:</b></p>
                <div id="headerDivImg_housing">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_housing" href="javascript:toggle5('contentDivImg_housing', 'imageDivLink_housing');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_housing" style="display: none;">
                    <div id="headerDivImg_housing1">
                      <div id="titleTextImg_housing1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Expense Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_housing1" href="javascript:toggle5('contentDivImg_housing1', 'imageDivLink_housing1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_housing1" style="display: none;">
                        <div id="headerDivImg_housing2">
                          <div id="titleTextImg_housing2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Expense Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_housing2" href="javascript:toggle5('contentDivImg_housing2', 'imageDivLink_housing2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_housing2" style="display: none;">
                            <div id="headerDivImg_housing3">
                              <div id="titleTextImg_housing3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Expense Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_housing3" href="javascript:toggle5('contentDivImg_housing3', 'imageDivLink_housing3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_housing3" style="display: none;">
                                <div id="headerDivImg_housing4">
                                  <div id="titleTextImg_housing4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Expense Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_housing4" href="javascript:toggle5('contentDivImg_housing4', 'imageDivLink_housing4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_housing4" style="display: none;">
                                    <div id="headerDivImg_housing5">
                                      <div id="titleTextImg_housing5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Expense Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_housing5" href="javascript:toggle5('contentDivImg_housing5', 'imageDivLink_housing5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_housing5" style="display: none;">
                                        <div id="headerDivImg_housing6">
                                          <div id="titleTextImg_housing6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Expense Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_housing6" href="javascript:toggle5('contentDivImg_housing6', 'imageDivLink_housing6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_housing6" style="display: none;">
                                            <div id="headerDivImg_housing7">
                                              <div id="titleTextImg_housing7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Expense Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_housing7" href="javascript:toggle5('contentDivImg_housing7', 'imageDivLink_housing7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_housing7" style="display: none;">
                                                <div id="headerDivImg_housing8">
                                                  <div id="titleTextImg_housing8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                            Expense Type
                                                            <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <a id="imageDivLink_housing8" href="javascript:toggle5('contentDivImg_housing8', 'imageDivLink_housing8');"><img src="assets/plus.png"></a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                  <div id="contentDivImg_housing8" style="display: none;">
                                                    <div id="headerDivImg_housing9">
                                                      <div id="titleTextImg_housing9">
                                                        <div class="row">
                                                          <div class="col-sm-4">
                                                            <div class="btn-group"><div class="dropdown">
                                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                                Expense Type
                                                                <span class="caret"></span>
                                                              </button>
                                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                              </ul>
                                                            </div></div>
                                                          </div>
                                                          <div class="col-sm-4">
                                                            <div class="input-group">
                                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                            </div>
                                                          </div>
                                                          <div class="col-sm-4">
                                                            <a id="imageDivLink_housing9" href="javascript:toggle5('contentDivImg_housing9', 'imageDivLink_housing9');"><img src="assets/plus.png"></a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                      <div id="contentDivImg_housing9" style="display: none;">
                                                        <div id="headerDivImg_housing10">
                                                          <div id="titleTextImg_housing10">
                                                            <div class="row">
                                                              <div class="col-sm-4">
                                                                <div class="btn-group"><div class="dropdown">
                                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                                    Expense Type
                                                                    <span class="caret"></span>
                                                                  </button>
                                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                                  </ul>
                                                                </div></div>
                                                              </div>
                                                              <div class="col-sm-4">
                                                                <div class="input-group">
                                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                                </div>
                                                              </div>
                                                              <div class="col-sm-4">
                                                                <a id="imageDivLink_housing10" href="javascript:toggle5('contentDivImg_housing10', 'imageDivLink_housing10');"><img src="assets/plus.png"></a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>

                                                          <div id="contentDivImg_housing10" style="display: none;">
                                                            <div id="headerDivImg_housing11">
                                                              <div id="titleTextImg_housing11">
                                                                <div class="row">
                                                                  <div class="col-sm-4">
                                                                    <div class="btn-group"><div class="dropdown">
                                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                                        Expense Type
                                                                        <span class="caret"></span>
                                                                      </button>
                                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mortgage or Rent Payment</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Property Taxes</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Electricity</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Natural Gas</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Water</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Trash</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cable</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Internet</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Mobile Phone</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Security Service</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                                      </ul>
                                                                    </div></div>
                                                                  </div>
                                                                  <div class="col-sm-4">
                                                                    <div class="input-group">
                                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              <p><b>Transportation:</b></p>
                <div id="headerDivImg_transportation">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_transportation" href="javascript:toggle5('contentDivImg_transportation', 'imageDivLink_transportation');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_transportation" style="display: none;">
                    <div id="headerDivImg_transportation1">
                      <div id="titleTextImg_transportation1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Expense Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_transportation1" href="javascript:toggle5('contentDivImg_transportation1', 'imageDivLink_transportation1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_transportation1" style="display: none;">
                        <div id="headerDivImg_transportation2">
                          <div id="titleTextImg_transportation2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Expense Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul></div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_transportation2" href="javascript:toggle5('contentDivImg_transportation2', 'imageDivLink_transportation2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_transportation2" style="display: none;">
                            <div id="headerDivImg_transportation3">
                              <div id="titleTextImg_transportation3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Expense Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_transportation3" href="javascript:toggle5('contentDivImg_transportation3', 'imageDivLink_transportation3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_transportation3" style="display: none;">
                                <div id="headerDivImg_transportation4">
                                  <div id="titleTextImg_transportation4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Expense Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_transportation4" href="javascript:toggle5('contentDivImg_transportation4', 'imageDivLink_transportation4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_transportation4" style="display: none;">
                                    <div id="headerDivImg_transportation5">
                                      <div id="titleTextImg_transportation5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Expense Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_transportation5" href="javascript:toggle5('contentDivImg_transportation5', 'imageDivLink_transportation5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_transportation5" style="display: none;">
                                        <div id="headerDivImg_transportation6">
                                          <div id="titleTextImg_transportation6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Expense Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_transportation6" href="javascript:toggle5('contentDivImg_transportation6', 'imageDivLink_transportation6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_transportation6" style="display: none;">
                                            <div id="headerDivImg_transportation7">
                                              <div id="titleTextImg_transportation7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Expense Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_transportation7" href="javascript:toggle5('contentDivImg_transportation7', 'imageDivLink_transportation7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_transportation7" style="display: none;">
                                                <div id="headerDivImg_transportation8">
                                                  <div id="titleTextImg_transportation8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                            Expense Type
                                                            <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Payment</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Auto Insurance</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gasoline</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Oil Changes</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Registration</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Maintenance</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <p><b>Living:</b></p>
                <div id="headerDivImg_Living">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_Living" href="javascript:toggle5('contentDivImg_Living', 'imageDivLink_Living');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_Living" style="display: none;">
                    <div id="headerDivImg_Living1">
                      <div id="titleTextImg_Living1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                              Expense Type
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_Living1" href="javascript:toggle5('contentDivImg_Living1', 'imageDivLink_Living1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_Living1" style="display: none;">
                        <div id="headerDivImg_Living2">
                          <div id="titleTextImg_Living2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                  Expense Type
                                  <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_Living2" href="javascript:toggle5('contentDivImg_Living2', 'imageDivLink_Living2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_Living2" style="display: none;">
                            <div id="headerDivImg_Living3">
                              <div id="titleTextImg_Living3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                      Expense Type
                                      <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_Living3" href="javascript:toggle5('contentDivImg_Living3', 'imageDivLink_Living3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_Living3" style="display: none;">
                                <div id="headerDivImg_Living4">
                                  <div id="titleTextImg_Living4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                          Expense Type
                                          <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_Living4" href="javascript:toggle5('contentDivImg_Living4', 'imageDivLink_Living4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_Living4" style="display: none;">
                                    <div id="headerDivImg_Living5">
                                      <div id="titleTextImg_Living5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                              Expense Type
                                              <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                        </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_Living5" href="javascript:toggle5('contentDivImg_Living5', 'imageDivLink_Living5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_Living5" style="display: none;">
                                        <div id="headerDivImg_Living6">
                                          <div id="titleTextImg_Living6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                  Expense Type
                                                  <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_Living6" href="javascript:toggle5('contentDivImg_Living6', 'imageDivLink_Living6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_Living6" style="display: none;">
                                            <div id="headerDivImg_Living7">
                                              <div id="titleTextImg_Living7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                      Expense Type
                                                      <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_Living7" href="javascript:toggle5('contentDivImg_Living7', 'imageDivLink_Living7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_Living7" style="display: none;">
                                                <div id="headerDivImg_Living8">
                                                  <div id="titleTextImg_Living8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                          Expense Type
                                                          <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Groceries</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Household Items</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dining Out</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Coffee/Snacks</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Children's Lunch Money</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <p><b>Personal Care:</b></p>
                <div id="headerDivImg_PersonalCare">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_PersonalCare" href="javascript:toggle5('contentDivImg_PersonalCare', 'imageDivLink_PersonalCare');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_PersonalCare" style="display: none;">
                    <div id="headerDivImg_PersonalCare1">
                      <div id="titleTextImg_PersonalCare1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Expense Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_PersonalCare1" href="javascript:toggle5('contentDivImg_PersonalCare1', 'imageDivLink_PersonalCare1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_PersonalCare1" style="display: none;">
                        <div id="headerDivImg_PersonalCare2">
                          <div id="titleTextImg_PersonalCare2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Expense Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_PersonalCare2" href="javascript:toggle5('contentDivImg_PersonalCare2', 'imageDivLink_PersonalCare2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_PersonalCare2" style="display: none;">
                            <div id="headerDivImg_PersonalCare3">
                              <div id="titleTextImg_PersonalCare3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Expense Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_PersonalCare3" href="javascript:toggle5('contentDivImg_PersonalCare3', 'imageDivLink_PersonalCare3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_PersonalCare3" style="display: none;">
                                <div id="headerDivImg_PersonalCare4">
                                  <div id="titleTextImg_PersonalCare4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Expense Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_PersonalCare4" href="javascript:toggle5('contentDivImg_PersonalCare4', 'imageDivLink_PersonalCare4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_PersonalCare4" style="display: none;">
                                    <div id="headerDivImg_PersonalCare5">
                                      <div id="titleTextImg_PersonalCare5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Expense Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_PersonalCare5" href="javascript:toggle5('contentDivImg_PersonalCare5', 'imageDivLink_PersonalCare5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_PersonalCare5" style="display: none;">
                                        <div id="headerDivImg_PersonalCare6">
                                          <div id="titleTextImg_PersonalCare6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Expense Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_PersonalCare6" href="javascript:toggle5('contentDivImg_PersonalCare6', 'imageDivLink_PersonalCare6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_PersonalCare6" style="display: none;">
                                            <div id="headerDivImg_PersonalCare7">
                                              <div id="titleTextImg_PersonalCare7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Expense Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_PersonalCare7" href="javascript:toggle5('contentDivImg_PersonalCare7', 'imageDivLink_PersonalCare7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_PersonalCare7" style="display: none;">
                                                <div id="headerDivImg_PersonalCare8">
                                                  <div id="titleTextImg_PersonalCare8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                            Expense Type
                                                            <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Gym Membership</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Beauty Salon/Haircuts</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Cosmetics</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Manicure/Pedicure</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Clothing</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dry Cleaning</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <p><b>Entertainment:</b></p>
                <div id="headerDivImg_Entertainment">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_Entertainment" href="javascript:toggle5('contentDivImg_Entertainment', 'imageDivLink_Entertainment');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_Entertainment" style="display: none;">
                    <div id="headerDivImg_Entertainment1">
                      <div id="titleTextImg_Entertainment1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Expense Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_Entertainment1" href="javascript:toggle5('contentDivImg_Entertainment1', 'imageDivLink_Entertainment1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_Entertainment1" style="display: none;">
                        <div id="headerDivImg_Entertainment2">
                          <div id="titleTextImg_Entertainment2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Expense Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_Entertainment2" href="javascript:toggle5('contentDivImg_Entertainment2', 'imageDivLink_Entertainment2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_Entertainment2" style="display: none;">
                            <div id="headerDivImg_Entertainment3">
                              <div id="titleTextImg_Entertainment3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Expense Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_Entertainment3" href="javascript:toggle5('contentDivImg_Entertainment3', 'imageDivLink_Entertainment3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_Entertainment3" style="display: none;">
                                <div id="headerDivImg_Entertainment4">
                                  <div id="titleTextImg_Entertainment4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Expense Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_Entertainment4" href="javascript:toggle5('contentDivImg_Entertainment4', 'imageDivLink_Entertainment4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_Entertainment4" style="display: none;">
                                    <div id="headerDivImg_Entertainment5">
                                      <div id="titleTextImg_Entertainment5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Expense Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_Entertainment5" href="javascript:toggle5('contentDivImg_Entertainment5', 'imageDivLink_Entertainment5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_Entertainment5" style="display: none;">
                                        <div id="headerDivImg_Entertainment6">
                                          <div id="titleTextImg_Entertainment6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Expense Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_Entertainment6" href="javascript:toggle5('contentDivImg_Entertainment6', 'imageDivLink_Entertainment6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_Entertainment6" style="display: none;">
                                            <div id="headerDivImg_Entertainment7">
                                              <div id="titleTextImg_Entertainment7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Expense Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_Entertainment7" href="javascript:toggle5('contentDivImg_Entertainment7', 'imageDivLink_Entertainment7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_Entertainment7" style="display: none;">
                                                <div id="headerDivImg_Entertainment8">
                                                  <div id="titleTextImg_Entertainment8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                            Expense Type
                                                            <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Hobbies</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Sports</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Travel</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Holidays</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Birthdays</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <p><b>Medical/Health:</b></p>
                <div id="headerDivImg_MedicalHealth">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_MedicalHealth" href="javascript:toggle5('contentDivImg_MedicalHealth', 'imageDivLink_MedicalHealth');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_MedicalHealth" style="display: none;">
                    <div id="headerDivImg_MedicalHealth1">
                      <div id="titleTextImg_MedicalHealth1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Expense Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                        </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_MedicalHealth1" href="javascript:toggle5('contentDivImg_MedicalHealth1', 'imageDivLink_MedicalHealth1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_MedicalHealth1" style="display: none;">
                        <div id="headerDivImg_MedicalHealth2">
                          <div id="titleTextImg_MedicalHealth2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Expense Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_MedicalHealth2" href="javascript:toggle5('contentDivImg_MedicalHealth2', 'imageDivLink_MedicalHealth2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_MedicalHealth2" style="display: none;">
                            <div id="headerDivImg_MedicalHealth3">
                              <div id="titleTextImg_MedicalHealth3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Expense Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_MedicalHealth3" href="javascript:toggle5('contentDivImg_MedicalHealth3', 'imageDivLink_MedicalHealth3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_MedicalHealth3" style="display: none;">
                                <div id="headerDivImg_MedicalHealth4">
                                  <div id="titleTextImg_MedicalHealth4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Expense Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_MedicalHealth4" href="javascript:toggle5('contentDivImg_MedicalHealth4', 'imageDivLink_MedicalHealth4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_MedicalHealth4" style="display: none;">
                                    <div id="headerDivImg_MedicalHealth5">
                                      <div id="titleTextImg_MedicalHealth5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Expense Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_MedicalHealth5" href="javascript:toggle5('contentDivImg_MedicalHealth5', 'imageDivLink_MedicalHealth5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_MedicalHealth5" style="display: none;">
                                        <div id="headerDivImg_MedicalHealth6">
                                          <div id="titleTextImg_MedicalHealth6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Expense Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_MedicalHealth6" href="javascript:toggle5('contentDivImg_MedicalHealth6', 'imageDivLink_MedicalHealth6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_MedicalHealth6" style="display: none;">
                                            <div id="headerDivImg_MedicalHealth7">
                                              <div id="titleTextImg_MedicalHealth7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Expense Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_MedicalHealth7" href="javascript:toggle5('contentDivImg_MedicalHealth7', 'imageDivLink_MedicalHealth7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_MedicalHealth7" style="display: none;">
                                                <div id="headerDivImg_MedicalHealth8">
                                                  <div id="titleTextImg_MedicalHealth8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                            Expense Type
                                                            <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Medical (excluding insurance)</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Prescriptions</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Co-pay/Deductibles</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Dentist</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Vision</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <p><b>Other:</b></p>
                <div id="headerDivImg_Other">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Expense Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_Other" href="javascript:toggle5('contentDivImg_Other', 'imageDivLink_Other');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_Other" style="display: none;">
                    <div id="headerDivImg_Other1">
                      <div id="titleTextImg_Other1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Expense Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_Other1" href="javascript:toggle5('contentDivImg_Other1', 'imageDivLink_Other1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_Other1" style="display: none;">
                        <div id="headerDivImg_Other2">
                          <div id="titleTextImg_Other2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Expense Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_Other2" href="javascript:toggle5('contentDivImg_Other2', 'imageDivLink_Other2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_Other2" style="display: none;">
                            <div id="headerDivImg_Other3">
                              <div id="titleTextImg_Other3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Expense Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_Other3" href="javascript:toggle5('contentDivImg_Other3', 'imageDivLink_Other3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_Other3" style="display: none;">
                                <div id="headerDivImg_Other4">
                                  <div id="titleTextImg_Other4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Expense Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_Other4" href="javascript:toggle5('contentDivImg_Other4', 'imageDivLink_Other4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_Other4" style="display: none;">
                                    <div id="headerDivImg_Other5">
                                      <div id="titleTextImg_Other5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Expense Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <a id="imageDivLink_Other5" href="javascript:toggle5('contentDivImg_Other5', 'imageDivLink_Other5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <div id="contentDivImg_Other5" style="display: none;">
                                        <div id="headerDivImg_Other6">
                                          <div id="titleTextImg_Other6">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Expense Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-4">
                                                <a id="imageDivLink_Other6" href="javascript:toggle5('contentDivImg_Other6', 'imageDivLink_Other6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                          <div id="contentDivImg_Other6" style="display: none;">
                                            <div id="headerDivImg_Other7">
                                              <div id="titleTextImg_Other7">
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Expense Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                    <a id="imageDivLink_Other7" href="javascript:toggle5('contentDivImg_Other7', 'imageDivLink_Other7');"><img src="assets/plus.png"></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              <div id="contentDivImg_Other7" style="display: none;">
                                                <div id="headerDivImg_Other8">
                                                  <div id="titleTextImg_Other8">
                                                    <div class="row">
                                                      <div class="col-sm-4">
                                                        <div class="btn-group"><div class="dropdown">
                                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                            Expense Type
                                                            <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Tuition</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">School Fees</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Day Care</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Newspaper/Magazines</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Savings</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Pets</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Charity/Tithing</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                          </ul>
                                                        </div></div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="input-group">
                                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

            <h1 id="InsuranceAndLoans">Insurance and Loans</h1>
              <h2>Please list the average monthly cost for your insurance payments, and the name, balance, interest rate, and monthly payment for your loans.</h2>
              <p><b>Insurance:</b></p>
                <div id="headerDivImg_Insurance">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Insurance Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Life</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Health</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Disability</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal Property</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a id="imageDivLink_Insurance" href="javascript:toggle5('contentDivImg_Insurance', 'imageDivLink_Insurance');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                </div>

                  <div id="contentDivImg_Insurance" style="display: none;">
                    <div id="headerDivImg_Insurance1">
                      <div id="titleTextImg_Insurance1">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Insurance Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Life</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Health</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Disability</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal Property</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <a id="imageDivLink_Insurance1" href="javascript:toggle5('contentDivImg_Insurance1', 'imageDivLink_Insurance1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div id="contentDivImg_Insurance1" style="display: none;">
                        <div id="headerDivImg_Insurance2">
                          <div id="titleTextImg_Insurance2">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Insurance Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Life</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Health</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Disability</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal Property</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                  <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a id="imageDivLink_Insurance2" href="javascript:toggle5('contentDivImg_Insurance2', 'imageDivLink_Insurance2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div id="contentDivImg_Insurance2" style="display: none;">
                            <div id="headerDivImg_Insurance3">
                              <div id="titleTextImg_Insurance3">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Insurance Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Life</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Health</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Disability</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal Property</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                      <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <a id="imageDivLink_Insurance3" href="javascript:toggle5('contentDivImg_Insurance3', 'imageDivLink_Insurance3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                              <div id="contentDivImg_Insurance3" style="display: none;">
                                <div id="headerDivImg_Insurance4">
                                  <div id="titleTextImg_Insurance4">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Insurance Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Life</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Health</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Disability</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal Property</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                          <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <a id="imageDivLink_Insurance4" href="javascript:toggle5('contentDivImg_Insurance4', 'imageDivLink_Insurance4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <div id="contentDivImg_Insurance4" style="display: none;">
                                    <div id="headerDivImg_Insurance5">
                                      <div id="titleTextImg_Insurance5">
                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Insurance Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Life</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Health</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Disability</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal Property</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Monthly Cost $</span>
                                              <input type="text" class="form-control" placeholder="3500" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <p><b>Short Term Loans and Debt:</b></p>
                <div class="row">
                  <div class="col-sm-2">
                    <p>Type</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Loan Name</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Actual Balance</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Interest rate</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Monthly Payment</p>
                  </div>
                  <div class="col-sm-2">
                  </div>
                </div>
                <div id="headerDivImg_loan">
                  <div id="titleTextImg_loan">
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">$</span>
                          <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                          <span class="input-group-addon" id="basic-addon1">%</span>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">$</span>
                          <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <a id="imageDivLink_loan" href="javascript:toggle5('contentDivImg_loan', 'imageDivLink_loan');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div id="contentDivImg_loan" style="display: none;">
                    <div id="headerDivImg_loan1">
                      <div id="titleTextImg_loan1">
                        <div class="row">
                          <div class="col-sm-2">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">$</span>
                              <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                              <span class="input-group-addon" id="basic-addon1">%</span>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">$</span>
                              <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <a id="imageDivLink1" href="javascript:toggle5('contentDivImg1', 'imageDivLink1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                      <div id="contentDivImg1" style="display: none;">
                        <div id="headerDivImg_loan2">
                          <div id="titleTextImg_loan2">
                            <div class="row">
                              <div class="col-sm-2">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                  <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                  <span class="input-group-addon" id="basic-addon1">%</span>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                  <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <a id="imageDivLink2" href="javascript:toggle5('contentDivImg2', 'imageDivLink2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                          
                          <div id="contentDivImg2" style="display: none;">
                            <div id="headerDivImg_loan3">
                              <div id="titleTextImg_loan3">
                                <div class="row">
                                  <div class="col-sm-2">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                      <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                      <span class="input-group-addon" id="basic-addon1">%</span>
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                      <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <a id="imageDivLink3" href="javascript:toggle5('contentDivImg3', 'imageDivLink3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                              
                              <div id="contentDivImg3" style="display: none;">
                                <div id="headerDivImg_loan4">
                                  <div id="titleTextImg_loan4">
                                    <div class="row">
                                      <div class="col-sm-2">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">$</span>
                                          <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                          <span class="input-group-addon" id="basic-addon1">%</span>
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">$</span>
                                          <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <a id="imageDivLink4" href="javascript:toggle5('contentDivImg4', 'imageDivLink4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  
                                  <div id="contentDivImg4" style="display: none;">
                                    <div id="headerDivImg_loan5">
                                      <div id="titleTextImg_loan5">
                                        <div class="row">
                                          <div class="col-sm-2">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">$</span>
                                              <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                              <span class="input-group-addon" id="basic-addon1">%</span>
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">$</span>
                                              <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <a id="imageDivLink5" href="javascript:toggle5('contentDivImg5', 'imageDivLink5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                      
                                      <div id="contentDivImg5" style="display: none;">
                                        <div id="headerDivImg_loan6">
                                          <div id="titleTextImg_loan6">
                                            <div class="row">
                                              <div class="col-sm-2">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                                  <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                                  <span class="input-group-addon" id="basic-addon1">%</span>
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                                  <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <a id="imageDivLink6" href="javascript:toggle5('contentDivImg6', 'imageDivLink6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                          
                                          <div id="contentDivImg6" style="display: none;">
                                            <div id="headerDivImg_loan7">
                                              <div id="titleTextImg_loan7">
                                                <div class="row">
                                                  <div class="col-sm-2">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                                      <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                                      <span class="input-group-addon" id="basic-addon1">%</span>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                                      <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>

              <p><b>Long Term Loans and Debt:</b></p>
                <div class="row">
                  <div class="col-sm-2">
                    <p>Type</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Loan Name</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Actual Balance</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Interest rate</p>
                  </div>
                  <div class="col-sm-2">
                    <p>Monthly Payment</p>
                  </div>
                  <div class="col-sm-2">
                  </div>
                </div>
                <div id="headerDivImg_loan">
                  <div id="titleTextImg_loan">
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="btn-group"><div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            Type
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                          </ul>
                        </div></div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">$</span>
                          <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                          <span class="input-group-addon" id="basic-addon1">%</span>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">$</span>
                          <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <a id="imageDivLink_loan" href="javascript:toggle5('contentDivImg_loan', 'imageDivLink_loan');"><img src="assets/plus.png"></a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div id="contentDivImg_loan" style="display: none;">
                    <div id="headerDivImg_loan1">
                      <div id="titleTextImg_loan1">
                        <div class="row">
                          <div class="col-sm-2">
                            <div class="btn-group"><div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Type
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                              </ul>
                            </div></div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">$</span>
                              <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                              <span class="input-group-addon" id="basic-addon1">%</span>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">$</span>
                              <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <a id="imageDivLink1" href="javascript:toggle5('contentDivImg1', 'imageDivLink1');"><img src="assets/plus.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                      <div id="contentDivImg1" style="display: none;">
                        <div id="headerDivImg_loan2">
                          <div id="titleTextImg_loan2">
                            <div class="row">
                              <div class="col-sm-2">
                                <div class="btn-group"><div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Type
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                  </ul>
                                </div></div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                  <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                  <span class="input-group-addon" id="basic-addon1">%</span>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                  <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <a id="imageDivLink2" href="javascript:toggle5('contentDivImg2', 'imageDivLink2');"><img src="assets/plus.png"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                          
                          <div id="contentDivImg2" style="display: none;">
                            <div id="headerDivImg_loan3">
                              <div id="titleTextImg_loan3">
                                <div class="row">
                                  <div class="col-sm-2">
                                    <div class="btn-group"><div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Type
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                      </ul>
                                    </div></div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                      <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                      <span class="input-group-addon" id="basic-addon1">%</span>
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                      <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <a id="imageDivLink3" href="javascript:toggle5('contentDivImg3', 'imageDivLink3');"><img src="assets/plus.png"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                              
                              <div id="contentDivImg3" style="display: none;">
                                <div id="headerDivImg_loan4">
                                  <div id="titleTextImg_loan4">
                                    <div class="row">
                                      <div class="col-sm-2">
                                        <div class="btn-group"><div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Type
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                          </ul>
                                        </div></div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">$</span>
                                          <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                          <span class="input-group-addon" id="basic-addon1">%</span>
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">$</span>
                                          <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                        </div>
                                      </div>
                                      <div class="col-sm-2">
                                        <a id="imageDivLink4" href="javascript:toggle5('contentDivImg4', 'imageDivLink4');"><img src="assets/plus.png"></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  
                                  <div id="contentDivImg4" style="display: none;">
                                    <div id="headerDivImg_loan5">
                                      <div id="titleTextImg_loan5">
                                        <div class="row">
                                          <div class="col-sm-2">
                                            <div class="btn-group"><div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Type
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                              </ul>
                                            </div></div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">$</span>
                                              <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                              <span class="input-group-addon" id="basic-addon1">%</span>
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">$</span>
                                              <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <a id="imageDivLink5" href="javascript:toggle5('contentDivImg5', 'imageDivLink5');"><img src="assets/plus.png"></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                      
                                      <div id="contentDivImg5" style="display: none;">
                                        <div id="headerDivImg_loan6">
                                          <div id="titleTextImg_loan6">
                                            <div class="row">
                                              <div class="col-sm-2">
                                                <div class="btn-group"><div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    Type
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                  </ul>
                                                </div></div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                                  <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                                  <span class="input-group-addon" id="basic-addon1">%</span>
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="input-group">
                                                  <span class="input-group-addon" id="basic-addon1">$</span>
                                                  <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                                </div>
                                              </div>
                                              <div class="col-sm-2">
                                                <a id="imageDivLink6" href="javascript:toggle5('contentDivImg6', 'imageDivLink6');"><img src="assets/plus.png"></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                          
                                          <div id="contentDivImg6" style="display: none;">
                                            <div id="headerDivImg_loan7">
                                              <div id="titleTextImg_loan7">
                                                <div class="row">
                                                  <div class="col-sm-2">
                                                    <div class="btn-group"><div class="dropdown">
                                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        Type
                                                        <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Student</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Personal</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Secured</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Credit Card</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Past Due Income Taxes</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:return false;">Other</a></li>
                                                      </ul>
                                                    </div></div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="American Express" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                                      <input type="text" class="form-control" placeholder="2300" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="10" aria-describedby="basic-addon1">
                                                      <span class="input-group-addon" id="basic-addon1">%</span>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                    <div class="input-group">
                                                      <span class="input-group-addon" id="basic-addon1">$</span>
                                                      <input type="text" class="form-control" placeholder="105" aria-describedby="basic-addon1">
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>

  <div class="text-center">
    <div class="btn-group btn-group-lg" role="group" aria-label="Submit">
      <button type="button" class="btn btn-primary"><b>SUBMIT</b></button>
    </div>
  </div>

  <div class="text-center">By clicking Submit, you agree to the <a href="PrivacyPolicy.html" target="_blank">Privacy Policy</a>.</div>

  <div id="footer">
    <p class="footer_text"><b>CALL US TOLL FREE</b></p>
    <p class="footer_text"><b>1-844-538-2686 (LEVANTO)</b></p>
    <p class="footer_text"><b>&copy 2015 LEVANTO FINANCIAL INC.</b></p>
  </div>
  </div>
    </body>
    <script>
      function toggle5(showHideDiv, switchImgTag) {
        var ele = document.getElementById(showHideDiv);
        var imageEle = document.getElementById(switchImgTag);
        if(ele.style.display == "block") {
                ele.style.display = "none";
                imageEle.innerHTML = '<img src="assets/plus.png">';
                    }
        else {
                ele.style.display = "block";
                imageEle.innerHTML = '<img src="assets/minus.png">';
        }
      }
      </script>
      <script>
      $(".dropdown-menu li a").click(function(){
        var selText = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
      });
      </script>
</html>                                   