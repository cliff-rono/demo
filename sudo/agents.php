
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
 																		 <label class="filter-col" style="margin-right:5;" for="pref-orderby">Type:</label>
 																		 <select id="pref-orderby" class="form-control">

 																				 <option value="agent" name="type">Agents</option>
 																				 <option value="superagent" name="type">Super-Agents</option>

 																		 </select>
 																 </div> <!-- form group [search] -->

																 <div class="form-group">
																			<label class="filter-col" style="margin-right:5;" for="pref-orderby">Location:</label>
																			<select id="pref-orderby" class="form-control">

																					<option value="nairobiwest" name="type">Nairobi West</option>
																					<option value="nairobisouth" name="type">Nairobi South</option>
																					<option value="mombasaroad" name="type">Mombasa Road</option>

																			</select>
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

					<div class="row">

					<div class="form-group col-md-4" style="width:40%; float:right;">
							<label class="filter-col" style="margin-right:0;" for="pref-search">Quick Search:</label>
							<input type="text" class="form-control input-sm" id="pref-search">
					</div>


				</div>

					<br>

					<div class="inner_content_w3_agile_info two_in">

									<!-- tables -->

									</div>
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
									  <h3>AGENTS</h3>
									  <table id="table-two-axis" class="two-axis">
										<thead>
										  <tr>
											<th>Agent ID</th>
											<th>Names</th>
											<th>Date Joined</th>
											<th>Amount</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>TU678JDBGB</td>
											<td>Njoroge Agencies</td>
											<td>22-12-2018 08:20:56</td>
											<td>674,560</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>Dina Agness</td>
											<td>22-12-2018 08:20:56</td>
											<td>456,570</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>William Shops</td>
											<td>22-12-2018 08:20:56</td>
											<td>60,000</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>Gideon Kamau</td>
											<td>22-12-2018 08:20:56</td>
											<td>54,000</td>
										  </tr>
										  <tr>
											<td>TU678JDBGB</td>
											<td>Mama Jane Salon</td>
											<td>22-12-2018 08:20:56</td>
											<td>245,780</td>
										  </tr>

										</tbody>
									  </table>



									</div>
						</div>
							<!-- //tables -->

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->


		<?php
			include('footer.php');
		 	?>
