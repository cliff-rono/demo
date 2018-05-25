
<?php
      include('header.php');
 ?>


<style>
    .btn-balance{
        background:transparent;
        border:2px solid #008CBA;
        padding:10px 25px;
        color:#008CBA;
        margin-bottom: 10px;
    }
    table th{
        background:#008CBA;
    }
</style>
<!-- banner -->
<div class="wthree_agile_admin_info">
    <?php require_once "nav.php"; ?>
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->


            <div class="container" style="margin-top:30px;" >
            <div class="row">
                  <div id="filter-panel" class="collapse filter-panel">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <form class="form-inline" role="form">
                                  <div class="form-group">
                                      <label class="filter-col" style="margin-right:0; padding-left:10px; padding-right:10px;" for="pref-perpage">Rows per page:</label>
                                      <select id="pref-perpage" class="form-control">
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option selected="selected" value="10">10</option>
                                          <option value="15">15</option>
                                          <option value="20">20</option>
                                          <option value="30">30</option>
                                          <option value="40">40</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                          <option value="200">200</option>
                                          <option value="300">300</option>
                                          <option value="400">400</option>
                                          <option value="500">500</option>
                                      </select>
                                  </div> <!-- form group [rows] -->
                                  <div class="form-group">
                                     <label class="filter-col" style="margin-right:5;" for="from">From:</label>
                                    <input type="date" name="from" id="from" />
                                 </div> <!-- form group [search] -->

                                 <div class="form-group">
                                      <label class="filter-col" style="margin-right:5;" for="to">To:</label>
                                     <input type="date" name="to" id="to" />
                                  </div>

                                  <div class="form-group">
                                      <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
                                      <select id="pref-orderby" class="form-control">

                                          <option>Ascending</option>
                                          <option>Descending</option>

                                      </select>
                                  </div> <!-- form group [order by] -->
                                  <div class="form-group" style="padding-right:20px;">

                                      <button type="submit" class="btn btn-default filter-col">
                                          <span class="glyphicon glyphicon-search"></span>  Search
                                      </button>

                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
                      <span class="glyphicon glyphicon-cog"></span> Advanced Search
                  </button>
            </div>
          </div>


					<div class="inner_content_w3_agile_info two_in">

									<!-- tables -->
									<div class="row">
                    <div class="col-md-3 ">
                        <button class="btn btn-balance">
                            US-DOLLARS: 23,056
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-balance">
                            EUROS: 24,675
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-balance">
                            AUSTRALIAN DOLLARS: 30,768
                        </button>
                    </div>
									    <div class="col-md-3">
									        <button class="btn btn-balance" style="border-color:green; color:red;">
									            <b>Total Balance: KES 354,456,765</b>
									        </button>
									    </div>
									</div>





									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
									  <h3>LATEST PIKASH EARNINGS</h3>
									  <table id="table-two-axis" class="two-axis">
										<thead>
										  <tr>
											<th>Transaction ID</th>
											<th>Date</th>
											<th>Amount</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>TU678JDBGB</td>
										  <td>22-12-2018 08:20:56</td>
											<td>200</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>22-12-2018 08:20:56</td>
											<td>4570</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>22-12-2018 08:20:56</td>
											<td>60,000</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>22-12-2018 08:20:56</td>
											<td>54,000</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>22-12-2018 08:20:56</td>
											<td>245,780</td>
										  </tr>

										</tbody>
									  </table>



									</div>
						</div>
							<!-- //tables -->

              <!-- /charts_section_agileinfo1-->
                <div class="charts_section_agileinfo">
                 <div class="charts_agile_w3ls agile_info_shadow">
                   <h3 class="w3_inner_tittle two">Daily and Intra-Day Transactions</h3>
                   <div id="chartdiv3"></div>
               </div>
              </div>
            <!-- //charts_section_agileinfo1-->

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->


    <?php
    include('footer.php');
    ?>
    <script>

      $(function () {
        $('.min-chart#chart-sales').easyPieChart({
            barColor: "#4caf50",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
      });

    </script>





  <script>
  // generate data
  var chartData = [];

  function generateChartData() {
  var firstDate = new Date();
  firstDate.setTime(firstDate.getTime() - 10 * 24 * 60 * 60 * 1000);

  for (var i = firstDate.getTime(); i < (firstDate.getTime() + 10 * 24 * 60 * 60 * 1000); i += 60 * 60 * 1000) {
  var newDate = new Date(i);

  if (i == firstDate.getTime()) {
  var value1 = Math.round(Math.random() * 10) + 1;
  } else {
  var value1 = Math.round(chartData[chartData.length - 1].value1 / 100 * (90 + Math.round(Math.random() * 20)) * 100) / 100;
  }

  if (newDate.getHours() == 12) {
  // we set daily data on 12th hour only
  var value2 = Math.round(Math.random() * 12) + 1;
  chartData.push({
   date: newDate,
   value1: value1,
   value2: value2
  });
  } else {
  chartData.push({
   date: newDate,
   value1: value1
  });
  }
  }
  }

  generateChartData();

  var chart = AmCharts.makeChart("chartdiv3", {
  "type": "serial",
  "theme": "light",
  "marginRight": 80,
  "dataProvider": chartData,
  "valueAxes": [{
  "axisAlpha": 0.1
  }],

  "graphs": [{
  "balloonText": "[[title]]: [[value]]",
  "columnWidth": 15,
  "fillAlphas": 1,
  "title": "daily",
  "type": "column",
  "valueField": "value2"
  }, {
  "balloonText": "[[title]]: [[value]]",
  "lineThickness": 2,
  "title": "intra-day",
  "valueField": "value1"
  }],
  "zoomOutButtonRollOverAlpha": 0.15,
  "chartCursor": {
  "categoryBalloonDateFormat": "MMM DD JJ:NN",
  "cursorPosition": "mouse",
  "showNextAvailable": true
  },
  "autoMarginOffset": 5,
  "columnWidth": 1,
  "categoryField": "date",
  "categoryAxis": {
  "minPeriod": "hh",
  "parseDates": true
  },
  "export": {
  "enabled": true
  }
  });
  </script>
