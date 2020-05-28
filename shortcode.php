<?php

add_shortcode('pregnancy-calculator', 'maher_pragnancy_calculator');
function maher_pragnancy_calculator(){
	ob_start();?>

<section id="pregnancy-calculator">
	<div class="title">
		<h3>
			<?php
			$val = get_option('pc_title');
			 if($val == ""){
			 	echo "Calculadora de semanas de embarazo";
			 }
			 else{
			 	echo get_option('pc_title');
			 } 

			?> : </h3>
	</div>
	
	<div class="field-container odd">
	
		<div class="mylabel">
			<p><b>
			<?php
			$val = get_option('last_mp');
			 if($val == ""){
			 	echo "Fecha de última regla ";
			 }
			 else{
			 	echo get_option('last_mp');
			 } 

			?> : </b></p>
		</div>
		<div class="myfield">
			<span id="lmpDay"></span>
			<span>
				<select id="lmpMonth" onchange="lmpChange()">
					<option>Enero</option>
					<option>Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
					<option>Mayo</option>
					<option>Junio</option>
					<option>Julio</option>
					<option>Agosto</option>
					<option>Septiembre</option>
					<option>Octubre</option>
					<option>Noviembre</option>
					<option>Diciembre</option>
				</select>
			</span>
			<span>
				<select id="lmpDate" onchange="lmpChange()">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option id="lmp29">29</option>
					<option id="lmp30">30</option>
					<option id="lmp31">31</option>
				</select>
			</span>
			<span>
				<select id="lmpYear" onchange="lmpChange()">
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
				</select>
			</span>
		</div>
	
	</div>
	
	<div class="clear"></div>
	
	<div class="field-container even" style="display:none;">
		<div class="mylabel">
			<p>
			<?php
			$val = get_option('date_of_conception');
			 if($val == ""){
			 	echo "Probable date of conception";
			 }
			 else{
			 	echo get_option('date_of_conception');
			 } 

			?> :</p> 
			<p><i>(
			<?php
			$val = get_option('date_of_conception_subtext');
			 if($val == ""){
			 	echo "about two weeks after last menstrual period";
			 }
			 else{
			 	echo get_option('date_of_conception_subtext');
			 } 

			?> )</i></p>
		</div>
		
		<div class="myfield">
			<p>
				<b>
					<span id="coDay"></span>
					<span>
						<select id="coMonth" onchange="coChange()">
							<option>Enero</option>
							<option>Febrero</option>
							<option>Marzo</option>
							<option>Abril</option>
							<option>Mayo</option>
							<option>Junio</option>
							<option>Julio</option>
							<option>Agosto</option>
							<option>Septiembre</option>
							<option>Octubre</option>
							<option>Noviembre</option>
							<option>Diciembre</option>
						</select>
					</span>
					<span>
						<select id="coDate" onchange="coChange()">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option id="co29">29</option>
							<option id="co30">30</option>
							<option id="co31">31</option>
						</select>
					</span>
					<span>
						<select id="coYear" onchange="coChange()">
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
						</select>
					</span>
				</b>
			</p>
		</div>
	</div>
	<div class="clear"></div>
	
	
	<div class="field-container odd">
		<div class="mylabel">
			<p>
			<?php
			$val = get_option('foetal_age_today');
			 if($val == ""){
			 	echo "Semanas de embarazo";
			 }
			 else{
			 	echo get_option('foetal_age_today');
			 } 

			?> :</p>
		</div>
		
		<div class="myfield">
			<p> Semanas 
				<span class="fontB">
					<select id="foWeek" onchange="foChange()">
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
						<option>32</option>
						<option>33</option>
						<option>34</option>
						<option>35</option>
						<option>36</option>
						<option>37</option>
						<option>38</option>
						<option>39</option>
						<option>40</option>
					</select>
				</span>
				Días 
				<span id="fontB">
					<select id="foDay" onchange="foChange()">
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
					</select>
				</span>
				<span id="foetalError" class="fontB"></span>
			</p>
		</div>
	</div>
	<div class="clear"></div>
	
	
	
	<div class="field-container even" style="display:none;">
		<div class="mylabel">
			<p>
			<?php
			$val = get_option('date_for_nt_scan');
			 if($val == ""){
			 	echo "Best date range for NT scan";
			 }
			 else{
			 	echo get_option('date_for_nt_scan');
			 } 

			?> : </p>
  			<p><i>(
  			<?php
			$val = get_option('date_for_nt_scan_subtext');
			 if($val == ""){
			 	echo "12 wks 3 days to 13 wks 3 days";
			 }
			 else{
			 	echo get_option('date_for_nt_scan_subtext');
			 } 

			?> )</i></p>
		</div>
		
		<div class="myfield">
			<p>
				<b>
					<span id="ntDay" class="fontB"></span>
					<span id="ntMonth" class="fontB"></span>
					<span id="ntDate" class="fontB"></span>
					<span id="ntYear" class="fontB"></span>

					<span id="nt1Day" class="fontB"></span>
					<span id="nt1Month" class="fontB"></span>
					<span id="nt1Date" class="fontB"></span>
					<span id="nt1Year"  class="fontB"></span>
				</b>
			</p>
		</div>
	</div>
	<div class="clear"></div>
	
	
	<div class="field-container odd" style="display:none;">
		<div class="mylabel">
			<p>
			<?php
			$val = get_option('morphology_scan_date');
			 if($val == ""){
			 	echo "19 Weeks / Morphology Scan Date";
			 }
			 else{
			 	echo get_option('morphology_scan_date');
			 } 

			?> :</p>
		</div>
		
		<div class="myfield">
			<p>
				<b>
					<span id="mcDay" class="fontB"></span>
					<span id="mcMonth"></span>
					<span id="mcDate"></span>
					<span id="mcYear"></span>
				</b>
			</p>
		</div>
	</div>
	<div class="clear"></div>
	
	
	<div class="field-container even" style="display:none;">
		<div class="mylabel">
			<p>
			<?php
			$val = get_option('estimated_due_date');
			 if($val == ""){
			 	echo "Estimated Due Date (40 Weeks)";
			 }
			 else{
			 	echo get_option('estimated_due_date');
			 } 

			?> :</p>
		</div>
		
		<div class="myfield">
			<p>
				<b>
					<span id="eddDay" class="fontB"></span>
					<span>
						<select id="eddMonth" onchange="eddChange()">
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
						</select>
					</span>
					<span>
						<select id="eddDate" onchange="eddChange()">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option id="edd29">29</option>
							<option id="edd30">30</option>
							<option id="edd31">31</option>
						</select>
					</span>
					<span>
						<select id="eddYear" onchange="eddChange()">
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
						</select>
					</span>
				</b>
			</p>
		</div>
	</div>
	<div class="clear"></div>

	
	<div class="field-container odd text-center" style="display:none;">
		
			<p>On
			<span id="pregDay" class="fontB"></span>
				<span>
					<select id="pregMonth" onchange="pregChange()">
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
				</span>
				<span>
					<select id="pregDate" onchange="pregChange()">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option id="preg29">29</option>
						<option id="preg30">30</option>
						<option id="preg31">31</option>
					</select>
				</span>
				<span>
					<select id="pregYear" onchange="pregChange()">
						<option>2018</option>
						<option>2019</option>
						<option>2020</option>
						<option>2021</option>
						<option>2022</option>

					</select>
				</span>
				, you will be 
				<span>
					<input type="text" name="pregWeek" id="pregWeek">
				</span>
				weeks 
				<span>
					<input type="text" name="pregwDay" id="pregwDay">
				</span> days pregnant.
			</p>
		
	</div>
	<div class="clear"></div>


	<div class="field-container even" style="display:none;">
		<div class="mylabel">
			<p>
			<?php
			$val = get_option('uf_date');
			 if($val == ""){
			 	echo "Previous Ultrasound Date and Foetal Age On That Day";
			 }
			 else{
			 	echo get_option('uf_date');
			 } 

			?> : </p>
		</div>
		
		<div class="myfield">
			<span id="foTodayDay" class="fontB"></span>
			<span>
				<select id="foTodayMonth" onchange="foTodayChange()">
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
				</select>
			</span>
			<span>
				<select id="foTodayDate" onchange="foTodayChange()">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option id="today29">29</option>
					<option id="today30">30</option>
					<option id="today31">31</option>
				</select>
			</span>
			<span>
				<select id="foTodayYear" onchange="foTodayChange()">
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>

				</select>
			</span>
			Weeks
			<span class="fontB">
				<select id="foWeek1" onchange="foTodayChange()">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
					<option>32</option>
					<option>33</option>
					<option>34</option>
					<option>35</option>
					<option>36</option>
					<option>37</option>
					<option>38</option>
					<option>39</option>
					<option>40</option>
				</select>
			</span>
			Days
			<span class="fontB">
				<select id="foDay1" onchange="foTodayChange()">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
				</select>
			</span>
		</div>
	</div>
	<div class="clear"></div>



</section>
<div class="clear"></div>




	<?php return ob_get_clean();
}


























